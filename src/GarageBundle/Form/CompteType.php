<?php

namespace GarageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CompteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomprop')->add('prenomprop')->add('telprop')->add('adresseprop')->add('mailprop')->add('modelevoit',ChoiceType::class, [
    'choices' => []])->add('marquevoit',ChoiceType::class, [
    'choices' => []])->add('immatvoit')->add('cinprop')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GarageBundle\Entity\Compte'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'garagebundle_compte';
    }


}
