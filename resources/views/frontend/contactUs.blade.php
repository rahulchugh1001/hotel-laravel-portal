<x-header />
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-text">
<h2>{{$about->name}}</h2>
<p>{{$about->description}}</p>
<table>
<tbody>
<tr>
<th >Address:</th>
<td class="c-o">{{$about->address}}</td>
</tr>
<tr>
<th >Phone:</th>
<td class="c-o">{{$about->phone}}</td>
</tr>
<tr>
<th>Email:</th>
<td class="c-o "><a style="color: #707079;" href="mailto:info@spresidence.com">{{$about->email}}</a></td>
</tr>

</tbody>
</table>
</div>
</div>
<div class="col-lg-7 offset-lg-1">
<form action="{{route('formSubmit')}}" method="post" class="contact-form" enctype="multipart/form-data">
    @csrf
<div class="row">
<div class="col-lg-12">
<input type="text" name="name" placeholder="Your Name">
</div>
<div class="col-lg-12">
<input type="email" name="email" placeholder="Your Email">
</div>
<div class="col-lg-12">
<input type="text" name="phone" placeholder="Your Phone">
</div>
<div class="col-lg-12">
<textarea placeholder="Your Message" name = "message"></textarea>
<button type="submit">Submit Now</button>
</div>
</div>
</form>
</div>
</div>
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.625288006201!2d77.65188941505913!3d27.574137482847284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15d98ad6b2d7dfc9!2s7JVVHMF3%2BMJ4!5e0!3m2!1sen!2sin!4v1673766697347!5m2!1sen!2sin" height="470" style="border:0;" allowfullscreen=""></iframe>
</div>
</div>
</section>

<x-footer />