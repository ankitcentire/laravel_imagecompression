@extends('layouts.app')
@section('title','post')
@section('content')
<div class="container">
		@if ($errors->any())
		    <div class="alert alert-danger">
		    	<strong>Whoops!</strong> Please correct errors and try again!.
						<br/>
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		  @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                          
  <h2>Post Images</h2>
  <form action="/posts" method="post" enctype="multipart/form-data">
  	{{csrf_field()}}

    <div class="form-group">

      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label for="description">Decriptions:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input  type="file" name="image" onchange="return priviewImage(event)"> 
      </label>
      <img id="output" width="100">
    </div>
    
    <br/>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<script type="text/javascript">
	function priviewImage(event){
		var output = document.getElementById('output');
		output.src = URL.createObjectURL(event.target.files[0])
	};
</script>

@endsection