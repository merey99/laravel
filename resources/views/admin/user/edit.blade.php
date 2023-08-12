@extends('layouts.admin')
@section('content')


    <section class="content-header"></section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title col-md-12 text-center ">Update User</h3>
                        </div>
                        <form action="{{route('admin.user.update', $user)}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Enter Name">
                                    @error('name')
                                    <span class="badge text-bg-danger primary text-danger">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}" placeholder="Enter Name">
                                    @error('lastname')
                                    <span class="badge text-bg-danger primary text-danger">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Enter email">
                                    @error('email')
                                    <span class="badge text-bg-danger primary text-danger">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Avatar input</label>
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="form-control" name="avatar" >
                                            @error('avatar')
                                            <span class="badge text-bg-danger primary text-danger">
                                        {{$message}}
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
