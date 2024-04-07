<?php

use App\Models\Asset;
use Carbon\CarbonImmutable;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Log;

class DenormalizedEolAndAddColumnForExplicitDateToAssets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            if (!Schema::hasColumn('assets', 'eol_explicit')) {
                $table->boolean('eol_explicit')->default(false)->after('asset_eol_date');
            }
        });


        // Update the eol_explicit column with the value from asset_eol_date if it exists and is different from the calculated value
            Asset::whereNotNull('asset_eol_date')->with('model')->chunkById(500, function ($assetsWithEolDates) {
                foreach ($assetsWithEolDates as $asset) {
                    if ($asset->asset_eol_date && $asset->purchase_date) {
                        try {
                            $months = CarbonImmutable::parse($asset->asset_eol_date)->diffInMonths($asset->purchase_date);
                        } catch (\Exception $e) {
                            Log::info('asset_eol_date invalid for asset ' . $asset->id);
                        }
                        if ($asset->model->eol) {
                            if ($months != $asset->model->eol) {
                                $asset->update(['eol_explicit' => true]);
                            }
                        } else {
                            $asset->update(['eol_explicit' => true]);
                        }
                    }
                }
            });

        DB::table('assets')
            ->whereNull('asset_eol_date')
            ->whereNotNull('purchase_date')
            ->whereNotNull('model_id')
            ->join('models', 'assets.model_id', '=', 'models.id')
            ->update([
                'asset_eol_date' => DB::raw('DATE_ADD(purchase_date, INTERVAL ' . DB::getTablePrefix() . 'models.eol MONTH)')
            ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assets', function (Blueprint $table) {
                $table->dropColumn('eol_explicit');
        });
    }
}
