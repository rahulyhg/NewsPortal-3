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
            <button class="btn btn-success" type="submit">Create</button>
            <button class="btn btn-info" type="reset">Reset</button>
            <a href="{{ route('admin.category.index') }}"><input type="button" class="btn btn-danger" value="Back to list"></a>
        </div>
    </form>
</div>

@endsection