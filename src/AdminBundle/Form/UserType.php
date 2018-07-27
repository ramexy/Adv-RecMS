<?php

namespace AdminBundle\Form;

use AdminBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fullname', TextType::class)
                ->add('username', TextType::class)
                ->add('email', EmailType::class)
                ->add('password', PasswordType::class)
                ->add('phone', NumberType::class)
                ->add('position', ChoiceType::class, array('placeholder' => 'Choose an option',
                    'choices' => array('technician' => 'Technician', 'secretary' => 'Secretary', 'admin' => 'admin')
                ))
                ->getForm()
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_user';
    }


}
