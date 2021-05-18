@extends('posts.layout')

@section('content')
    <div class="row" style="margin-top: 5em;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel blog post</h2>

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}">Create new post</a>

            </div>
        </div>
    </div>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Body</th>
            <th width="280px">Action</th>

        </tr>
        @foreach ($data as $key => $value)
            <td>{{ ++$i }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ \Str::limit($value->body, 100) }}</td>
            <td>
                <form action="{{ route('posts.destroy', $value->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('posts.show', $value->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('posts.edit', $value->id) }}">Edit</a>
                    @crlf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>

        @endforeach
    </table>
    { !! $data->links('pagination::bootstrap-4') !! }
@endsection
