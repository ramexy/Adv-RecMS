<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/", name="login")
     */
    public function loginAction()
    {
        return $this->render('user/user_login.html.twig');
    }

    /**
     * @Route("/logout")
     */
    public function logoutAction()
    {
        throw new \RuntimeException('This should never be called');
    }

    /**
     * @Route("/homepage", name="user_home")
     */
    public function activityAction(){
        return $this->render('user/user_home.html.twig');
    }
}