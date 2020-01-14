@extends('layouts.app')
@section('content')
<div class="page-header">
  <h4>Create invoice</h4>
  </div>
<div class="container" style="margin-left: -10px;">
<div class="row">
  <div class="col-sm-6">
    <form action="/invoice" method="POST">
      {{csrf_field()}}
      id','student_id','date','time','lunch','tea','amount','balance','narrative','user_id'
      <div class="form-group">
        <label>Student</label>
       <select class="form-control" name="invoice_mode">
         <option value="{{$student->id}}">{{$student->name}}</option>
       </select>
      </div>

      <div class="form-group">
        <label>Date</label>
        <input type="date" name="name" class="form-control" value="{{date('Y-m-d')}}">
      </div>
      <div class="form-group">
        <label>Time</label>
        <input type="time" name="name" class="form-control" value="{{date('H:i')}}">
      </div>
      <div class="form-group">
        <label>Narrative</label>
        <input type="text" name="narrative" class="form-control">
      </div>
      

      <div class="form-group">
        <label>Lunch</label>
        <input type="number" name="lunch" class="form-control" id="lunch">
      </div>

      <div class="form-group">
        <label>Tea</label>
        <input type="number" name="tea" class="form-control" id="tea">
      </div>

      <div class="form-group">
        <label>Amount</label>
        <input type="number" name="amount" class="form-control" readonly="readonly" id="amount">
      </div>

      <div class="form-group">
        <label>invoice mode </label>
       <select class="form-control" name="invoice_mode">
         <option>Cash</option>
         <option>Mobile Money</option>
         <option>Cheque</option>
         <option>Card</option>
       </select>
      </div>
      <div class="form-group">
        <label>Transaction Code</label>
        <input type="text" name="code" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-sm btn-success">Save</button>
      </div>
    </form>

  </div>
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
  var lunch=$('#lunch').val();
  var tea=$('#tea').val();
  var amount;

  $( "#lunch" ).change(function() {
 calculateAmount();
});
  $( "#tea" ).change(function() {
 calculateAmount();
});

function calculateAmount(){
  amount=lunch+tea;
  $('#amount').val(amount);
}
</script>
@endsection