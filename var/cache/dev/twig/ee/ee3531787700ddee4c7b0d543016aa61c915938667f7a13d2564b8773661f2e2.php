<?php

/* default/engagement.html.twig */
class __TwigTemplate_74af8bdefcff9516cd289e160dffaed81f7845bf407b9b95dce4248a77019d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/engagement.html.twig", 1);
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
        $__internal_0991ee4ba01a5b41cb94308ae3834131458ed0f95d97806c000f5b7db50b355b = $this->env->getExtension("native_profiler");
        $__internal_0991ee4ba01a5b41cb94308ae3834131458ed0f95d97806c000f5b7db50b355b->enter($__internal_0991ee4ba01a5b41cb94308ae3834131458ed0f95d97806c000f5b7db50b355b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/engagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0991ee4ba01a5b41cb94308ae3834131458ed0f95d97806c000f5b7db50b355b->leave($__internal_0991ee4ba01a5b41cb94308ae3834131458ed0f95d97806c000f5b7db50b355b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8df8f0c8a5375ba1d32027b3a44901f36aa59865bfa86b21a75605333cc56c69 = $this->env->getExtension("native_profiler");
        $__internal_8df8f0c8a5375ba1d32027b3a44901f36aa59865bfa86b21a75605333cc56c69->enter($__internal_8df8f0c8a5375ba1d32027b3a44901f36aa59865bfa86b21a75605333cc56c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"wrapper\">
        <p>Nos fiançailles ont été bénies par le Père André Gouzes, OP, le 24 octobre dernier. Ce fut l’occasion de
            réunir nos deux familles dans la maison de famille des Poinssot en Aveyron.</p>
        <p>Deo gratias !</p>
    </div>
";
        
        $__internal_8df8f0c8a5375ba1d32027b3a44901f36aa59865bfa86b21a75605333cc56c69->leave($__internal_8df8f0c8a5375ba1d32027b3a44901f36aa59865bfa86b21a75605333cc56c69_prof);

    }

    public function getTemplateName()
    {
        return "default/engagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="wrapper">*/
/*         <p>Nos fiançailles ont été bénies par le Père André Gouzes, OP, le 24 octobre dernier. Ce fut l’occasion de*/
/*             réunir nos deux familles dans la maison de famille des Poinssot en Aveyron.</p>*/
/*         <p>Deo gratias !</p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
