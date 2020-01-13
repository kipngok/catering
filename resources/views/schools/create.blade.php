@extends('layouts.app')
@section('content')


<div class="container" style="margin-left: -10px;">
	<div >
	<h4>New Schools</h4>
	</div>
	
<div class="card" style="border-top-color:#6da252; max-width: 400px;  ">
   <div class="card-body" style="margin-left: -40%;">
   <article class="card-body mx-auto" style="max-width: 250px;">
	<form action="{{ route('schools.create') }}" method="POST">
		<input type="hidden" name="_method" value="PUT">

@csrf


		  
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="School Name" type="text" required="school name">
    </div> <!-- form-group// -->
      <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-address-card-o" aria-hidden="true"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="School Address" type="text" >
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Email address" type="email">
    </div>
                                     
    <div class="form-group" style="margin-left: 20px">
    	<div class="row" >
    		<div> 
    			<button type="submit" style="background-color: #6da252;"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
    		</div>
    
    <!--  <div style="margin-left: 5px">
     	<button type="clear"><i class="fa fa-times" aria-hidden="true"></i>Cancel</button>
     </div> -->
    
    	</div>
      
    </div>      
                                                                     
</form>
</article>
   </div> 
   
  </div>
</div>
@endsection