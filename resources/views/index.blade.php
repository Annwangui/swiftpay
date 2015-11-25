  <!DOCTYPE html>
<html>
<head>
	<title>Swift Pay</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <div class="rotate">
  <script type="text/javascript">
<!-->
var image1=new Image()
image1.src="assets/images/counters.jpg"
var image2=new Image()
image2.src="assets/images/que.jpg"
var image3=new Image()
image3.src="assets/images/grocery.jpg"

//-->	
</script>
</div>
</head>
<body>
	<div id="ann">
	
	<header>
        <img src="assets/images/logo.png" alt="...">
	 <a href="#contact">CONTACT US</a>
	 <a href="#work">HOW IT WORKS</a>
	 <a href="#about">ABOUT US</a>
    </header>
    </div>
<span>
	<div id="joan">
  <div class="about us" id="about"><div class="about">

<img src="img.jpg" name="slide"></span>

<script type="text/javascript">

	<!--
	var step=1
	function slideit(){
		document.images.slide.src=eval("image" + step + ".src")
		if(step<3)
			step++
		else
			step=1
		setTimeout("slideit()",2500)

	}
	slideit()
	
	//-->
</script>

</div>

<div id="slider1"><h3>SAY NO TO QUEUING</h3>
</div>
<div id="slider"><p>SCAN. PAY. DONE</p>
</div>

   <div class="one">
   <h3>Create your own Experience</h3>
<p>Swiftpay is a mobile application that ensures a boost in customer satsifaction. <br> It makes your shopping experience faster,more efficient and fun.Say goodbye to the long queues at the till.</p>
 
  </div>

  <!--start work-->
  <div class="how it works" id="work"><div class="work">
        <h3>How it Works</h3>
<div class="ab">
<div class="a">

   <img src="assets/images/scan galaxys.png" alt="..."><h5>SCAN</h5><br>
   <p>Scan as you bag your items</p>
</div>
  
 
<div class="b">
   <img src="assets/images/pay galaxys.png" alt="..."><h5>PAY</h5><br>
   <p>Pay via your phone.</p>
</div> 
</div>


<div class="c">
   <img src="assets/images/done galaxys.png" alt="..."><h5>DONE</h5><br><p>You are good to go</p>
</div> 

</div>
<!--end work-->
<div class="contact us" id="contact">
<div class="contact">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.793401502044!2d36.7885760143254!3d-1.2987187360051187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f109996536c39%3A0x4eb6d6e1e16b4153!2siHub!5e0!3m2!1sen!2ske!4v1445925836067" width="500" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>

  <div class="form">
<h3>Contact Us</h3>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'index_store', 'class' => 'form')) !!}

<div class="name">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}         
</div>

<div class="email">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required',

              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="message">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="submit">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
</div>
@if(Session::has('message'))
    <div class="alert">
      {{Session::get('message')}}
    </div>
@endif
{!! Form::close() !!}
</div>
</div>

  
<!--end contact-->
<br clear ="all">
<footer>
<a href="https://play.google.com/store?hl=en"><img src="assets/images/g.logo.png"></a>

<div class="end">
 &copyright;2015 swiftpay<br>
 Private policy Terms of use
 </div>
</footer>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>