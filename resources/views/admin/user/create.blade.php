@extends('layouts.admin')
@section('title', 'Add Users')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">@yield('title')</h3>
                        </div>
                        <form action="{{route("admin.user.store")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
                                </div>
                                @error('name')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{old('lastname')}}">
                                </div>
                                @error('lastname')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                                </div>
                                @error('email')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="form-group">
                                    <label for="password1">Password</label>
                                    <input type="password" class="form-control" name="password1" placeholder="Password" value="{{old('password')}}">
                                </div>
                                @error('password')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="avatar">
                                            <label class="custom-file-label" for="exampleInputFile">File</label>
                                        </div>
                                    </div>
                                    @error('image')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    @forelse($roles as $role)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$role->id}}" name="role[]">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{$role->name ?? ''}}
                                        </label>
                                    </div>
                                    @empty
                                        <h2>No roles</h2>
                                    @endforelse
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

