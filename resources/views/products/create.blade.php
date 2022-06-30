@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <h5>New Product</h5>
            <a class=" btn btn-primary" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert-danger">
    <strong>whoops!</strong>Problems with your input.<br>
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
            
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('products.store') }}" method = "POST">

    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail</strong>
                <div class="form-control" style="height: 150px" name="detail" placeholder="Detail">
                </textarea>
                
                </div>
            </div>
        </div>
    </div>

</form>

@endsection
