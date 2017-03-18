@extends('admin.shared.layout')
@section('title', 'News Type create')

@section('content')
    <div class="col-sm-4">
        @include('shared.error')
        @include('shared.message-success')
        <form action="{{ route('admin.news-type.store') }}" method="POST" class="">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <div class="row">
                    <button class="btn btn-success btn-block" type="submit">Create</button>
                    <button class="btn btn-info btn-block" type="reset">Reset</button>
                    <a href="{{ route('admin.news-type.index') }}"><input type="button"
                                                                         class="btn btn-danger btn-block"
                                                                         value="Back to list"></a>
                </div>
            </div>
        </form>
    </div>
@endsection