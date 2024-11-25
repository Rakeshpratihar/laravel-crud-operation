<div>
    <h1> all student data</sh1>
    <form action="datasearch" method="post" >
        @csrf
        <input type="text" placeholder="search your name" name="datasearch" value="{{@$search}}">
        <button>search</button>
    </form >

    <form action="deleteall" method="post" enctype="multipart/formdata">
        @csrf
        <button>delete all</button>
    <table width="90%" border="1px">
        <tr>
            <th width="10%">selection</th>
            <th width="10%">id</th>
            <th width="10%">name</th>
            <th width="10%">email</th>
            <th width="10%">phone</th>
            <th width="20%">address</th>
            <th width="20%">operation</th>
    
</tr>
@foreach($da as $d)
<tr>
    <td><input type="checkbox" name="ids[]" value="{{$d->id}}"></td>
    <td>{{$d->id}}</td>
    <td>{{$d->name}}</td>
    <td>{{$d->email}}</td>
    <td>{{$d->phone}}</td>
    <td>{{$d->address}}</td>
    <td>
    <a href="{{'delete/'.$d->id}}" style="text-decoration:none; margin-right:8px; color:red;">Delete</a>
    <a href="{{'edit/'.$d->id}}" style="text-decoration:none; color:green; margin-left:40px;">Edit</a>
    </td>
<tr>
    @endforeach
    </table>
</form>
  {{$da->links()}}
</div>
<style>
    .w-5.h-5{
        width:20px;
    }
</style>
