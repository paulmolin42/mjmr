<?php

/* base.html.twig */
class __TwigTemplate_7d0e5e75d6a7cf784e5d7312a01f140d3f8bf0a96303346b2ccfcab9b387f934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebc4e794a3b2029dca4ae32e983ff08e1bdc78556997944fff8f904d9ef7f94f = $this->env->getExtension("native_profiler");
        $__internal_ebc4e794a3b2029dca4ae32e983ff08e1bdc78556997944fff8f904d9ef7f94f->enter($__internal_ebc4e794a3b2029dca4ae32e983ff08e1bdc78556997944fff8f904d9ef7f94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_ebc4e794a3b2029dca4ae32e983ff08e1bdc78556997944fff8f904d9ef7f94f->leave($__internal_ebc4e794a3b2029dca4ae32e983ff08e1bdc78556997944fff8f904d9ef7f94f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f4cb75d2e47825016644830dded7d373e305527f4cf26b38c5d16b2a5785554 = $this->env->getExtension("native_profiler");
        $__internal_3f4cb75d2e47825016644830dded7d373e305527f4cf26b38c5d16b2a5785554->enter($__internal_3f4cb75d2e47825016644830dded7d373e305527f4cf26b38c5d16b2a5785554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Manon & Jean-Marie";
        
        $__internal_3f4cb75d2e47825016644830dded7d373e305527f4cf26b38c5d16b2a5785554->leave($__internal_3f4cb75d2e47825016644830dded7d373e305527f4cf26b38c5d16b2a5785554_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9b4c838b7a76702e341494f7d2d83e172c4603e2e0de91f8d87a22f157e6df5 = $this->env->getExtension("native_profiler");
        $__internal_d9b4c838b7a76702e341494f7d2d83e172c4603e2e0de91f8d87a22f157e6df5->enter($__internal_d9b4c838b7a76702e341494f7d2d83e172c4603e2e0de91f8d87a22f157e6df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_d9b4c838b7a76702e341494f7d2d83e172c4603e2e0de91f8d87a22f157e6df5->leave($__internal_d9b4c838b7a76702e341494f7d2d83e172c4603e2e0de91f8d87a22f157e6df5_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d9b7bf4cd7e76e927bd292418d1c89368e6cffd36b481e00978da5b27136b13 = $this->env->getExtension("native_profiler");
        $__internal_8d9b7bf4cd7e76e927bd292418d1c89368e6cffd36b481e00978da5b27136b13->enter($__internal_8d9b7bf4cd7e76e927bd292418d1c89368e6cffd36b481e00978da5b27136b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "            <div class=\"container\">
                ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "            </div>
            ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "        ";
        
        $__internal_8d9b7bf4cd7e76e927bd292418d1c89368e6cffd36b481e00978da5b27136b13->leave($__internal_8d9b7bf4cd7e76e927bd292418d1c89368e6cffd36b481e00978da5b27136b13_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_9affa8df336274c8eb20ceb851175044c3d1c6be98476ca19075bf47e2f2f8cd = $this->env->getExtension("native_profiler");
        $__internal_9affa8df336274c8eb20ceb851175044c3d1c6be98476ca19075bf47e2f2f8cd->enter($__internal_9affa8df336274c8eb20ceb851175044c3d1c6be98476ca19075bf47e2f2f8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "                ";
        $this->loadTemplate("::header.html.twig", "base.html.twig", 14)->display($context);
        // line 15
        echo "            ";
        
        $__internal_9affa8df336274c8eb20ceb851175044c3d1c6be98476ca19075bf47e2f2f8cd->leave($__internal_9affa8df336274c8eb20ceb851175044c3d1c6be98476ca19075bf47e2f2f8cd_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_baf42bc57f08b32946fff018a47df6030d2fe0f08811d3ad453fa9d6ea99c25c = $this->env->getExtension("native_profiler");
        $__internal_baf42bc57f08b32946fff018a47df6030d2fe0f08811d3ad453fa9d6ea99c25c->enter($__internal_baf42bc57f08b32946fff018a47df6030d2fe0f08811d3ad453fa9d6ea99c25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "                ";
        
        $__internal_baf42bc57f08b32946fff018a47df6030d2fe0f08811d3ad453fa9d6ea99c25c->leave($__internal_baf42bc57f08b32946fff018a47df6030d2fe0f08811d3ad453fa9d6ea99c25c_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1dfefaa68537689b3a00189302452d4e922713eaca097b4e48c87bd0e47d916c = $this->env->getExtension("native_profiler");
        $__internal_1dfefaa68537689b3a00189302452d4e922713eaca097b4e48c87bd0e47d916c->enter($__internal_1dfefaa68537689b3a00189302452d4e922713eaca097b4e48c87bd0e47d916c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "                ";
        $this->loadTemplate("::footer.html.twig", "base.html.twig", 21)->display($context);
        // line 22
        echo "            ";
        
        $__internal_1dfefaa68537689b3a00189302452d4e922713eaca097b4e48c87bd0e47d916c->leave($__internal_1dfefaa68537689b3a00189302452d4e922713eaca097b4e48c87bd0e47d916c_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75847fe4d38710a6ba457c56928018860514511db048fc6bad65383c9fc4741e = $this->env->getExtension("native_profiler");
        $__internal_75847fe4d38710a6ba457c56928018860514511db048fc6bad65383c9fc4741e->enter($__internal_75847fe4d38710a6ba457c56928018860514511db048fc6bad65383c9fc4741e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/site.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_75847fe4d38710a6ba457c56928018860514511db048fc6bad65383c9fc4741e->leave($__internal_75847fe4d38710a6ba457c56928018860514511db048fc6bad65383c9fc4741e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 24,  154 => 22,  151 => 21,  145 => 20,  138 => 18,  132 => 17,  125 => 15,  122 => 14,  116 => 13,  109 => 23,  107 => 20,  104 => 19,  102 => 17,  99 => 16,  96 => 13,  90 => 12,  80 => 7,  74 => 6,  62 => 5,  53 => 25,  50 => 24,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Manon & Jean-Marie{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             {% block header %}*/
/*                 {% include '::header.html.twig' %}*/
/*             {% endblock %}*/
/*             <div class="container">*/
/*                 {% block content %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*             {% block footer %}*/
/*                 {% include '::footer.html.twig' %}*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/*         {% block javascripts %}<script type="text/javascript" src="{{ asset('js/site.js') }}"></script>{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
