<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_55d0c923db792f99c10a9c29a4008da71f481bd894f32b76cd7bb7dc74586d26 extends Twig_Template
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
        $__internal_b4144b2299247d03b493898f4027c77c6f93474b802307105b2a60a6c392f834 = $this->env->getExtension("native_profiler");
        $__internal_b4144b2299247d03b493898f4027c77c6f93474b802307105b2a60a6c392f834->enter($__internal_b4144b2299247d03b493898f4027c77c6f93474b802307105b2a60a6c392f834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b4144b2299247d03b493898f4027c77c6f93474b802307105b2a60a6c392f834->leave($__internal_b4144b2299247d03b493898f4027c77c6f93474b802307105b2a60a6c392f834_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
