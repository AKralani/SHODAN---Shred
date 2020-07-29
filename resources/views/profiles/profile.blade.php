@extends('layouts.app')

@section('content')
    

                        <div class="panel panel-default">
                            <div class="panel-heading">

                                Edit my profile

                            </div>
                            <div class="panel-body">

                        <form method="post" action="{{ route('profiles.profile', $user-id) }}" enctype="multipart/form-data">

                            @csrf
                            

                            <div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group ">
                                <label for="name">Upload new avatar</label>
                                <input type="file" class="form-control"  name="avatar" >
                            </div>

                            <div class="form-group ">
                                <label for="about">About you</label>
                                <textarea id="about" class="form-control" cols="6" rows="6"  name="about" >{{ $user->profile->about }}</textarea>
                            </div>



                            <button type="submit" class="btn btn-primary mt-3 logIn">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
