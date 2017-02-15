@extends('backend.layouts.master')
@section('title')
Conversion
@endsection
@section('site_map')
Dashboard / forex / conversion
@endsection

@section('content')



<div class="col-md-12 col-xs-12">

	<div class="box box-primary">
		<div class="box-header">




			<h3 class="box-title"><i class="fa fa-bars"></i> Add Conversion Rate</h3>


		</div>
		<!-- /.box-header -->
		<div class="box-body">

			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>SN</th>
						<th>Name</th>
						<th>Flag</th>

						<th>Amount</th>
						<th>Selling Price</th>
						<th>Cost Price</th>
						<th>Action</th>

					</tr>
				</thead>
				<tbody>
					<?php $i=1; ?>
					@foreach($forex as $data)
					<tr>

						<td>{{$i}}</td>
						<td>{{$data['name']}}</td>
						<td> <img src="{{'/uploads/flag/'.$data['flag']}}" alt="{{$data['flag']}}"> </td>
						<td>{{$data['amount']}}</td>
						
						
							</td>
							@if(array_key_exists('selling_price', $data))
							<form method="post" action="{{url('admin/forex/conversion/create')}}">
							{!! csrf_field() !!}
							<input type="hidden" name="country_id" value="{{$data['id']}}">
							<input type="hidden" name="lang_type" value="eng">
							
							<td><input type="number" step="0.01" name="selling_price" placeholder="Today's Selling Price" value="{{$data['selling_price']}}"></td>
							<td><input type="number" step="0.01" name="cost_price" placeholder="Today's Cost Price" value="{{$data['cost_price']}}">
								<button class="btn btn-sm btn-primary" type="submit" disabled="disabled">Save</button>
							</td>
							</form>
							@else
							<form method="post" action="{{url('admin/forex/conversion/create')}}">
							{!! csrf_field() !!}
							<input type="hidden" name="country_id" value="{{$data['id']}}">
							<input type="hidden" name="lang_type" value="eng">
							
							<td><input type="number" step="0.01" name="selling_price" placeholder="Today's Selling Price" value=""></td>
							<td><input type="number" step="0.01" name="cost_price" placeholder="Today's Cost Price" value="">
								<button class="btn btn-sm btn-primary" type="submit" >Save</button>
							</td>


							
							
						</form>
						
							

							
							
						

						@endif
						
						<td>
							<div class="btn-group btn-group-xs">
							@if(array_key_exists('conversion_id', $data))
								
								<a href="{{url('admin/forex/conversion/delete/'.$data['conversion_id'])}}" class="btn btn-danger" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this Notice Permanently?')">Delete</a>
								@endif
							</div>


						</td>
					</tr>
					<?php $i++;?>
					@endforeach


				</tbody>
				<tfoot>
					<tr>
						<th>SN</th>
						<th>Name</th>
						<th>Flag</th>

						<th>Amount</th>
						<th>Selling Price</th>
						<th>Cost Price</th>
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



@endsection