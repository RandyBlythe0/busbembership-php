<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Account Status Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('account_statu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
                        <?php foreach($account_status as $a){ ?>
                        <tr>
    						<td><?php echo $a['id']; ?></td>
    						<td><?php echo $a['name']; ?></td>
    						<td>
                                <a href="<?php echo site_url('account_statu/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('account_statu/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
