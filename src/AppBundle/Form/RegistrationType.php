<?php
/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 09/05/2018
 * Time: 09:20
 */

namespace AppBundle\Form;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom', TextType::class, array('label' => 'Nom',
                                    'label_attr' => array(
                                        'class' => 'control-label col-sm-2'
                                    ),
                                    'attr' => array(
                                        'class' => 'form-control'
                                    )));
        $builder->add('prenom',TextType::class, array('label' => 'Prenom'));
        $builder->add('cin',TextType::class, array('label' => 'Carte d\'identité Nationale'));
        $builder->add('sexe', ChoiceType::class,
            array('choices' => array(
                'Femme' => 'Femme',
                'Homme' => 'Homme',),'label' => 'Sexe',
                'multiple' => false, 'expanded' => true));
        $builder->add('telephone',TextType::class, array('label' => 'Téléphone'));
        $builder->add('image_url', FileType::class, array('label' => 'Photo de Profil'));
    }

    public function getParent() {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix() {
        return 'app_user_registration';
    }

    public function getName() {
        return $this->getBlockPrefix();
    }
}