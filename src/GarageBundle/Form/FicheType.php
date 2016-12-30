<?php

namespace GarageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;



class FicheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('datefiche')
            ->add('prestation')
            ->add('Client', EntityType::class, array(
                'class' => 'GarageBundle:Compte',
                'choice_label' => 'prenomprop'))
            ->add('Emp', EntityType::class, array(
                'class' => 'GarageBundle:Employe',
                'choice_label' => 'prenomemp'))
            ->add('diagfiche')->add('solutionfiche')->add('typereparation')->add('statutfiche')
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
