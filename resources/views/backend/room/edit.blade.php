@extends('backend.layouts.app') 

@section('content')
<style type="text/css">


.custom-select{
    width: 300px;
    height: 120px;
}
</style>
<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Edit {{$nav}}</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit {{$nav}}</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('room_list')}}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back to Manage {{$nav}}</a>
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
                      <h5 class="mb-0">Edit {{$nav}}</h5>
                      <hr>
                      <div class="card shadow-none border">
                        <div class="card-header">
                          <h6 class="mb-0">{{$nav}} INFORMATION</h6>
                        </div>
                        <div class="card-body">
                          <div class="row g-3">
                            <div class="col-6 form-group">
                                            <div class="box-for-image  main-image">
                                                <div class="form-field-here add-product-image">
                                                    <label class="input-label">Banner Image - (Max image size 1MB, 
                                                        Approx: 770px x 440px)
                                                    <span style="color: red">*</span></label> 
                                                    <div class="store-logo profile">
                                @if(File::exists("$data->image"))
                                <img src="{{url('/')}}/{{$data->image}}">
                                @else
                                <img src="{{asset('assets/images/upload-image.jpg')}}">
                                @endif
                                                    </div>
                                                    <input type="file" id="add-pencil-icon" name="image" class="btn-pencil-icon">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-6 form-group">
                                            <div class="box-for-image  main-image">
                                                <div class="form-field-here add-product-image">
                                                    <label class="input-label">Background Image - (Max image size 1MB, 
                                                        Approx: 470px x 600px)
                                                    <span style="color: red">*</span></label> 
                                                    <div class="store-logo profile2">
                                @if(File::exists("$data->background_image"))
                                <img src="{{url('/')}}/{{$data->background_image}}">
                                @else
                                <img src="{{asset('assets/images/upload-image.jpg')}}">
                                @endif
                                                    </div>
                                                    <input type="file" id="add-pencil-icon2" name="background_image" class="btn-pencil-icon">
                                                </div>
                                            </div>
                                        </div>
                                     
                             
                             
                             <div class="col-6 form-group">
                                <label class="form-label">name <span>*</span></label>
                                <input type="text" name="name" id="name" class="form-control 
                                @error('name') is-invalid @enderror" value="{{ $data->name }}">
                            </div>
                            <div class="col-6 form-group">
                                <label class="form-label">slug <span>*</span></label>
                                <input type="text" name="slug" id="slug" class="form-control 
                                @error('slug') is-invalid @enderror" value="{{ $data->slug }}">
                            </div>
                            <div class="col-6 form-group">
                                <label class="form-label">size <span>*</span></label>
                                <input type="text" name="size" id="size" class="form-control 
                                @error('size') is-invalid @enderror" value="{{ $data->size }}">
                            </div>
                            <div class="col-6 form-group">
                                <label class="form-label">capacity <span>*</span></label>
                                <input type="text" name="capacity" id="capacity" class="form-control 
                                @error('capacity') is-invalid @enderror" value="{{ $data->capacity }}">
                            </div>
                            <div class="col-6 form-group">
                                <label class="form-label">bed <span>*</span></label>
                                <input type="text" name="bed" id="bed" class="form-control 
                                @error('bed') is-invalid @enderror" value="{{ $data->bed }}">
                            </div>
                              <div class="col-6 form-group">
                                <label class="form-label">Price <span>*</span></label>
                                <input type="number" name="price" id="price" class="form-control 
                                @error('price') is-invalid @enderror" value="{{ $data->price }}">
                            </div>
                            <div class="col-6 form-group">
                                <label class="form-label">Total Rooms <span>*</span></label>
                                <input type="number" name="total_rooms" id="total_rooms" class="form-control 
                                @error('total_rooms') is-invalid @enderror" value="{{ $data->total_rooms }}">
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label">Description <span>*</span></label>
                               <!--  <input type="text" name="description" id="description" class="form-control 
                                @error('description') is-invalid @enderror" value="{{ $data->description }}"> -->
                                 <textarea name="description">
                                    {{ $data->description }}
                                </textarea>
                            </div>
                           
                          
                             <div class="col-12 form-group">
                              <label class="form-label">Service <span>*</span></label>
                              <div id="output"></div>
                              <select data-placeholder="Choose Service ..." name="service[]" multiple class="chosen-select custom-select">
                                @foreach($service as $service)
                                <option @if(in_array($service->id,json_decode($data->service))) selected @endif value="{{$service->id}}">{{ucwords($service->name)}}</option>
                                @endforeach
                              </select>
                            </div> 

                              <div class="col-12 form-group">
                                <label>Status</label><br>
                                <label class="switch">
                                  <input type="checkbox" name="status" value="1" @if($data->status == 1) checked @endif>
                                  <span class="slider round"></span>
                                </label>
                            </div>
                                                     
                            
                            
                           

                          </div>
                        </div>
                      </div>
                      <div class="text-end">
                        <button type="submit" class="btn btn-success px-4"><b>+</b> Update</button>
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



          function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile2 > img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#add-pencil-icon2").change(function() {
            readURL2(this);
        });
    </script>
        <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace("description");

</script>
 <style type="text/css">
        .store-logo.profile {
            position: relative;
        }

        .store-logo.profile2 {
            position: relative;
        }


 .box-for-image .store-logo.profile {
    height: 110px;
    width: 110px;
    overflow-y: hidden;
}
 .box-for-image .store-logo.profile2 {
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

.box-for-image .store-logo.profile2 img {
    width: 100%;    
}

.filter-blocks.multi-fields-set .input-filter.col-sm-2 {
    padding-right: 0;
}

 </style>  


@endsection