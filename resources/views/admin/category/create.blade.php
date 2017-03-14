@extends('admin.shared.layout')
@section('title', 'Category create') 
@section('content')

<div class="col-sm-4">
    @include('shared.error')
    @include('shared.message-success')
    <form action="{{ route('admin.category.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">            
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <button class="btn btn-success btn-block" type="submit">Create</button>
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-info btn-block" type="reset">Reset</button>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('admin.category.index') }}"><input type="button" class="btn btn-danger btn-block" value="Back to list"></a>
                </div>
            </div>            
        </div>
    </form>
</div>

@endsection