<?php

require_once('function/helper.php');
require_once('function/koneksi.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/style.css' ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="topbar">
        <h3 class="text-topbar">ANDIKA ZAKARIA</h3>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,160L18.5,154.7C36.9,149,74,139,111,160C147.7,181,185,235,222,224C258.5,213,295,139,332,138.7C369.2,139,406,213,443,224C480,235,517,181,554,154.7C590.8,128,628,128,665,133.3C701.5,139,738,149,775,181.3C812.3,213,849,267,886,272C923.1,277,960,235,997,202.7C1033.8,171,1071,149,1108,149.3C1144.6,149,1182,171,1218,170.7C1255.4,171,1292,149,1329,122.7C1366.2,96,1403,64,1422,48L1440,32L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z"></path>
    </svg>

    <div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">Form Login</div>
                <div class="card-body">
                    <form class="form-login" method="POST" action="<?= BASE_URL . 'process/process_login.php' ?>">
                        <label class="form-label">Username</label>
                        <input type="username" name="username" class="form-input">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-input">
                        <button type="submit" class="btn btn-login">Login</button>
                    </form>
                    <p style="text-align: center;">Belum punya akun?<span><a href="<?= BASE_URL . "register.php" ?>" class=""> Daftar disini</a></span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>