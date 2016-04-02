<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_88c97a381e5fcb55dc28b067d4f38fd8c13dedcc83bb1ad8ec16f0e8e6fea127 extends Twig_Template
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
        $__internal_ffe9767389e7417542c8043442c5f5b0df7ec1e7a070eff694e888eed5160e5e = $this->env->getExtension("native_profiler");
        $__internal_ffe9767389e7417542c8043442c5f5b0df7ec1e7a070eff694e888eed5160e5e->enter($__internal_ffe9767389e7417542c8043442c5f5b0df7ec1e7a070eff694e888eed5160e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ffe9767389e7417542c8043442c5f5b0df7ec1e7a070eff694e888eed5160e5e->leave($__internal_ffe9767389e7417542c8043442c5f5b0df7ec1e7a070eff694e888eed5160e5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
