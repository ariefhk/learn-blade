<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tutorial Include Blade</title>
</head>

<body>
    @include('layouts.header', ['description' => 'hahaha this is blade'])
    <p>Testt</p>
    @includeWhen($user == 'admin', 'layouts.header-admin')
    @includeWhen($user == 'guest', 'layouts.header-guest')
</body>

</html>
