<?php

return array(

    'deleted' => 'Deleted asset model',
    'does_not_exist' => 'המודל אינו קיים.',
    'no_association' => 'WARNING! The asset model for this item is invalid or missing!',
    'no_association_fix' => 'This will break things in weird and horrible ways. Edit this asset now to assign it a model.',
    'assoc_users'	 => 'מודל זה משויך כרגע לנכס אחד או יותר ולא ניתן למחוק אותו. מחק את הנכסים ולאחר מכן נסה למחוק שוב.',


    'create' => array(
        'error'   => 'המודל לא נוצר, נסה שוב.',
        'success' => 'המודל נוצר בהצלחה.',
        'duplicate_set' => 'כבר קיים מודל נכסים עם שם, יצרן ומספר דגם זה.',
    ),

    'update' => array(
        'error'   => 'המודל לא עודכן, נסה שוב',
        'success' => 'המודל עודכן בהצלחה.',
    ),

    'delete' => array(
        'confirm'   => 'האם אתה בטוח שברצונך למחוק מודל נכס זה?',
        'error'   => 'הייתה בעיה במחיקת המודל. בבקשה נסה שוב.',
        'success' => 'המודל נמחק בהצלחה.'
    ),

    'restore' => array(
        'error'   		=> 'המודל לא שוחזר, נסה שוב',
        'success' 		=> 'המודל שוחזר בהצלחה.'
    ),

    'bulkedit' => array(
        'error'   		=> 'לא השתנו שדות, ולכן שום דבר לא עודכן.',
        'success' 		=> 'Model successfully updated. |:model_count models successfully updated.',
        'warn'          => 'You are about to update the properies of the following model: |You are about to edit the properties of the following :model_count models:',

    ),

    'bulkdelete' => array(
        'error'   		    => 'לא נבחרו מודלים, לכן לא נמחק שום דבר.',
        'success' 		    => 'Model deleted!|:success_count models deleted!',
        'success_partial' 	=> ':success_count model(s) were deleted, however :fail_count were unable to be deleted because they still have assets associated with them.'
    ),

);
