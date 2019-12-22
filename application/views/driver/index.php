<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Driver Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('driver/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
    						<th>ID</th>
    						<th>Password</th>
    						<th>Name</th>
    						<th>Mobile</th>
    						<th>Email</th>
    						<th>Address</th>
    						<th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($driver as $d){ ?>
                        <tr>
    						<td><?php echo $d['id']; ?></td>
    						<td><?php echo $d['password']; ?></td>
    						<td><?php echo $d['name']; ?></td>
    						<td><?php echo $d['mobile']; ?></td>
    						<td><?php echo $d['email']; ?></td>
    						<td><?php echo $d['address']; ?></td>
    						<td>
                                <a href="<?php echo site_url('driver/edit/'.$d['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('driver/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Password</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>    
                </table>
                                
            </div>
        </div>
    </div>
</div>
