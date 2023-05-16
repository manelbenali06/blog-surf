<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           
            ->add('name', TextType::class, [
                "label" => "Nom de la catégorie",
            ])
            //->add('slug')
            ->add('parent')
            //->add('captcha', Recaptcha3Type::class, [
            //    'constraints' => new Recaptcha3(),
            //    'action_name' => 'category',
                //'script_nonce_csp' => $nonceCSP,
            //    'locale' => 'fr',
            //])
            ->add('Valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}