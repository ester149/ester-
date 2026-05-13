<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard E-Parkir</title>

  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body{
      display:flex;
      background:#ecf0f1;
    }

    /* SIDEBAR */

    .sidebar{
      width:240px;
      height:100vh;
      background:linear-gradient(#1e5799,#1d3c6a);
      color:white;
      position:fixed;
      left:0;
      top:0;
    }

    .logo{
      display:flex;
      align-items:center;
      padding:20px;
      border-bottom:1px solid rgba(255,255,255,0.2);
    }

    .logo img{
      width:50px;
      margin-right:10px;
    }

    .logo h2{
      font-size:22px;
    }

    .menu{
      margin-top:20px;
    }

    .menu a{
      display:block;
      padding:15px 25px;
      color:white;
      text-decoration:none;
      transition:0.3s;
      font-size:15px;
    }

    .menu a:hover{
      background:rgba(255,255,255,0.1);
      padding-left:35px;
    }

    /* MAIN */

    .main{
      margin-left:240px;
      width:100%;
      padding:20px;
    }

    /* TOPBAR */

    .topbar{
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:25px;
    }

    .topbar h1{
      font-size:28px;
      color:#333;
    }

    .user{
      font-size:14px;
    }

    .logout{
      background:#e74c3c;
      color:white;
      border:none;
      padding:8px 15px;
      border-radius:5px;
      cursor:pointer;
      margin-left:10px;
    }

    /* CARD */

    .cards{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
      gap:20px;
    }

    .card{
      padding:20px;
      border-radius:10px;
      color:white;
      box-shadow:0 5px 10px rgba(0,0,0,0.1);
    }

    .card h3{
      font-size:16px;
      margin-bottom:10px;
    }

    .card p{
      font-size:30px;
      font-weight:bold;
    }

    .blue{
      background:#1e90ff;
    }

    .yellow{
      background:#f1c40f;
    }

    .red{
      background:#e91e63;
    }

    .green{
      background:#27ae60;
    }

    /* CONTENT */

    .content{
      margin-top:40px;
      background:white;
      border-radius:10px;
      padding:40px;
      text-align:center;
      min-height:400px;
      box-shadow:0 5px 10px rgba(0,0,0,0.1);
    }

    .content img{
      width:180px;
      opacity:0.7;
    }

    .content h2{
      margin-top:20px;
      color:#555;
    }

    /* RESPONSIVE */

    @media(max-width:768px){

      .sidebar{
        width:200px;
      }

      .main{
        margin-left:200px;
      }

    }

  </style>
</head>
<body>

  <!-- SIDEBAR -->

  <div class="sidebar">

    <div class="logo">
      <img src="https://cdn-icons-png.flaticon.com/512/3177/3177361.png">
      <h2>Aplikasi Parkir</h2>
    </div>

    <div class="menu">
      <a href="#">🏠 Dashboard</a>
      <a href="#">👤 User</a>
      <a href="#">🚗 Kendaraan</a>
      <a href="#">🧾 Tarif Parkir</a>
      <a href="#">🅿 Area Parkir</a>
      <a href="#">📋 Log Aktivitas</a>
    </div>

  </div>

  <!-- MAIN -->

  <div class="main">

    <div class="topbar">
      <h1>Dashboard</h1>

      <div class="user">
        Selamat Datang, <b>Admin</b>

        <button class="logout" onclick="logout()">
          Logout
        </button>
      </div>
    </div>

    <!-- CARD -->

    <div class="cards">

      <div class="card blue">
        <h3>Total Kendaraan</h3>
        <p>2</p>
      </div>

      <div class="card yellow">
        <h3>Parkir Masuk</h3>
        <p>2</p>
      </div>

      <div class="card red">
        <h3>Parkir Keluar</h3>
        <p>8</p>
      </div>

      <div class="card green">
        <h3>Pendapatan</h3>
        <p>Rp 114.000</p>
      </div>

    </div>

    <!-- CONTENT -->

    <div class="content">

      <img src="https://cdn-icons-png.flaticon.com/512/727/727245.png">

      <h2>Sistem Dashboard E-Parkir</h2>

    </div>

  </div>

  <script>

    function logout(){

      alert("Logout Berhasil");

      window.location.href = "index.html";

    }

  </script>

</body>
</html>