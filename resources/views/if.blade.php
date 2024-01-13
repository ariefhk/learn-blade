<!DOCTYPE html>
<html lang="en">

<head>
    <title>If else Blade</title>
</head>

<body>
    @if (count($hobbies) == 1)
        <p>I have one hobby</p>
    @elseif (count($hobbies) > 1)
        <p>I have multipe hobby</p>
    @else
        <p>I dont have any hobby</p>
    @endif
</body>

</html>
