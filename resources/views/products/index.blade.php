<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->image_url}}</td>
            <td>
                <a href="/products/{{$product->id}}/edit">Edit</a>
                <form action="products/{{$product->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                <input type="submit" value="Delete">
                </form>
            
            </td>
            
          </tr>
        @endforeach
      
     
    </tbody>
    <a href="/products/create">Create</a>

  </table>