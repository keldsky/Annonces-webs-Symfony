<?php

/**
 * Created by PhpStorm.
 * User: gaby
 * Date: 05/02/2018
 * Time: 10:33
 */
namespace AppBundle\Form;
use AppBundle\Entity\Annonce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class AnnonceForm_ extends AbstractType
{

    private $date;

    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $this->date = new \DateTime('now');
        $builder
            ->add('thetype',  ChoiceType::class, array( 'choices' => array(
                'Offres' => $options['type'][0],
                'Demandes' => $options['type'][1],
            )))
            ->add('thecategorie',  ChoiceType::class, array( 'choices' => array(
                'Offre d\'emploi' => $options['categ'][0],
                'Prestations de services' => $options['categ'][1],
            )))
            ->add('titre',TextType::class)
            ->add('texte',TextareaType::class)
            ->add('prix',TextType::class)
            ->add('codepostal',TextType::class)
            ->add('adresse',TextType::class)
            ->add('date_annonce', HiddenType::class, array(
                'data' =>$this->date->format('Y-m-d H:i:s')))
           ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Annonce::class,
            'type' => null,
            'categ' => null
        ));
    }
}