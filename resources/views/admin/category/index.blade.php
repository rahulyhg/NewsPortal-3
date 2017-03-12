@extends('admin.shared.layout')
@section('title', 'Category list')
@section('content')

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
                    <i class="fa fa-trash"></i><a href="#"> Delete</a>
                </td>
                <td>
                    <i class="fa fa-edit"></i><a href="#"> Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection