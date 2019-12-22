<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Employee Type Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('employee_type/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
    						<th>ID</th>
    						<th>Name</th>
    						<th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php foreach($employee_type as $e){ ?>
                        <tr>
    						<td><?php echo $e['id']; ?></td>
    						<td><?php echo $e['name']; ?></td>
    						<td>
                                <a href="<?php echo site_url('employee_type/edit/'.$e['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('employee_type/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>    
                </table>
                                
            </div>
        </div>
    </div>
</div>
