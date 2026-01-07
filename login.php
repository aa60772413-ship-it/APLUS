<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <title>APLUS Dance Studio｜管理登入</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css"
        integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        
        body {
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6),
                    rgba(0, 0, 0, 0.6)),
                url("./img/login-bg.jpg") center / cover no-repeat;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px 30px;
            color: #fff;
            box-shadow: 0 10px 40px rgba(0, 0, 0, .4);
        }

        .login-card h2 {
            font-weight: 600;
            letter-spacing: 2px;
        }

        .form-control {
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, .6);
            border-radius: 0;
            color: #fff;
        }

        .form-control:focus {
            background: transparent;
            box-shadow: none;
            border-color: #f8b500;
            color: #fff;
        }

        label {
            font-size: 0.9rem;
            opacity: .8;
        }

        .btn-login {
            background: linear-gradient(135deg, #6d6c6cff, #c5c5c5ff);
            border: 1px solid black;
            color: #000;
            font-weight: 600;
            letter-spacing: 1px;
            border-radius: 30px;
            padding: 10px;
            transition: 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(57, 57, 57, 0.4);
        }

        .studio-name {
            font-size: 0.85rem;
            letter-spacing: 3px;
            opacity: .7;
        }
    </style>
</head>

<body>
<div class="container mt-3" id="alertBox">    </div>
<div class="bodylogin d-flex justify-content-center align-items-center">
    <div class="login-card text-center" style="width: 350px;">
        <div class="mb-4">
            <img src="./img/1- 1.png" width="60" class="mb-2">
            <div class="studio-name">APLUS DANCE STUDIO</div>
        </div>

        <h2 class="mb-4">管理登入</h2>

        <form action="check_login.php" method="post">
            <div class="mb-4 text-start">
                <label>帳號</label>
                <input type="text" name="account" class="form-control" required>
            </div>

            <div class="mb-4 text-start">
                <label>密碼</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-login w-100" id="btnOk">LOGIN</button>
        </form>
    </div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.min.js"
        integrity="sha512-nKXmKvJyiGQy343jatQlzDprflyB5c+tKCzGP3Uq67v+lmzfnZUi/ZT+fc6ITZfSC5HhaBKUIvr/nTLCV+7F+Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function () {

            // 1. bind
            const alertBox = $('#alertBox');
            const btnOk = $('#btnOk');
        

            console.log('alertBox', alertBox);
            console.log('btnOk', btnOk);
    

            let okAlert = `
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Success!</strong> This alert box could indicate a successful or positive action.
                </div>
            `;

            // alertBox.append(okAlert);
            
            // 2. action
            btnOk.click(function (e) {
                console.log('btn ok');
                alertBox.append(okAlert);
            });


        });

    </script>

</body>

</html>