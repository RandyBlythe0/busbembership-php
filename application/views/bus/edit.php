<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bus Edit</h3>
            </div>
			<?php echo form_open('bus/edit/'.$bus['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="route_id" class="control-label"><span class="text-danger">*</span>Route</label>
						<div class="form-group">
							<select name="route_id" class="form-control">
								<option value="">select route</option>
								<?php 
								foreach($all_routes as $route)
								{
									$selected = ($route['id'] == $bus['route_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$route['id'].'" '.$selected.'>'.$route['id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('route_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contractor_id" class="control-label"><span class="text-danger">*</span>Contractor</label>
						<div class="form-group">
							<select name="contractor_id" class="form-control">
								<option value="">select contractor</option>
								<?php 
								foreach($all_contractors as $contractor)
								{
									$selected = ($contractor['id'] == $bus['contractor_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$contractor['id'].'" '.$selected.'>'.$contractor['id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('contractor_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="driver_id" class="control-label"><span class="text-danger">*</span>Driver</label>
						<div class="form-group">
							<select name="driver_id" class="form-control">
								<option value="">select driver</option>
								<?php 
								foreach($all_driver as $driver)
								{
									$selected = ($driver['id'] == $bus['driver_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$driver['id'].'" '.$selected.'>'.$driver['id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('driver_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="passing_number" class="control-label"><span class="text-danger">*</span>Passing Number</label>
						<div class="form-group">
							<input type="text" name="passing_number" value="<?php echo ($this->input->post('passing_number') ? $this->input->post('passing_number') : $bus['passing_number']); ?>" class="form-control" id="passing_number" />
							<span class="text-danger"><?php echo form_error('passing_number');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type" class="control-label"><span class="text-danger">*</span>Type</label>
						<div class="form-group">
							<input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $bus['type']); ?>" class="form-control" id="type" />
							<span class="text-danger"><?php echo form_error('type');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="capacity" class="control-label"><span class="text-danger">*</span>Capacity</label>
						<div class="form-group">
							<input type="text" name="capacity" value="<?php echo ($this->input->post('capacity') ? $this->input->post('capacity') : $bus['capacity']); ?>" class="form-control" id="capacity" />
							<span class="text-danger"><?php echo form_error('capacity');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>