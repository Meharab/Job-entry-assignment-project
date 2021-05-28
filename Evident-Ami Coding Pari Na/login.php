<!DOCTYPE html>
<html>
  <head>
    <title >Simple Login Form </title >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

      form {
        border: 3px solid #f1f1f1;
      }

      input[type=email], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        opacity: 0.8;
      }

      .container {
        padding: 16px;
      }

    </style>
  </head>
  <body>
    <h2>Login Form</h2>

    <form action="process.php" method="post">
      <div class="container" >
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Your Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Your Password" name="password" required>  

        <button type="submit">Login</button>
        <span>or </span>
        <a href="./register.php">Register</a>

    </form>
  </body>
</html>