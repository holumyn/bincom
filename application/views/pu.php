
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<p><a href="<?php echo base_url().'question/1' ?>">&larr; Back</a></p>
			<h3>Polling Result for "<?php if(isset($pu)): echo $pu[0]['polling_unit_name'];	endif; ?>"</h3>
				<?php if(isset($polling_unit)): ?>
					 <table class="table table-hover">
					    <thead>
					      <tr>
					      	<th>S/N</th>
					        <th>Party</th>
					        <th>Score</th>
					        <th>Official</th>
					        <th>Date/Time</th>
					      </tr>
					    </thead>
					    <tbody>
					    <?php $count = 1 ?>
					    <?php foreach($polling_unit as $pu): ?>
					      <tr>
					      	<td><?php echo $count ?></td>
					        <td><?php echo $pu['party_abbreviation'] ?></td>
					        <td><?php echo $pu['party_score'] ?></td>
					        <td><?php echo $pu['entered_by_user'] ?></td>
					        <td><?php echo $pu['date_entered'] ?></td>
					      </tr>
					      <?php $count++ ?>
					      <?php endforeach ?>
					    </tbody>
					  </table>
					
			    	
			    <?php endif ?>
		</div>
	</div>
</div>
