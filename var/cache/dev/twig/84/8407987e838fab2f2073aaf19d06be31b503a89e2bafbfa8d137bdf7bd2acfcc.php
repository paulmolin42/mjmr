<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e0c132c25c4b0307eb0440684fa72bf15bc2a9fb1042407df0cbdce820a10bae extends Twig_Template
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
        $__internal_518cb44d192ceab9fbc7dcd11c3debd6953daa421ef5910a462c87f4a693c3fd = $this->env->getExtension("native_profiler");
        $__internal_518cb44d192ceab9fbc7dcd11c3debd6953daa421ef5910a462c87f4a693c3fd->enter($__internal_518cb44d192ceab9fbc7dcd11c3debd6953daa421ef5910a462c87f4a693c3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_518cb44d192ceab9fbc7dcd11c3debd6953daa421ef5910a462c87f4a693c3fd->leave($__internal_518cb44d192ceab9fbc7dcd11c3debd6953daa421ef5910a462c87f4a693c3fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
