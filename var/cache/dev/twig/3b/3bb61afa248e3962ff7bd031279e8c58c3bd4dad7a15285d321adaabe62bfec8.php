<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d1db70261defed64c44c0a5fd7fff281b07f4fa99a012d4de5d37555f71f74de extends Twig_Template
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
        $__internal_b31820d0da550bdaef81aaca135038432ccad19dd952c1417550236a31e3e464 = $this->env->getExtension("native_profiler");
        $__internal_b31820d0da550bdaef81aaca135038432ccad19dd952c1417550236a31e3e464->enter($__internal_b31820d0da550bdaef81aaca135038432ccad19dd952c1417550236a31e3e464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b31820d0da550bdaef81aaca135038432ccad19dd952c1417550236a31e3e464->leave($__internal_b31820d0da550bdaef81aaca135038432ccad19dd952c1417550236a31e3e464_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
