<div class="col-md-6 text-right">
    <form action="{{ route('product.index') }}" method="get" class="form-inline">

    <div class="form-group">
      <input type="text" name="name" class="form-control" placeholder="Search">
    </div>  
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Search</button>
</div>

<a href="{{ route('product.create') }}" class="btn btn-primary button btn-round f-right d-inline-block md-trigger m-r-5"> ADD </a>


<table> 
    <tr>
       <th>Product Name</th>
       <th>Product Price</th>
    </tr>
      @foreach($products as $productKey => $product)
    <tr>
        <td>
       	   <a href="{{route('product.show', [$product->id])}}">
            {{ $product->name }}   
           </a>
        </td>
        <td>
           {{ $product->price }}
        </td>
    </tr>
    @endforeach
</table>














