<div class="container-fluid" style="min-height: 598px; padding: 0px">
<?php
echo form_open('city/delete_city','class="form" role="form"');?>
	<div class="col-md-3 col-lg-4 col-sm-2 hidden-xs"></div>
	<div class="col-md-6 col-lg-4 col-sm-8">
<table class="table">
	<thead>
		<tr>
			<th style="border-bottom: none">
				Delete City
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="border-top: none">
				<select name="city_id" class="form-control" >
					<optgroup label="">
						<option value="<?php echo $_POST['city_id']?>"><?php echo $_POST['city']?></option>
						<?php $counter=0;
						foreach($cities as $row){ ?>
							<option value="<?php echo $row->city_id;?>"><?php echo $row->city.' ('.$row->country.')';?></option>
						<?php $counter++; } ?>
					</optgroup>
				</select>
			</td>
		</tr>
		<tr>
			<td style="border-top: none">
				<button type="submit" class="btn btn-success"><?php echo $title;?></button>
				<button type="reset" class="btn btn-default">Refresh <i class="fa fa-refresh"></i></button>
			</td>
		</tr>
	</tbody>
</table>
<?php 
if (form_error('city'))
{ ?>
	<div class="alert alert-danger"><?php echo form_error('city');?></div>
<?php
}
?>
</div>
<div class="col-md-3 col-lg-4 col-sm-2 hidden-xs"></div>
<?php echo form_close();
?>
</div>
