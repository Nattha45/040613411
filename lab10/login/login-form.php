<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <style>
  html, body {
    height: 100%;
  }

  body {
    padding-top: 5rem;
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
  }

  .form-signin {
    max-width: 25rem;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>

</head>
<body>
<form action="check-login.php" method="POST">
   <input type="text" name="username" placeholder="Username"><br>
   <input type="password" name="password" placeholder="Password"><br>
   <input type="submit" value="Login">
</form>
</body>
</html>
