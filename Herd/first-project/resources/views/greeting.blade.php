<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greeting</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: #f0f0f0;
        }

        h1 {
            color: red;
        }

        p {
            font-size: 18px;
            color: #333;
        }
    </style>

</head>

<body>
    <h1>Welcome to Laravel, <h1>
            {{ $studentName }}
            {{ $message }}

</body>

</html>
