<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e28febf5114ff0e165f4b13b74af96c5c2ff889ca8dfd79cb0429b93657e5b9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a5e9790a01075ce46c57b5c68c0a147a0115d61d061edcff095b58e65abcf8c = $this->env->getExtension("native_profiler");
        $__internal_7a5e9790a01075ce46c57b5c68c0a147a0115d61d061edcff095b58e65abcf8c->enter($__internal_7a5e9790a01075ce46c57b5c68c0a147a0115d61d061edcff095b58e65abcf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a5e9790a01075ce46c57b5c68c0a147a0115d61d061edcff095b58e65abcf8c->leave($__internal_7a5e9790a01075ce46c57b5c68c0a147a0115d61d061edcff095b58e65abcf8c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d46e36e3348f7ea1e7548dfcb247d23fbe9d1226900f23041f3749a29b8fccb = $this->env->getExtension("native_profiler");
        $__internal_3d46e36e3348f7ea1e7548dfcb247d23fbe9d1226900f23041f3749a29b8fccb->enter($__internal_3d46e36e3348f7ea1e7548dfcb247d23fbe9d1226900f23041f3749a29b8fccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3d46e36e3348f7ea1e7548dfcb247d23fbe9d1226900f23041f3749a29b8fccb->leave($__internal_3d46e36e3348f7ea1e7548dfcb247d23fbe9d1226900f23041f3749a29b8fccb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2791686d79cbe4088d321ed3fef939fab7ed16aed8b04186b6ba4d7f062b5bd1 = $this->env->getExtension("native_profiler");
        $__internal_2791686d79cbe4088d321ed3fef939fab7ed16aed8b04186b6ba4d7f062b5bd1->enter($__internal_2791686d79cbe4088d321ed3fef939fab7ed16aed8b04186b6ba4d7f062b5bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2791686d79cbe4088d321ed3fef939fab7ed16aed8b04186b6ba4d7f062b5bd1->leave($__internal_2791686d79cbe4088d321ed3fef939fab7ed16aed8b04186b6ba4d7f062b5bd1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_641dc83a468a3dda21634f1132f697cf49e2646ea645117028f9ae9b25954418 = $this->env->getExtension("native_profiler");
        $__internal_641dc83a468a3dda21634f1132f697cf49e2646ea645117028f9ae9b25954418->enter($__internal_641dc83a468a3dda21634f1132f697cf49e2646ea645117028f9ae9b25954418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_641dc83a468a3dda21634f1132f697cf49e2646ea645117028f9ae9b25954418->leave($__internal_641dc83a468a3dda21634f1132f697cf49e2646ea645117028f9ae9b25954418_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
