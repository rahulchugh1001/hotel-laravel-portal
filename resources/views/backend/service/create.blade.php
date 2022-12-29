@extends('backend.layouts.app') 

@section('content')

<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add {{$nav}}</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add {{$nav}}</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('service_list')}}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back to Manage {{$nav}}</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

 <div class="row">
              <div class="col-12 col-lg-12">
                <div class="card shadow-sm border-0">
                  <form class="customer_form"  method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                      <h5 class="mb-0">Add {{$nav}}</h5>
                      <hr>
                      <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">{{$nav}} INFORMATION</h6>
                        </div>
                        <div class="card-body">
                          <div class="row g-3">
                            
							 <link type="image/png" sizes="96x96" rel="icon" href=".../icons8-dinner-96.png">
                             <div class="col-6 form-group">
                                <label class="form-label">Name <span>*</span></label>
                                <input type="text" name="name" placeholder="Name" id="name" class="form-control 
                                @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            </div>
                          
                             <div class="col-6 form-group">
                              <label class="form-label">icon <a target="_blank" href="https://fontawesome.com/search?m=free&o=r">icon code link</a> <span>*</span></label>
                              <input type="text" name="icon" id="icon" class="form-control 
                              @error('icon') is-invalid @enderror" placeholder="fa-solid fa-location-dot" value="{{ old('icon') }}">
                            </div> 
                                                     
                            <div class="col-12 form-group">
                                <label class="form-label">Short Description <span>*</span></label>
                                <input type="text" name="short_description" placeholder="Short Description" id="short_description" class="form-control
                                 @error('short_description') is-invalid @enderror" value="{{ old('short_description') }}">
                            </div>

                            <div class="col-12 form-group">
                                <label>Status</label><br>
                                <label class="switch">
                                  <input type="checkbox" name="status" value="1" checked>
                                  <span class="slider round"></span>
                                </label>
                            </div>
                            
                           

                          </div>
                        </div>
                      </div>
                      <div class="text-end">
                        <button type="submit" class="btn btn-success px-4"><b>+</b> Submit</button>
                      </div>
                </form>
                </div>
              </div>
              
            </div>
  
<script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile > img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#add-pencil-icon").change(function() {
            readURL(this);
        });
    </script>
 <style type="text/css">
        .store-logo.profile {
            position: relative;
        }


 .box-for-image .store-logo.profile {
    height: 110px;
    width: 110px;
    overflow-y: hidden;
}

 .box-for-image input[type="text"] {
    background: #fff;
    margin-bottom: 0;
}

 .box-for-image .form-field-here {
    position: relative;
    margin-top: 0;
}

        
        .form-field-here input.edit-manufacture-icon {
            position: absolute;
            height: 30px;
            width: 30px;
            border-radius: 50%;
            bottom: 5px;
            left: 5px;
            cursor: pointer;
        }
        
        .form-field-here input.edit-manufacture-icon:focus {
            outline: none;
        }
        
        .form-field-here input.edit-manufacture-icon:before {
            content: "";
            background: green;
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
        }
        
        .form-field-here input.edit-manufacture-icon:after {
            content: "\f040";
            font-family: FontAwesome;
            color: #fff;
            top: 0;
            left: 0;
            position: absolute;
            line-height: 30px;
            text-align: center;
            width: 100%;
        }

.form-field-here input.btn-pencil-icon {
    position: absolute;
    height: 30px;
    width: 30px;
    border-radius: 50%;
    bottom: 5px;
    left: 5px;
    cursor: pointer;
}

.form-field-here input.btn-pencil-icon:before {
    content: "";
    background: green;
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
}

.form-field-here input.btn-pencil-icon:after {
    content: "\f4cb";
    font-family: 'bootstrap-icons';
    color: #fff;
    top: 0;
    left: 0;
    position: absolute;
    line-height: 30px;
    text-align: center;
    width: 100%;
}
input:focus {
    outline: none !important;
}
.box-for-image.main-image {
    position: relative;
}
.form-field-here.add-product-image label.input-label {
    position: static;
    margin-bottom: 5px;
}

.form-field-here.add-product-image input.btn-pencil-icon {
    padding: 0;
    margin: 0;
}
.box-for-image .store-logo.profile img {
    width: 100%;    
}

.filter-blocks.multi-fields-set .input-filter.col-sm-2 {
    padding-right: 0;
}

 </style>  


@endsection