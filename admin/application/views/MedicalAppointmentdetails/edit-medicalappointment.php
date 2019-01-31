<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit MedicalCenter Appoinment 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i>Home</a></li>
         <li><a href="<?php echo base_url();?>MedicalAppoinment_ctrl/view_appointmentdetails">Medical Center Appoinment Appoinment </a></li>
         <li class="active">Edit MedicalCenter Appoinment</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <?php
               if($this->session->flashdata('message')) {
               $message = $this->session->flashdata('message');
               ?>
            <div class="alert alert-<?php echo $message['class']; ?>">
               <button class="close" data-dismiss="alert" type="button">×</button>
               <?php echo $message['message']; ?>
            </div>
            <?php
               }
               ?>
         </div>
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Edit Medical Center Appoinment </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">	
			   
                  <div class="box-body">                 
                     <div class="col-md-6">
					  <div class="form-group">
                            <label>Patient Name</label>
					        <select class="form-control select2 js-example-basic-multiple" style="width: 100%;" name="patient_id" id="patient_name">
							
								   <?php
									  foreach($patientnamedetails as $patdetails){									
								   ?>
							<option value="<?php echo $patdetails->id;?>"<?php if ($patdetails->id == $data->patient_id)
					         echo 'selected';  ?> ><?php echo $patdetails->patient_firstname;?></option>	
								   <?php
								   }
								   ?>
                            </select>
                            </div>
					  	  <div class="form-group">
                            <label>MedicalCenter Name</label>
					        <select class="form-control select2 js-example-basic-multiple" style="width: 100%;" name="medical_id" id="medical_name">
							
								   <?php
								      //$arry_select = explode(",", $data->hospital_id);
									  foreach($medicaldetails as $mdetails){									
								   ?>
							<option value="<?php echo $mdetails->id;?>"<?php if ($mdetails->id == $data->clinic_id)
					         echo 'selected';  ?> ><?php echo $mdetails->medical_name;?></option>	
								   <?php
								   }
								   ?>
                            </select>
                            </div>

						   <div class="bootstrap-timepicker">
							<div class="form-group">
							  <label>Doctor Appoinment Time</label>
							  <div class="input-group">
								<input type="text" value="<?php echo $data->start_time; ?>" name="start_time" class="form-control timepicker">
								<div class="input-group-addon">
								  <i class="fa fa-clock-o"></i>
								</div>
							  </div><!-- /.input group -->
							</div><!-- /.form group -->
						  </div>
						  
						  <div class="form-group has-feedback">
									<label for="exampleInputEmail1">Fees </label>
									<input type="text" class="form-control required" value="<?php echo $data->fees; ?>" required="" name="fees"  placeholder="Fees">
									<span class="glyphicon  form-control-feedback"></span>
                          </div>
						  
				          <div class="form-group has-feedback">
								<label for="exampleInputEmail1">Appointment Date</label>
								<input type="text" class="form-control required" value="<?php echo $data->appointment_date; ?>" name="appointment_date" id="datepicker"  required ="">
								<span class="glyphicon  form-control-feedback"></span>
					     </div>			
						
	
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
				   </div>
				     <div class="col-md-6">
					 
					          <div class="form-group" id="doctorappend">
                            <label>Doctor Name</label>
					        <select class="form-control select2 js-example-basic-multiple" style="width: 100%;" name="doctor_id" id="doctor_firstname">
							
								   <?php
								      
									foreach($doctornametotaldetails as $docdetails){									
								   ?>
							<option value="<?php echo $docdetails->id;?>"<?php if ($docdetails->id == $doctornamedetails->id)
					         echo 'selected';  ?> ><?php echo $docdetails->doctor_firstname;?></option>	
								   <?php
								  }
								   ?>
                            </select>
                            </div>
					 
                          <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Reason </label>
                            <input type="text" class="form-control required" value="<?php echo $data->ill_reason; ?>" required="" name="ill_reason"  placeholder="ill_reason">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  
				     </div>
				   
				  </div>
               </form>
            </div>
            <!-- /.box -->
         </div>
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>


	 
		 <div class="modal fade modal-wide" id="myModalmapbmd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Select location</h4>
                  </div>
                  <div class="modal-body">
                    <div id='map_canvas'></div>
                    <div id="current">Nothing yet...</div>
                    <input type="hidden" id="pick-lat" />
                    <input type="hidden" id="pick-lng" />
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-custom select-location">Select Location</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>
			
	
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>	

