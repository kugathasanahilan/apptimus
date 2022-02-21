@include('layouts.master')
<div class="container">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if (session('messages'))
    <div class="alert alert-danger">
        {{ session('messages') }}
    </div>
@endif
<!-- @if($errors->any())
@foreach($errors->all() as $err)
<li style="color:red;">{{$err}}</li>
@endforeach
@endif -->
<h1>Create User</h1>
<form action="{{route('customers.store')}}" method="post" >
    @csrf
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">First Name</span>
  <input type="text" class="form-control" placeholder="First Name" name="first_name" aria-label="firstname" aria-describedby="basic-addon1">
</div>
<p style="color:red">
{{$errors->has('first_name') ? $errors->first('first_name') : ''}}   
</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Last Name</span>
  <input type="text" class="form-control" placeholder="Last Name" name="last_name" aria-label="lastname" aria-describedby="basic-addon1">
</div>
<p style="color:red">
{{$errors->has('last_name') ? $errors->first('last_name') : ''}}
</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Address</span>
  <textarea class="form-control" placeholder="Address" aria-label="address" name="address" aria-describedby="basic-addon1"></textarea>
</div>
<p style="color:red">
{{$errors->has('address') ? $errors->first('address') : ''}}
</p>
<input type="submit" value="submit" class="btn btn-success float-end">
</form>
  </div>