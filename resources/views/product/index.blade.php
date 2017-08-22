@extends('layouts.app') 
@section('content')

<div class="col-md-6 text-right">
    <form action="{{ route('product.index') }}" method="get" class="form-inline">


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


    <div class="form-group">
      <input type="text" name="name" class="form-control" placeholder="Search">
    </div>  
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Search</button>
    </div>

    <div class="main-body space">
        <div class="page-wrapper">
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-t-10 f-22">Table</h5>
                                <a href="{{ route('product.create') }}" class="btn btn-primary button btn-round f-right d-inline-block md-trigger m-r-5"> ADD </a>

                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive dt-responsive">
                                    <table id="" class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>
                                            </th>
                                            <th>
                                                <span class="text-inverse f-14 m-r-20">
                                                    Product Name
                                                </span>
                                            </th>
                                            <th>
                                                <span class="text-inverse f-14">  
                                                    Product Price 
                                                </span>
                                            </th>
                                        </tr>
                                        </thead>
                                           @foreach($products as $productKey => $product)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="text-inverse f-18 m-r-20">
                                                      <a href="{{route('product.show', [$product->id])}}">
                                                          {{ $product->name }}   
                                                      </a>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-inverse f-18">
                                                         {{ $product->price }}
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{$sum}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection









