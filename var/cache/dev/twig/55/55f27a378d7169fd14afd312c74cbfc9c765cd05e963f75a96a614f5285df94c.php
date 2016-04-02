<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_8236a9b634df9f50b67c3b93e6344d4421089fa1d20159a464117959ac1a23a5 extends Twig_Template
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
        $__internal_5158d73d4e8e3291a747b0b185cd0fd2e5a1f24b1e2c6ecee4e7c848c1b5fd40 = $this->env->getExtension("native_profiler");
        $__internal_5158d73d4e8e3291a747b0b185cd0fd2e5a1f24b1e2c6ecee4e7c848c1b5fd40->enter($__internal_5158d73d4e8e3291a747b0b185cd0fd2e5a1f24b1e2c6ecee4e7c848c1b5fd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5158d73d4e8e3291a747b0b185cd0fd2e5a1f24b1e2c6ecee4e7c848c1b5fd40->leave($__internal_5158d73d4e8e3291a747b0b185cd0fd2e5a1f24b1e2c6ecee4e7c848c1b5fd40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
