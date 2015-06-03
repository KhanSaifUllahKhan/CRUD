<div class="container-fluid" style="min-height: 598px; padding: 0px">
<?php 

if ($_POST['city_id']== NULL)
{
	redirect(base_url().'index.php/city/page_not_found') ;
}
echo form_open('city/update_city','class="form" role="form"');
?>
	<div class="col-md-3 col-lg-4 col-sm-2 hidden-xs"></div>
	<div class="col-md-6 col-lg-4 col-sm-8">
<table class="table">
	<thead>
		<tr>
			<th style="border-bottom: none">
				Update City
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="border-top: none">
				<input type="hidden" id="city" name="city_id"  value="<?php echo $_POST['city_id']; ?>" class="form-control" />
				<div class="form-group has-success has-feedback">
  <input type="text" class="form-control" aria-describedby="">
  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
</div>
				<div class="form-group has-success has-feedback">
				<input type="text" id="city" name="city"  value="<?php echo $_POST['city']; ?>" class="form-control" />
				<span class='glyphicon glyphicon-ok fonrm-control-feedback' aria-hidden='true'></span>
				</div>
			</td>
		</tr>
		<tr>
			<td style="border-top: none">
				<select name="country_id" class="form-control">
					<optgroup label="">
						<option value="<?php echo $_POST['country_id']?>" selected><?php echo $_POST['country']?></option>
						<?php $counter=0;
						foreach($countries as $row){ ?>
							<option value="<?php echo $row->country_id;?>"><?php echo $row->country;?></option>
						<?php $counter++; } ?>
					</optgroup>
				</select>
			</td>
		</tr>
		<tr>
			<td style="border-top: none">
				<button type="submit" class="btn btn-success"><?php echo $title;?> <i class="fa fa-exchange"></i></button>
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
