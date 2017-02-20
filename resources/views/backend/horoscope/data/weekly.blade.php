@extends('backend.layouts.master')
@section('title')
Rashi Weekly
@endsection
@section('site_map')
Dashboard / Horoscope / Rashi
@endsection

@section('content')

<div class="col-md-6">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"> Add Weekly Horoscope - Nepali -</h3>
			
		</div>
		<div class="box-body">
			<table  class="table table-bordered table-stripped">
				@foreach($rashi_datas['np'] as $data)
				<tr>
					<td>{{$data['name']}} <img src="{{'/uploads/rashi/'.$data['image_name']}}"></td>
					<form action="{{url('admin/horoscope/rashi/create')}}" method="post">
						{!! csrf_field() !!}
						<input type="hidden" name="horoscope_type" value="weekly">
						<input type="hidden" name="rashi_id" value="{{$data['id']}}">

						@if(array_key_exists('description', $data))
						<td><textarea name="description" rows="3" cols=30">{{$data['description']}}</textarea></td>
						<td><button class="btn btn-primary btn-sm" disabled="disabled">Save</button>
							<a class="btn btn-danger btn-sm" href="{{url('admin/horoscope/rashi/delete/'.$data['rashi_data_id'])}}">Delete</a></td>
							@else
							<td><textarea name="description" rows="3" cols=30"></textarea></td>
							<td><button class="btn btn-primary btn-sm" >Save</button></td>


							@endif
						</form>


					</tr>
					@endforeach
				</table>



			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"> Add Weekly Horoscope - English -</h3>

			</div>
			<div class="box-body">
				<table  class="table table-bordered table-stripped">
					@foreach($rashi_datas['eng'] as $data)
					<tr>
						<td>{{$data['name']}} <img src="{{'/uploads/rashi/'.$data['image_name']}}"></td>
						<form action="{{url('admin/horoscope/rashi/create')}}" method="post">
							{!! csrf_field() !!}
							<input type="hidden" name="horoscope_type" value="weekly">
							<input type="hidden" name="rashi_id" value="{{$data['id']}}">


							@if(array_key_exists('description', $data))
							<td><textarea name="description" rows="3" cols=30">{{$data['description']}}</textarea></td>
							<td><button class="btn btn-primary btn-sm" disabled="disabled">Save</button>
								<a class="btn btn-danger btn-sm" href="{{url('admin/horoscope/rashi/delete/'.$data['rashi_data_id'])}}">Delete</a></td>
								@else
								<td><textarea name="description" rows="3" cols=30"></textarea></td>
								<td><button class="btn btn-primary btn-sm" >Save</button></td>

								@endif
							</form>


						</tr>
						@endforeach
					</table>


				</div>
			</div>
		</div>


		@endsection