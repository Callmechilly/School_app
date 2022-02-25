<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Student Information</title>
</head>
<body>
<button onclick="window.location.href='/'">Go Back</button> 
<h1>This is Students Page</h1>
    <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="text" name="name" placeholder="Your Name"><br>
        <input type="file" name="file" placeholder="Your Images" multiple><br>
        <input type="submit" value="upload"> 
        <table border="3px">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Image</td>
                </tr>
                </thead>
                @foreach($student as $key=>$item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><img src="{{$item->getFirstMediaUrl($item->name,'thumb')}}"/ width="120px"></td>
                </tr>
            @endforeach
        </table>
</body>
</html>