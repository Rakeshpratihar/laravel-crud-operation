<div>
    <h1>ENTER STUDENTS DETAILS</h1>

    <form action="/update/{{$inp->id}}" method="post">
        @csrf
        <!-- <input type="hidden" name="_method" value="put"/> -->
<input type="text" name="Name"  value="{{$inp->name}}" placeholder="name">
<br><br>
<input type="text" name="Email" value="{{$inp->email}}" placeholder="email">
<br><br>
<input type="text" name="Phone" value="{{$inp->phone}}" placeholder="phone">
<br><br>
<input type="text" name="Address" value="{{$inp->address}}" placeholder="address">
<br><br>
<button>update</button>
<a href="/display" style=" margin-left:20px;">CANCEL</a>
   </form>
</div> 
