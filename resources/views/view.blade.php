<?php
if(!!isset($_GET['submit']))
{
echo "not submitted";
$name= '{{$item->name}}';

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>View</title>
</head>
<body>
  <button onclick="window.location.href='/'">Go Back</button> 
</body>
<form action="" method="GET" enctype="multipart/form-data">
    <select name="name">
        @foreach($selection as $key=>$item)
        <option value="{{$item->collection_name}}">
            {{$item->collection_name}}
</option>
                @endforeach
    </select>
    <input type="submit" value="Filter"> 
</form>
<table border="3px">
            <thead>
                
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Image</td>
                </tr>
                </thead>
                @foreach($teacher_load as $key=>$item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><img src="{{$item->getFirstMediaUrl($name,'thumb')}}"/ width="120px"></td>
                </tr>
                @endforeach
                
           
            @foreach($student_load as $key=>$item)
        <tr style="color:red;" >
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><img src="{{$item->getFirstMediaUrl($name,'thumb')}}"/ width="120px"></td>
                </tr>


        @endforeach
        </table>
       
</html>