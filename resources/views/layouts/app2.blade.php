<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Information</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1a1a1a 0%, #2c2c2c 50%, #1a1a1a 100%);
            color: #fff;
            position: relative;
            overflow-x: hidden;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 1;
        }

        .content-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin-top: 250px;
        }

        .btn-container {
            width: 100%;
            max-width: 800px;
            margin-bottom: 20px;
            text-align: left;
        }

        .btn-success {
            background-color: #28a745;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .table-container {
            width: 100%;
            max-width: 800px;
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        .table th,
        .table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .table thead th {
            background-color: rgba(255, 255, 255, 0.1);
            font-weight: bold;
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        }

        .table tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .decoration {
            position: fixed;
            pointer-events: none;
            z-index: 0;
            opacity: 0.6;
        }

        .decoration::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 215, 0, 0.2) 0%, rgba(255, 215, 0, 0) 70%);
            transform: translate(-50%, -50%);
            filter: blur(5px);
        }

        .small {
            font-size: 20px;
        }

        .medium {
            font-size: 30px;
        }

        .large {
            font-size: 40px;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @media (max-width: 768px) {
            .container {
                margin: 20px;
                padding: 15px;
            }

            .table {
                font-size: 14px;
            }

            .table th,
            .table td {
                padding: 8px 10px;
            }
        }
    </style>
</head>

<body>
    @yield('content')
    <script src="..."></script>
</body>

</html>
