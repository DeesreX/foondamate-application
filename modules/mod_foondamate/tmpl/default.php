<?php
defined('_JEXEC') or die;

// Access the module parameters
$param = $params->get('param_name');
?>

<div class="container">
	<form action="" method="post">
		<label for="equation">Enter the equation:</label>
		<input type="text" id="equation" name="equation">
		<input type="submit" value="Solve">
	</form>
</div>
<div class="container">
<?php

foreach ($list as $equation):
	?>
	<div class="card" style="padding: 20px; margin: 10px;">
		<?php echo $equation . "<br>"; ?>
	</div>
<?php endforeach;?>
</div>
