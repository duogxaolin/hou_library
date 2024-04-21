<?php
    function extractContentInAlert($html) // lấy giá trị trả về
    {
        // Tạo một đối tượng DOMDocument
        $dom = new DOMDocument();
        // Tắt cảnh báo về lỗi HTML
        libxml_use_internal_errors(true);
        // Load HTML từ chuỗi
        $dom->loadHTML($html);
        // Xác định các phần tử có lớp là 'alert alert-danger'
        $elements = $dom->getElementsByTagName('div');
        foreach ($elements as $element) {
            // Kiểm tra xem phần tử có lớp là 'alert alert-danger' hay không
            if ($element->getAttribute('class') === 'alert alert-danger') {
                // Trả về nội dung của phần tử này
                return $dom->saveHTML($element);
            }
        }
        // Nếu không tìm thấy phần tử thích hợp, trả về null
        return null;
    }