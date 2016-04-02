<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ac6c129a0f4abc7e7ca4efa6d156ae032e950f9fa92c677b77e1c88ac80c4305 extends Twig_Template
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
        $__internal_90e13afec3814eeeb55b027aa6699cb4410e9752f06012ec87d097febd37c59c = $this->env->getExtension("native_profiler");
        $__internal_90e13afec3814eeeb55b027aa6699cb4410e9752f06012ec87d097febd37c59c->enter($__internal_90e13afec3814eeeb55b027aa6699cb4410e9752f06012ec87d097febd37c59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_90e13afec3814eeeb55b027aa6699cb4410e9752f06012ec87d097febd37c59c->leave($__internal_90e13afec3814eeeb55b027aa6699cb4410e9752f06012ec87d097febd37c59c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
