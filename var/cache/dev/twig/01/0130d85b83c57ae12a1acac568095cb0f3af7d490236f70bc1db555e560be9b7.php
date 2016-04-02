<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_43e01582edbd20deec49953e9ee0c40dfbc6bad8e59d25590921bb996e715770 extends Twig_Template
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
        $__internal_5eef3b30ed826da807898c99eb9cbd2d9ec039884d895549ebe06016886ee760 = $this->env->getExtension("native_profiler");
        $__internal_5eef3b30ed826da807898c99eb9cbd2d9ec039884d895549ebe06016886ee760->enter($__internal_5eef3b30ed826da807898c99eb9cbd2d9ec039884d895549ebe06016886ee760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5eef3b30ed826da807898c99eb9cbd2d9ec039884d895549ebe06016886ee760->leave($__internal_5eef3b30ed826da807898c99eb9cbd2d9ec039884d895549ebe06016886ee760_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
