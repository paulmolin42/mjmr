<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c654a7082bb650f6207ca49e8ebb89e841e068c4ec71d9247e2d1365baa7e4e6 extends Twig_Template
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
        $__internal_90946a78604ab247e3b8465238137f6d0abec21cde76663047cb9c54c452add0 = $this->env->getExtension("native_profiler");
        $__internal_90946a78604ab247e3b8465238137f6d0abec21cde76663047cb9c54c452add0->enter($__internal_90946a78604ab247e3b8465238137f6d0abec21cde76663047cb9c54c452add0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_90946a78604ab247e3b8465238137f6d0abec21cde76663047cb9c54c452add0->leave($__internal_90946a78604ab247e3b8465238137f6d0abec21cde76663047cb9c54c452add0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
