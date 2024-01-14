<!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Case</title>
</head>

<body>
    @switch($name)
        @case('arief')
            <p>Hi Arief</p>
        @break

        @default
            <p>Hi Guest!</p>
    @endswitch
</body>

</html>
