<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Contractors Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('contractor/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
                        <?php foreach($contractors as $c){ ?>
                        <tr>
    						<td><?php echo $c['id']; ?></td>
    						<td><?php echo $c['password']; ?></td>
    						<td><?php echo $c['name']; ?></td>
    						<td><?php echo $c['mobile']; ?></td>
    						<td><?php echo $c['email']; ?></td>
    						<td><?php echo $c['address']; ?></td>
    						<td>
                                <a href="<?php echo site_url('contractor/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('contractor/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
