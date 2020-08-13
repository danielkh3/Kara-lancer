@extends('layouts.master')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <form action="{{ route('lancer.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">نام</label>
          <input type="text" class="form-control" name="fname" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">نام خانوادگی</label>
          <input type="text" class="form-control" name="lname" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">شماره موبایل</label>
          <input type="number" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">بیوگرافی</label>
          <input type="text" class="form-control" name="bio" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

          <button class="btn btn-primary">submit</button>
    </form>
@endsection
