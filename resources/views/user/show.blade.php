@extends('layouts.app')
@section('content')


<div class="page-header">
  <h4>User</h4>
  </div>

<div class="container" style="margin-left: -10px;">
<div class="row">
  <div class="col-sm-6">
  	<table class="table table-condensed table-striped table-bordered">
  		<tbody>
  			<tr>
  				<th>Name</th>
  				<td>{{$user->name}}</td>
  			</tr>
  			<tr>
  				<th>Email</th>
  				<td>{{$user->email}}</td>
  			</tr>
  		</tbody>
  	</table>
  	<form action="/user/{{$user->id}}" method="POST">
  		{{csrf_field()}}
  		<input type="hidden" name="method" value="DELETE">
  		<div class="btn btn-group">
  			<a href="/user/{{$user->id}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit</a>
  			<button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete </button>
  		</div>
  	</form>
  </div>
</div>
</div>
@endsection
