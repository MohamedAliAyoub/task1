@extends('layouts.app')


@section('content')
		
@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

        <strong>{{ $message }}</strong>

</div>

@endif





  
 







<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Final </div>

    <div class="card-body text-center">
      <h1 class="card-text">{{$no->no}}</h1>
      <p class="card-text">{{$no->created_at}}</p>
    </div>

     <div class="card-body text-center">
     <form method="get" action="{{ route('product.create') }}">
         <button type="submit" class="btn btn-primary">Take it </button>
      </form>
    </div>


		



                
            </div>
        </div>
    </div>
</div>









@endsection
