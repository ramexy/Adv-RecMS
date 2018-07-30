<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexAction()
    {
     
        return $this->render('admin/admin_login.html.twig');
    }

    /**
     * @Route("/home", name="admin_home")
     */
    public function homeAction(){
        return $this->render('admin/admin_home.html.twig');
    }
}
