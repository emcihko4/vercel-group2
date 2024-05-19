@extends('admin.users.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('users') }}" method="post">
        {!! csrf_field() !!}
        <label>Userame</label></br>
        <input type="text" name="username" id="username" class="form-control"></br>
        <label>password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <label for="userlevel">User Role</label> <br>
        <select name="userlevel" id="userlevel" class="form-select">
            <option value="Administrator">Administrator</option>
            <option value="Student">Student</option>
        </select><br>
        <label>Full Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop