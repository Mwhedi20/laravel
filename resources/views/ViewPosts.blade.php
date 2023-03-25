<center>
<br>
    <h2>Insert, Update, Delete and Select In laravel</h2>



    <form action="{{ route('cr') }}">
    <button type="submit">Create Post</button>
    </form>
    <table border="1" width="600px" height="200px" >
<tr >
    <th>id</th>
    <th>Title</th>
    <th>Body</th>
    <th>option</th>
</tr>


@foreach ($s as $p)
<tr align="center">
    <td > {{$p->id}}  </td>
    <td> {{$p->title}}  </td>
    <td> {{$p->body}}  </td>
    <td> <a href="{{ route('del',$p->id) }}"> Delete</a>    -  <a target="_blank" href="{{ route('upd',$p->id) }}"> Update</a> </td>
</tr>
@endforeach



</table>





</center>


