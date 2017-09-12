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
        $__internal_07b5936d9e972990065b5fc83bda6e9c7b85e10ed0e27817f7e3f01d2bd8e341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b5936d9e972990065b5fc83bda6e9c7b85e10ed0e27817f7e3f01d2bd8e341->enter($__internal_07b5936d9e972990065b5fc83bda6e9c7b85e10ed0e27817f7e3f01d2bd8e341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b90fd76854cd52b2883beb83b87e23bd7d3f9a575b401e266d6e1d68d43698b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90fd76854cd52b2883beb83b87e23bd7d3f9a575b401e266d6e1d68d43698b7->enter($__internal_b90fd76854cd52b2883beb83b87e23bd7d3f9a575b401e266d6e1d68d43698b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_07b5936d9e972990065b5fc83bda6e9c7b85e10ed0e27817f7e3f01d2bd8e341->leave($__internal_07b5936d9e972990065b5fc83bda6e9c7b85e10ed0e27817f7e3f01d2bd8e341_prof);

        
        $__internal_b90fd76854cd52b2883beb83b87e23bd7d3f9a575b401e266d6e1d68d43698b7->leave($__internal_b90fd76854cd52b2883beb83b87e23bd7d3f9a575b401e266d6e1d68d43698b7_prof);

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
