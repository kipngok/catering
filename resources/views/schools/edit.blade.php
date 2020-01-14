@extends('layouts.app')
@section('content')


<div class="page-header">
  <h4>Edit school</h4>
  </div>

<div class="container" style="margin-left: -10px;">
<div class="row">
  <div class="col-sm-6">
    <form action="/school/{{$school->id}}" method="POST">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="PUT">
      <div class="form-group">
        <label>School name</label>
        <input type="text" name="name" class="form-control" value="{{$school->name}}">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-sm btn-success">Save</button>
      </div>
    </form>

  </div>
</div>
</div>
@endsection
