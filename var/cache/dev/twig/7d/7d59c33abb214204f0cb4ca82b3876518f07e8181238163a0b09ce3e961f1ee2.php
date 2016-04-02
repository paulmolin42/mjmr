<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ed097c0a538b4c88b86e2d688731134f773e1f99c0e5e77563552d54b06224ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbcdb2041e9d4a3ddb08cbfa66d602c8a884dba2b017ac7fef1f99e847a04983 = $this->env->getExtension("native_profiler");
        $__internal_dbcdb2041e9d4a3ddb08cbfa66d602c8a884dba2b017ac7fef1f99e847a04983->enter($__internal_dbcdb2041e9d4a3ddb08cbfa66d602c8a884dba2b017ac7fef1f99e847a04983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbcdb2041e9d4a3ddb08cbfa66d602c8a884dba2b017ac7fef1f99e847a04983->leave($__internal_dbcdb2041e9d4a3ddb08cbfa66d602c8a884dba2b017ac7fef1f99e847a04983_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7c782dabc0bf835f01dba13819249e6abdf81b3b25d81abb555973452041f0d = $this->env->getExtension("native_profiler");
        $__internal_e7c782dabc0bf835f01dba13819249e6abdf81b3b25d81abb555973452041f0d->enter($__internal_e7c782dabc0bf835f01dba13819249e6abdf81b3b25d81abb555973452041f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e7c782dabc0bf835f01dba13819249e6abdf81b3b25d81abb555973452041f0d->leave($__internal_e7c782dabc0bf835f01dba13819249e6abdf81b3b25d81abb555973452041f0d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1d2efe7ab8a10eb5cae4b1a41de565a6042f0080d61abd28d5db485b03e26a9 = $this->env->getExtension("native_profiler");
        $__internal_e1d2efe7ab8a10eb5cae4b1a41de565a6042f0080d61abd28d5db485b03e26a9->enter($__internal_e1d2efe7ab8a10eb5cae4b1a41de565a6042f0080d61abd28d5db485b03e26a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1d2efe7ab8a10eb5cae4b1a41de565a6042f0080d61abd28d5db485b03e26a9->leave($__internal_e1d2efe7ab8a10eb5cae4b1a41de565a6042f0080d61abd28d5db485b03e26a9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3a9069978ec506f31383e4562c71ad1956bddf479c242d6aa18d41a189864c2 = $this->env->getExtension("native_profiler");
        $__internal_e3a9069978ec506f31383e4562c71ad1956bddf479c242d6aa18d41a189864c2->enter($__internal_e3a9069978ec506f31383e4562c71ad1956bddf479c242d6aa18d41a189864c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e3a9069978ec506f31383e4562c71ad1956bddf479c242d6aa18d41a189864c2->leave($__internal_e3a9069978ec506f31383e4562c71ad1956bddf479c242d6aa18d41a189864c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
