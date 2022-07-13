{{-- @extends('dashboard') --}}


@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
<div class="py-12">
@extends('products.layout')

<div class="row max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="col-lg-12 overflow-hidden">
        <div class="pull-left">
            {{-- <h3>Sample Crud</h3> --}}

            <a class="btn btn-success" href="{{ route('products.create') }}"> New product
            </a>
        </div>
    </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>   
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>

                <form action="{{ route('products.destroy', $product->id) }}" method="POST"> 
                    <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-info">Delete</button>
                </form>

            </td>
        </tr>
    @endforeach
</table>
{{ $products->links() }}


</div>
</div>

</x-app-layout>


@endsection