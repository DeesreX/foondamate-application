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
	<div class="card" style="padding: 20px; margin-top: 10px;">
		<?php echo $equation . "<br>"; ?>
	</div>
<?php endforeach;?>
</div>


<style>
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        font-family: Arial, sans-serif;
    }
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    .card {
        background-color: #f5f5f5;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .card > * {
        margin-bottom: 0; /* Remove extra spacing within the card */
    }
</style>
