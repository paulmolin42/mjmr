<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_311290601644318f869613e907a12deea4d5eefaf8864f45b38c7ffa4b9afb71 extends Twig_Template
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
        $__internal_c3898a0913e00726f3906a93782f0c7dd829b4f383bec2f22fd2b68e66bfe69f = $this->env->getExtension("native_profiler");
        $__internal_c3898a0913e00726f3906a93782f0c7dd829b4f383bec2f22fd2b68e66bfe69f->enter($__internal_c3898a0913e00726f3906a93782f0c7dd829b4f383bec2f22fd2b68e66bfe69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c3898a0913e00726f3906a93782f0c7dd829b4f383bec2f22fd2b68e66bfe69f->leave($__internal_c3898a0913e00726f3906a93782f0c7dd829b4f383bec2f22fd2b68e66bfe69f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
