<?php

namespace AppBundle\Controller;

use AppBundle\Service\My_service;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ServiceController extends Controller
{

    public function indexAction(My_service $my_service)
    {
        $my_service->getHola();
        exit;
    }
}
