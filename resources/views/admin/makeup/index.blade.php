@extends('layout/main')

@section('title','Web Bridal')

@section('container')
<style>
  h1,
  li {
    text-align: center;
  }
</style>
<div class="contianer">
  <div class="row">
    <div class="col-sm-5 ml-auto mr-auto">
      <h1>Make Up</h1>
      <table class="table">
        @if (session('Status'))
        <div class="alert alert-success">
          {{session('Status')}}
        </div>
        @endif
        <tbody>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Wedding
              <a href="/admin/makeup/1" class="badge badge-info">Detail</a>
            </li>
          </ul>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Party
              <a href="/admin/makeup/2" class="badge badge-info">Detail</a>
            </li>
          </ul>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Commercial Photoshoot
              <a href="/admin/makeup/3" class="badge badge-info">Detail</a>
            </li>
          </ul>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection