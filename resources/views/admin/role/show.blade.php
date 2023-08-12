@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <a href="{{route('category.index')}}" class="btn btn-primary mb-5"><iconify-icon icon="el:return-key"></iconify-icon> Return</a>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="{{asset('storage/category/'.$category->image)}}" class="img-fluid rounded-start" style="width: 300px" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$category->name}}</h5>
                                <p class="card-text"><small class="text-body-secondary">{{$category->created_at}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
