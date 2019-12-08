@extends('layouts.app')


@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Power
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="get" action="{{ route('product.store') }}">
          <div class="form-group">
	 			<label for="name">number 1:</label>	
	 			<input type="text" name="no1">
          </div>



           <div class="form-group">
	 			<label for="name">number 2:</label>	
	 			<input type="text" name="no2">
          </div>


            <div class="form-group">
	 			<label for="name">category 1:</label>	
	 			<input type="text" name="text1">
          </div>

            <div class="form-group">
	 			<label for="name">category 2:</label>	
	 			<input type="text" name="text2">
          </div>
         



        <div class="form-group">
	 			<label for="name">category 3:</label>	
	 			<input type="text" name="text3">
          </div>
         


        <div class="form-group">
	 			<label for="name">category 4:</label>	
	 			<input type="text" name="text4">
          </div> 





            <div class="form-group">
	 			<label for="name">header 1:</label>	
	 			<input type="text" name="header1">
          </div>
          


              <div class="form-group">
	 			<label for="name">header 2:</label>	
	 			<input type="text" name="header2">
          </div>



          <button type="submit" class="btn btn-primary">Increase by QR Code</button>
      </form>
  </div>
</div>
@endsection