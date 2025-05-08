<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                    <tr>
                        <td>{{ $race['round'] }}</td>
                        <td><a href={{ $race['url'] }}>{{ $race['raceName'] }}</td>
                        <td>{{ $race['date'] }}</td>
                        <td>{{ $race['Circuit']['circuitName'] }}</td>
                        <td>{{ $race['Circuit']['Location']['country'] }}</td>
                    </tr>
                @endforeach
            </tbody>
            </div>
        </table>
    @endif

</body>

</html>
