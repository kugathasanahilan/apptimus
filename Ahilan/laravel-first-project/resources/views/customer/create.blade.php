@include('layouts.master')
<div class="container">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h1>Create User</h1>
<form action="{{route('customers.store')}}" method="post" >
    @csrf
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">First Name</span>
  <input type="text" class="form-control" placeholder="First Name" name="fname" aria-label="firstname" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Last Name</span>
  <input type="text" class="form-control" placeholder="Last Name" name="lname" aria-label="lastname" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Address</span>
  <textarea class="form-control" placeholder="Address" aria-label="address" name="address" aria-describedby="basic-addon1"></textarea>
</div>
<input type="submit" value="submit" class="btn btn-success float-end">
</form>
  </div>