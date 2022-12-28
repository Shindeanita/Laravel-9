<html>
    <body>
        <h4>Add Member</h4>
        <form action="list" method="post">
            @csrf

            <input type="text" name="name" placeholder="Please enter name"><br><br>
            <span style='color:red'>@error('name') {{$message}} @enderror</span><br>
            <input type="text" name="email" placeholder="Please enter email"><br><br>
            <span style='color:red'>@error('email') {{$message}} @enderror</span><br>
            <textarea name="address" placeholder="Please enter address"></textarea><br><br>
            <span style='color:red'>@error('address') {{$message}} @enderror</span><br>
            <button type="submit">Save</button>


        </form>
    </body>
</html>