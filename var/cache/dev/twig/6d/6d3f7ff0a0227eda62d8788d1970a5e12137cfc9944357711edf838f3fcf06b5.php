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
        $__internal_77368f20d634e33c64caf6b7802c2f2624e0decb1a55da948c4dbfa17fcf1fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77368f20d634e33c64caf6b7802c2f2624e0decb1a55da948c4dbfa17fcf1fa5->enter($__internal_77368f20d634e33c64caf6b7802c2f2624e0decb1a55da948c4dbfa17fcf1fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1d0f55b95bc170fba91222d8f092870260c54452a0ca09ea8da6cd4bd4877dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0f55b95bc170fba91222d8f092870260c54452a0ca09ea8da6cd4bd4877dea->enter($__internal_1d0f55b95bc170fba91222d8f092870260c54452a0ca09ea8da6cd4bd4877dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_77368f20d634e33c64caf6b7802c2f2624e0decb1a55da948c4dbfa17fcf1fa5->leave($__internal_77368f20d634e33c64caf6b7802c2f2624e0decb1a55da948c4dbfa17fcf1fa5_prof);

        
        $__internal_1d0f55b95bc170fba91222d8f092870260c54452a0ca09ea8da6cd4bd4877dea->leave($__internal_1d0f55b95bc170fba91222d8f092870260c54452a0ca09ea8da6cd4bd4877dea_prof);

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
