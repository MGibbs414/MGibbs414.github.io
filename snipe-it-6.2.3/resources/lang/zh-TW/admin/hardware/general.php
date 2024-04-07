<?php

return [
    'about_assets_title'           => '關於資產',
    'about_assets_text'            => '資產是按序號或資產標籤追蹤的物品。 他們往往是高價值並標示為重要的物品。',
    'archived'  				=> '已封存',
    'asset'  					=> '資產',
    'bulk_checkout'             => '借出資產',
    'bulk_checkin'              => '資產繳回',
    'checkin'  					=> '資產繳回',
    'checkout'  				=> '借出資產',
    'clone'  					=> '複製資產',
    'deployable'  				=> '可部署',
    'deleted'  					=> '此資產已被刪除.',
    'delete_confirm'            => '您確定要刪除此資產嗎？',
    'edit'  					=> '編輯資產',
    'model_deleted'  			=> '此資產模板已被刪除. 你必須先還原資產模板才可還原資產.',
    'model_invalid'             => '此資產的型號無效。',
    'model_invalid_fix'         => '在嘗試登記或借出前，需要先編輯資產以修正此問題。',
    'requestable'               => '可申領',
    'requested'				    => '已申領',
    'not_requestable'           => '不可申請',
    'requestable_status_warning' => '請不要更改可申請狀態',
    'restore'  					=> '還原資產',
    'pending'  					=> '待處理',
    'undeployable'  			=> '不可部署',
    'undeployable_tooltip'  	=> '此資產的狀態標籤為不可部署，因此目前無法借出。',
    'view'  					=> '檢視資產',
    'csv_error' => '你的 CSV 檔案有錯誤',
    'import_text' => '
    <p>
    上傳包含資產歷史資訊的 CSV 檔案。系統中必須已存在資產和使用者，否則將會跳過。歷史資訊的配對會根據資產標籤進行。我們會根據您提供的使用者名稱，以及您下方選取的條件來尋找對應的使用者。如果您沒有選取任何條件，系統將會依據您在 管理員 &gt; 一般設定 中設定的使用者名稱格式來進行配對。
    </p>

    <p>CSV 中包含的欄位必須對應以下標頭：<strong>資產標籤，名稱，借出日期，歸還日期</strong>。任何額外的欄位都將被忽略。</p>

    <p>歸還日期：留空或填入未來的歸還日期會將物品借出給相關使用者。不包含歸還日期欄位將會以今日日期建立歸還日期。</p>
    ',
    'csv_import_match_f-l' => '嘗試按照名字.姓氏（jane.smith）格式尋找使用者',
    'csv_import_match_initial_last' => '嘗試按照名字首字母姓氏（jsmith）格式尋找使用者',
    'csv_import_match_first' => '嘗試按照名字（jane）格式尋找使用者',
    'csv_import_match_email' => '嘗試按照電子郵件作為使用者名稱尋找使用者',
    'csv_import_match_username' => '嘗試按照使用者名稱尋找使用者',
    'error_messages' => '錯誤訊息:',
    'success_messages' => '成功訊息:',
    'alert_details' => '請看下面的詳細資料.',
    'custom_export' => '自定義匯出',
    'mfg_warranty_lookup' => ':manufacturer 保固狀態查詢',
    'user_department' => '使用者部門',
];
