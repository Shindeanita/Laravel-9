<h1>User Form</h1>
<form action="htmlmethod" method="post">
    {{method_field('PATCH')}}
    @csrf
    <lable>Username:</lable>
    <input type="text" name="username" placeholder="Enter User name" />
    <br>
    <br>
    <lable>Password </lable>
    <input type="password" name="upassword" placehoder="Enter Password" />
    <br>
    <b>
    <button type="Submit">Submit</button>
</form>