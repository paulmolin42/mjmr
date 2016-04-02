<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1e2a1de66479b037856ac5b59d279960b2975d2c27a5b887aa2577d4c601a2cd extends Twig_Template
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
        $__internal_10eb91df1162057abb76a2dfa9879848e3955bc13ad7a150384e91aa28882bba = $this->env->getExtension("native_profiler");
        $__internal_10eb91df1162057abb76a2dfa9879848e3955bc13ad7a150384e91aa28882bba->enter($__internal_10eb91df1162057abb76a2dfa9879848e3955bc13ad7a150384e91aa28882bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_10eb91df1162057abb76a2dfa9879848e3955bc13ad7a150384e91aa28882bba->leave($__internal_10eb91df1162057abb76a2dfa9879848e3955bc13ad7a150384e91aa28882bba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
