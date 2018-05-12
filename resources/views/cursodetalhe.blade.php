<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <link href="{{ URL::asset('css/curso.css') }}" rel="stylesheet">
   
	<title>Cursos</title>
</head>
<body>
 <header>
 <div class="container-fluid">
 	<div class="row">
 	<a href="{{url('/')}}">	
	  <i class="fa fa-arrow-left float-left arrow" aria-hidden="true"></i>
	</a>
    </div>  
  </div>
 </header>
 <section>
 	<div class="container">
 		<div class="row ">
 		 @foreach($courses as $course)	
 		  <div class="box-big col-centered">	
 		  	    <h4>{{$course->title}}</h4>
 		  	    <p class="description">{{$course->description}}</p>
		 		<p> <i class="fa fa-calendar float-left" aria-hidden="true"></i>{{date('d \d\e F  \d\e Y', strtotime($course->start)) }}</p>
		 		
		 		<p>
		 			<i class="fa fa-clock-o float-left" aria-hidden="true"></i>
		 			{{date('\d\e  h:i:s \a\s h:i:s', strtotime($course->start)) }}
		 		</p>
		 	
		 		<p>
		 			<i class="fa fa-map-marker float-left" aria-hidden="true"></i>
		 			<a href="https://maps.google.com/maps?q={{$course->street}}">{{$course->street}}</a>
		 		</p>

		 		<p><i class="fa fa-money float-left" aria-hidden="true"></i>{{$course->price}}
		 		</p>

		 		<p><i class="fa fa-pencil float-left" aria-hidden="true"></i>
		 			{{$course->category}}
		 		</p>

		 		<p>
		 			<img class="rounded-circle" height="50" src="{{$course->avatar}}">
		 			{{$course->name}}
		 		</p>
		 		<div class="row">
		 			<button class="bt_insc"> INSCRIÇÃO</button>
		 		</div>	
	 	   </div>
	 	   @endforeach
	 	  			
 	   </div>
 	</div>

 </section>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>