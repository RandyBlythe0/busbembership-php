<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Track Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('track/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
    						<th>ID</th>
    						<th>Bus Id</th>
    						<th>X</th>
    						<th>Y</th>
    						<th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php foreach($track as $t){ ?>
                        <tr>
    						<td><?php echo $t['id']; ?></td>
    						<td><?php echo $t['bus_id']; ?></td>
    						<td><?php echo $t['x']; ?></td>
    						<td><?php echo $t['y']; ?></td>
    						<td>
                                <a href="<?php echo site_url('track/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('track/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Bus Id</th>
                            <th>X</th>
                            <th>Y</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>    
                </table>
                                
            </div>
        </div>
    </div>
</div>
