	<div id="delete_Camera<?php echo $pending_details_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-success">Do you want to APPROVE this Case?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-success" href="Approve_save.php<?php echo '?id='.$id; ?>&<?php echo 'Camera_id='.$Camera_id; ?>">Yes</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
