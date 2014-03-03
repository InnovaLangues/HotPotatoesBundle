<?php

namespace Innova\HotPotatoesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HotPotatoesType extends AbstractType
{
    public function getName()
    {
        return 'innova_hotpotatoes';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array ('required' => true));
        $builder->add('description', 'textarea', array ('required' => false));
    
        $builder->add('file', 'file', array ('required' => true, 'mapped' => false));
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array (
            'data_class' => 'Innova\HotPotatoesBundle\Entity\HotPotatoes',
        ));
    
        return $this;
    }
}