<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0f4f8;
            font-family: 'Segoe UI', sans-serif;
        }
        .container-box {
            background: white;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            overflow: hidden;
            display: flex;
            max-width: 1000px;
            width: 90%;
        }
        .left {
            flex: 1;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .left h1 {
            font-size: 2.8rem;
            font-weight: bold;
            color: #2c3e50;
        }
        .left p {
            font-size: 1.1rem;
            margin: 20px 0 30px;
            color: #555;
        }
        .btn-custom {
            background: #3498db;
            color: white;
            font-weight: 600;
            padding: 12px 28px;
            border-radius: 50px;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #2980b9;
        }
        .features {
            margin-top: 30px;
        }
        .features div {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #333;
            margin: 8px 0;
        }
        .features div span {
            color: #27ae60;
            font-size: 1.2rem;
        }
        .right {
            flex: 1;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }
        .right img {
            width: 80%;
            max-width: 350px;
        }
    </style>
</head>
<body>

    <div class="container-box">
        <div class="left">
            <h1>👩‍🏫 Aplikasi Daftar Siswa</h1>
            <p>Kelola data siswa dengan lebih rapi dan efisien.<br>
               Tambahkan, perbarui, dan cari data siswa dalam hitungan detik.</p>

            <a href="{{ route('login') }}" class="btn-custom">Mulai Sekarang</a>

            <div class="features">
                <div><span>✔</span> Tambah & Edit Data Siswa</div>
                <div><span>✔</span> Cari Data dengan Cepat</div>
                <div><span>✔</span> Desain Modern & Responsif</div>
            </div>
        </div>
        <div class="right">
            <img src="https://cdn-icons-png.flaticon.com/512/201/201818.png" alt="Siswa">
        </div>
    </div>

</body>
</html>
