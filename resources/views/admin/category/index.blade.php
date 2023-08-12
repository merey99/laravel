@extends('layouts.admin')
@section('title', 'Category')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <!-- Default box -->
        <div class="card">

            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 10%">
                            #
                        </th>
                        <th style="width: 30%">
                            Category Name
                        </th>
                        <th style="width: 30%">
                            Avatar
                        </th>
                        <th style="width: 30%">

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                        <td>
                            <a>
                                {{$category->name}}
                            </a>
                            <br/>
                            <small>
                                {{$category->created_at}}
                            </small>
                        </td>
                            <td>
                                <img src="{{asset('storage/category/'.$category->image)}}" style="width:50px" alt="">
                            </td>
                            <td class="text-right">
                                <a href="{{route('admin.category.show',$category)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                <a href="{{route('admin.category.edit',$category)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <form action="{{route('admin.category.destroy',$category)}}" style="display: contents" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger btn"> <i class="fas fa-trash"></i></button>
                                </form>
                            </td>

                    </tr>
                        @empty
                        <tr class="text-center">
                            <td>no</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
@endsection
