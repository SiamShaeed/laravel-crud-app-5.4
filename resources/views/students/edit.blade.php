@extends('layouts.default')
@section('content')
<br>

@include('layouts.errors')

<center>
  @if(Session::has('massage3'))
<p class="alert alert-danger">{{Session::get('massage3')}}</p>
@endif
  <h2>Edit Form</h2>
</center>

<form method="post" action="{{ action('StudentsController@update',$student->id )}}" class="form">
<input type="hidden" name="_token" value="{{ csrf_token() }}">    
          <div class="form-group">      
              <label for="first_name">First Name:</label><br/><br/>  
              <input type="text" class="form-control" name="first_name" value="{{$student->first_name}}" /><br/><br/>  
          </div>  
<div class="form-group">      
<label for="last_name">Last Name:</label><br/><br/>  
              <input type="text" class="form-control" name="last_name" value="{{$student->last_name}}" /><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="gender">Gender:</label><br/><br/>  
              <input type="text" class="form-control" name="gender"
              value="{{$student->gender}}"/><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="qualifications">Qualifications:</label><br/><br/>  
              <input type="text" class="form-control" name="qualifications" value="{{$student->qualifications}}" /><br/><br/>  
          </div>  
<br/>  
<button type="submit" class="btn btn-success" >Update</button>
</form> <br><br>

@endsection