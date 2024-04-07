<?php

return array(

    'deleted' => 'Deleted asset model',
    'does_not_exist' => 'Модель не існує.',
    'no_association' => 'WARNING! The asset model for this item is invalid or missing!',
    'no_association_fix' => 'This will break things in weird and horrible ways. Edit this asset now to assign it a model.',
    'assoc_users'	 => 'This model is currently associated with one or more assets and cannot be deleted. Please delete the assets, and then try deleting again. ',


    'create' => array(
        'error'   => 'Model was not created, please try again.',
        'success' => 'Модель успішно створено.',
        'duplicate_set' => 'An asset model with that name, manufacturer and model number already exists.',
    ),

    'update' => array(
        'error'   => 'Model was not updated, please try again',
        'success' => 'Model updated successfully.',
    ),

    'delete' => array(
        'confirm'   => 'Ви впевнені, що хочете видалити цю модель?',
        'error'   => 'There was an issue deleting the model. Please try again.',
        'success' => 'Модель успішно видалено.'
    ),

    'restore' => array(
        'error'   		=> 'Model was not restored, please try again',
        'success' 		=> 'Модель успішно відновлена.'
    ),

    'bulkedit' => array(
        'error'   		=> 'No fields were changed, so nothing was updated.',
        'success' 		=> 'Model successfully updated. |:model_count models successfully updated.',
        'warn'          => 'You are about to update the properies of the following model: |You are about to edit the properties of the following :model_count models:',

    ),

    'bulkdelete' => array(
        'error'   		    => 'No models were selected, so nothing was deleted.',
        'success' 		    => 'Model deleted!|:success_count models deleted!',
        'success_partial' 	=> ':success_count model(s) were deleted, however :fail_count were unable to be deleted because they still have assets associated with them.'
    ),

);
