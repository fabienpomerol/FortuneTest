<?php

namespace Ozeo\OzeoBundle\Twig\Extension;

use Ozeo\OzeoBundle\Model\Fortune;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Locale\Locale;

class OzeoExtension extends \Twig_Extension
{

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'category_path'           => new \Twig_Function_Method($this, 'generateCategoryPath'),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            'format_currency'      => new \Twig_Filter_Method($this, 'formatCurrency', array('is_safe' => array('html'))),
        );
    }

    public function getActors(Fortune $fortune)
    {
        fore
        return $this->routingHelper->generateCatalogueCategoryUrl($category, false);
    }

}
