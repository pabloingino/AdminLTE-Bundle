<?php

/* AppBundle:Pruebas:index.html.twig */
class __TwigTemplate_0f5542376bf6ee86f08255ecd04867c91028f020b1baa2416eb25b903683c67a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc65f5c2032c5fd1403dc1b47230dc0d61bbe5897d103ae4821cdfa7b2fd6777 = $this->env->getExtension("native_profiler");
        $__internal_bc65f5c2032c5fd1403dc1b47230dc0d61bbe5897d103ae4821cdfa7b2fd6777->enter($__internal_bc65f5c2032c5fd1403dc1b47230dc0d61bbe5897d103ae4821cdfa7b2fd6777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pruebas:index.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        
        $__internal_bc65f5c2032c5fd1403dc1b47230dc0d61bbe5897d103ae4821cdfa7b2fd6777->leave($__internal_bc65f5c2032c5fd1403dc1b47230dc0d61bbe5897d103ae4821cdfa7b2fd6777_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Pruebas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{texto}}*/
