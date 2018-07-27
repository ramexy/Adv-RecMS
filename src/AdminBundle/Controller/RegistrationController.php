<?php
/**
 * Created by PhpStorm.
 * User: kro
 * Date: 7/27/18
 * Time: 9:29 PM
 */

namespace AdminBundle\Controller;


use AdminBundle\Entity\User;
use AdminBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        //build the form
        $user = new User();
        $form = $this->createForm(UserType::class,$user);

        //handle the submit - will only happen on POST
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            //encode user password
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            //save the user to the database
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_registration');
        }


        return $this->render('admin/user_registration.html.twig', array('form' => $form->createView()));

    }

}