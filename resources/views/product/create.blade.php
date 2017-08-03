 




{{ Form::open(['route' => 'product.store', 'method' => 'post', 'id' => 'create-product']) }}

<div class="card">
    <div class="col-sm-12">
        <div class="form-group-row">
            <div class="col-sm-6">
                Name
            </div>
            <div class="col-sm-6">
                {{ Form::text('name', null, ['class' => 'form-control form-control-round','placeholder' => 'product name']) }}
            </div>
             <div class="col-sm-6">
                Price
            </div>
            <div class="col-sm-6">
                {{ Form::text('price', null, ['class' => 'form-control form-control-round','placeholder' => 'product Price']) }}
            </div>
             <div class="col-sm-6">
                Description
            </div>
            <div class="col-sm-6">
                {{ Form::text('description', null, ['class' => 'form-control form-control-round','placeholder' => 'Description']) }}
            </div>
            <div class="col-sm-6">
                
            </div>
            <div class="col-sm-6">
              {{ Form::submit(Lang::get('submit'),
                                ['class' => 'btn btn-primary button btn-round pull-right m-r-5']) }}
            </div>
        </div>
    </div>
</div>

 {{ Form::close() }}