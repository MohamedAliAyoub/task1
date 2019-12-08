@extends('layouts.app')


@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
      QR Code
  </div>
  <div class="card-body">

@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

  <button type="button" class="close" data-dismiss="alert">×</button> 

        <strong>{{ $message }}</strong>

</div>

@endif
    


    {!! $qr !!}

     <form method="get" action="{{ route('result.store') }}">
          <input type="hidden" name="no" value = "{{$no}}">
         <button type="submit" class="btn btn-primary">Take it </button>
      </form>




  </div>
</div>
@endsection