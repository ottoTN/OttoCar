<?php

namespace GarageBundle\Form;

use GarageBundle\Entity\Piece;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class FournisseurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomfourn')->add('adressefourn')->add('mailfourn')->add('telfourn')->add('Piece', EntityType::class, array(
                'class' => 'GarageBundle:Piece',
                'choice_label' => 'refpiece'
        ));
    }
    
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GarageBundle\Entity\Fournisseur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'garagebundle_fournisseur';
    }


}
