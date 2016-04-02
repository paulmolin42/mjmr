<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6a0eba16c86c763e2bcffba637faaaa249e26df10551920090685ca4737acd9e extends Twig_Template
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
        $__internal_80e9c619a4463cfc18e89bdf984511601ca53482f80cbf6ed10ef94b0aeda041 = $this->env->getExtension("native_profiler");
        $__internal_80e9c619a4463cfc18e89bdf984511601ca53482f80cbf6ed10ef94b0aeda041->enter($__internal_80e9c619a4463cfc18e89bdf984511601ca53482f80cbf6ed10ef94b0aeda041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_80e9c619a4463cfc18e89bdf984511601ca53482f80cbf6ed10ef94b0aeda041->leave($__internal_80e9c619a4463cfc18e89bdf984511601ca53482f80cbf6ed10ef94b0aeda041_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
