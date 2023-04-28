<h1>Add Member</h1>
@if(session('user'))
<h3 style="color:green">{{session('user')}} user has been added</h3>
@endif
<form action="addmember" mehod="GET">
   @csrf
   <input type="text" name="user" placeholder="Enter user name"><br> <br> 
   <input type="password" name="password" placeholder="Enter user Password"><br><br>
   <input type="email" name="email" placeholder="Enter user email"><br><br>
   <button>Add Member </button>
</form>