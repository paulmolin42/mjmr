<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_430aa65284790f4cd9f00051f225e1a0e1d250176d52b2561a4a47c7921b1315 extends Twig_Template
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
        $__internal_6b92967587263efc066f3c27858b799b2d8dc7c8cca766d19d10a33c94152818 = $this->env->getExtension("native_profiler");
        $__internal_6b92967587263efc066f3c27858b799b2d8dc7c8cca766d19d10a33c94152818->enter($__internal_6b92967587263efc066f3c27858b799b2d8dc7c8cca766d19d10a33c94152818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6b92967587263efc066f3c27858b799b2d8dc7c8cca766d19d10a33c94152818->leave($__internal_6b92967587263efc066f3c27858b799b2d8dc7c8cca766d19d10a33c94152818_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
