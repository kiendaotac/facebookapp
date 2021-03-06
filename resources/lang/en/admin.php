<?php

return [
    'category' => [
        'modal_title'         => 'Cập nhật thể loại',
        'image_alt'           => 'hình ảnh thể loại',
        'image_title'         => 'Ảnh minh họa',
        'group'               => 'Thuộc nhóm:',
        'select_group_option' => 'Không thuộc nhóm nào',
        'name'                => 'Tên thể loại',
    ],
    'department' => [
        'modal_title'         => 'Cập nhật khoa',
        'group'               => 'Thuộc trường',
        'select_group_option' => 'Chọn trường',
        'name'                => 'Tên khoa',
        'uni_key'             => 'Mã khoa',
        'name_error'          => 'Vui lòng nhập vào tên khoa',
        'uni_key_error'       => 'Vui lòng nhập vào mã khoa',
    ],
    'major' => [
        'modal_title'              => 'Cập nhật ngành',
        'group'                    => 'Thuộc trường:',
        'select_group_option'      => 'Chọn trường',
        'department'               => 'Thuộc khoa:',
        'select_department_option' => 'Chọn khoa',
        'name'                     => 'Tên ngành',
        'uni_key'                  => 'Mã ngành',
        'name_error'          => 'Vui lòng nhập vào tên khoa',
        'uni_key_error'       => 'Vui lòng nhập vào mã khoa',

    ],
    'university' => [
        'modal_title'              => 'Cập nhật trường',
        'group'                    => 'Thuộc trường:',
        'select_group_option'      => 'Chọn trường',
        'department'               => 'Thuộc khoa:',
        'select_department_option' => 'Chọn khoa:',
        'name'                     => 'Tên trường',
        'uni_key'                  => 'Mã trường',
        'form_chose_uni_title'     => 'Chọn trường đang công tác',
        'name_error'               => 'Vui lòng nhập vào tên trường',
        'uni_key_error'            => 'Vui lòng nhập vào mã trường',
    ],
    'curriculum' => [
        'modal_title'              => 'Cập nhật khóa học',
        'group'                    => 'Chuyên mục',
        'select_group_option'      => 'Chọn trường',
        'department'               => 'Thuộc khoa:',
        'select_department_option' => 'Chọn khoa:',
        'name'                     => 'Tên khóa học',
        'uni_key'                  => 'Mã trường:',
        'table_uni_key'            => 'Mã trường',
        'table_category'           => 'Chuyên mục',
        'table_number_student'     => 'Số học viên',
        'box_title_1'              => 'Thông tin chung về khóa học',
        'box_title_2'              => 'Chương trình học',
        'box_title_3'              => 'Tùy chỉnh',
        'section_placeholder'      => 'Nhập tên chương/mục và nhấn Enter',
        'name_error'               => 'Vui lòng nhập vào tên khóa học',
        'featured'                 => 'Khóa học nổi bật:',
        'logintolearn'             => 'Đăng nhập mới được học khóa này:',
        'maximum'                  => 'Giới hạn học viên',
        'result_assesment'         => 'Hình thức đánh giá hoàn thành khóa học:',
        'result_assesment_radio_1' => 'Hoàn thành số lượng bài học',
        'result_assesment_radio_2' => 'Hoàn thành số lượng bài kiểm tra',
        'percent_pass'             => 'Điều kiện hoàn thành',
        'percent_pass_error'       => 'Vui lòng nhập vào điều kiện hoàn thành',
        'table_ordering'           => 'Thứ tự hiển thị',
    ],
    'lesson' => [
        'modal_title'                    => 'Cập nhật bài học',
        'name'                           => 'Tên bài học',
        'name_error'                     => 'Vui lòng nhập vào tên bài học',
        /* form */
        'curriculum'                    => 'Khóa học',
        'chose_curriculum'              => 'Chọn khóa học:',
        'id_curriculum'                 => 'Chọn khóa học',
        'search_curriculum_placeholder' => 'Tìm kiếm khóa học',
        'chapter'                       => 'Chương',
        'id_lesson'                     => 'Không thuộc chương nào',
        'list_lesson_notify'            => 'Hãy họn khóa học trước',
        'type'                          => 'Loại',
        'type_title'                    => 'Chương',
        'type_lesson'                   => 'Bài học',
        'type_test'                      => 'Bài kiểm tra',
        'link_video_lesson'              => 'Video giảng dạy:',
        'link_video_youtube_placeholder' => 'Nhập id video youtube',
        'link_video_vimeo_placeholder'   => 'Nhập id video vimeo',
        'link_audio_lesson'              => 'Audio giảng dạy:',
        'chose_audio'                    => 'Chọn file',
        'link_audio_lesson_input'        => 'Chọn file hoặc nhập link audio',
        'review'                         => 'Học thử bài này không cần đăng nhập',
        'document'                       => 'Tài liệu:',
        'content_lesson'                 => 'Nội dung',
        'content_lesson_error'           => 'Vui lòng nhập vào nội dung bài học.',
        /* main */
        'table_name'                     => 'Tên bài học',
        'table_curriculum'               => 'Khóa học',
        'table_type'                     => 'Loại',
        /* modal detail test */
        'modal_detail_title'             => 'Chi tiết câu hỏi',
        'tab_hint'                       => 'Gợi ý',
        'tab_explant'                    => 'Giải thích đáp án',
        /* modal test */
        'save_quicktest'                 => 'Lưu bài kiểm tra',
        'save_question'                  => 'Lưu câu hỏi',
        'save_question_reset'            => 'Lưu câu hỏi và làm mới',
        'modal_test_title'               => 'Cật nhật bài kiểm tra',
        'question'                       => 'Câu hỏi',
        'question_error'                 => 'Vui lòng nhập nội dung câu hỏi',
        'type_option_text'               => 'Văn bản',
        'type_option_image'              => 'Hình ảnh',
        'option_error'                   => 'Vui lòng nhập đầy đủ các phương án đã tạo',
        'add_option_item_title'          => 'Thêm phương án',
        'modal_test_box_title_1'         => 'Phương án trả lời',
        'modal_test_box_title_2'         => 'Bổ sung',
        'modal_test_box_title_3'         => 'Thêm câu hỏi',
        'modal_test_box_title_4'         => 'Tùy chỉnh',
        'modal_test_box_title_5'         => 'Danh sách câu hỏi',
        'hint'                           => 'Gợi ý:',
        'explain'                        => 'Giải thích đáp án:',
        'form_refresh'                   => 'Làm mới',
        'show_hint'                      => 'Hiển thị gợi ý:',
        'review_question'                => 'Hiển thị lại câu trả lời khi hoàn thành bài thi:',
        'showcorrect_answer'             => 'Hiển thị câu trả lời đúng khi xem lại:',
        'showcheck_answer'               => 'Hiển thị nút yêu cầu máy trả lời đúng:',
        'percent_pass_lesson'            => 'Bao nhiêu % đúng thì hoàn thành',
        /* table list question */
        'table_question'                 => 'Câu hỏi',
        'table_option'                   => 'Đáp án',
        'table_hint'                     => 'Gợi ý',
        'table_explain'                  => 'Gải thích đáp án',
    ],
    'student' => [
        'table_uni'           => 'Trường',
        'table_depart'        => 'Khoa',
        'table_major'         => 'Ngành',
        'stdcode'             => 'Mã sinh viên',
        'stdcode_error'       => 'Vui lòng nhập vào mã sinh viên',
        'name'                => 'Họ tên',
        'name_error'          => 'Vui lòng nhập vào tên sinh viên',
        'birthday'            => 'Ngày sinh',
        'birthday_error'      => 'Vui lòng nhập vào ngày sinh',
        'email_error'         => 'Vui lòng nhập vào email',
        'sex'                 => 'Giới tính',
        'phone'               => 'Số điện thoại:',
        'box_content_title_1' => 'Thông tin cơ bản',
        'box_content_title_2' => 'Thông tin học tập',
        'uni'                 => 'Trường:',
        'dept'                => 'Khoa:',
        'majo'                => 'Ngành:',
        'start_date'          => 'Năm vào trường:',
        'start_date_error'    => 'Vui lòng nhập năm vào trường',
        'course'              => 'Khóa:',
        'course_error'        => 'Vui lòng nhập vào khóa',
        'class'               => 'Lớp:',
        'class_error'         => 'Vui lòng nhập vào tên lớp đang học',
        'avatar'              => 'Ảnh đại diện',
        'refresh_form'        => 'Làm mới',
        'modal_uni_title'     => 'Chọn trường',
        'state'               => 'Trạng thái:',
        'active'              => 'Kích hoạt',
        'not_active'          => 'Không kích hoạt',
        'modal_title'         => 'Cập nhật thông tin sinh viên',

    ],
    'profile' => [
        'modal_profile_title'          => 'Cập nhật thông tin cá nhân',
        'name'                         => 'Họ tên',
        'name_error'                   => 'Vui lòng nhập vào họ tên',
        'educational_background'       => 'Học vấn',
        'educational_background_error' => 'Vui lòng nhập vào trình độ học vấn',
        'notify_chose_major'           => 'Hãy chọn khoa trước',
    ],
    'change_password' => [
        'password_old'          => 'Mật khẩu cũ',
        'password_old_error'    => 'Vui lòng nhập vào mật khẩu cũ',
        'password_new'          => 'Mật khẩu mới',
        'password_new_error'    => 'Vui lòng nhập vào mật khẩu mới',
        'password_repeat'       => 'Nhập lại mật khẩu mới',
        'password_repeat_error' => 'Vui lòng nhập lại mật khẩu mới'
    ],
    'class_curriculum' => [
        'table_curriculum'     => 'Chương trình học',
        'modal_title'          => 'Cật nhật lớp học phần',
        'name'                 => 'Tên lớp',
        'name_error'           => 'Vui lòng nhập vào tên khóa/lớp',
        'chose_curriculum'     => 'Chọn chương trình học',
        'list_course_notify'   => 'Chọn khóa học trước',
        'id_curriculum'        => '-- Chọn chương trình học --',
        'table_number_student' => 'Số học viên',
        'modal_chose_title'    => 'Chọn sinh viên vào lớp học phần'
    ],
    'student_report' => [
        'class'                    => 'Lớp học phần:',
        'id_class'                 => '-- Chọn lớp học phần --',
        'search_class_placeholder' => 'Tìm kiếm lớp',
        'table_name'               => 'Họ tên',
        'table_dept'               => 'Khoa',
        'table_majo'               => 'Ngành',
        'table_pass'               => 'Đã hoàn thành',
    ],
    'import' => [
        'chose_excel'   => 'Chọn file excel',
        'dowload_excel' => 'Tải file mẫu',
        'modal_title'   => 'Kết quả import sinh viên',
    ],
    'save'              => 'Lưu',
    'close'             => 'Đóng',
    'title_btn_edit'    => 'Sửa',
    'title_btn_delete'  => 'Xóa',
    'desc'              => 'Mô tả chi tiết',
    'desc_error'        => 'Vui lòng nhập vào mô tả',
    'title_page'        => 'Quản lý',
    'table_stt'         => 'STT',
    'table_desc'        => 'Mô tả',
    'table_state'       => 'Trạng thái',
    'table_action'      => 'Thao tác',
    'chose_image'       => 'Nhấn vào để chọn ảnh hoặc tải lên ảnh mới',
    'image_note'        => 'Ảnh minh họa',
    'states'            => 'Trạng thái',
    'states_wait'       => 'Đang duyệt',
    'states_active'     => 'Kích hoạt',
    'states_not_active' => 'Không kích hoạt',
    'chose_department'  => 'Chọn khoa',
    'chose_major'       => 'Chọn ngành',
    'short_desc'        => 'Mô tả vắn tắt',
    'short_desc_error'  => 'Vui lòng nhập vào mô tả vắn tắt',
    'ordering'          => 'Thứ tự hiển thị',
];