@extends('layouts.default')
@section('content')
<br>
@include('layouts.errors')

<center>
  @if(Session::has('massage2'))
<p class="alert alert-success">{{Session::get('massage2')}}</p>
@endif
  <h2>Student Form</h2>
</center>

<form method="post" action="{{ action('StudentsController@store') }}" class="form">
<input type="hidden" name="_token" value="{{ csrf_token() }}">    
          <div class="form-group">      
              <label for="first_name">First Name:</label><br/><br/>  
              <input type="text" class="form-control" name="first_name" /><br/><br/>  
          </div>  
<div class="form-group">      
<label for="first_name">Last Name:</label><br/><br/>  
              <input type="text" class="form-control" name="last_name"/><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="gender">Gender:</label><br/><br/>  
              <input type="text" class="form-control" name="gender"/><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="qualifications">Qualifications:</label><br/><br/>  
              <input type="text" class="form-control" name="qualifications"/><br/><br/>  
          </div>  
<br/>  
<button type="submit" class="btn btn-success" >Insert</button>  
</form> <br><br>

@endsection