@extends('frontend.layouts.app')

@section('content')

	<div class="col-md-6">
	<form class="" role="" action="{{url('register/forex/public')}}" method="post">
	{!! csrf_field()!!}
	<div class="form-group">
	<label class="">Website Url</label>
	<input type="url" name="website_url" value="" class="form-control">
	</div>
	 @if ($errors->has('website_url'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('website_url') }}</strong>
                                    </span>
                @endif
	<div class="form-group">
	<label >Email</label>
	<input type="email" name="email" value="" class="form-control">
	</div>
	 @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

	<button class="btn btn-primary" type="submit">Generate Code</button>
	</form>
	</div>
	@if(isset($data))
	<div class="col-md-6">
		<div class="jumbotron">
		<h2>Required Dependencies</h2>
		{!! $data['dependencies'] !!}
		
		</div>
		<div class="jumbotron">
		<h2> Html File</h2>
		{{ $data['html'] }}
		</div>
		<div class="jumbotron">
		<h2>Javascript file</h2>
		{!! $data['js'] !!}
		
		</div>

	</div>
	@endif


@endsection

