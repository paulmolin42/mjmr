<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b92b926b3a3c412de0372198a8eaace32e76e2bd4fbe961e640b0ae151ec8137 extends Twig_Template
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
        $__internal_6b27b3aacaba5823545cc324df4c54f92b5672356fd71b2d1b369551476d7490 = $this->env->getExtension("native_profiler");
        $__internal_6b27b3aacaba5823545cc324df4c54f92b5672356fd71b2d1b369551476d7490->enter($__internal_6b27b3aacaba5823545cc324df4c54f92b5672356fd71b2d1b369551476d7490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6b27b3aacaba5823545cc324df4c54f92b5672356fd71b2d1b369551476d7490->leave($__internal_6b27b3aacaba5823545cc324df4c54f92b5672356fd71b2d1b369551476d7490_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
