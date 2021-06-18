@extends('layouts.main', ['title' => 'Movies'])

@section('content')

<h1>Movies:</h1>
<table class="table table-striped">
    <tr>
        <th>Movie:</th>
        <th>Rating:</th>
        <th>Type:</th>
    </tr>

    @foreach($results as $result)
    <tr>
        <td>{{ $result->name }}</td>
        <td>{{ $result->rating }}</td>
        <td>{{ $result->types->name }}</td>

    </tr>

    @endforeach

</table>

{{ $results->appends(Request::except('token'))->links() }}

@endsection