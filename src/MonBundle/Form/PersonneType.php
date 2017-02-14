<?php

namespace MonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
                'expanded' => true,
                'required' => true,
                'label' => "Civilité"
            ))
            ->add('nom', TextType::class, array(
                'required' => true
            ))
            ->add('prenom', TextType::class, array(
                'required' => true
            ))
            ->add('dateNaissance', BirthdayType::class, array(
                'years' => range(1950,2017),
                'label' => 'Date de naissance'
            ))
            ->add('adresse', TextType::class, array(
                'required' => true
            ))
            ->add('codePostal', TextType::class, array(
                'required' => true
            ))
            ->add('ville', TextType::class, array(
                'required' => true
            ))
            ->add('enregistrer', SubmitType::class);
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
