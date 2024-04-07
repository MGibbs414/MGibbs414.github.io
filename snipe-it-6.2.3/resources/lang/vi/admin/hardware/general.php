<?php

return [
    'about_assets_title'           => 'Giới thiệu về Tài sản',
    'about_assets_text'            => 'Tài sản là các mục được theo dõi bằng số sê-ri hoặc thẻ nội dung. Chúng thường có giá trị cao hơn khi xác định một mục cụ thể.',
    'archived'  				=> 'Đã lưu trữ',
    'asset'  					=> 'Tài sản',
    'bulk_checkout'             => 'Checkout Tài sản',
    'bulk_checkin'              => 'Thu hồi tài sản',
    'checkin'  					=> 'Checkin tài sản',
    'checkout'  				=> 'Tài sản thanh toán',
    'clone'  					=> 'Nhân đôi tài sản',
    'deployable'  				=> 'Cho phép cấp phát',
    'deleted'  					=> 'Tài sản này đã bị xóa.',
    'delete_confirm'            => 'Are you sure you want to delete this asset?',
    'edit'  					=> 'Sửa tài sản',
    'model_deleted'  			=> 'Model tài sản này đã bị xóa. Vui lòng khôi phục lại model trước khi khôi phục tài sản.',
    'model_invalid'             => 'The Model of this Asset is invalid.',
    'model_invalid_fix'         => 'The Asset should be edited to correct this before attempting to check it in or out.',
    'requestable'               => 'Cho phép đề xuất',
    'requested'				    => 'Yêu cầu',
    'not_requestable'           => 'Không cho phép đề xuất',
    'requestable_status_warning' => 'Do not change requestable status',
    'restore'  					=> 'Phục hồi tài sản',
    'pending'  					=> 'Đang chờ',
    'undeployable'  			=> 'Không cho phép cấp phát',
    'undeployable_tooltip'  	=> 'This asset has a status label that is undeployable and cannot be checked out at this time.',
    'view'  					=> 'Xem tài sản',
    'csv_error' => 'Có lỗi trong file CSV của bạn:',
    'import_text' => '
    <p>
    Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the Admin &gt; General Settings.
    </p>

    <p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p>

    <p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>
    ',
    'csv_import_match_f-l' => 'Kết hợp người dùng dưới dạng tên.họ (trí.nguyễn)',
    'csv_import_match_initial_last' => 'Kết hợp người dùng dưới dạng họ (nguyễn)',
    'csv_import_match_first' => 'Kế hợp người dùng dưới dạng tên (trí)',
    'csv_import_match_email' => 'Kết hợp người dùng bằng địa chỉ email',
    'csv_import_match_username' => 'Kết hợp người dùng bằng tên đăng nhập',
    'error_messages' => 'Thông báo lỗi:',
    'success_messages' => 'Thông báo thành công:',
    'alert_details' => 'Xem bên dưới để biết thêm chi tiết.',
    'custom_export' => 'Lựa chọn xuất',
    'mfg_warranty_lookup' => ':manufacturer Warranty Status Lookup',
    'user_department' => 'User Department',
];
