<!DOCTYPE html>
<html lang="en">

<head>
    <title>Isset Blade</title>
</head>

<body>
    @isset($name)
        <p>My name is {{ $name }}</p>
    @endisset

    @empty($hobby)
        <p>I dont have hobby</p>
    @endempty
</body>

</html>
