<?php
defined('_JEXEC') or die;

// Access the module parameters
$param = $params->get('param_name');
?>

<?php
foreach ($list as $step){
    echo $step . "<br>";
}

?>