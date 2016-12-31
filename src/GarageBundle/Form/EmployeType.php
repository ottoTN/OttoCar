<?php

namespace GarageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EmployeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('cinemp')
                ->add('nomemp')
                ->add('prenomemp')
                ->add('statutsoc', ChoiceType::class, array(
                    'choices' => array(
                        'Married' => 'Married',
                        'Single' => 'Single',
                        'Divorced'   => 'Divorced',
                        'Widow(er)' => 'Widow(er)'
                    ),
                ))
                ->add('adresseemp',TextareaType::class)
                ->add('datenaissemp')
                ->add('telemp')
                ->add('typeemp', ChoiceType::class, array(
                    'choices' => array(
                        'Receptionnist' => 'Receptionnist',
                        'Worker' => 'Worker',
                        'Divorced'   => 'Divorced',
                        'Widow(er)' => 'Widow(er)'
                    ),
                ))
                ->add('salaire');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GarageBundle\Entity\Employe'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'garagebundle_employe';
    }


}
