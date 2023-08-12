@extends('layouts.admin')
@section('title', 'Add User')
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
                        <th style="width: 15%">
                            Name
                        </th>
                        <th style="width: 15%">
                            Last Name
                        </th>
                        <th style="width: 15%">
                            Email
                        </th>
                        <th style="width: 15%">
                            Avatar
                        </th>
                        <th style="width: 20%">
                            Role
                        </th>
                        <th style="width: 30%">

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>
                                {{$user->name}}
                                <br/>
                                <small>
                                    {{$user->created_at}}
                                </small>
                            </td>

                            <td>
                                {{$user->lastname}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                <img src="{{asset('storage/avatar/'.$user->avatar)}}" style="width:50px" alt="no">
                            </td>

                            <td>
                                student
                            </td>
                            <td class="text-right">
                                <a href="{{route('admin.user.show',$user)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                <a href="{{route('admin.user.edit',$user)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <form action="{{route('admin.user.destroy',$user)}}" style="display: contents" method="post">
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
