<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\Devices;
use Symfony\Component\HttpFoundation\Request;

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

    /**
     * @Route("/devices", name="devices")
     */
    public function showDevices(Request $request){
//        $repository = $this->getDoctrine()->getRepository(Devices::class);
//
//        $device = $repository->findAll();
//
        $em = $this->getDoctrine()->getManager();
        $queryBulider = $em->getRepository('UserBundle:Devices')->createQueryBuilder('devices');
        $queryBulider->where('devices.customerName LIKE :customerName OR devices.sN LIKE :sN')
            ->setParameter('customerName', '%' .$request->query->getAlnum('filter').'%')
            ->setParameter('sN', '%' .$request->query->getAlnum('filter').'%');
        $query = $queryBulider->getQuery();
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 30)
        );
        return $this->render("user/devices.html.twig",[
            'devices' => $result,
        ]);
    }
}