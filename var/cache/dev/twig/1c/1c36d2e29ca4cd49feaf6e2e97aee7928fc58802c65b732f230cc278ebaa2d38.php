<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_aa1e79c206cb3d7734c428db0c22503d153a55d95ace31e3cb6358378239481d extends Twig_Template
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
        $__internal_1684c6f279377ef70f30f50bfbc07f464a996481d99e3c9e8030b3cef7d727f6 = $this->env->getExtension("native_profiler");
        $__internal_1684c6f279377ef70f30f50bfbc07f464a996481d99e3c9e8030b3cef7d727f6->enter($__internal_1684c6f279377ef70f30f50bfbc07f464a996481d99e3c9e8030b3cef7d727f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1684c6f279377ef70f30f50bfbc07f464a996481d99e3c9e8030b3cef7d727f6->leave($__internal_1684c6f279377ef70f30f50bfbc07f464a996481d99e3c9e8030b3cef7d727f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
