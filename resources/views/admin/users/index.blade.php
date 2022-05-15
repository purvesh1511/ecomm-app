@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if ($data)
                                @foreach ($data as $v)
                                    <tr>
                                        <td>{{ $v->name }}</td>
                                        <td>
                                            <form action="{{ route('users.destroy', $v->id) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('users.show', $v->id) }}"><i class="fas fa-info-circle"></i></a>
                                                <a class="btn btn-primary" href="{{ route('users.edit', $v->id) }}"><i class="far fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
