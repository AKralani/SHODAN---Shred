@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-12">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body">

                        <form method="GET">
                            <div class="input-group mb-3">
                                <input type="text" name="text" class="form-control" placeholder="Search Users"
                                       value="{{ request()->input('text') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Search
                                    </button>
                                </div>
                            </div>
                        </form>

                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $index => $user)

                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>

                        @if(count($users) === 0)
                            <p class="text-center text-muted">No results</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
