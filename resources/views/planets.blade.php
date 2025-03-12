<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planets List</h1>
    <ul>
        @foreach ($planets as $planet)
            <li>
                <h2>{{ $planet->name }}</h2>
                <p>{{ $planet->description }}</p>
                <p><strong>Solar System:</strong> {{ $planet->solarSystem->name ?? 'The Planetary System' }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
