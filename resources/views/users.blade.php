
<h1>this is User Page</h1>

  
<!-- {{$errors}} -->
<!-- @if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
<form action="users" method="post">
    @csrf

    <input type="text" name="username" placeholder="enter user id"/> <br> 
    <span style="color:red">@error('username'){{$message}} @enderror</span>
    <br>
    <input type="password" name="  userpassword" placeholder="enter user password" /> <br>
    <span style="color:red">@error('userpassword'){{$message}} @enderror</span><br>
    <button type="submit">Login</button>
</form> -->


<h1>User Login</h1>
<form action="users" method="POST">
    {{method_field('DELETE')}}
    @csrf
 <input type="text" name="users" placeholder="enter name"><br><br>
 <input type="password" name="password" placeholder="enter name"><br><br>
 <button type="submit">Login</button>
</form>