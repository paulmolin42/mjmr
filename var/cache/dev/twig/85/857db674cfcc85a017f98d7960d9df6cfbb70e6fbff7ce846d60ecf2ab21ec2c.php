<?php

/* default/civilMarriage.html.twig */
class __TwigTemplate_ffa0c31a7cd592f78324fd48967de54ee22ec6aa58da3b7c527de1560a5c887d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/civilMarriage.html.twig", 1);
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
        $__internal_bc39bd4355be4623de65f84b5baa9d1673063a2d1ab81b15eac52e541ef88bbf = $this->env->getExtension("native_profiler");
        $__internal_bc39bd4355be4623de65f84b5baa9d1673063a2d1ab81b15eac52e541ef88bbf->enter($__internal_bc39bd4355be4623de65f84b5baa9d1673063a2d1ab81b15eac52e541ef88bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/civilMarriage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc39bd4355be4623de65f84b5baa9d1673063a2d1ab81b15eac52e541ef88bbf->leave($__internal_bc39bd4355be4623de65f84b5baa9d1673063a2d1ab81b15eac52e541ef88bbf_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4282595f8001fb315a1dfcb3d924332f6cc58eafbb8a0372564ef2620c3fbd95 = $this->env->getExtension("native_profiler");
        $__internal_4282595f8001fb315a1dfcb3d924332f6cc58eafbb8a0372564ef2620c3fbd95->enter($__internal_4282595f8001fb315a1dfcb3d924332f6cc58eafbb8a0372564ef2620c3fbd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"wrapper\">
        <p>Notre mariage civil sera célébré en petit comité, autour de notre famille proche et de quelques collègues le
            samedi 14 Mai a 15h. Il sera célébré à l’hôtel de ville de Saint Germain en Laye, lieu de naissance et de
            vie de Jean­Marie, par Philippe Pivert, Maire adjoint chargé de la jeunesse et des sports (et son Professeur
            de Karaté !)</p>
    </div>
";
        
        $__internal_4282595f8001fb315a1dfcb3d924332f6cc58eafbb8a0372564ef2620c3fbd95->leave($__internal_4282595f8001fb315a1dfcb3d924332f6cc58eafbb8a0372564ef2620c3fbd95_prof);

    }

    public function getTemplateName()
    {
        return "default/civilMarriage.html.twig";
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
/*         <p>Notre mariage civil sera célébré en petit comité, autour de notre famille proche et de quelques collègues le*/
/*             samedi 14 Mai a 15h. Il sera célébré à l’hôtel de ville de Saint Germain en Laye, lieu de naissance et de*/
/*             vie de Jean­Marie, par Philippe Pivert, Maire adjoint chargé de la jeunesse et des sports (et son Professeur*/
/*             de Karaté !)</p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
