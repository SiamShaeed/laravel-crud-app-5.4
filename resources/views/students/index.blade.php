@extends('layouts.default')
@section('content')
<br>
<center>

@if(Session::has('massage'))
<p class="alert alert-danger">{{Session::get('massage')}}</p>
@endif

@if(Session::has('massage2'))
<p class="alert alert-success">{{Session::get('massage2')}}</p>
@endif


@if(Session::has('massage3'))
<p class="alert alert-info">{{Session::get('massage3')}}</p>
@endif



<h2>Student List</h2><br>
<table class="table table-hover table-bordered">
  <thead>  
    <tr class="alert alert-info">
      <td>SL#</td>  
      <td>Name</td>   
      <td>Gender</td>  
      <td>Qualifications</td> 
      <td colspan="2" align="center">Action</td> 
    </tr>  
  </thead>


  <tbody>
    @foreach($students as $student)  
    <tr border="none">
    <td>{{$loop->iteration}}</td>
      <!-- <td>{{$student->id}}</td>   -->
      <td>{{$student->first_name}} {{$student->last_name}}</td>   
      <td>{{$student->gender}}</td>  
      <td>{{$student->qualifications}}</td>

      <td>
        <form action="/students/edit/{{$student->id}}" method="get">

          <button class="btn btn-primary" type="submit">Update</button>

        </form>
      </td>

      <td>
        <form action="/students/delete/{{$student->id}}" method="get">

          <input type="hidden" name="_taken" value="{{ csrf_token() }}">

          <button class="btn btn-danger" type="submit">Delete</button>

        </form>
      </td>


      @endforeach
      </tr>  
    </tbody>  
  </table>
</center>

  <a class="btn btn-success" href="{{URL::to('/students/create')}}">New Entry</a>


  @endsection 