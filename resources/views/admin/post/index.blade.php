@extends('layouts.admin')
@section('title', 'Категории')
@section('content')
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif

            <div class="card">

                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th scope="col" style="width: 15%;">Title</th>
                            <th scope="col" style="width: 15%;">Categories</th>
                            <th scope="col" style="width: 15%">Content</th>
                            <th scope="col" style="width: 15%">Author</th>
                            <th scope="col" style="width: 15%">Image</th>
                            <th scope="col" style="width: 25%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->category->name}}</td>
                                <td>{{$post->content}}</td>
                                <td>{{$post->author}}</td>
                                <td><img src="{{asset('storage/post/'.$post->image)}}" width="80" alt=""></td>
                                <td>
                                    <a href="{{route('admin.post.show', $post)}}" class="btn btn-primary"><i class="fas fa-eye"></i> </a>
                                    <a href="{{route('admin.post.edit', $post)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <form action="{{route('admin.post.destroy', $post)}}" style="display: contents" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>

                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th>No posts</th>
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
