<h1>Book List </h1>


<table border="1">
  <tr>
     <td>Id</td>
     <td>Name</td>
     <td>Author</td>
     <td>Price</td>
     <td>Image</td>
     <td>Operations</td>
  </tr>

  @foreach($booklist as $book)
  <tr>
     <td>{{$book['id']}}</td>
     <td>{{$book['name']}}</td>
     <td>{{$book['author']}}</td>
     <td>{{$book['price']}}</td>
     <td><img src="{{ $book['imgurl'] }}" height="30px" width="30px" /></td>
     <td><a href={{"edit/".$book['id']}}>Edit</a>  <a href={{"delete/".$book['id']}}>Delete</a></td>
  </tr>
  @endforeach

</table>


