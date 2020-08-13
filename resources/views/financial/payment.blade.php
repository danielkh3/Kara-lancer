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
    <form action="{{ route('payment.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">شماره پیگیری</label>
          <input type="number" class="form-control" name="follow_number" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">تاریخ پرداخت</label>
          <input type="date" class="form-control" name="payment_date" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

          <div class="form-group">
            <label for="">جزئیات</label>
            <input type="text" class="form-control" name="detail" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
          <button class="btn btn-primary">submit</button>
    </form>
@endsection
