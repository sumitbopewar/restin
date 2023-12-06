<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Restin Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }

        .container {
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .content {
            padding: 20px;
        }

        h3 {
            font-weight: bold;
            text-align: center;
        }

        p {
            margin: 10px 0;
        }

        .logo {
            text-align: center;
        }

        .logo img {
            max-width: 100px;
            height: auto;
        }

        /* Custom styles */
        .bg-light {
            background-color: #f5f5f5;
        }

        .bg-white {
            background-color: #fff;
        }

        .shadow {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .text-center {
            text-align: center;
        }

        .fw-bold {
            font-weight: bold;
        }

        .p-5 {
            padding: 20px;
        }
    </style>
</head>

<body >
    
    <div class="container bg-light mx-auto ">
        <h3 class="text-center fw-bold">Restin Form Submission</h3>
        <div class="content bg-white shadow p-5 ">
            <p><strong>Name:</strong> {{ $mailData['name'] }}</p>
            <p><strong>Email:</strong> {{ $mailData['email'] }}</p>
            <p><strong>Mobile:</strong> {{ $mailData['mobile'] }}</p>
            <p><strong>Message:</strong> {{ $mailData['message'] }}</p>
        </div>
    </div>
</body>
</html>
