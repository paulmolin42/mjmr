<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_8ddf5a19bfd641981b57de67e8150f54002837b98ed56befabab4b073a81a886 extends Twig_Template
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
        $__internal_749f7635bc557f788b49d6eee9805080c9475a5399a01509e5a6d9590ceab9e6 = $this->env->getExtension("native_profiler");
        $__internal_749f7635bc557f788b49d6eee9805080c9475a5399a01509e5a6d9590ceab9e6->enter($__internal_749f7635bc557f788b49d6eee9805080c9475a5399a01509e5a6d9590ceab9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_749f7635bc557f788b49d6eee9805080c9475a5399a01509e5a6d9590ceab9e6->leave($__internal_749f7635bc557f788b49d6eee9805080c9475a5399a01509e5a6d9590ceab9e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
