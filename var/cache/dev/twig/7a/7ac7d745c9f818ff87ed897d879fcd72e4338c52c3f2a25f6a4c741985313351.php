<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_64c91552450ffbedb8872615633844ac09395222b292808dfbee9ebda165dd81 extends Twig_Template
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
        $__internal_489e35547d7413be6444008f3ce9be9baea7e6758cbde72ed6880ea7c2765325 = $this->env->getExtension("native_profiler");
        $__internal_489e35547d7413be6444008f3ce9be9baea7e6758cbde72ed6880ea7c2765325->enter($__internal_489e35547d7413be6444008f3ce9be9baea7e6758cbde72ed6880ea7c2765325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_489e35547d7413be6444008f3ce9be9baea7e6758cbde72ed6880ea7c2765325->leave($__internal_489e35547d7413be6444008f3ce9be9baea7e6758cbde72ed6880ea7c2765325_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
