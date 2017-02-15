@extends('backend.layouts.master')
@section('title')
Rashi Settings
@endsection
@section('site_map')
Dashboard / Horoscope / Rashi
@endsection

@section('content')

<div class="col-md-6">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"> Add Horoscope - Nepali -</h3>
			
		</div>
		<div class="box-body">
			<form role="form" action="{{url('admin/horoscope/rashi/create/')}}" method="post" enctype="multipart/form-data" class="">
				{!! csrf_field() !!}
				<input type="hidden" name="type" value="np">
				<div class="form-group">

					<label for="name" >Name:</label>


					<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="" required>


				</div>
				<div class="form-group">

					<label for="flag" >Image:</label>


					<input type="file" id="flag" name="image_name" class="form-control"
					onchange="document.getElementById('profile').src = window.URL.createObjectURL(this.files[0])">

				</div>
				
				<div class="form-group">

					<label for="position" >Position:</label>


					<input type="text" class="form-control" id="position" placeholder="Enter Position" name="position" value="" required>


				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary btn-flat btn-sm">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="col-md-6">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"> Add Horoscope - English -</h3>
			
		</div>
		<div class="box-body">
			<form role="form" action="{{url('admin/horoscope/rashi/create/')}}" method="post" enctype="multipart/form-data" class="">
				{!! csrf_field() !!}
				<input type="hidden" name="type" value="eng">
				<div class="form-group">

					<label for="name" > Name:</label>


					<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="" required>


				</div>
				<div class="form-group">

					<label for="flag" > Image:</label>


					<input type="file" id="flag" name="image_name" class="form-control"
					onchange="document.getElementById('profile').src = window.URL.createObjectURL(this.files[0])">

				</div>
				
				<div class="form-group">

					<label for="position" >Position:</label>


					<input type="text" class="form-control" id="position" placeholder="Enter Position" name="position" value="" required>


				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary btn-flat btn-sm">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="col-md-12 col-xs-12">

			<div class="box box-primary">
				<div class="box-header">




					<h3 class="box-title"><i class="fa fa-bars"></i> Horoscopes -Nepali-</h3>


				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SN</th>
								<th>Name</th>
								<th>Image</th>

								<th>Position</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($rashis['np'] as $rashi)
							<tr>

								<td>{{$i}}</td>
								<td>{{$rashi['name']}}</td>
								<td> <img src="{{'/uploads/rashi/'.$rashi['image_name']}}" alt="{{$rashi['image_name']}}"> </td>
								<td>{{$rashi['position']}}</td>
								<td>
									<div class="btn-group btn-group-xs">
										<a href="{{url('admin/horoscope/rashi/edit/'.$rashi['id'])}}" class="btn btn-primary" data-toggle="tooltip" title="Edit">Edit</a>
										<a href="{{url('admin/horoscope/rashi/delete/'.$rashi['id'])}}" class="btn btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this Notice Permanently?')">Delete</a>


									</div>

								</td>



							</tr>
							<?php $i ++;?>
							@endforeach


						</tbody>
						<tfoot>
							<tr>
								<th>SN</th>
								<th>Name</th>
								<th>Image</th>

								<th>Position</th>
								<th>Action</th>

							</tr>
						</tfoot>
					</table>



				</div>
				<div class="box-footer"> 

				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>

	<div class="col-md-6">
	<div class="col-md-12 col-xs-12">

			<div class="box box-primary">
				<div class="box-header">




					<h3 class="box-title"><i class="fa fa-bars"></i> Horoscpes -English-</h3>


				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SN</th>
								<th>Name</th>
								<th>Image</th>

								<th>Position</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($rashis['eng'] as $rashi)
							<tr>

								<td>{{$i}}</td>
								<td>{{$rashi['name']}}</td>
								<td> <img src="{{'/uploads/rashi/'.$rashi['image_name']}}" alt="{{$rashi['image_name']}}"> </td>
								<td>{{$rashi['position']}}</td>
								<td>
									<div class="btn-group btn-group-xs">
										<a href="{{url('admin/horoscope/rashi/edit/'.$rashi['id'])}}" class="btn btn-primary" data-toggle="tooltip" title="Edit">Edit</a>
										<a href="{{url('admin/horoscope/rashi/delete/'.$rashi['id'])}}" class="btn btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this Notice Permanently?')">Delete</a>


									</div>
									
								</td>



							</tr>
							<?php $i ++;?>
							@endforeach


						</tbody>
						<tfoot>
							<tr>
								<th>SN</th>
								<th>Name</th>
								<th>Image</th>

								<th>Position</th>
								<th>Action</th>

							</tr>
						</tfoot>
					</table>



				</div>
				<div class="box-footer"> 

				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>

	</div>
</div>





@endsection