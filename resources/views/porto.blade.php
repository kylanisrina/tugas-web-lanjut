<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-image: url('/asset/images/bga.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: black;
    }

    .bg {
        position: relative;
        width: 300px;
        height: 400px;
        background-position: center;
    }

    .card {
        background-color: rgba(244, 159, 30, 0.2);
        border-radius: 10px;
        padding: 20px;
        width: 300px;
        text-align: center;
        box-shadow: 1px 1px 25px 1px rgb(255, 200, 123);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .profile {
        width: 100px;
        height: 100px;
        margin: 0 auto 20px;
        border-radius: 50%;
        overflow: hidden;
    }

    .profile img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .info {
        margin-top: 10px;
        color: #fff;
        font-weight: bold;

    }

    .label {
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;

    }
</style>
</head>
<body>

    <div class="bg">
        <div class="card">
            <div class="profile">
                <img src="/asset/images/profile.jpg">
            </div>
            <div class="info">
                <div class="label">Kyla Nisrina Anggrahini</div>
                <div class="label">A</div>
                <div class="label">2267051002</div>
            </div>
        </div>
    </div>
</body>
</html>
