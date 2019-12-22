<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Shifts Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('shift/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
                        <?php foreach($shifts as $s){ ?>
                        <tr>
    						<td><?php echo $s['id']; ?></td>
    						<td><?php echo $s['name']; ?></td>
    						<td>
                                <a href="<?php echo site_url('shift/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('shift/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
