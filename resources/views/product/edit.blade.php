
@extends('layouts.app') 
@section('content')



        <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
                <div class="page-header-title">
                </div>
            </div>
            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body space">
                <div class="row clearfix">
                    <div class="col-lg-12">
                       

                        {{ Form::model($products, ['route' => ['product.update', 'id' => $products->id],
                                'method' => 'put', 'id' => 'edit-product']) }}

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">Create Product</h5>
                                {{ Html::link('/products','cancel',
                                ['class' => 'btn btn-inverse button btn-round f-right d-inline-block md-trigger m-r-5'])
                                 }}
                                {{ Form::submit('submit',
                                ['class' => 'btn btn-primary button btn-round f-right d-inline-block md-trigger m-r-5'])
                                 }}
                            </div>
                            <div class="card-block">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <span class="text-inverse f-14">
                                                    Name
                                                </span>
                                            </div>
                                            <div class="col-sm-8">
                                                {{ Form::text('name', $products->name , ['class' => 'form-control form-control-round']) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                Price
                                            </div>
                                            <div class="col-sm-8">
                                                {{ Form::text('price',$products->price, ['class' => 'form-control form-control-round']) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <span class="text-inverse f-14">
                                                    Description
                                                </span>
                                            </div>
                                            <div class="col-sm-8">
                                                {{ Form::text('description',$products->description, ['class' => 'form-control form-control-round','placeholder' => 'Description']) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>             

@endsection