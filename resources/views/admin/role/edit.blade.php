@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <a href="{{route('category.index')}}" class="btn btn-primary mb-1"><iconify-icon icon="el:return-key"></iconify-icon> Return</a>
                <form action="{{route('category.update',$category)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control mb-2" name="name" value="{{$category->name}}">
                        @error('name')
                        <span class="badge text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label mb-2">Avatar</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                        <span class="badge text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
