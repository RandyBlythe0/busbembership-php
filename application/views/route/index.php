<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Routes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('route/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
    						<th>ID</th>
    						<th>Locations</th>
    						<th>Name</th>
    						<th>Rate</th>
    						<th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php foreach($routes as $r){ ?>
                        <tr>
    						<td><?php echo $r['id']; ?></td>
    						<td><?php echo $r['locations']; ?></td>
    						<td><?php echo $r['name']; ?></td>
    						<td><?php echo $r['rate']; ?></td>
    						<td>
                                <a href="<?php echo site_url('route/edit/'.$r['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('route/remove/'.$r['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Locations</th>
                            <th>Name</th>
                            <th>Rate</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>    
                </table>
                                
            </div>
        </div>
    </div>
</div>
