<?php

require __DIR__.'/vendor/autoload.php';


use AppCrm\dao\UsuarioModel;
use AppCrm\dao\LeadModel;
use AppCrm\dao\ContratoModel;


$contratoModel = new ContratoModel();
print_r($contratoModel);
echo '<br>';

$leadModel = new LeadModel();
print_r($leadModel);
echo '<br>';

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);
echo '<br>';


