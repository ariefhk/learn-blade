<!DOCTYPE html>
<html lang="en">

<head>
    <title>Class Blade</title>
    <style>
        .red {
            color: red
        }

        .blue {
            color: blue
        }

        .bold {
            font-weight: bold
        }
    </style>
</head>


<body>
    @foreach ($hobbies as $hobby)
        <li @class(['red', 'blue bold' => $hobby['love']])>{{ $hobby['name'] }}</li>
    @endforeach
</body>

</html>
