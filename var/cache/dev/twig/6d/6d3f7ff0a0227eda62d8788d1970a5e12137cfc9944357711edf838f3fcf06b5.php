<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a8f888cb4b2cc6875df7ea15c13c2454f8f53a48164969c0decce1fbd844682d extends Twig_Template
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
        $__internal_547757b3e032675946a3a3b9830703b438067ee9a68787188451d57551b729f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547757b3e032675946a3a3b9830703b438067ee9a68787188451d57551b729f8->enter($__internal_547757b3e032675946a3a3b9830703b438067ee9a68787188451d57551b729f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_fb3187013f0cc664bd6bd1d6cd8602ee3ff15d382848b01597b6b9dca3fe29c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3187013f0cc664bd6bd1d6cd8602ee3ff15d382848b01597b6b9dca3fe29c7->enter($__internal_fb3187013f0cc664bd6bd1d6cd8602ee3ff15d382848b01597b6b9dca3fe29c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_547757b3e032675946a3a3b9830703b438067ee9a68787188451d57551b729f8->leave($__internal_547757b3e032675946a3a3b9830703b438067ee9a68787188451d57551b729f8_prof);

        
        $__internal_fb3187013f0cc664bd6bd1d6cd8602ee3ff15d382848b01597b6b9dca3fe29c7->leave($__internal_fb3187013f0cc664bd6bd1d6cd8602ee3ff15d382848b01597b6b9dca3fe29c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
