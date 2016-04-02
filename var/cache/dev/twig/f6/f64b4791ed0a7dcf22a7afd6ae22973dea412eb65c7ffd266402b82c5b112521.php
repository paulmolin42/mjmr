<?php

/* default/reception.html.twig */
class __TwigTemplate_a8c4518709f676dd50422cbf19c423e55c03d4593b769986f68c9e8910ea5bc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/reception.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c64c7280db64de0868e3a565c8657bd3c4df007b06e9c397e929fd94c959e14 = $this->env->getExtension("native_profiler");
        $__internal_5c64c7280db64de0868e3a565c8657bd3c4df007b06e9c397e929fd94c959e14->enter($__internal_5c64c7280db64de0868e3a565c8657bd3c4df007b06e9c397e929fd94c959e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/reception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c64c7280db64de0868e3a565c8657bd3c4df007b06e9c397e929fd94c959e14->leave($__internal_5c64c7280db64de0868e3a565c8657bd3c4df007b06e9c397e929fd94c959e14_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_445e5191654c2777581b2272566843620b3259520c8cd3b0a915c2ee527f9950 = $this->env->getExtension("native_profiler");
        $__internal_445e5191654c2777581b2272566843620b3259520c8cd3b0a915c2ee527f9950->enter($__internal_445e5191654c2777581b2272566843620b3259520c8cd3b0a915c2ee527f9950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"wrapper\">
        <p>Nous aurons la joie de vous recevoir à partir de 19 heures au domaine de Chanteraine, à Aiguines (dans le
            Var) ! Aiguines se situe à environ 50 min de route de Puimoisson.</p>
        <p>Faisant suite au cocktail, le dîner commencera vers 21h30.</p>
        <h1>Informations pratiques</h1>
        <p>Attention, la plupart des GPS font emprunter le petit sentier de la forêt jouxtant le camping, certes ce
            trajet est plus court mais il risque d’être impraticable si vous n’êtes pas en tout terrain !</p>
        <h2>Le brunch</h2>
        <p>Nous aurons la joie de nous retrouver autour d’un brunch le lendemain dès 12h, au Domaine de Chanteraine
            !</p>
    </div>
";
        
        $__internal_445e5191654c2777581b2272566843620b3259520c8cd3b0a915c2ee527f9950->leave($__internal_445e5191654c2777581b2272566843620b3259520c8cd3b0a915c2ee527f9950_prof);

    }

    public function getTemplateName()
    {
        return "default/reception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="wrapper">*/
/*         <p>Nous aurons la joie de vous recevoir à partir de 19 heures au domaine de Chanteraine, à Aiguines (dans le*/
/*             Var) ! Aiguines se situe à environ 50 min de route de Puimoisson.</p>*/
/*         <p>Faisant suite au cocktail, le dîner commencera vers 21h30.</p>*/
/*         <h1>Informations pratiques</h1>*/
/*         <p>Attention, la plupart des GPS font emprunter le petit sentier de la forêt jouxtant le camping, certes ce*/
/*             trajet est plus court mais il risque d’être impraticable si vous n’êtes pas en tout terrain !</p>*/
/*         <h2>Le brunch</h2>*/
/*         <p>Nous aurons la joie de nous retrouver autour d’un brunch le lendemain dès 12h, au Domaine de Chanteraine*/
/*             !</p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
