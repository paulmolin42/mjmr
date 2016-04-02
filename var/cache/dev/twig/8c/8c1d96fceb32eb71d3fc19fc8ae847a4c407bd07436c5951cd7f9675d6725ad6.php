<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bef6108a9939bfcc7861039d2a4d31e2513757dd1341ddedc6e8b2a6372c7b57 extends Twig_Template
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
        $__internal_04bee651e7daaec58463b92ec4898fd6d7bee7d1a8b79227ed4163887dcaccda = $this->env->getExtension("native_profiler");
        $__internal_04bee651e7daaec58463b92ec4898fd6d7bee7d1a8b79227ed4163887dcaccda->enter($__internal_04bee651e7daaec58463b92ec4898fd6d7bee7d1a8b79227ed4163887dcaccda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_04bee651e7daaec58463b92ec4898fd6d7bee7d1a8b79227ed4163887dcaccda->leave($__internal_04bee651e7daaec58463b92ec4898fd6d7bee7d1a8b79227ed4163887dcaccda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
