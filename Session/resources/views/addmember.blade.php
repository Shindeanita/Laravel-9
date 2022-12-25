<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h2>Add Member</h2>
        <form action="addUser" method="post" enctype="multipart/form-data">
            @csrf
            @if(session()->has('name'))
            <span style='color:green'> {{session('user') }} User added sucessfully.</span><br>
            @endif
            <input type="text" name="name" placeholder="Enter the name" /><br>
            <span style='color:red'>@error('name'){{$message}} @enderror</span><br>
            <input type="password" name="password" placeholder="Enter the Password" /><br>
            <span style='color:red'>@error('password'){{$message}} @enderror</span><br>
            <input type="text" name="email" placeholder="Enter the email" /><br>
            <span style='color:red'>@error('password'){{$message}} @enderror</span><br>
            <input type="file" name="avtar" />
            <br>
            <br>
            <button type="Submit">Add Member</button>
        </form>    
        <script src="" async defer></script>
    </body>
    
</html>