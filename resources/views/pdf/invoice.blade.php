<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>{{$company->created_at}}</h1>
</body>
</html>