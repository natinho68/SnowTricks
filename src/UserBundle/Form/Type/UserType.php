<?php

namespace UserBundle\Form\Type;

use AppBundle\AppBundle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Entity\Image;

class UserType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('profilePic', 'AppBundle\Form\Type\ImageType');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

    public function getBlockPrefix()
    {
        return 'fos_user_profile_edit';
    }

}
