<?php

/* default/weddingList.html.twig */
class __TwigTemplate_c1a1f5d774eb01c68605f35b6f5a3250a48a69685d4b25f262aa65b2c7a8db56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/weddingList.html.twig", 1);
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
        $__internal_e69840e7707056c57c90d9f93b138836b2f319c8bc8261e4161df145cc0d9538 = $this->env->getExtension("native_profiler");
        $__internal_e69840e7707056c57c90d9f93b138836b2f319c8bc8261e4161df145cc0d9538->enter($__internal_e69840e7707056c57c90d9f93b138836b2f319c8bc8261e4161df145cc0d9538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/weddingList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e69840e7707056c57c90d9f93b138836b2f319c8bc8261e4161df145cc0d9538->leave($__internal_e69840e7707056c57c90d9f93b138836b2f319c8bc8261e4161df145cc0d9538_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f4e7fe7f55942d46a38d76a0f73dba8782590c140e17660e75467fa5d4f6d900 = $this->env->getExtension("native_profiler");
        $__internal_f4e7fe7f55942d46a38d76a0f73dba8782590c140e17660e75467fa5d4f6d900->enter($__internal_f4e7fe7f55942d46a38d76a0f73dba8782590c140e17660e75467fa5d4f6d900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"wrapper\">
        <p>Notre liste de mariage est accessible à <a href=\"http://www.millemercismariage.com/MJMR2016/liste.html\">cette
            adresse</a>.</p>
    </div>
";
        
        $__internal_f4e7fe7f55942d46a38d76a0f73dba8782590c140e17660e75467fa5d4f6d900->leave($__internal_f4e7fe7f55942d46a38d76a0f73dba8782590c140e17660e75467fa5d4f6d900_prof);

    }

    public function getTemplateName()
    {
        return "default/weddingList.html.twig";
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
/*         <p>Notre liste de mariage est accessible à <a href="http://www.millemercismariage.com/MJMR2016/liste.html">cette*/
/*             adresse</a>.</p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
