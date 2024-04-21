<?php
if (isset($_POST['submit'])) {
    $execution = '149ab0f5-39b9-437d-a679-8d7cfdb1f1d0_ZXlKaGJHY2lPaUpJVXpVeE1pSjkuN1R6NnMxVWhMdUtrODBWR0FkaUpNVEZoZ0ladis0NFI1M2dxOGRyN2JBSllERUZyNjB1Y2IvUGI3NkgvV21tT3Q3QURyR2h6cXpkYjNwNm80eDFpZnJZL29TUFBtNFFoMFpqVFNSNndybWR6S1ZycGZLN0tWcldHNDlvQUdIcWMwU3VkUmhEeHNCelpZWGJmQU9HMzBpVWc4SXNXaFpiOVRzb0hsTE4zdVdWV0xtcUZlVzJaVWdVL3NDUmdJOVNPL0pPZjJIRVJ1TnpCd1JodHRJdlE5ZHpZcHkwakp1ZUlySGJIVlFmS2xOSGljYWhZMlhZSDdVc2tkSE5XY1R0T0pPQ1VSdG52REcveGVaQ2M4RUFYb2IvcmtZNFl5bVl5bFRCUGQyYkFYcjc3anJ4WlQzM084cjl0OHU5QndIdDNVMFJBUmhXbVo1V1pQN3J3b3FNRTlEdDhFYXhwZUZjMkhPVWdXTlZTL3NJbTMwSmg5bitWUDFUNld0aGdVa3pyYzBjRUlhZHFmMWF3aDQ2MlB3bXRjN1lSRE1YOUQ1N3BMMmpyYlVDc2JXelJoeFZNcUh3MVd6T0NER1FSamx6RDVLcmJOSGN2NE92cHZoZFpGUzVFOGx6eCsyNURrRUd2MVA2bUljSk1UeDBNTmJaOVVPZEhLeW5nZTRHYk1CRUNDdWw3dDh0VVRnRVVaSUd2aTY2aXUrZWovRHRlK2VDbnFGa3ZDSG1qZFVQdWgzYjVKbU4rV0lrdnp6MnFEWW9Ja3c5RE1JelNoOW5PYWhQei91cis4TzBsemIrTmNTZ2ljYWJpcTg3MVBiZlNFK0o5WmxDVmV4RFdCTmxtcEI2T3Iya3dpUXpzcnRsNzM0Y2ZJS0lWNFVCTVJRWEQrZ0g3NkFtUVZmVUxHRDI0UmRCa2JLTE9vajNiYlpULzgxRy9xaWVjNkk3ZHF4ZThqMVZsYTBHSW5BSHNRQkpicVRIUFd2dTJtWEw5NlRBMUZHS1kwOGFONkJzdkhFQ082MzF4UFA0WlVxeXFQY1MraWtyWUJJNFhySlFHaDNVZ1c2Q1kveGhyeHk3Tlg1NFBRMFJkYmYrL0FFSFVsOXI0cjJIN1piS0xCSkI5ZFA3VnVXbGg4NUdQWDZjUWF5dE15RjYrcGNBL1hkY2JWRmpmTnRCM2hjRE51V25xeWdQODZ6TmlmSGNTYTFJNm82SXUyVVRGc3FiLzZndE9KaHZ4cEJiOE80SzRlSkJYT2tkbFYwdFFTNFVGZ3JqWGNxWHl0Z3Vkdi9zOHUwZGpnWXE3U1VvaitXd3d1THVRM29mZEVBTEVOYVJjeEVUem43Z21PQ0FPLzhla1docjhTMWNyVTJ4czNKYmNuUWJ0TlJlUGJyOTY2YlZHeE04MU1pYmViODZ2dHBKTlMrYXZYK2tuZ0I3UW5zNzMxV1liUHQ3NDdOMlVVRmVrcnZYQmVhcFNhSGZxb3BLa0dTUnNNUnMwOXpGcWNyclRmRjZzUUdFPS56QWtVN3hnSlFfQ3FFTFhhRnk0d1NydUI0WW1IV3JGdFVxTHE0QmdMSHlObmFPcGhETmFZMFdudW9mR2g5VURiamItdi1WeGl1VFlDM0hOOUpOM0lXZw%3D%3D';
    $username = $_POST['username'];
    $password = $_POST['password'];
    function extractContentInAlert($html)
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
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://cas.hou.edu.vn/cas/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'username=' . $username . '&password=' . $password. '&g-recaptcha-response=&execution='.$execution.'&_eventId=submit&geolocation=',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
             ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $contentInAlert = extractContentInAlert($response);
    if ($contentInAlert) {
       $return = $contentInAlert;
    } else {
        $return = '<div class="alert alert-success">Đăng nhập thành công</div>';
    }   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
      background-color: #fff;
    }
    .form-title {
      text-align: center;
    }
    .btn-submit {
      width: 100%;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="form-container">
        <h2 class="form-title">Login</h2>
        <form action="" method="POST">
            <?=$return ?>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?=$username?>" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="<?=$password?>" required>
          </div>
          <button type="submit"  id="submit" name="submit" class="btn btn-primary btn-submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
