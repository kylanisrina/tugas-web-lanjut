<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Information</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('/asset/images/bga1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 20px;
            padding: 30px;
            width: 300px;
            text-align: center;
            box-shadow: 1px 1px 25px 1px rgb(123, 235, 255),
                        0 0 20px rgba(123, 235, 255, 0.4);
            display: flex;
            flex-direction: column;
            align-items: center;
            backdrop-filter: blur(5px);
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(123, 235, 255, 0.6);
            box-shadow: 1px 1px 20px 1px rgb(123, 235, 255);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.05);
        }

        .info {
            width: 100%;
        }

        .label {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 10px;
            background-color: rgba(120, 238, 213, 0.2);
            color: #fff;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .label:hover {
            background-color: rgba(152, 240, 248, 0.4);
            transform: translateY(-2px);
        }

        h1 {
            margin: 0;
            font-size: 1.2em;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            animation: fadeIn 0.8s ease-out;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="/asset/images/ming.jpg" alt="Profile Picture" class="profile-img">
        <div class="info">
            <h1 class="label">{{$nama}}</h1>
            <h1 class="label">{{ $npm }}</h1>
            <h1 class="label">{{ $kelas }}</h1>
        </div>
    </div>
</body>
</html>
