<x-header />


<div class="breadcrumb-section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-text">
<h2>Our Rooms</h2>
<div class="bt-option">
<a href="{{route('index')}}">Home</a>
<span>Rooms</span>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="rooms-section spad">
<div class="container">
<div class="row">
@foreach($room as $data)
<div class="col-lg-4 col-md-6">
<div class="room-item">
    @if(File::exists($data->image))
    <img src="{{url('/')}}/{{$data->image}}" alt="">
   @else
   No Image Found
   @endif
<div class="ri-text">
<h4>{{Str::limit($data->name,18)}}</h4>
<h3>₹{{number_format($data->price)}}<span>/Pernight</span></h3>
<table>
<tbody>
<tr>
<td class="r-o">Size:</td>
<td>{{$data->size}}</td>
</tr>
<tr>
<td class="r-o">Capacity:</td>
<td>{{$data->capacity}}</td>
</tr>
<tr>
<td class="r-o">Bed:</td>
<td>{{$data->bed}}</td>
</tr>
<tr>
<td class="r-o">Services:</td>
<td>
    <!-- json_decode($data->service)[1] -->
     @for($i = 0; $i <= 1; $i++)
    @if($i),@endif  {{App\Models\Service::getServiceDetail(json_decode($data->service)[$i])}} 
    @endfor 
  
</td>
</tr>
</tbody>
</table>
<a href="{{route('roomsdetail',$data->slug)}}" class="primary-btn">More Details</a>
</div>
</div>
</div>
@endforeach




<div class="col-lg-12">
<div class="room-pagination">
<a href="#">1</a>
<a href="#">2</a>
<a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</section>


<x-footer />