<?php

namespace App\Form;

use App\Entity\Option;
use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('surface')
            ->add('rooms')
            ->add('bedrooms')
            ->add('floor')
            ->add('price')
            ->add('heat', ChoiceType::class, [
                "choices" => $this->getChoices()
            ])
            ->add('options', EntityType::class, [
                "class" => Option::class,
                "choice_label" => "name",
                "multiple" => true,
                'required' => false
            ])
            ->add('pictureFiles', FileType::class, [
                "required" => false,
                "multiple" => true
            ])
            ->add('city')
            ->add('address')
            ->add('postal_code')
            ->add('lat', HiddenType::class)
            ->add('lng', HiddenType::class)
            ->add('sold')
            
            //->add('updatedAt', DateTimeType::class , array( 
                //'attr' => array('style'=>'display:none;'),
                //'widget' => 'single_text'
                //))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
            'translation_domain' => 'forms'
        ]);
    }

    public function getChoices()
    {
        return array_flip(Property::HEAT); 
    }
}
