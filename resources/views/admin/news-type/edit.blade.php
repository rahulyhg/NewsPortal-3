@extends('admin.shared.layout')
@section('title', 'News Type edit')

@section('content')
    <div class="col-sm-4">
        @include('shared.error')
        @include('shared.message-success')
        <form action="{{ route('admin.news-type.update', $newsType->id) }}" method="POST" class="">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $newsType->name }}">
            </div>
            <div class="form-group">
                <label>Category:</label>
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option @if ($category->id == $newsType->category_id)
                                {{ "selected" }}
                                @endif
                                value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Edit</button>
                <button class="btn btn-info" type="reset">Reset</button>
                <a href="{{ route('admin.news-type.index') }}"><input type="button" class="btn btn-danger"
                                                                      value="Back to list"></a>
            </div>
        </form>
    </div>
@endsection