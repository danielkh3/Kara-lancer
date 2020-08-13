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
    <form action="{{ route('resume.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">university</label>
          <input type="text" class="form-control" name="university" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">field</label>
          <input type="text" class="form-control" name="field" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

          <div class="form-group">
            <label for="">start_date</label>
            <input type="number" class="form-control" name="start_date" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>

          <div class="form-group">
            <label for="">finish_date</label>
            <input type="number" class="form-control" name="finish_date" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>

          <div class="form-group">
            <label for="">province</label>
            <select class="form-control" name="province" id="">
              <option>100</option>
            </select>
          </div>
          <button class="btn btn-primary">submit</button>
    </form>
@endsection
