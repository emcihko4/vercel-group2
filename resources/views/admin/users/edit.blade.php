@extends('admin.users.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('users/' .$users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"></br>
        <label>Userlevel</label></br>
        <select name="userlevel" id="userlevel">
          <option value="{{$users->userlevel}}">{{$users->userlevel}}</option>
        </select>
        {{-- <label>Userlevel</label></br>
        <input type="text" name="address" id="address" value="{{$users->userlevel}}" class="form-control"></br>
         --}}
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop