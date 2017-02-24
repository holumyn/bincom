
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<p><a href="<?php echo base_url().'question/2' ?>">&larr; Back</a></p>
			<?php // print_r($lg_pu_total) ?><hr>
		
			<h3>Polling Result Total for "<?php if(isset($lg)): echo $lg[0]['lga_name'];	endif; ?>" LGA</h3>
				<?php if(isset($lg_pu_total)): ?>
					 <table class="table table-hover">
					    <thead>
					      <tr>
					      	<th>S/N</th>
					        <th>Polling units</th>
					        <th>Total Score</th>
					      
					      </tr>
					    </thead>
					    <tbody>
					    <?php $count = 1;  $total = 0; ?>
					    <?php foreach($lg_pu_total as $lg_pu => $pu_total): ?>
					      <tr>
					      	<td><?php echo $count ?></td>
					        <td><?php echo $lg_pu ?></td>
					        <td><?php echo $pu_total ?></td>
					        <?php $total += $pu_total ?>
					      </tr>
					      <?php $count++ ?>
					      <?php endforeach ?>
					      <tr>
					      	<td><strong>Grand Total</strong></td>
					      	<td></td>
					      	<td><strong><?php echo $total ?></strong></td>
					      </tr>
					    </tbody>
					  </table>
					
			    	
			    <?php endif ?>

		</div>
	</div>
</div>
