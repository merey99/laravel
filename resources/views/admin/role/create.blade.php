@section('title', 'Create')
@extends('layouts.admin')
@section('title', 'Roles')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.role.index')}}" class="btn btn-outline-light btn-primary"><i class="fas fa-undo"></i></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">@yield('title')</h3>
                        </div>
                            <form action="{{route('admin.role.store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text"6 class="form-control mb-2" name="name" value="{{old('name')}}">
                                        @error('name')
                                        <span class="badge text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Slug</label>
                                        <input type="text" class="form-control mb-2" name="slug" value="{{old('slug')}}">
                                        @error('slug')
                                        <span class="badge text-danger">{{$message}}</span>
                                        @enderror
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
        </div>
    </section>
@endsection
