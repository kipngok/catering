@extends('layouts.app')
@section('content')


<div class="container" style="margin-left: -10px;"  >
	<div class="row">
		<div  style="margin-left: 10px;" >
			<h4>Schools</h4>
		</div>
		<div  style="margin-left: 25px;">
	<button onclick="window.location.href = '{{ route('schools.create') }}';" style="background-color: #6da252;"><i class="fa fa-plus"></i>Add New</button>
		</div>
		<div  style="margin-left: 10px;">
			<button><i class="fa fa-download" aria-hidden="true"></i>Import</button>
		</div>
		<div  style="margin-left: 10px;">
			<button><i class="fa fa-upload" aria-hidden="true"></i>Export</button>
		</div>
	</div>
<div class="card" style="border-top-color:#6da252;">
   <div class="card-body">
   	<h1>r</h1>
   	<h3>t</h3>
   </div> 
   
  </div>
</div>

@endsection
