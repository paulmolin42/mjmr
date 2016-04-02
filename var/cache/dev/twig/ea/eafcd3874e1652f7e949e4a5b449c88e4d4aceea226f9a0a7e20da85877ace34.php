<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_dfa0aed603a3d0caeca51e47ba811f1bf4be54ffbc9a7ecd3a821c818c3de41c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_522288c2b92a1334f615148967b242ad9889490cd7bfbc3a9f5dbc75976f8d2c = $this->env->getExtension("native_profiler");
        $__internal_522288c2b92a1334f615148967b242ad9889490cd7bfbc3a9f5dbc75976f8d2c->enter($__internal_522288c2b92a1334f615148967b242ad9889490cd7bfbc3a9f5dbc75976f8d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_522288c2b92a1334f615148967b242ad9889490cd7bfbc3a9f5dbc75976f8d2c->leave($__internal_522288c2b92a1334f615148967b242ad9889490cd7bfbc3a9f5dbc75976f8d2c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f60143579c13ae2000ce1815fc4fcbcadf95efac26e18ce1b86d12147697748 = $this->env->getExtension("native_profiler");
        $__internal_9f60143579c13ae2000ce1815fc4fcbcadf95efac26e18ce1b86d12147697748->enter($__internal_9f60143579c13ae2000ce1815fc4fcbcadf95efac26e18ce1b86d12147697748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9f60143579c13ae2000ce1815fc4fcbcadf95efac26e18ce1b86d12147697748->leave($__internal_9f60143579c13ae2000ce1815fc4fcbcadf95efac26e18ce1b86d12147697748_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
