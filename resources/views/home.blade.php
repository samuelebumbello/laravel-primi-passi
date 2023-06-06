<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primi passi</title>
</head>
<body>
    @include('about')

    <h1>Hello LARAVEL</h1>
    <h2>benvenuto {{$name}} {{$lastname}}</h2>

    @if ($stampaParagrafo)
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ipsa consectetur rem quibusdam quas exercitationem perspiciatis vitae et. Officia amet obcaecati voluptatibus commodi! Explicabo architecto perspiciatis tempora iusto, ipsa atque?
    </p>
    @else
    <p>
        ciaone
    </p>
    @endif


</body>
</html>
