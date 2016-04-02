<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1927a7d72ac1702f88b27b1374ef2428631774c4328bae41be715b0742bc9edb extends Twig_Template
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
        $__internal_6d3a7ee6b1e823dc0b2a74b2478c68d526644d532f832720722bddd9d3e6150e = $this->env->getExtension("native_profiler");
        $__internal_6d3a7ee6b1e823dc0b2a74b2478c68d526644d532f832720722bddd9d3e6150e->enter($__internal_6d3a7ee6b1e823dc0b2a74b2478c68d526644d532f832720722bddd9d3e6150e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6d3a7ee6b1e823dc0b2a74b2478c68d526644d532f832720722bddd9d3e6150e->leave($__internal_6d3a7ee6b1e823dc0b2a74b2478c68d526644d532f832720722bddd9d3e6150e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
