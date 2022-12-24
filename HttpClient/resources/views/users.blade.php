<html>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name </td>
        <td>Email</td>
        <td>Profile Picture</td>
    </tr>
    @foreach ($collection as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['last_name']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src={{$item['avatar']}} /></td>
    </tr>
    @endforeach
</table>
<h4>Header</h4>
<ul>
@foreach($header as $head)
    
    @foreach($head as $item)
        <li>{{$item}}<li>
    @endforeach
    
@endforeach
</html>