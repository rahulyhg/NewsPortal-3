@extends('admin.shared.layout')
@section('title', 'Category list')
@section('content')

@include('shared.message-success')
<table class="table table-striped table-responsive table-bordered">
    <thead>
        <th>No</th>
        <th>Name</th>
        <th>Slug</th>
        <th>Delete</th>
        <th>Edit</th>
    </thead>
    <tbody>
        @foreach($categories as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->slug }}</td>
                <td>
                    <i class="fa fa-trash"></i><a href="#" onclick="$('#form-{{ $item->id }}').submit()"> Delete</a>
                    <form action="{{ route('admin.category.destroy', $item->id) }}" method="POST" id="form-{{ $item->id }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                </td>
                <td>
                    <i class="fa fa-edit"></i><a href="{{ route('admin.category.edit', $item->id) }}"> Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection