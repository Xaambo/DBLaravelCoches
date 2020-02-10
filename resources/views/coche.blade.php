<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotxe</title>
</head>
<body>
    <div class="content">
        <div>
            <h1>Cotxe {{$coche->id}}</h1>
        </div>
        <ul>
            <li>Make: {{$coche->make}}</li>
            <li>Model: {{$coche->model}}</li>
            <li>Produced on: {{$coche->produced_on}}</li>
        </ul>
    </div>
</body>
</html>