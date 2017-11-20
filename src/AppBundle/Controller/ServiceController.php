<?php

namespace AppBundle\Controller;

use AppBundle\Service\My_service;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ServiceController extends Controller
{

    public function indexAction()
    {
        $my_service = $this->get(My_service::class);
        $my_service->getHola();
        exit;
    }

    public function userAction()
    {
        $my_service = $this->get(My_service::class);
        $my_service->newUser();
        echo "Nuevo usuario creado.";
        exit;
    }

    public function ceroAction(){
        return $this->render('probando.html.twig');
    }
}
