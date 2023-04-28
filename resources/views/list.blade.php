<h1>Member List</h1>
<table border='1'>
<tr>
        <td>C_ID</td>
        <td>C_Name</td>
        <td>C_Email</td>
        <td>C_city</td>
        <td>Operation</td>
    </tr>
   
    @foreach($customers as $Customer)
    <tr>
        <td>{{$Customer['c_id']}}</td>
        <td>{{$Customer['c_name']}}</td>
        <td>{{$Customer['c_product']}}</td>
        <td>{{$Customer['c_city']}}</td>
        <td>
            <a href = 'delete/{{ $Customer->c_id }}'>Delete</a>
            <a href = 'edit/{{ $Customer->c_id }}'>Edit</a>
        </td>

    </tr>
    @endforeach

</table>

