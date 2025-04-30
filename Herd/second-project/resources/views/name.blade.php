<!DOCTYPE html>
<html>

<head>
    <title>Name Display</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f0f0f0;
        text-align: center;
        background-image: url('/images/ocean.jpg');
        background-size: cover;
        background-position: center;
    }


    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #ff5733;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"] {
        padding: 5px;
        width: 100%;
        max-width: 300px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        padding: 8px 15px;
        background-color: #ff5733;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .result {
        margin-top: 20px;
        padding: 10px;
        background-color: white;
        border-radius: 4px;
    }
</style>

<body>
    <div class="container">
        <h1>Enter Your Name</h1>

        <!-- Form to submit a name -->
        <form action="{{ route('name.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                <input type="text" name="color" placeholder="Favorite color" />
            </div>
            <button type="submit">Submit</button>
        </form>

        <!-- Display the submitted name -->
        @if (isset($name))
            <div class="result">
                <h3>Hello, {{ $name }}!, {{ $color }}!</h3>
            </div>
        @endif
    </div>

</body>

</html>
