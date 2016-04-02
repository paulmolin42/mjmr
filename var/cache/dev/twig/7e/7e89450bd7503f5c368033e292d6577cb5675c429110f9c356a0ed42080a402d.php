<?php

/* security/login.html.twig */
class __TwigTemplate_911ec270cbfdbf77593974e72c968d012d522eacbf22d5b0db2b3c827b5230aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_2e8cad82385f07d47c188ed5d3222008ef2e2f83d4633edb79882645b7f84c85 = $this->env->getExtension("native_profiler");
        $__internal_2e8cad82385f07d47c188ed5d3222008ef2e2f83d4633edb79882645b7f84c85->enter($__internal_2e8cad82385f07d47c188ed5d3222008ef2e2f83d4633edb79882645b7f84c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e8cad82385f07d47c188ed5d3222008ef2e2f83d4633edb79882645b7f84c85->leave($__internal_2e8cad82385f07d47c188ed5d3222008ef2e2f83d4633edb79882645b7f84c85_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a7a608c3122199e7f68e45af458fe6d75171ccc154e1290d251d09bddbccb06c = $this->env->getExtension("native_profiler");
        $__internal_a7a608c3122199e7f68e45af458fe6d75171ccc154e1290d251d09bddbccb06c->enter($__internal_a7a608c3122199e7f68e45af458fe6d75171ccc154e1290d251d09bddbccb06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("security_login_check");
        echo "\" method=\"post\">
        <div class=\"row\">
            ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array())), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 11
        echo "            <div class=\"six columns\">
                <label for=\"username\">Nom d'utilisateur</label>
                <input class=\"u-full-width\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
            </div>
            <div class=\"six columns\">
                <label for=\"password\">Mot de passe</label>
                <input class=\"u-full-width\" type=\"password\" id=\"password\" name=\"_password\" />
            </div>
            <br/>
            <button class=\"button-primary\" type=\"submit\">Se connecter</button>
        </div>
    </form>
";
        
        $__internal_a7a608c3122199e7f68e45af458fe6d75171ccc154e1290d251d09bddbccb06c->leave($__internal_a7a608c3122199e7f68e45af458fe6d75171ccc154e1290d251d09bddbccb06c_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  57 => 11,  51 => 8,  48 => 7,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <form action="{{ path('security_login_check') }}" method="post">*/
/*         <div class="row">*/
/*             {% if error %}*/
/*                 <div class="alert alert-danger">*/
/*                     {{ error.messageKey|trans(error.messageData) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             <div class="six columns">*/
/*                 <label for="username">Nom d'utilisateur</label>*/
/*                 <input class="u-full-width" type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*             </div>*/
/*             <div class="six columns">*/
/*                 <label for="password">Mot de passe</label>*/
/*                 <input class="u-full-width" type="password" id="password" name="_password" />*/
/*             </div>*/
/*             <br/>*/
/*             <button class="button-primary" type="submit">Se connecter</button>*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
