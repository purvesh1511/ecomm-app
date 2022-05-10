@extends('layouts.app')
@section('content')
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @if ($data)
            @foreach ($data as $v)
                <tr>
                    <td>{{ $v->name }}</td>
                    <td>
                        <form action="{{ route('users.destroy', $v->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('users.show', $v->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('users.edit', $v->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
    {!! $data->links() !!}
@endsection
