<?php

/* default/index.html.twig */
class __TwigTemplate_0c5370b0351951b819ec8310a4fdb7406dc4bea1e9f045b7bddf0fafb164ac29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37f6b90d774325289dfca3e00f43e8ab437e6a577206d35a506063a9ff26d1f3 = $this->env->getExtension("native_profiler");
        $__internal_37f6b90d774325289dfca3e00f43e8ab437e6a577206d35a506063a9ff26d1f3->enter($__internal_37f6b90d774325289dfca3e00f43e8ab437e6a577206d35a506063a9ff26d1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37f6b90d774325289dfca3e00f43e8ab437e6a577206d35a506063a9ff26d1f3->leave($__internal_37f6b90d774325289dfca3e00f43e8ab437e6a577206d35a506063a9ff26d1f3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bca106a05f4a94c3318bd768ef510debc4d16c855cd1f750b495e0c07ead341e = $this->env->getExtension("native_profiler");
        $__internal_bca106a05f4a94c3318bd768ef510debc4d16c855cd1f750b495e0c07ead341e->enter($__internal_bca106a05f4a94c3318bd768ef510debc4d16c855cd1f750b495e0c07ead341e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"wrapper\">
        <div class=\"home\">

            <div class=\"container\">
                <div id=\"countdown\" class=\"row\">
                    <div class=\"three columns\">
                        <span class=\"days\">107</span>
                        <div class=\"smalltext\">Jours</div>
                    </div>
                    <div class=\"three columns\">
                        <span class=\"hours\">19</span>
                        <div class=\"smalltext\">Heures</div>
                    </div>
                    <div class=\"three columns\">
                        <span class=\"minutes\">27</span>
                        <div class=\"smalltext\">Minutes</div>
                    </div>
                    <div class=\"three columns\">
                        <span class=\"seconds\">48</span>
                        <div class=\"smalltext\">Secondes</div>
                    </div>
                </div>
            </div>

            <img class=\"save-the-date\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/save-the-date.jpg"), "html", null, true);
        echo "\">

            <h1 style=\"text-align: center\">Au début...</h1>
            <p style=\"text-align: center\">Un pèlerinage du Puy en Velay vers Lalouvesc en Ardèche, en juillet 2013 : Jean-Marie
                participe à l’organisation de la partie « diocèse aux Armées », Manon vient prendre son bain de jésuitude estivale…
                première rencontre !</p>

            <h1 style=\"text-align: center\">...et aujourd'hui !</h1>
            <p style=\"text-align: center\">Après trois soirées Rock aux Invalides et une belle demande en mariage sous les regards
                amusés de Saint François-Xavier et de Saint Louis de Gonzague, nous sommes prêts à passer notre vie ensemble !</p>

        </div>

    </div>
";
        
        $__internal_bca106a05f4a94c3318bd768ef510debc4d16c855cd1f750b495e0c07ead341e->leave($__internal_bca106a05f4a94c3318bd768ef510debc4d16c855cd1f750b495e0c07ead341e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 28,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="wrapper">*/
/*         <div class="home">*/
/* */
/*             <div class="container">*/
/*                 <div id="countdown" class="row">*/
/*                     <div class="three columns">*/
/*                         <span class="days">107</span>*/
/*                         <div class="smalltext">Jours</div>*/
/*                     </div>*/
/*                     <div class="three columns">*/
/*                         <span class="hours">19</span>*/
/*                         <div class="smalltext">Heures</div>*/
/*                     </div>*/
/*                     <div class="three columns">*/
/*                         <span class="minutes">27</span>*/
/*                         <div class="smalltext">Minutes</div>*/
/*                     </div>*/
/*                     <div class="three columns">*/
/*                         <span class="seconds">48</span>*/
/*                         <div class="smalltext">Secondes</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <img class="save-the-date" src="{{ asset('images/save-the-date.jpg') }}">*/
/* */
/*             <h1 style="text-align: center">Au début...</h1>*/
/*             <p style="text-align: center">Un pèlerinage du Puy en Velay vers Lalouvesc en Ardèche, en juillet 2013 : Jean-Marie*/
/*                 participe à l’organisation de la partie « diocèse aux Armées », Manon vient prendre son bain de jésuitude estivale…*/
/*                 première rencontre !</p>*/
/* */
/*             <h1 style="text-align: center">...et aujourd'hui !</h1>*/
/*             <p style="text-align: center">Après trois soirées Rock aux Invalides et une belle demande en mariage sous les regards*/
/*                 amusés de Saint François-Xavier et de Saint Louis de Gonzague, nous sommes prêts à passer notre vie ensemble !</p>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
