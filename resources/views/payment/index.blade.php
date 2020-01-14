@extends('layouts.app')
@section('content')


<div class="page-header">
  <h4>Payments</h4>
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
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($payments as $payment)
				<tr>
					<td>{{date_format(date_create($payment->date.' '.$payment->time),'dS M Y h:i:s a')}}</td>
					<td>{{$payment->student->name}}</td>
					<td>{{$payment->student->school->name}}</td>
					<td>{{$payment->student->class}}</td>
					<td>{{number_format($payment->amount,2)}}</td>
					<td><a href="/payment/{{$payment->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> view</a></td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
		{{$payments->links()}}
	</div>
</div>
</div>

@endsection
