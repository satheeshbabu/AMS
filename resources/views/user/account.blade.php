@extends('layout.front.master')

@section('title')
AMS - Add Account
@endsection

@section('body')

<!-- Main content -->
<div class="main-content">
  <h1 class="page-title">Add Account</h1>
  <div class="row">
    <div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h3 class="panel-title">Account Information</h3><br>
            @if (Session::has('success'))
        				<span class="help-block text-primary"> {{ Session::get('success') }}</span>
            @elseif (Session::has('fail'))
        				<span class="help-block text-danger"> {{ Session::get('fail') }}</span>
            @endif
						<ul class="panel-tool-options">
							<li><a data-rel="collapse" href="#"><i class="icon-minus"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal" method="post" action="{{route('postAccount')}}" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-2 control-label">Account Name</label>
								<div class="col-sm-10">
									<input type="text" placeholder="Name of the account" id="name" name="name" class="form-control input-lg">
                  @if($errors->has('name'))
          				    <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('name')}}</span>
          				@endif
								</div>
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Description</label>
								<div class="col-sm-10">
									<input type="text" placeholder="Description of the account" id="description" name="description" class="form-control input-lg">
                  @if($errors->has('description'))
          				    <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('description')}}</span>
          				@endif
								</div>
							 </div>
							<div class="line-dashed"></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Starting Balance</label>
								<div class="col-sm-10">
									<input type="number" placeholder="Initial Balance" id="starting_balance" name="starting_balance" value="0" min="0" class="form-control input-lg">
                  @if($errors->has('starting_balance'))
          				    <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i> {{$errors->first('starting_balance')}}</span>
          				@endif
								</div>
							</div>
							<div class="line-dashed"></div>
              {{csrf_field()}}
							<div class="form-group"><button type="submit" class="btn btn-primary btn-lg col-sm-2 col-sm-offset-2">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
  </div>
@stop
