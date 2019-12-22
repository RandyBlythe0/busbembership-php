<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Track Add</h3>
            </div>
            <?php echo form_open('track/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="bus_id" class="control-label">Bus Id</label>
						<div class="form-group">
							<input type="text" name="bus_id" value="<?php echo $this->input->post('bus_id'); ?>" class="form-control" id="bus_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="x" class="control-label">X</label>
						<div class="form-group">
							<input type="text" name="x" value="<?php echo $this->input->post('x'); ?>" class="form-control" id="x" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="y" class="control-label">Y</label>
						<div class="form-group">
							<input type="text" name="y" value="<?php echo $this->input->post('y'); ?>" class="form-control" id="y" />
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