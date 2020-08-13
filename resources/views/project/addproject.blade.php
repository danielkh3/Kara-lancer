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
    <form action="{{ route('project.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">subject</label>
          <input type="text" class="form-control" name="subject" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">detail</label>
          <input type="text" class="form-control" name="detail" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

          <div class="form-group">
            <label for="">suggested_days</label>
            <input type="number" class="form-control" name="suggested_days" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
          <div class="form-group">
            <label for="">price</label>
            <select class="form-control" name="price" id="">
              <option>100</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">title</label>
            <select class="form-control" name="title_id" id="">
                @foreach ($titles  as $title)
                <option value="{{ $title->id }}"> {{  $title->content }} </option>
                @endforeach
            </select>
          </div>
          <button class="btn btn-primary">submit</button>
    </form>
@endsection
