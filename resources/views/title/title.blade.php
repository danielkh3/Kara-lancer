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
    <form action="{{ route('title.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">عنوان</label>
          <input type="text" class="form-control" name="slug" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">محتوی</label>
          <input type="text" class="form-control" name="content" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

          <div class="form-group">
            <label for="">عکس</label>
            <input type="text" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
       
          <button class="btn btn-primary">submit</button>
    </form>
@endsection
