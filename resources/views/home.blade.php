@extends('layouts.app')

@section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>

            <th>View</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <tr>

                @foreach($authenticatedUser->all() as $authenticatedUser)
                    <td>
                        {{$authenticatedUser->id}}
                    </td>
                    <td>
                        {{$authenticatedUser->name}}
                    </td>
        </tr>
        @endforeach

    </table>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
