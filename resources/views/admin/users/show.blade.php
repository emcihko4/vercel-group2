@extends('admin.users.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Users Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Username: {{ $users->username }}</h5>
        <p class="card-text">Userlevel : {{ $users->userlevel }}</p>
        <p class="card-text">Name : {{ $users->name }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection