<?php
  session_start();

  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]
  );

  session_destroy(); // ทำลาย session
?>

<!DOCTYPE html>
<html>
<head>
    <title>ออกจากระบบสำเร็จ</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
      }

      .logout-message {
        text-align: center;
        margin-top: 50px;
        font-size: 20px;
      }

      .login-link {
        display: block;
        text-align: center;
        margin-top: 20px;
        font-size: 18px;
        text-decoration: none;
        color: #007bff;
      }

      .login-link:hover {
        color: #0056b3;
      }
    </style>
</head>
<body>
  <div class="logout-message">
    ออกจากระบบสำเร็จแล้ว<br>
    หากต้องการเข้าสู่ระบบอีกครั้งโปรดคลิก
    <a class="login-link" href='login-form.php'>เข้าสู่ระบบ</a>
  </div>
</body>
</html>
