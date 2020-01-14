@extends('layouts.app')
@section('content')


<div class="page-header">
  <h4>Invoices</h4>
  <a href="/invoice/create" class="btn btn-sm btn-warning"> <i class="fa fa-plus"></i> Add new</a>
  </div>

<div class="container" style="margin-left: -10px;">
<div class="row">
	<div class="col-sm-12">
		<table class="table table-condensed table-striped">
			<thead>
				<tr>
					<th>Date</th>
					<th>Customer</th>
					<th>School</th>
					<th>Class</th>
					<th>Amount</th>
					<th>Balance</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($invoice as $invoice)
				<tr>
					<td>{{date_format(date_create($invoice->date.' '.$invoice->time),'dS M Y h:i:s a')}}</td>
					<td>{{$invoice->student->name}}</td>
					<td>{{$invoice->student->school->name}}</td>
					<td>{{$invoice->student->class}}</td>
					<td>{{number_format($invoice->amount,2)}}</td>
					<td>{{number_format($invoice->balance,2)}}</td>
					<td><a href="/invoice/{{$invoice->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> view</a></td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
		{{$invoice->links()}}
	</div>
</div>
</div>

@endsection
