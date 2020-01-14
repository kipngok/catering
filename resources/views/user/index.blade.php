@extends('layouts.app')
@section('content')


<div class="page-header">
  <h4>Users</h4>
  <a href="/user/create" class="btn btn-sm btn-warning"> <i class="fa fa-plus"></i> Add new</a>
  </div>

<div class="container" style="margin-left: -10px;">
<div class="row">
	<div class="col-sm-12">
		<table class="table table-condensed table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td><a href="/user/{{$user->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> view</a></td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
		{{$users->links()}}
	</div>
</div>
</div>
@endsection
