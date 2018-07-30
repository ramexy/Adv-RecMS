<?php
/**
 * Created by PhpStorm.
 * User: kro
 * Date: 7/30/18
 * Time: 1:09 PM
 */

namespace AdminBundle\Controller;

use AdminBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class StaffController extends Controller
{
    /**
     * @Route("/staff", name="staff")
     */
    public function staffAction(){
        $staff = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('admin/admin_staff.html.twig',[
            'staffs' => $staff,
        ]);
    }
}