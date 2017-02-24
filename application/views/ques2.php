
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h3>Please select the LGA results you want to display with total</h3>
			<div class="form-group">
			 
			  <select class="form-control" id="lga">
			    
			    <?php if(isset($lga)): ?>
			    	<option>--Choose Please--</option>
			    	<?php foreach($lga as $lg): ?>
			    		<option value="<?php echo $lg['uniqueid'] ?>"><?php echo $lg['lga_name'] ?></option>
			    	<?php endforeach ?>	
			    <?php endif ?>
			  </select>
			</div>
			<br>
			  <p style="color:#f00">Note: Please test with the LGA <strong><i>"Ika South, Isoko North, Ughelli North, Ukwuani "</i></strong> as some of the LGA PU has no data leading to an empty table result</p>
		</div>
	</div>
</div>

<script>
	$('#lga').on('change', function() {
  	var lga_id = this.value;
  	window.location.href = "<?php echo base_url().'lga/' ?>" + lga_id;
})
</script>