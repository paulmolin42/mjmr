<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8e1c5b85a6806fe0ad9f53cdae48abc3576583d1761ab03fab06cd122e8c5523 extends Twig_Template
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
        $__internal_8fd28b2f1b1b6067f1be3f277b09eca1fde28a7fc358aec874b21d78925864a3 = $this->env->getExtension("native_profiler");
        $__internal_8fd28b2f1b1b6067f1be3f277b09eca1fde28a7fc358aec874b21d78925864a3->enter($__internal_8fd28b2f1b1b6067f1be3f277b09eca1fde28a7fc358aec874b21d78925864a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8fd28b2f1b1b6067f1be3f277b09eca1fde28a7fc358aec874b21d78925864a3->leave($__internal_8fd28b2f1b1b6067f1be3f277b09eca1fde28a7fc358aec874b21d78925864a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
