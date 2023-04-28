<h1>User Login</h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter user name"><br><br>
    <input type="password" name="Password" placeholder="enter user password">
    <button type="submit">Login</button>
</form>