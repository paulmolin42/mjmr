<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1c0c8af47d56161516c9a1751f7cc9bd30188f055cc4fc1a852cff92d6244185 extends Twig_Template
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
        $__internal_da19409e4bbcfb68d1d825f2137cf4ea0a1c5ce0adb462acf793ede025d60d69 = $this->env->getExtension("native_profiler");
        $__internal_da19409e4bbcfb68d1d825f2137cf4ea0a1c5ce0adb462acf793ede025d60d69->enter($__internal_da19409e4bbcfb68d1d825f2137cf4ea0a1c5ce0adb462acf793ede025d60d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_da19409e4bbcfb68d1d825f2137cf4ea0a1c5ce0adb462acf793ede025d60d69->leave($__internal_da19409e4bbcfb68d1d825f2137cf4ea0a1c5ce0adb462acf793ede025d60d69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
