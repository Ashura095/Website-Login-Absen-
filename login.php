<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Absen</title>
     <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Mukta:wght@500&family=Roboto:wght@100&family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url(sekolah.png);
            background-repeat: no-repeat;
            background-size:100% 130% ;
            background-color: #7BD3EA;
            
        }
        h2{
            text-align: center;
  text-align: center;
  font-family: "Gochi Hand", cursive;
  color: white;
  font-size: 40px;
        }
        .login-container {
            
           border-radius: 20px;
  padding: 20px;
  max-width: 400px;
  margin: auto;
  background-color: rgba(146, 169, 192, 0.9);
  border: solid;
  border-color: black;
  align-items: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Form</h2>
        <form action="process_login.php" method="post"  >
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="username_or_email" required >
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
