<?php

/* AcmeGedBundle:Default:index.html.twig */
class __TwigTemplate_766830f62e740e67c7334f774c967886ec02ebf36369d7f1f7cf90fca2980802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo "xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>xcvsdf sdf sd<br>";
    }

    public function getTemplateName()
    {
        return "AcmeGedBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  29 => 2,);
    }
}
