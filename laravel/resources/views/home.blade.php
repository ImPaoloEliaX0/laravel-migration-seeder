<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains Database</title>
</head>

<body>
    <h1>Trenitalia</h1>
    <h3>Treni:</h3>
    @foreach ($trains as $train)
        <p>
            <span>{{ $train['company_name'] }}</span>
            <span>{{ $train['departure_station'] }}</span>
            <span>{{ $train['arrival_station'] }}</span>
            <span>{{ $train['departure_time'] }}</span>
            <span>{{ $train['arrival_time'] }}</span>
            <span>{{ $train['code_number'] }}</span>
            <span>{{ $train['carriages'] }}</span>
            <span>{{ $train['in_time'] }}</span>
            <span>{{ $train['canceled'] }}</span>
        </p>
        <hr>
    @endforeach
</body>

</html>
