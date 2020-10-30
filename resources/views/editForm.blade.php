<h1>Update Data</h1>

<form action="/edit" method="POST">
    @csrf
   <input type="hidden" name="id" value="{{$data['id']}}"/>
   <input type="text" name="name" placeholder="Enter Book Name" value="{{$data['name']}}"/>
   <br></br>
   <input type="text" name="author" placeholder="Enter Author Name" value="{{$data['author']}}"/>
   <br></br>
   <input type="text" name="price" placeholder="Enter Price" value="{{$data['price']}}"/>
   <br></br>
   <input type="text" name="imgurl" placeholder="Enter Book Image URL" value="{{$data['imgurl']}}"/>
   <br></br>
   <button type="submit" >Update</button>
</form>