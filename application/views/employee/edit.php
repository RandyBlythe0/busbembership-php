<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Employee Edit</h3>
            </div>
			<?php echo form_open('employee/edit/'.$employee['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="board_in_location_id" class="control-label">Location</label>
						<div class="form-group">
							<select name="board_in_location_id" class="form-control">
								<option value="">select location</option>
								<?php 
								foreach($all_locations as $location)
								{
									$selected = ($location['id'] == $employee['board_in_location_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$location['id'].'" '.$selected.'>'.$location['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="board_off_location_id" class="control-label">Location</label>
						<div class="form-group">
							<select name="board_off_location_id" class="form-control">
								<option value="">select location</option>
								<?php 
								foreach($all_locations as $location)
								{
									$selected = ($location['id'] == $employee['board_off_location_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$location['id'].'" '.$selected.'>'.$location['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="route_id" class="control-label">Route</label>
						<div class="form-group">
							<select name="route_id" class="form-control">
								<option value="">select route</option>
								<?php 
								foreach($all_routes as $route)
								{
									$selected = ($route['id'] == $employee['route_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$route['id'].'" '.$selected.'>'.$route['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="employee_type_id" class="control-label">Employee Type</label>
						<div class="form-group">
							<select name="employee_type_id" class="form-control">
								<option value="">select employee_type</option>
								<?php 
								foreach($all_employee_type as $employee_type)
								{
									$selected = ($employee_type['id'] == $employee['employee_type_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$employee_type['id'].'" '.$selected.'>'.$employee_type['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="company_shift_id" class="control-label">Shift</label>
						<div class="form-group">
							<select name="company_shift_id" class="form-control">
								<option value="">select shift</option>
								<?php 
								foreach($all_shifts as $shift)
								{
									$selected = ($shift['id'] == $employee['company_shift_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$shift['id'].'" '.$selected.'>'.$shift['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="account_status" class="control-label">Account Statu</label>
						<div class="form-group">
							<select name="account_status" class="form-control">
								<option value="">select account_statu</option>
								<?php 
								foreach($all_account_status as $account_statu)
								{
									$selected = ($account_statu['id'] == $employee['account_status']) ? ' selected="selected"' : "";

									echo '<option value="'.$account_statu['id'].'" '.$selected.'>'.$account_statu['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $employee['password']); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $employee['name']); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile" class="control-label">Mobile</label>
						<div class="form-group">
							<input type="text" name="mobile" value="<?php echo ($this->input->post('mobile') ? $this->input->post('mobile') : $employee['mobile']); ?>" class="form-control" id="mobile" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $employee['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="company" class="control-label">Company</label>
						<div class="form-group">
							<input type="text" name="company" value="<?php echo ($this->input->post('company') ? $this->input->post('company') : $employee['company']); ?>" class="form-control" id="company" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="address" class="control-label">Address</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $employee['address']); ?>" class="form-control" id="address" />
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