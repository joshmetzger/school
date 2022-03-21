@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Fee Amount</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('fee.amount.store') }}">
	 	@csrf
					  <div class="row">
						<div class="col-12">	

        <div class="form-group">
            <h5>Fee Category<span class="text-danger">*</span></h5>
            <div class="controls">
                <select name="fee_category_id" id="role" required="" class="form-control">
                    <option value="" selected="" disabled="">Select Fee Category</option>

                    @foreach($fee_categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                        
                </select>
            </div>
        </div>  <!-- End form-group -->

        <div class="row">

            <div class="col-md-5">
                <div class="form-group">
                    <h5>Student Class <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="class_id[]" id="role" required="" class="form-control">
                            <option value="" selected="" disabled="">Select Fee Category</option>
        
                            @foreach($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                            @endforeach
                                
                        </select>
                    </div>
                </div>  <!-- End form-group -->
            </div> <!-- col-md-5 -->

            <div class="col-md-5">
                <div class="form-group">
                    <h5>Amount<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" name="amount[]" class="form-control" > 
        
                    </div> 
                </div>
            </div><!-- col-md-5 -->

            <div class="col-md-2" style="padding-top: 25px;">
                <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
            </div><!-- col-md-2 -->

        </div>
							 
						<div class="text-xs-right">
	 <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>

	  </div>
  </div>

@endsection
