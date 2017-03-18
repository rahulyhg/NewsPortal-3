@extends('admin.shared.layout')
@section('title', 'Category edit')
@section('content')

    <div class="col-sm-4">
        @include('shared.error')
        @include('shared.message-success')
        <form action="{{ route('admin.category.update', $category->id) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Edit</button>
                <button class="btn btn-info" type="reset">Reset</button>
                <a href="{{ route('admin.category.index') }}"><input type="button" class="btn btn-danger"
                                                                     value="Back to list"></a>
            </div>
        </form>
    </div>

@endsection