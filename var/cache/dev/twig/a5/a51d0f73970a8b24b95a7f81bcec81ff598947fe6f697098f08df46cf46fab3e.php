<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_25a73040c5eab954c57c4e1b501b4723716960de5eacb34abed942f34c151383 extends Twig_Template
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
        $__internal_7ca005609ed922bec377fdc2dd1256839b21789c8d7789a4a8a8bc2ef6b418ec = $this->env->getExtension("native_profiler");
        $__internal_7ca005609ed922bec377fdc2dd1256839b21789c8d7789a4a8a8bc2ef6b418ec->enter($__internal_7ca005609ed922bec377fdc2dd1256839b21789c8d7789a4a8a8bc2ef6b418ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7ca005609ed922bec377fdc2dd1256839b21789c8d7789a4a8a8bc2ef6b418ec->leave($__internal_7ca005609ed922bec377fdc2dd1256839b21789c8d7789a4a8a8bc2ef6b418ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
