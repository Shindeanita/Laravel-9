<html>
    <h4>Product Table</h4>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Product Name</td>
            <td>Price</td>
            <td>Unit of Measurement</td>
            
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->uom_name}}</td>
            
        </tr>
        @endforeach
        <tr>
            <td>Total Product</td>
            <td>{{$total}}</td>
            
            <td></td>
            
        </tr>
        <tr><td>Average Of Price</td>
        <td>{{$avg}}</td></tr>
        <tr><td>Min/Mas</td>
        <td>{{$min}}</td></tr>
    </table>
    <h4>Reports: Unit wise Data</h4>
    {{$gproducts}}
</html>