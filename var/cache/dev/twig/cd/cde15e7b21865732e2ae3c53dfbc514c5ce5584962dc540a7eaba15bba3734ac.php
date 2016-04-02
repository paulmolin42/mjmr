<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ed6a87a1fffee29307d8a41a8114fe52d1db1fb5f25f4eaa3cd7510205fa80a4 extends Twig_Template
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
        $__internal_558b5ebee15d4bc0a8a008fc46b0d775f03f49b70a0ad8620497ae5e665410f1 = $this->env->getExtension("native_profiler");
        $__internal_558b5ebee15d4bc0a8a008fc46b0d775f03f49b70a0ad8620497ae5e665410f1->enter($__internal_558b5ebee15d4bc0a8a008fc46b0d775f03f49b70a0ad8620497ae5e665410f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_558b5ebee15d4bc0a8a008fc46b0d775f03f49b70a0ad8620497ae5e665410f1->leave($__internal_558b5ebee15d4bc0a8a008fc46b0d775f03f49b70a0ad8620497ae5e665410f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
