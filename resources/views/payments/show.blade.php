@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrollment No : {{ $item->enrollment_id }}</h5>
        <p class="card-text">Paid Date : {{ $item->paid_date }}</p>
        <p class="card-text">Amount : {{ $item->amount }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection