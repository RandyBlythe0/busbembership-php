<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Employees Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('employee/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                	<thead>
	                    <tr>
							<th>ID</th>
							<th>Board In Location Id</th>
							<th>Board Off Location Id</th>
							<th>Route Id</th>
							<th>Employee Type Id</th>
							<th>Company Shift Id</th>
							<th>Account Status</th>
							<th>Password</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Company</th>
							<th>Address</th>
							<th>Actions</th>
	                    </tr>
	                </thead>
	                <tbody>    
	                    <?php foreach($employees as $e){ ?>
	                    <tr>
							<td><?php echo $e['id']; ?></td>
							<td><?php echo $e['board_in_location_id']; ?></td>
							<td><?php echo $e['board_off_location_id']; ?></td>
							<td><?php echo $e['route_id']; ?></td>
							<td><?php echo $e['employee_type_id']; ?></td>
							<td><?php echo $e['company_shift_id']; ?></td>
							<td><?php echo $e['account_status']; ?></td>
							<td><?php echo $e['password']; ?></td>
							<td><?php echo $e['name']; ?></td>
							<td><?php echo $e['mobile']; ?></td>
							<td><?php echo $e['email']; ?></td>
							<td><?php echo $e['company']; ?></td>
							<td><?php echo $e['address']; ?></td>
							<td>
	                            <a href="<?php echo site_url('employee/edit/'.$e['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
	                            <a href="<?php echo site_url('employee/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
	                        </td>
	                    </tr>
	                    <?php } ?>
                    </tbody>
                    <tfoot>
	                    <tr>
							<th>ID</th>
							<th>Board In Location Id</th>
							<th>Board Off Location Id</th>
							<th>Route Id</th>
							<th>Employee Type Id</th>
							<th>Company Shift Id</th>
							<th>Account Status</th>
							<th>Password</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Company</th>
							<th>Address</th>
							<th>Actions</th>
	                    </tr>
	                </tfoot>
                </table>
                                
            </div>
        </div>
    </div>
</div>
