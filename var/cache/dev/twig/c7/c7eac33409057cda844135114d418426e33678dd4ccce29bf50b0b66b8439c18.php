<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_03ff480e8fad96b3937d88cff71d0908f940ce1d129eaf672282cd55df476190 extends Twig_Template
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
        $__internal_bbf313bc023ac696acb0ff5abeeeee8912f8e8e43f73956c73bc7b794a141c4d = $this->env->getExtension("native_profiler");
        $__internal_bbf313bc023ac696acb0ff5abeeeee8912f8e8e43f73956c73bc7b794a141c4d->enter($__internal_bbf313bc023ac696acb0ff5abeeeee8912f8e8e43f73956c73bc7b794a141c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bbf313bc023ac696acb0ff5abeeeee8912f8e8e43f73956c73bc7b794a141c4d->leave($__internal_bbf313bc023ac696acb0ff5abeeeee8912f8e8e43f73956c73bc7b794a141c4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
