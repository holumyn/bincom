
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h3>Please select the PU result you want to display</h3>
			<div class="form-group">
			 
			  <select class="form-control" id="pu">
			    
			    <?php if(isset($polling_units)): ?>
			    	<option>--Choose Please--</option>
			    	<?php foreach($polling_units as $pu): ?>
			    		<option value="<?php echo $pu['uniqueid'] ?>"><?php echo $pu['uniqueid'].' - '. $pu['polling_unit_name'] ?></option>
			    	<?php endforeach ?>	
			    <?php endif ?>
			  </select>
			</div>
			
		</div>
	</div>
</div>
<script>
	$('#pu').on('change', function() {
  	var pu_id = this.value;
  	window.location.href = "<?php echo base_url().'pu/' ?>" + pu_id;
})
</script>