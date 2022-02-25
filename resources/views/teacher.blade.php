<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Teachers Information</title>
</head>

<body>
<button onclick="window.location.href='/'">Go Back</button> 
    <h2>This is Teachers Page</h2>
    <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Add your name </label><br>
        <input type="text" name="name" placeholder="Add New"><br>
    <label for="username">Or Select Your Name</label> <br>
    <select name="name">
        <option value="" disabled selected>Select Name</option> 
    @foreach($option as $key=>$item)
        <option value="{{$item->name}}">
            {{$item->name}}
    </option>
    @endforeach
    </select><br>
    
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
                @foreach($teacher as $key=>$item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><img src="{{$item->getFirstMediaUrl($item->name,'thumb')}}"/ width="120px"></td>
                </tr>
                @endforeach
                
        </table>
       
</body>
</html>
