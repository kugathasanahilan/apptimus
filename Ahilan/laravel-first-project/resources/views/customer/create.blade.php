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
<h1>Create User</h1>
<form action="{{route('customers.store')}}" method="post" >
    @csrf
    <label for="validationServer03" class="form-label">First Name</label>
    <input type="text" class="form-control @if($errors->has('first_name'))is-invalid @endif" name="first_name" id="validationServer03" value="{{old('first_name')}}" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
    @error('first_name')
    {{$message}}
    @enderror
    </div>
<label for="validationServer03" class="form-label">Last Name</label>
    <input type="text" class="form-control  @if($errors->has('last_name'))is-invalid @endif" name="last_name" id="validationServer03" aria-describedby="validationServer03Feedback" value="{{old('last_name')}}" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
@error('last_name')
{{$message}}
@enderror
</div>
<label for="validationServer03" class="form-label">Address</label>
    <input type="text" class="form-control  @if($errors->has('address'))is-invalid @endif" name="address" id="validationServer03" aria-describedby="validationServer03Feedback" value="{{old('address')}}" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
@error('address')
{{$message}}
@enderror
</div>
<br>
<input type="submit" value="submit" class="btn btn-success float-end">
</form>
