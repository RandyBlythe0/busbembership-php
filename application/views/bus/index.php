<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Buses Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bus/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
    						<th>ID</th>
    						<th>Route Id</th>
    						<th>Contractor Id</th>
    						<th>Driver Id</th>
    						<th>Passing Number</th>
    						<th>Type</th>
    						<th>Capacity</th>
    						<th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($buses as $b){ ?>
                        <tr>
    						<td><?php echo $b['id']; ?></td>
    						<td><?php echo $b['route_id']; ?></td>
    						<td><?php echo $b['contractor_id']; ?></td>
    						<td><?php echo $b['driver_id']; ?></td>
    						<td><?php echo $b['passing_number']; ?></td>
    						<td><?php echo $b['type']; ?></td>
    						<td><?php echo $b['capacity']; ?></td>
    						<td>
                                <a href="<?php echo site_url('bus/edit/'.$b['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('bus/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Route Id</th>
                            <th>Contractor Id</th>
                            <th>Driver Id</th>
                            <th>Passing Number</th>
                            <th>Type</th>
                            <th>Capacity</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>        
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
