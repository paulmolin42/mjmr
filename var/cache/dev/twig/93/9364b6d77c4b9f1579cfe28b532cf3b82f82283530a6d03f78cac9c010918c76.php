<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_db008ffafe56008e6b9697558f0b5068dd8cae3f91e60486a8e3f30d2ad0889e extends Twig_Template
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
        $__internal_e53a3d5cfb352173f9aab21fb27dd216783baf7f96af0022ffc891b74457661e = $this->env->getExtension("native_profiler");
        $__internal_e53a3d5cfb352173f9aab21fb27dd216783baf7f96af0022ffc891b74457661e->enter($__internal_e53a3d5cfb352173f9aab21fb27dd216783baf7f96af0022ffc891b74457661e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e53a3d5cfb352173f9aab21fb27dd216783baf7f96af0022ffc891b74457661e->leave($__internal_e53a3d5cfb352173f9aab21fb27dd216783baf7f96af0022ffc891b74457661e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
