<?php

namespace Ozeo\OzeoBundle\Controller;

use Ozeo\OzeoBundle\Model\Fortune;
use Ozeo\OzeoBundle\Model\FortuneQuery;
use Ozeo\OzeoBundle\Form\Type\FortuneType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{

    public function indexAction()
    {
        $fortunes = FortuneQuery::create()
          ->orderById()
          ->find();

        $arrayFortune = array();
        foreach ($fortunes as $fortune) {
            $expFortunes = explode('@', $fortune->getContent());
            foreach($expFortunes as $expFortune)
            {
                $top = explode(' ', $expFortune);
                echo $top[0];
            }
        }

        return $this->render('OzeoOzeoBundle:Default:index.html.twig',array(
            'fortunes'    => $fortunes,
            'is_homepage' => true
        ));
    }

    public function newAction()
    {
        $fortune = new Fortune();
        $form = $this->createForm(new FortuneType(), $fortune);

        $request = $this->getRequest();

        if ('POST' == $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $fortune->save();

                return $this->redirect($this->generateUrl('OzeoBundle_homepage'));
            }
        }
        return $this->render('OzeoOzeoBundle:Default:new.html.twig', array(
            'form'   => $form->createView(),
            'is_new' => true
        ));
    }

    public function topAction()
    {
        $fortunes = FortuneQuery::create()
            ->orderByScore()
            ->limit(10)
            ->find();

        return $this->render('OzeoOzeoBundle:Default:index.html.twig',array(
            'fortunes'    => $fortunes,
            'is_topten' => true
        ));
    }
}
