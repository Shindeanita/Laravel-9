<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>List Members</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>Member List</h1><br><br>
        <a href="add">Add Member</a><br>

        <span style="color:green">@if(session()->has('user'))   {{session('user')}}  Added Sucessfully.  @endif</span><br>
        <span style="color:green">@if(session()->has('userdelete'))   {{session('userdelete')}} Deleted Sucessfully.  @endif</span><br>
        <table border=1>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
            @foreach($members as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['member_name']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item['address']}}</td>
                <td>
                    <a href="update/{{$item['id']}}">Edit</a>
                    <a href="delete/{{$item['id']}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
        <span>{{$members->links()}}</span>

        <script src="" async defer></script>
    </body>
    <style>
        .w-5{
               display:none; 
        } 
    </style>
</html>