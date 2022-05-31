<?php
namespace App;

use App\Controller\ProductController;
use App\slimConfiguration;

$app = new \Slim\App(slimConfiguration());
//==================
// digita o nome da rota e a função que deseja chamar
$app->get('/', ProductController::class .':getProducts');
//==================
$app->run();