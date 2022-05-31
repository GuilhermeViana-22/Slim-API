<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\DAO\CodeeasyGerenciadorDeLojas\LojasDAO;

final class ProductController
{
  final  public function getProducts(Request $resquest, Response $response, $args = array()) : Response
    {    
      
        $lojasDAO = new LojasDAO();
        $lojasDAO->teste();

        return $response;
    }
}
