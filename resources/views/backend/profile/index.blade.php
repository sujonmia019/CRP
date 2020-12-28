@extends('layouts.master')
@section('title', 'Users')
@push('styles')
<style>
  .table td, .table th{
    vertical-align: middle !important;
  }
</style>
@endpush
@section('sidenavbar')
@parent
@endsection
@section('content')
<section class="admin_orders">
  <div class="card-header bg-light" style="border: none;">
    {{ Auth::user()->name }}
  </div>
  <div class="card p-4">

  </div>
</section>



@endsection
