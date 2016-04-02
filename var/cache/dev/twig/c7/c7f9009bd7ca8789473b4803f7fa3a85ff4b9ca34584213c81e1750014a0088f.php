<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_eee8146b98d0b4a99d9bafb003294ec8052024b6f3023d516ae166f0ef5a5091 extends Twig_Template
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
        $__internal_5da76828015bc5f8de511aa192628fbf438c8e7174426f8d954abe9d7f312e07 = $this->env->getExtension("native_profiler");
        $__internal_5da76828015bc5f8de511aa192628fbf438c8e7174426f8d954abe9d7f312e07->enter($__internal_5da76828015bc5f8de511aa192628fbf438c8e7174426f8d954abe9d7f312e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5da76828015bc5f8de511aa192628fbf438c8e7174426f8d954abe9d7f312e07->leave($__internal_5da76828015bc5f8de511aa192628fbf438c8e7174426f8d954abe9d7f312e07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
