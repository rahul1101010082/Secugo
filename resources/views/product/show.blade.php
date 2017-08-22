 
<p> Product Name :  {{$products->name}} </p>
<p> Product Price :  {{$products->price}} </p>
<p> Product Description :  {{$products->description}} </p>
<a href="{{route('product.edit',$products->id)}}" type="button"> edit </a>