<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c1f943e7ed9059e2c0e0076ebcb5eef67292c7a79ab28a6988645f3e909b22e1 extends Twig_Template
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
        $__internal_c26041f625069b44e97df795b6bb5895f157f78fefdbfbe078ced6ecf7fc429b = $this->env->getExtension("native_profiler");
        $__internal_c26041f625069b44e97df795b6bb5895f157f78fefdbfbe078ced6ecf7fc429b->enter($__internal_c26041f625069b44e97df795b6bb5895f157f78fefdbfbe078ced6ecf7fc429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c26041f625069b44e97df795b6bb5895f157f78fefdbfbe078ced6ecf7fc429b->leave($__internal_c26041f625069b44e97df795b6bb5895f157f78fefdbfbe078ced6ecf7fc429b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
