@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Update') }}</div>

                <div class="card-body">

<form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')


    <div class="form-group ">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                 for="name">
                 Name
                </label>
        <input class="form-control"
               type="text"
               name="name"
               id="name"
               value="{{ $user->name }}"
               required
        >
        
        @error('name')
        <p class="text=red-500 ext-xs mt-2">{{ $message}}</p>

        @enderror
            </div>    


            <div class="form-group ">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                         for="avatar">
                         Avatar
                        </label>
                <input class="form-control"
                       type="file"
                       name="avatar"
                       id="avatar"
                       required
                >
                
                @error('avatar')
                <p class="text=red-500 ext-xs mt-2">{{ $message}}</p>
        
                @enderror
                    </div>   
                    
                    <div class="form-group ">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                 for="about">
                                 About you
                                </label>
                        <textarea class="form-control"
                               cols="6"
                               rows="6"
                               name="about"
                               id="about"
                               
                            >{{ $user->about}} </textarea>
                            @error('about')
                <p class="text=red-500 ext-xs mt-2">{{ $message}}</p>
        
                @enderror
                        
            </div>  


            <div class="form-group ">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                         for="email">
                         Email
                        </label>
                <input class="form-control"
                       type="email"
                       name="email"
                       id="email"
                       value="{{ $user->email }}"
                       required
                >
                
                @error('email')
                <p class="text=red-500 ext-xs mt-2">{{ $message}}</p>
        
                @enderror
                    </div>
                        <button type="submit" class="btn btn-primary mt-3 logIn">Update</button>
                            <a href="{{ $user->path() }}" class="btn btn-primary mt-3 logIn">Cancel</a>
@endsection