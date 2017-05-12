<?php

namespace SaintCyr\ClientSynchronizerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SaintCyrClientSynchronizerBundle:Default:index.html.twig');
    }
}
