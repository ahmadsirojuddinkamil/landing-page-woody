<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ $title }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <link rel="icon" href="" type="image/x-icon" />

    @include('chat::components.css')
</head>

<body>

    @include('chat::components.header')

    @include('chat::components.sidebar')

    @include('chat::layouts.dashboard.index')

    @include('chat::components.js')

</body>

</html>
