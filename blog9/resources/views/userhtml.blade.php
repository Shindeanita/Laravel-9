<h1>User Login</h1>

<!-- @if ($errors)
    @foreach($errors->all() as $err)
        <li>{{$err}}</li>
    @endforeach
@endif -->

<form action="userHtml" method="Post">
    @csrf

    <lable>User name</lable><input type="text" name="username" value="{{old('username')}}" placeholder="Enter user name"><br>
    <span style='color:red'>@error('username') {{$message}} @enderror</span><br>
    <br>
    
    <lable>Password </lable><input type="password" name="upass" value="" placeholder="Enter Password"><br>
    <span style='color:red'>@error('upass') {{$message}} @enderror</span><br>
    <button type="submit">Submit</button>

</form>