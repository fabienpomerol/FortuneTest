<?php

/* OzeoOzeoBundle:Default:new.html.twig */
class __TwigTemplate_9ccd01f839691d880fc4009d164954d4 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "OzeoOzeoBundle::default.html.twig";
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

    // line 3
    public function block_row($context, array $blocks = array())
    {
        // line 4
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("OzeoBundle_new"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">

    <div class=\"row\">
      <div class=\"span16\">
      <h2>Votre fortune</h2><br/>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"span11\">
          ";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "content", array(), "any", false), array("attr" => array("class" => "xxlarge")));
        echo "
       <span class=\"help-block\">
         <br/>
         procédez de la façon suivante : @john blablabla @kelly YEAH!!!!
         <br/>
         le nom de la personne précédé d'un @ détermine l'orateur
       </span>
      </div>
      <div class=\"span5\">
        <input type=\"submit\" class=\"btn large primary\" />
      </div>
    </div>
    ";
        // line 25
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
  </form>
";
    }

    public function getTemplateName()
    {
        return "OzeoOzeoBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
