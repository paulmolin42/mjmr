<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_627348c44e005cd3b88e3adef3b10a49a37c1014120d00a52bc8831b47340109 extends Twig_Template
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
        $__internal_3c676e40bccd98d3568149ec7dec32f8db6a42c0eeea16d86271a3afbeffdadd = $this->env->getExtension("native_profiler");
        $__internal_3c676e40bccd98d3568149ec7dec32f8db6a42c0eeea16d86271a3afbeffdadd->enter($__internal_3c676e40bccd98d3568149ec7dec32f8db6a42c0eeea16d86271a3afbeffdadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3c676e40bccd98d3568149ec7dec32f8db6a42c0eeea16d86271a3afbeffdadd->leave($__internal_3c676e40bccd98d3568149ec7dec32f8db6a42c0eeea16d86271a3afbeffdadd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
