<table class="mainTable" border="0" cellspacing="0" cellpadding="0">
<thead>
<tr>
<th>App Name</th>
<th>App Id</th>
<th>App Secret</th>
<th>Callback URL</th>
<th></th>
</tr>

<?php foreach ($apps as $app): ?>
<tr>
<td><?=$app->app_name?></td>
<td><?=$app->app_id?></td>
<td><?=$app->app_secret?></td>
<td><?=$app->callback_url?></td>
<td><a href="<?=re_cp_url('delete_app'.AMP.'app_id='.$app->id)?>">Delete</a></td>
</tr>
<?php endforeach; ?>

</table>