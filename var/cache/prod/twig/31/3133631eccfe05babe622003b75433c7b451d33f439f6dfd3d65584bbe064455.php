<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_04268e69ec49c8f1d8ce7158f0895621a6f60922b53f9d4756f93c5da088709d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72edb1595c23948bde614e9a20f50bbe4c461bf70457ad486f05609ae3d6be34 = $this->env->getExtension("native_profiler");
        $__internal_72edb1595c23948bde614e9a20f50bbe4c461bf70457ad486f05609ae3d6be34->enter($__internal_72edb1595c23948bde614e9a20f50bbe4c461bf70457ad486f05609ae3d6be34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72edb1595c23948bde614e9a20f50bbe4c461bf70457ad486f05609ae3d6be34->leave($__internal_72edb1595c23948bde614e9a20f50bbe4c461bf70457ad486f05609ae3d6be34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f03e0692efbf0cc10fc0445823a376817464723b321b047c0bfe3404a0ed2775 = $this->env->getExtension("native_profiler");
        $__internal_f03e0692efbf0cc10fc0445823a376817464723b321b047c0bfe3404a0ed2775->enter($__internal_f03e0692efbf0cc10fc0445823a376817464723b321b047c0bfe3404a0ed2775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f03e0692efbf0cc10fc0445823a376817464723b321b047c0bfe3404a0ed2775->leave($__internal_f03e0692efbf0cc10fc0445823a376817464723b321b047c0bfe3404a0ed2775_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb925c6f7df64818d461656da67b1498d3230015e6440d8abd8e26b443226aa9 = $this->env->getExtension("native_profiler");
        $__internal_bb925c6f7df64818d461656da67b1498d3230015e6440d8abd8e26b443226aa9->enter($__internal_bb925c6f7df64818d461656da67b1498d3230015e6440d8abd8e26b443226aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb925c6f7df64818d461656da67b1498d3230015e6440d8abd8e26b443226aa9->leave($__internal_bb925c6f7df64818d461656da67b1498d3230015e6440d8abd8e26b443226aa9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2d656bcc10bb7a5d547f722926c14ce5068df73dcb93ec3d8007278a05cfaf7 = $this->env->getExtension("native_profiler");
        $__internal_a2d656bcc10bb7a5d547f722926c14ce5068df73dcb93ec3d8007278a05cfaf7->enter($__internal_a2d656bcc10bb7a5d547f722926c14ce5068df73dcb93ec3d8007278a05cfaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a2d656bcc10bb7a5d547f722926c14ce5068df73dcb93ec3d8007278a05cfaf7->leave($__internal_a2d656bcc10bb7a5d547f722926c14ce5068df73dcb93ec3d8007278a05cfaf7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
