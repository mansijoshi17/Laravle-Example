<h1>Book Information</h1>

<form action="addbook" method="POST">
    @csrf
   <input type="text" name="name" placeholder="Enter Book Name"/>
   <br></br>
   <input type="text" name="author" placeholder="Enter Author Name"/>
   <br></br>
   <input type="text" name="price" placeholder="Enter Price"/>
   <br></br>
   <input type="text" name="imgurl" placeholder="Enter Book Image URL"/>
   <br></br>
   <button type="submit" >Add</button>
</form>