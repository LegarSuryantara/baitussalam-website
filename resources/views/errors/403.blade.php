<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Ditolak | Baitussalam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }
        .error-container {
            text-align: center;
            padding: 40px;
            background: white;
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            max-width: 500px;
            width: 90%;
            transform: translateY(0);
            animation: float 4s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .icon-box {
            font-size: 80px;
            color: #dc3545;
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.7; }
            100% { transform: scale(1); opacity: 1; }
        }
        h1 {
            font-weight: 800;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        p {
            color: #7f8c8d;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }
        .btn-back {
            background: #198754;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            display: inline-block;
        }
        .btn-back:hover {
            background: #146c43;
            transform: scale(1.05);
            color: white;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="icon-box">
            <i class="bi bi-shield-lock-fill"></i>
        </div>
        <h1>403</h1>
        <h3>AKSES DITOLAK</h3>
        <p>Maaf, Anda tidak memiliki izin untuk mengakses halaman ini. Silakan hubungi IT atau pengurus pusat.</p>
        <a href="{{ url('/') }}" class="btn-back">
            <i class="bi bi-house-door me-2"></i> Kembali ke Beranda
        </a>
    </div>
</body>
</html>
