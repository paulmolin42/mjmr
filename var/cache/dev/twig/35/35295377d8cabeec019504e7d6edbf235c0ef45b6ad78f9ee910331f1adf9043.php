<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8a650403166e3091536bdebb8f31c1c8c1c628c978cfacf572ca4556cfc79878 extends Twig_Template
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
        $__internal_d0c65629adec7440029513594d4acf343ce459579bc67e0cc164fb66ca8853e7 = $this->env->getExtension("native_profiler");
        $__internal_d0c65629adec7440029513594d4acf343ce459579bc67e0cc164fb66ca8853e7->enter($__internal_d0c65629adec7440029513594d4acf343ce459579bc67e0cc164fb66ca8853e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d0c65629adec7440029513594d4acf343ce459579bc67e0cc164fb66ca8853e7->leave($__internal_d0c65629adec7440029513594d4acf343ce459579bc67e0cc164fb66ca8853e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
