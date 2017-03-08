<table>
  <tr>
      <th>Title </th>
      <th>Author </th>
      <th>Publisher </th>
    </tr>
@foreach($books as $book)
<tr>
  <td>{{$book->title}}</td>
  <td>{{$book->author->first_name}} {{$book->author->last_name}}</td>
  <td>{{$book->publisher->name}}</td>
</tr>
@endforeach
</table>
