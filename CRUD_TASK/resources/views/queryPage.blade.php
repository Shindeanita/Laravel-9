<html>
    <h1>List All Members </h1>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
        </tr>

        @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->member_name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
        </tr>
        @endforeach

        
    </table>
    <h2>With where Condition</h2>
    {{$data2}}
    <h2>With find</h2>
    {{$data3->id}}
    {{$data3->member_name}}
    {{$data3->address}}
    {{$data3->email}}
    <h2>Count records</h2>
    {{$data4}}
    <h3>Inserted</h3>
    {{$data5}}
</html>