<div><h2>Please select a User</h2>
<?php foreach ($users as $user):?>
<div class="user">

<?php echo $html->link($user['User']['name'],'users/view/'.$user['User']['id']);
echo "<br /><br />";?>

</div>
<?php endforeach?>
</div>