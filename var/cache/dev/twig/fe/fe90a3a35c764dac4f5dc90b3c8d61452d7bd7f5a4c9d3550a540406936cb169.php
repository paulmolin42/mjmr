<?php

/* ::header.html.twig */
class __TwigTemplate_d8f1614a6eb37c8f90ea7dc54e57e665b872fde700ab34a6a6826df120106e0e extends Twig_Template
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
        $__internal_f508a0b7bb4041c9842eff7a3f4838fac5f329f9a3c530cef57f39047881cff7 = $this->env->getExtension("native_profiler");
        $__internal_f508a0b7bb4041c9842eff7a3f4838fac5f329f9a3c530cef57f39047881cff7->enter($__internal_f508a0b7bb4041c9842eff7a3f4838fac5f329f9a3c530cef57f39047881cff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        // line 1
        echo "<header class=\"site-header\">
    <div class=\"header-background\">
        <h1>Manon &amp; Jean-Marie</h1>
    </div>
    <br/>
    <div class=\"navigation-menu\">
        <a class=\"button\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("default_engagement");
        echo "\">Nos fiançailles</a>
        <a class=\"button\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("default_civil_marriage");
        echo "\">Mariage civil</a>
        <a class=\"button\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("default_nuptial_mass");
        echo "\">Messe de mariage</a>
        <a class=\"button\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("default_reception");
        echo "\">La réception</a>
        <a class=\"button\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("default_wedding_list");
        echo "\">Liste de mariage</a>
        <a class=\"button\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("default_carpooling");
        echo "\">Covoiturage</a>
    </div>
    <br/>
</header>
";
        
        $__internal_f508a0b7bb4041c9842eff7a3f4838fac5f329f9a3c530cef57f39047881cff7->leave($__internal_f508a0b7bb4041c9842eff7a3f4838fac5f329f9a3c530cef57f39047881cff7_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* <header class="site-header">*/
/*     <div class="header-background">*/
/*         <h1>Manon &amp; Jean-Marie</h1>*/
/*     </div>*/
/*     <br/>*/
/*     <div class="navigation-menu">*/
/*         <a class="button" href="{{ path('default_engagement') }}">Nos fiançailles</a>*/
/*         <a class="button" href="{{ path('default_civil_marriage') }}">Mariage civil</a>*/
/*         <a class="button" href="{{ path('default_nuptial_mass') }}">Messe de mariage</a>*/
/*         <a class="button" href="{{ path('default_reception') }}">La réception</a>*/
/*         <a class="button" href="{{ path('default_wedding_list') }}">Liste de mariage</a>*/
/*         <a class="button" href="{{ path('default_carpooling') }}">Covoiturage</a>*/
/*     </div>*/
/*     <br/>*/
/* </header>*/
/* */
