<h1>Add Member</h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="c_id" placeholder="Enter Id"><br><br>
    <input type="text" name="c_name" placeholder="Enter Name"><br><br>
    <input type="number" name="c_product" placeholder="Enter product"><br><br>
    <input type="text" name="c_city" placeholder="Enter city"><br><br>
    <button type="submit">Add Member</button>
</form>