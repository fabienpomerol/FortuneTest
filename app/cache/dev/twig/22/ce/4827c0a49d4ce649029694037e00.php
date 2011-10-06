<?php

/* OzeoOzeoBundle:Default:index.html.twig */
class __TwigTemplate_22ce4827c0a49d4ce649029694037e00 extends Twig_Template
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
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'fortunes'));
        foreach ($context['_seq'] as $context['_key'] => $context['fortune']) {
            // line 5
            echo "    <div class=\"row\">
    <div class=\"span16\">
        <p>Ajouté le ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'fortune'), "createdAt", array(), "any", false), "html");
            echo "</p>
    </div>
    <div class=\"span4\">
        <p><strong>@FabienP</strong></p>
        <p>@JohnH</p>
    </div>
    <div class=\"span8\">
        <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'fortune'), "content", array(), "any", false), "html");
            echo "</p>
    </div>
    <div class=\"span2\">
        <h2>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'fortune'), "score", array(), "any", false), "html");
            echo "</h2>
        <p><a class=\"btn success\">+1</a>&nbsp;<a class=\"btn danger\">-1</a></p>
    </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fortune'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "OzeoOzeoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
