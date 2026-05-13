<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Parkir Login</title>

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body{
      height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
      background: linear-gradient(135deg,#0fa3a3,#006d6d);
    }

    .login-box{
      width:380px;
      background:#ecf0f1;
      border-radius:20px;
      padding:40px 30px;
      box-shadow:0 10px 30px rgba(0,0,0,0.2);
      text-align:center;
    }

    .logo{
      width:90px;
      margin-bottom:10px;
    }

    .title{
      color:#008b8b;
      font-size:28px;
      font-weight:bold;
      margin-bottom:25px;
    }

    .clock-box{
      background:#f4f4f4;
      padding:20px;
      border-radius:10px;
      margin-bottom:25px;
    }

    .clock{
      font-size:40px;
      font-weight:bold;
      color:#008b8b;
    }

    .date{
      margin-top:5px;
      color:#777;
      font-size:14px;
    }

    .input-group{
      margin-bottom:18px;
    }

    .input-group input{
      width:100%;
      padding:15px;
      border:none;
      border-radius:30px;
      background:#fff;
      font-size:15px;
      outline:none;
      box-shadow: inset 0 2px 5px rgba(0,0,0,0.08);
    }

    .btn-login{
      width:100%;
      padding:15px;
      border:none;
      border-radius:8px;
      background:#009688;
      color:white;
      font-size:16px;
      font-weight:bold;
      cursor:pointer;
      transition:0.3s;
    }

    .btn-login:hover{
      background:#00796b;
    }

    .message{
      margin-top:15px;
      font-size:14px;
      font-weight:bold;
    }

    .success{
      color:green;
    }

    .error{
      color:red;
    }

  </style>
</head>
<body>

  <div class="login-box">

    <img src="https://cdn-icons-png.flaticon.com/512/3177/3177361.png" class="logo">

    <div class="title">E-PARKIR LOGIN</div>

    <div class="clock-box">
      <div class="clock" id="clock">00:00:00</div>
      <div class="date" id="date"></div>
    </div>

    <form id="loginForm">

      <div class="input-group">
        <input type="text" id="username" placeholder="Username" required>
      </div>

      <div class="input-group">
        <input type="password" id="password" placeholder="Password" required>
      </div>

      <button type="submit" class="btn-login">
        LOGIN SEKARANG
      </button>

      <div class="message" id="message"></div>

    </form>

  </div>

  <script>

    // JAM DIGITAL
    function updateClock(){
      const now = new Date();

      let h = String(now.getHours()).padStart(2,'0');
      let m = String(now.getMinutes()).padStart(2,'0');
      let s = String(now.getSeconds()).padStart(2,'0');

      document.getElementById('clock').innerHTML = `${h}:${m}:${s}`;

      const options = {
        weekday:'long',
        year:'numeric',
        month:'long',
        day:'numeric'
      };

      document.getElementById('date').innerHTML =
        now.toLocaleDateString('id-ID', options);
    }

    setInterval(updateClock,1000);
    updateClock();


    // LOGIN VALIDASI
    document.getElementById('loginForm').addEventListener('submit', function(e){

      e.preventDefault();

      let username = document.getElementById('username').value;
      let password = document.getElementById('password').value;

      let message = document.getElementById('message');

      // USERNAME & PASSWORD
      if(username === "admin" && password === "123"){

        message.innerHTML = "Login Berhasil";
        message.className = "message success";

        // pindah halaman
        setTimeout(function(){
          window.location.href = "dashboard.html";
        },1000);

      }else{

        message.innerHTML = "Username atau Password Salah";
        message.className = "message error";

      }

    });

  </script>

</body>
</html>