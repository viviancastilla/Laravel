<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formula1</title>
    <style>
        body {
            background-color: black;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 20px;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        a {
            color: white;
        }

        .race-card {
            background-color: grey;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .race-card:hover {
            transform: scale(1.02);
        }

        .text-section {
            padding: 1.5rem;
            flex: 1;
        }

        .text-section h2 a {
            color: #dc2626;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .text-section h2 a:hover {
            text-decoration: underline;
        }

        .text-section p {
            color: #4b5563;
            margin: 0.5rem 0;
            font-size: 1rem;
        }

        .text-section strong {
            font-weight: bold;
        }

        .image-section {
            width: 100%;
            background-image: url('/images/f1.jpg');
        }

        .image-section img {
            object-fit: cover;
            width: 100%;
            height: 200px;
        }

        @media (min-width: 768px) {
            .race-card {
                flex-direction: row;
            }

            .text-section {
                padding: 2rem;
            }

            .image-section {
                width: 33.33%;
            }
        }
    </style>

</head>

<body>
    <h1>F1 2025 Race Schedule</h1>
    @if (empty($races))
        <p>No race data available.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Round</th>
                    <th>Race Name</th>
                    <th>Date</th>
                    <th>Circuit</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($races as $race)
                    <div class="race-card">
                        <div class="image-section"></div>
                        <div class="text-section">
                            <tr>
                                <td>{{ $race['round'] }}</td>
                                <td><a href={{ $race['url'] }}>{{ $race['raceName'] }}</td>
                                <td>{{ $race['date'] }}</td>
                                <td>{{ $race['Circuit']['circuitName'] }}</td>
                                <td>{{ $race['Circuit']['Location']['country'] }}</td>
                            </tr>
                @endforeach
                </div>
            </tbody>
            </div>
        </table>
    @endif
</body>

</html>
