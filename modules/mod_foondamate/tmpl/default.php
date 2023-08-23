<?php
defined('_JEXEC') or die;

// Access the module parameters
$param = $params->get('param_name');
?>
	<form action="" method="post">
		<label for="equation">Enter the equation:</label>
		<input type="text" id="equation" name="equation">
		<input type="submit" value="Solve">
	</form>
<?php
print_r($list);

?>