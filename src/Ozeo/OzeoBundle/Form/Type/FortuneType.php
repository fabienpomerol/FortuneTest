<?php

namespace Ozeo\OzeoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class FortuneType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('content');
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Ozeo\OzeoBundle\Model\Fortune',
        );
    }

    public function getName()
    {
        return 'fortune';
    }
}
