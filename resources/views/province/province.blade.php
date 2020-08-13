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
    <form action="{{ route('province.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">استان</label>
          <input type="text" class="form-control" name="province" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

          <button class="btn btn-primary">submit</button>
    </form>
@endsection
