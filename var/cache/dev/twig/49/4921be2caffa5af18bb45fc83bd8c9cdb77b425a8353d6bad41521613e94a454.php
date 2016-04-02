<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_09d97dc4adc77d9fa7dfc76cc115d3b2a0c17ceba01c43b96007ce9f7e0ded18 extends Twig_Template
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
        $__internal_0fd522aa9ea4cda5a1fa166b6cb6cea690bbc299ddff1e06f95ea4af27de8826 = $this->env->getExtension("native_profiler");
        $__internal_0fd522aa9ea4cda5a1fa166b6cb6cea690bbc299ddff1e06f95ea4af27de8826->enter($__internal_0fd522aa9ea4cda5a1fa166b6cb6cea690bbc299ddff1e06f95ea4af27de8826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0fd522aa9ea4cda5a1fa166b6cb6cea690bbc299ddff1e06f95ea4af27de8826->leave($__internal_0fd522aa9ea4cda5a1fa166b6cb6cea690bbc299ddff1e06f95ea4af27de8826_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
