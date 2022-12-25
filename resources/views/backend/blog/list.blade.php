@extends('backend.layouts.app')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">{{$nav}} List</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{$nav}} List</li>
                    
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('blog_add')}}" class="btn btn-success"><b>+</b> Add {{$nav}}</a>
            </div>
            
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">{{$nav}} List</h5>
                <!--<form class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                    <input class="form-control ps-5" type="text" placeholder="search">
                </form>-->
            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle" id="example">
                    <thead class="table-secondary">
                        <tr>
                            <th>S.no</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $index => $value)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td></td>
                            <td>{{Str::limit($value->title,20)}}</td>
                            <td>{{$value->description}}</td>                            
                            <td>{{$value->status}}</td>                            
                            <td>
                                <a href="{{route('blog_edit',encrypt($value->id))}}"><i class="bi bi-pencil-fill"></i></a>
                            
                                <a class="text-danger" data-bs-toggle="modal" data-bs-target="#delete{{$index}}" 
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" category="" 
                                    data-bs-original-category="Delete" aria-label="Delete">
                                    <i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>


                        <div class="modal fade alert-modal" id="delete{{$index}}" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header close-icon">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="alert-body">
                                        <form action="{{route('blog_delete',encrypt($value->id))}}">
                                            @csrf
                                        <i class="bi bi-exclamation-circle"></i>
                                        <h5 class="modal-category">Alert</h5>
                                        <p>Are You Sure Want to Delete this {{$nav}}
                                        </p>
                                        <div class="buttonss">
                                            <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">No</button>
                                            <button type="submit" class="btn btn-danger px-4">Yes</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>





@endsection
