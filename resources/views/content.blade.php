@extends('master')
@section('header')
    <h1>{{ ucfirst($active) }}</h1> 
    <p>This course is about enterprise level commercial quality applications. It will cover responsive 
user interface design using Bootstrap. It will also cover web components for data grid and 
reports. It will address the design and implementation of enterprise application features like 
internationalization and accessibility. Students will experience the design and implementation 
of business process automation. It will also cover web services including creating and 
consuming SOAP based and RESTful web service
</p> 
<input type="button" class="btn btn-success" value="The Useless Button">
  </div>
@endsection

@section('content')
	<div>
		<h1>{{ $page_title }}</h1>
	</div>
	<div>
		@yield('actual_content')
	</div>
@endsection