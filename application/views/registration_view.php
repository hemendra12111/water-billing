<link href=<?php echo base_url('assets/css/bootstrap.min.css');?> type="text/css" rel="stylesheet" />
<head>
    <title>Form Validation Example</title>
    <style>
    .field_title{font-size: 13px;font-family:Arial;width: 300px;margin-top: 10px}
    .form_error{font-size: 13px;font-family:Arial;color:red;font-style:italic}
    </style>
</head>
<div class="row page-content">
  <div style="text-align: center;width: 40%;margin-left: 25%;">
  	<?php $data =$this->session->flashdata('error');  if(isset($data)){?>
  		<div class="alert alert-danger">
  			<strong><?php echo $this->session->flashdata('error');?></strong> 
		</div>
  	<?php }?>
  	
	<h2>Register Form</h2>
    <hr/>
    <?php echo form_open('home/register'); ?>
    
      <div class="form-group">
         <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" id="name" placeholder="Name">
      </div>
       <div class="form_error"><?php echo form_error('name'); ?></div>

      <div class="form-group">
         <input type="text" name="father_name" value="<?php echo set_value('father_name'); ?>" class="form-control" id="name" placeholder="Father Name">
      </div>
      <div class="form_error"><?php echo form_error('father_name'); ?></div>

      <div class="form-group">
         <input type="text" name="address" value="<?php echo set_value('address'); ?>" class="form-control" id="name" placeholder="Address">
      </div>
      <div class="form_error"><?php echo form_error('address'); ?></div>

      <div class="form-group">
         <input type="text" name="phone" value="<?php echo set_value('phone'); ?>" class="form-control" id="phone" placeholder="Phone Number">
      </div>
      <div class="form_error"><?php echo form_error('phone'); ?></div>

      <div class="form-group">
         <input type="text" name="zipcode"  value="<?php echo set_value('zipcode'); ?>" class="form-control" id="zipcode" placeholder="Zip Code">
      </div>
      <div class="form_error"><?php echo form_error('zipcode'); ?></div>

      <div class="form-group">
         <input type="date" name="dob" value="<?php echo set_value('dob'); ?>" class="form-control" id="dob">
      </div>
      <div class="form_error"><?php echo form_error('dob'); ?></div>

      <div class="form-group">
         <input type="text" name="meter_number" value="<?php echo set_value('meter_number'); ?>" class="form-control" id="meter_number" placeholder="Meter Number">
      </div>
      <div class="form_error"><?php echo form_error('meter_number'); ?></div>

      <div class="form-group">
         <input type="text" name="zone_number" value="<?php echo set_value('zone_number'); ?>" class="form-control" id="zone_number" placeholder="Zone Number">
      </div>
      <div class="form_error"><?php echo form_error('zone_number'); ?></div>

      <div class="form-group">
         <input type="text" name="meter_reading" value="<?php echo set_value('meter_reading'); ?>" class="form-control" id="meter_reading" placeholder="Meter Reading">
      </div>
      <div class="form_error"><?php echo form_error('meter_reading'); ?></div>

      <div class="form-group pull-left">
         <button type="submit" id="register" class="btn btn-primary">Register</button>
      </div>
    </div>
    <?php echo form_close(); ?>
  
</div>