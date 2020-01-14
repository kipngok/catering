@extends('layouts.app')
@section('content')


<div class="page-header">
  <h4>Schools</h4>
  <a href="{{ route('schools.create') }}" class="btn btn-sm btn-warning"> <i class="fa fa-plus"></i> Add new</a>
  </div>

<div class="container" style="margin-left: -10px;">
<div class="row">
	<div class="col-sm-12">
		<table class="table table-condensed table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Email</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($schools as $school)
				<tr>
					<td>{{$school->name}}</td>
					<td>{{$school->address}}</td>
					<td>{{$school->email}}</td>
					<td><a href="/school/{{$school->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> view</a></td>
				</tr>
				@endforeach

			</tbody>
		</table>
						{{$schools->links()}}
	</div>
</div>
</div>

@endsection
