<!-- resources/views/kendaraan/index.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Modern UI</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        *{
            font-family: 'Outfit', sans-serif;
        }

        body{
            background: #0f172a;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .sidebar{
            width: 270px;
            height: 100vh;
            position: fixed;
            background: linear-gradient(180deg,#111827,#1e293b);
            padding: 30px 20px;
            border-right: 1px solid rgba(255,255,255,0.05);
        }

        .logo{
            color: white;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 50px;
        }

        .menu{
            list-style: none;
            padding: 0;
        }

        .menu li{
            margin-bottom: 15px;
        }

        .menu a{
            text-decoration: none;
            color: #cbd5e1;
            display: block;
            padding: 15px 18px;
            border-radius: 15px;
            transition: 0.3s;
            font-size: 16px;
        }

        .menu a:hover,
        .menu .active{
            background: linear-gradient(45deg,#3b82f6,#8b5cf6);
            color: white;
            transform: translateX(5px);
        }

        .content{
            margin-left: 270px;
            padding: 40px;
        }

        .topbar{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
        }

        .title h1{
            color: white;
            font-weight: 700;
            font-size: 40px;
        }

        .title p{
            color: #94a3b8;
        }

        .profile{
            background: #1e293b;
            padding: 12px 22px;
            border-radius: 15px;
            color: white;
        }

        .card-box{
            background: linear-gradient(145deg,#1e293b,#111827);
            border-radius: 25px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        }

        .header-card{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .btn-modern{
            border: none;
            padding: 14px 22px;
            border-radius: 15px;
            background: linear-gradient(45deg,#06b6d4,#3b82f6);
            color: white;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-modern:hover{
            transform: scale(1.05);
        }

        .table{
            color: white;
            border-collapse: separate;
            border-spacing: 0 15px;
        }

        .table thead th{
            border: none;
            color: #94a3b8;
            font-weight: 500;
        }

        .table tbody tr{
            background: #0f172a;
            border-radius: 20px;
            transition: 0.3s;
        }

        .table tbody tr:hover{
            transform: translateY(-3px);
            background: #172033;
        }

        .table tbody td{
            padding: 20px;
            border: none;
            vertical-align: middle;
        }

        .status{
            padding: 8px 14px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
        }

        .selesai{
            background: rgba(34,197,94,0.2);
            color: #22c55e;
        }

        .proses{
            background: rgba(251,191,36,0.2);
            color: #facc15;
        }

        .btn-action{
            border: none;
            width: 38px;
            height: 38px;
            border-radius: 12px;
            margin-right: 5px;
            color: white;
        }

        .edit{
            background: #3b82f6;
        }

        .delete{
            background: #ef4444;
        }

        .card-mini{
            background: linear-gradient(145deg,#1e293b,#111827);
            padding: 25px;
            border-radius: 22px;
            color: white;
            margin-bottom: 30px;
        }

        .card-mini h2{
            font-size: 35px;
            font-weight: 700;
        }

        .icon-box{
            width: 60px;
            height: 60px;
            border-radius: 18px;
            background: linear-gradient(45deg,#3b82f6,#8b5cf6);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }

    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="logo">
            <i class="fa-solid fa-car-side"></i>
            E-Bengkel
        </div>

        <ul class="menu">
            <li>
                <a href="#">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </li>

            <li>
                <a href="#" class="active">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    Kendaraan
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-file-lines"></i>
                    Laporan
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    Pengaturan
                </a>
            </li>
        </ul>

    </div>

    <!-- Content -->
    <div class="content">

        <!-- Topbar -->
        <div class="topbar">

            <div class="title">
                <h1>Daftar Kendaraan</h1>
                <p>Kelola data servis kendaraan dengan tampilan premium.</p>
            </div>

            <div class="profile">
                <i class="fa-solid fa-user"></i>
                Admin
            </div>

        </div>

        <!-- Statistik -->
        <div class="row">

            <div class="col-md-4">
                <div class="card-mini d-flex justify-content-between align-items-center">
                    <div>
                        <p>Total Kendaraan</p>
                        <h2>24</h2>
                    </div>

                    <div class="icon-box">
                        <i class="fa-solid fa-car"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-mini d-flex justify-content-between align-items-center">
                    <div>
                        <p>Sedang Proses</p>
                        <h2>8</h2>
                    </div>

                    <div class="icon-box">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-mini d-flex justify-content-between align-items-center">
                    <div>
                        <p>Servis Selesai</p>
                        <h2>16</h2>
                    </div>

                    <div class="icon-box">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                </div>
            </div>

        </div>

        <!-- Table -->
        <div class="card-box">

            <div class="header-card">

                <h3 class="text-white">
                    Data Servis Kendaraan
                </h3>

                <button class="btn-modern">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Data
                </button>

            </div>

            <table class="table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Plat Nomor</th>
                        <th>Pemilik</th>
                        <th>Merk</th>
                        <th>Keluhan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>BK 1234 AA</td>
                        <td>Regina</td>
                        <td>Honda Beat</td>
                        <td>Mesin Mati</td>

                        <td>
                            <span class="status selesai">
                                Selesai
                            </span>
                        </td>

                        <td>
                            <button class="btn-action edit">
                                <i class="fa-solid fa-pen"></i>
                            </button>

                            <button class="btn-action delete">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>BK 8899 ZZ</td>
                        <td>Budi</td>
                        <td>Yamaha NMAX</td>
                        <td>Ganti Oli</td>

                        <td>
                            <span class="status proses">
                                Proses
                            </span>
                        </td>

                        <td>
                            <button class="btn-action edit">
                                <i class="fa-solid fa-pen"></i>
                            </button>

                            <button class="btn-action delete">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>