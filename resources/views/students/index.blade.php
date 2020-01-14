@extends('layouts.app')
@section('content')


<div class="page-header">
  <h4>Students</h4>
  <a href="/student/create" class="btn btn-sm btn-warning"> <i class="fa fa-plus"></i> Add new</a>
  </div>

<div class="container" style="margin-left: -10px;">
<div class="row">
	<div class="col-sm-12">
		<table class="table table-condensed table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>School</th>
					<th>Class</th>
					<th>Status</th>
					<th>Parent name</th>
					<th>Phone number</th>
					<th>Balance</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($students as $student)
				<tr>
					<td>{{$student->name}}</td>
					<td>{{$student->school->name}}</td>
					<td>{{$student->class}}</td>
					<td>{{$student->status}}</td>
					<td>{{$student->parent_name}}</td>
					<td>{{$student->parent_phone}}</td>
					<td>{{number_format($student->balance,2)}}</td>
					<td><a href="/student/{{$student->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> view</a></td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
		{{$students->links()}}
	</div>
</div>
</div>
@endsection
