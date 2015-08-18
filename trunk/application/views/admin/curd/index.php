<div id="fw_container" class="ui-helper-clearfix" style="width:100%;float:left">
<div class="full_width" style="width:100%">
<table id="datatable"  >
	<thead>
		<tr>
			<?php foreach($fields as $field): ?>
				<th><?php echo (method_exists($orm = ORM::Factory($name), 'formo') ? Arr::path($orm->formo(), $field.'.label', __($field)) : __($field)); ?></th>
			<?php endforeach; ?>
			<th><?php echo __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		
		foreach($elements as $element): ?>
			<tr>
				<?php foreach($fields as $field): ?>
					<td><?php echo html::chars($element->$field) ?></td>
				<?php endforeach; ?>
				<td>
				    <?php
				    foreach ($actions as $action => $name) {
				        echo "<a href=\"".
				        Route::url($route, array('controller'=> Request::current()->controller(), 'action'=>$action)).'?id='
				        .$element->id."&tm=".time()."\" >".$name."</a>";
				    }
				    ?>
					<a href="<?php echo Route::url($route, array('controller'=> Request::current()->controller(), 'action'=>'update')).'?id='.$element->id .'&tm='.time(); ?>">
						<?php echo __('Edit') ?>
					</a>
					<a href="<?php echo Route::url($route, array('controller'=> Request::current()->controller(), 'action'=>'delete')).'?id='.$element->id .'&tm='.time();  ?>">
						<?php echo __('Delete') ?>
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>
</div>

<a href="<?php echo Route::url($route, array('controller'=> Request::current()->controller(), 'action'=>'create')) ?>">
	<?php echo __("Create") ?>
</a>
<script src="/assets/default/3rdparty/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function() {
	$('#datatable').dataTable( {
					"bJQueryUI": true,
					"iDisplayLength":50,
	} );
} );
</script>
