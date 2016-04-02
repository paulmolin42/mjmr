<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_50d1f65ad3a85c37e2731474c86d43904031d2d2d4bf4a9c8e071ac69dbff6b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6dcd93bace927f7e63262f0ad7c58ba3759ca849d290a86b87263ca0455def5d = $this->env->getExtension("native_profiler");
        $__internal_6dcd93bace927f7e63262f0ad7c58ba3759ca849d290a86b87263ca0455def5d->enter($__internal_6dcd93bace927f7e63262f0ad7c58ba3759ca849d290a86b87263ca0455def5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dcd93bace927f7e63262f0ad7c58ba3759ca849d290a86b87263ca0455def5d->leave($__internal_6dcd93bace927f7e63262f0ad7c58ba3759ca849d290a86b87263ca0455def5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_61bd43dc817e79061460308dc8010eeef331768e5f7e46b5571fc5d2b3799cfc = $this->env->getExtension("native_profiler");
        $__internal_61bd43dc817e79061460308dc8010eeef331768e5f7e46b5571fc5d2b3799cfc->enter($__internal_61bd43dc817e79061460308dc8010eeef331768e5f7e46b5571fc5d2b3799cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_61bd43dc817e79061460308dc8010eeef331768e5f7e46b5571fc5d2b3799cfc->leave($__internal_61bd43dc817e79061460308dc8010eeef331768e5f7e46b5571fc5d2b3799cfc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec117e669cac6eb0b45616d8c50d91f90901f754a79bcd84fb220a32dbafdd05 = $this->env->getExtension("native_profiler");
        $__internal_ec117e669cac6eb0b45616d8c50d91f90901f754a79bcd84fb220a32dbafdd05->enter($__internal_ec117e669cac6eb0b45616d8c50d91f90901f754a79bcd84fb220a32dbafdd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ec117e669cac6eb0b45616d8c50d91f90901f754a79bcd84fb220a32dbafdd05->leave($__internal_ec117e669cac6eb0b45616d8c50d91f90901f754a79bcd84fb220a32dbafdd05_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
