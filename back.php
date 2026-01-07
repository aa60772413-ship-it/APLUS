<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>後台管理｜APLUS Dance Studio</title>

    <!-- 共用資源 -->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />

    <style>
        body {
            background-color: #f5f5f5;
        }

        .admin-header {
            background: linear-gradient(135deg, #000, #222);
            color: #fff;
            padding: 80px 0 40px;
            margin-top: 70px;
        }

        .admin-card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .1);
        }
    </style>
</head>

<body>

    <!-- 🔹 Navbar（完全沿用前台） -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="index.php">
                <img src="./img/1- 1.png" width="50">
                𝔸ℙ𝕃𝕌𝕊 𝔻𝕒𝕟𝕔𝕖 𝕊𝕥𝕦𝕕𝕚𝕠
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active">後台管理</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">登出</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 🔹 後台 Header（取代大圖） -->
    <header class="admin-header text-center">
        <h1 class="fw-bold">後台管理系統</h1>
        <p class="text-white-50">APLUS Dance Studio Admin Panel</p>
    </header>

    <!-- 🔹 主內容 -->
    <main class="container my-5">

        <div class="row g-4">

            <!-- 功能卡片 -->
            <div class="col-md-4">
                <div class="card admin-card p-4 text-center">
                    <i class="fas fa-users fa-2x mb-3"></i>
                    <h5>管理者管理</h5>
                    <a href="#" class="btn btn-dark mt-3">進入</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card admin-card p-4 text-center">
                    <i class="fas fa-calendar-alt fa-2x mb-3"></i>
                    <h5>課表管理</h5>
                    <a href="#" class="btn btn-dark mt-3">進入</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card admin-card p-4 text-center">
                    <i class="fas fa-file-alt fa-2x mb-3"></i>
                    <h5>報名資料</h5>
                    <a href="#" class="btn btn-dark mt-3">進入</a>
                </div>
            </div>

        </div>

        <!-- 表格區 -->
        <div class="card admin-card mt-5">
            <div class="card-body">
                <h5 class="mb-3">最新報名</h5>

                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>姓名</th>
                            <th>課程</th>
                            <th>電話</th>
                            <th>狀態</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>王小明</td>
                            <td>Hip Hop</td>
                            <td>0912-xxx-xxx</td>
                            <td><span class="badge bg-success">已確認</span></td>
                        </tr>
                        <tr>
                            <td>李小華</td>
                            <td>Jazz</td>
                            <td>0923-xxx-xxx</td>
                            <td><span class="badge bg-warning">待處理</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <!-- 🔹 Footer（完全沿用前台） -->
    <footer class="py-5 bg-black">
        <div class="container px-5">
            <p class="m-0 text-center text-white small">
                Copyright &copy; APLUS Dance Studio
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
