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
    <form action="{{ route('work_sample.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">عنوان</label>
          <input type="text" class="form-control" name="subject" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">جزئیات</label>
          <input type="text" class="form-control" name="detail" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

          <div class="form-group">
            <label for="">نام فایل</label>
            <input type="number" class="form-control" name="file_name" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
         
          <button class="btn btn-primary">submit</button>
    </form>
@endsection
