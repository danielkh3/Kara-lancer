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
    <form action="{{ route('offer.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">تعداد روز پیشنهادی</label>
          <input type="number" class="form-control" name="days" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">مبلغ پیشنهادی</label>
          <input type="number" class="form-control" name="price" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
          <button class="btn btn-primary">submit</button>
    </form>
@endsection
