<?php

namespace GarageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;



class FicheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datefiche', DateTimeType::class, array(
                'format' => \IntlDateFormatter::LONG,
                'widget' => 'single_text',

                'data' => new \DateTime("now")))
            ->add('prestation',TextareaType::class)
            ->add('Client', EntityType::class, array(
                'class' => 'GarageBundle:Compte',
                'choice_label' => 'prenomprop'))
            ->add('Emp', EntityType::class, array(
                'class' => 'GarageBundle:Employe',
                'choice_label' => 'prenomemp'))
            ->add('diagfiche',TextareaType::class)
            ->add('solutionfiche',TextareaType::class)
            ->add('typereparation',TextareaType::class)
            ->add('statutfiche',HiddenType::class)
            ->add('Pieces', EntityType::class, array(
                'class' => 'GarageBundle:Piece',
                'choice_label' => 'refpiece',
                'multiple' => true 
        ))        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GarageBundle\Entity\Fiche'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'garagebundle_fiche';
    }


}
