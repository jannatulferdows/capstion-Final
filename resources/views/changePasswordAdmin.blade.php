@extends('layouts.app')
@section('content')
<div class="col-3 align-items: center">
<form method="POST" action="/changePasswordAdmin">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1"><h3>New Password</h3></label>
    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1"  placeholder="Enter password" name="password">
    
    @if ($errors->has('password'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h3>Repeat Password</h3></label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Enter password again" name="password_confirmation">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection