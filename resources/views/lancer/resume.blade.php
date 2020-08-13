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
    <form action="{{ route('work_resume.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">نام شرکت</label>
          <input type="text" class="form-control" name="company" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">شغل</label>
          <input type="text" class="form-control" name="job" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

          <div class="form-group">
            <label for="">سال شروع</label>
            <input type="number" class="form-control" name="start_year" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>

          <div class="form-group">
            <label for="">سال پایان</label>
            <input type="number" class="form-control" name="finish_year" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>

          <div class="form-group">
            <label for="">استان</label>
            <select class="form-control" name="province" id="">
                <option></option>
              <option>100</option>
            </select>
          </div>
          <button class="btn btn-primary">submit</button>
    </form>
@endsection
