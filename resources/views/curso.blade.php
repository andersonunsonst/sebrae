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

 	  <div class="col-md-4">
 	  	<h4 class="cursos">Cursos </h4>
 	  </div>	
 	  <div class="search-bar col-md-4">	
      	<span class="icon"><i class="fa fa-search"></i></span>
      	<input type="search" id="search" placeholder="Pesquisar" />
      </div>	
    </div>  
  </div>
 </header>
 <section>
 	<div class="container">
 		<div class="row">
 		 @foreach($courses as $course)	
 		  <div class="box">	
 		  	
		 		<p><a href="{{url('curso/detalhe', [$course->id_course])}}">{{$course->category}}</a></p>
		 		<h5><a href="{{url('curso/detalhe', [$course->id_course])}}">{{$course->title}}</a></h5>
		 		<p><a href="{{url('curso/detalhe', [$course->id_course])}}">{{$course->city}}</a></p>
		 		<hr>
		 		<p><a href="{{url('curso/detalhe', [$course->id_course])}}">{{date('d \d\e F  \d\e Y', strtotime($course->start)) }}</a>
		          <a href="{{url('curso/detalhe', [$course->id_course])}}">
		          	<i class="fa fa-calendar float-right" aria-hidden="true"></i>
		          </a>
		 		</p>
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