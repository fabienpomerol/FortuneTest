<?php

/* OzeoOzeoBundle::default.html.twig */
class __TwigTemplate_9e4ca5353e3ec183c9abc3fb1a3a858b extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'menubar' => array($this, 'block_menubar'),
            'header' => array($this, 'block_header'),
            'row' => array($this, 'block_row'),
            'footer' => array($this, 'block_footer'),
            'container' => array($this, 'block_container'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "::base.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_menubar($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"topbar\">
      <div class=\"fill\">
        <div class=\"container\">
          <a class=\"brand\" href=\"#\">Ozeo Web</a>
          <ul class=\"nav\">
            <li ";
        // line 10
        if (array_key_exists("is_homepage", $context)) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("OzeoBundle_homepage"), "html");
        echo "\">Accueil</a></li>
            <li><a href=\"#tralal\">Top 10</a></li>
            <li ";
        // line 12
        if (array_key_exists("is_new", $context)) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("OzeoBundle_new"), "html");
        echo "\">Ajouter</a></li>
          </ul>
        </div>
      </div>
    </div>
  ";
    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        // line 23
        echo "      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class=\"hero-unit\">
        <h1>Ozeo Fortunes</h1>
        <p>Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        <p><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("OzeoBundle_new"), "html");
        echo "\" class=\"btn primary large\">Ajouter une fortune &raquo;</a></p>
      </div>
      ";
    }

    // line 35
    public function block_row($context, array $blocks = array())
    {
        // line 36
        echo "
      ";
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "        <footer>
          <p>&copy; Powered by Symfony2 & Propel ORM</p>
        </footer>
      ";
    }

    // line 19
    public function block_container($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"container\">

      ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 30
        echo "
      <div class=\"alert-message success\">
        <a class=\"close\" href=\"#\">×</a>
        <p><strong>Votre fortune a bien été enregistrée</strong>. Bien joué !.</p>
      </div>
      ";
        // line 35
        $this->displayBlock('row', $context, $blocks);
        // line 38
        echo "
      ";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
        // line 44
        echo "
    </div> <!-- /container -->
    ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayBlock('menubar', $context, $blocks);
        // line 18
        echo "  ";
        // line 19
        echo "  ";
        $this->displayBlock('container', $context, $blocks);
        // line 47
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OzeoOzeoBundle::default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
