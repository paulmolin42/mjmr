<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a28a249c474d4f1265206391c2419544472a374f4f03c127d128233345b26f77 extends Twig_Template
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
        $__internal_5daa15c9c3fd15cb64712f2139c9fad561e2859b6e208040ea6e13462a5b6ce0 = $this->env->getExtension("native_profiler");
        $__internal_5daa15c9c3fd15cb64712f2139c9fad561e2859b6e208040ea6e13462a5b6ce0->enter($__internal_5daa15c9c3fd15cb64712f2139c9fad561e2859b6e208040ea6e13462a5b6ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5daa15c9c3fd15cb64712f2139c9fad561e2859b6e208040ea6e13462a5b6ce0->leave($__internal_5daa15c9c3fd15cb64712f2139c9fad561e2859b6e208040ea6e13462a5b6ce0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
