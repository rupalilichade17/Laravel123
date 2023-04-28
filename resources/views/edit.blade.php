<h1>update Members</h1>
<form action="/edit" method="POST">
    @csrf
    
    @foreach($customers as $customer)
    <input type="hidden" name="c_id"  value="{{$customer->c_id}}"><br><br>
    <input type="text" name="c_name" value="{{$customer->c_name}}"><br><br>
    <input type="text" name="c_product" value="{{$customer->c_product}}"><br><br>
    <input type="text" name="c_city" value="{{$customer->c_city}}"><br><br>
    <button type="submit">Update</button>
    @endforeach
</form>