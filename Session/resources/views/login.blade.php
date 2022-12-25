<h1>Login Form </h1>
<form action="/user" method="post">
    @csrf
    <input type="text" name="username" place holder="Enter the username" /><br>
    <br>
    <input type="password" name="password" place holder="Enter the Password" />
    <br>
    <br>
    <button type="Submit">Login</button>
</form>