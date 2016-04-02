<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e7ded2645cb796c57ab604fc540049404ddc2d9ff61ae8a95246362aae17d731 extends Twig_Template
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
        $__internal_830f12c1beaf0044682c58492fb25806c3132832a0f73859b76092b5e86dcdbf = $this->env->getExtension("native_profiler");
        $__internal_830f12c1beaf0044682c58492fb25806c3132832a0f73859b76092b5e86dcdbf->enter($__internal_830f12c1beaf0044682c58492fb25806c3132832a0f73859b76092b5e86dcdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_830f12c1beaf0044682c58492fb25806c3132832a0f73859b76092b5e86dcdbf->leave($__internal_830f12c1beaf0044682c58492fb25806c3132832a0f73859b76092b5e86dcdbf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
