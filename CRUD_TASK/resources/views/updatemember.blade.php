<html>
    <h1>Update Member </h1>
    <form action="/edit" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <input type="text" name='name' value="{{$data['member_name']}}"><br><br>
        <input type="text" name='email' value="{{$data['email']}}"><br><br>
        <textarea name="address" placeholder="Please enter address">{{$data['address']}}</textarea><br><br>
        
        <button type="submit">Update</button>
    </form>
</html>