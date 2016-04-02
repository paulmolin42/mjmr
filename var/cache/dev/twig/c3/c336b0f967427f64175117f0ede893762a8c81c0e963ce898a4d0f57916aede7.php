<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c4afdf434aca4e5e8c60a5faee38f91c2534fd33e8c6e5a814b53be40ddf3ed6 extends Twig_Template
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
        $__internal_3398e361520c2522bbe383bd4ee644b5523779b4d3c35951a03178f19b2f5d51 = $this->env->getExtension("native_profiler");
        $__internal_3398e361520c2522bbe383bd4ee644b5523779b4d3c35951a03178f19b2f5d51->enter($__internal_3398e361520c2522bbe383bd4ee644b5523779b4d3c35951a03178f19b2f5d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3398e361520c2522bbe383bd4ee644b5523779b4d3c35951a03178f19b2f5d51->leave($__internal_3398e361520c2522bbe383bd4ee644b5523779b4d3c35951a03178f19b2f5d51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
