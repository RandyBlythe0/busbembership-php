<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Route Edit</h3>
            </div>
			<?php echo form_open('route/edit/'.$route['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="locations" class="control-label"><span class="text-danger">*</span>Locations</label>
						<div class="form-group">
							<select name="locations[]" class="form-control" multiple="multiple">
								<option value="">select</option>
								<?php 
								foreach($all_locations as $location)
								{
									$selected = ($location['id'] == $this->input->post('board_in_location_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$location['id'].'" '.$selected.'>'.$location['name'].'</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('locations');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $route['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="rate" class="control-label"><span class="text-danger">*</span>Rate</label>
						<div class="form-group">
							<input type="text" name="rate" value="<?php echo ($this->input->post('rate') ? $this->input->post('rate') : $route['rate']); ?>" class="form-control" id="rate" />
							<span class="text-danger"><?php echo form_error('rate');?></span>
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