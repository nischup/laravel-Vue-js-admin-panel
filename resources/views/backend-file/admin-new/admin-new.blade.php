@extends('backend-main.layout')
@section('content')

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<div class="col-md-11">
							<strong> Admin/User Info  </strong> 
						</div>
						<div class="col-md-1">
							<div class="pull-right col-md-4 col-12">
								<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
									<a href="javascript:void(0)" class="btn btn-social width-150 mb-1 mr-1 btn-primary" id="addBtn">
										<span class="ft-plus-circle font-medium-5"></span><b> Add New </b></a>
								</div>
								<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown" style="display: none" id="listBtn">
									<a href="javascript:void(0)" class="btn btn-social width-150 mb-1 mr-1 btn-primary">
										<span class="ft-list font-medium-5"></span><b>View List</b></a>
								</div>
							</div>
						</div>
					</div>
					<div id="admin">
						<admin-list></admin-list>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .animated -->
</div><!-- .content -->
<script src="{{ asset('js/admin.js') }}"></script>
@endsection