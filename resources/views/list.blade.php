<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT ChipiChapa</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <nav>
        <div class="left">
            <a href=""><img src="https://media.tenor.com/9ZaIM50ELMAAAAAi/caramelldansen-caramelldansen-cat.gif" alt=""></a>
            <p>PT ChipiChapa</p>
        </div>
        <div class="right">
            <a href="/home">Home</a>
            <a href="#">List Karyawan</a>
            <a href="" class="add">Tambah Karyawan</a>
        </div>
    </nav>
    <div class="kotak">
        <div>
            <h1>Karyawan</h1>
            <div class="orang">
                <div>
                    <img src="{{ ('asset/placeholder.png') }}" alt="">
                    <h2>Nama: nama</h2>
                    <h2>Umur: 26</h2>
                    <h2>Alamat: Jakbar</h2>
                    <h2>No. Telp: 081111111111</h2>
                </div>
                <div>
                    <img src="{{ ('asset/placeholder.png') }}" alt="">
                    <h2>Nama: nama</h2>
                    <h2>Umur: 26</h2>
                    <h2>Alamat: Jakbar</h2>
                    <h2>No. Telp: 080000000000</h2>
                </div>
                <div>
                    <img src="{{ ('asset/placeholder.png') }}" alt="">
                    <h2>Nama: nama</h2>
                    <h2>Umur: 26</h2>
                    <h2>Alamat: Jakbar</h2>
                    <h2>No. Telp: 081111111111</h2>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>