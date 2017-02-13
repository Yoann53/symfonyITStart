<?php

namespace MonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PersonneType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('civilite', ChoiceType::class, array(
                'choices'  => array(
                    'Monsieur' => 'Monsieur',
                    'Madame' => 'Madame'
                ),
                'required' => true
            ))
            ->add('nom', TextType::class, array(
                'required' => true
            ))
            ->add('prenom', TextType::class, array(
                'required' => true
            ))
            ->add('dateNaissance', DateType::class, array(
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd'
            ))
            ->add('adresse', TextType::class, array(
                'required' => true
            ))
            ->add('codePostal', TextType::class, array(
                'required' => true
            ))
            ->add('ville', TextType::class, array(
                'required' => true
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MonBundle\Entity\Personne'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'monbundle_personne';
    }


}
