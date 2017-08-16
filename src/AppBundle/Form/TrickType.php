<?php

namespace AppBundle\Form;

use AppBundle\Entity\Image;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrickType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date',      DateTimeType::class)
            ->add('name',     TextType::class)
            ->add('author',    TextType::class)
            ->add('description',   TextareaType::class)
            ->add('images', CollectionType::class, array(
                'entry_type' => ImageType::class,
                'allow_add' => true,
                'by_reference' => false,
                'allow_delete' => true
            ))
            ->add('videos', CollectionType::class, array(
                'entry_type' => VideoType::class,
                'allow_add' => true,
                'by_reference' => false,
                'allow_delete' => true

            ))
            ->add('categories', EntityType::class, array(
                'class'        => 'AppBundle:Category',
                'choice_label' => 'name',
                'multiple'     => true,
            ))
            ->add('save',      SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Trick'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_trick';
    }


}
