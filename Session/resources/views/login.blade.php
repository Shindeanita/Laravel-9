<h1>Login Form </h1>
<form action="/user" method="post">
    @csrf
    <a href="addmember">Add User</a>
    <br>
    <input type="text" name="username" place holder="Enter the username" /><br>
  
    <span style='color:red'>@error('username'){{$message}} @enderror</span><br>
    <input type="password" name="password" place holder="Enter the Password" /><br>
    <span style='color:red'>@error('password'){{$message}} @enderror</span><br>
    
    <br>
    <br>
    <button type="Submit">Login</button>
</form>