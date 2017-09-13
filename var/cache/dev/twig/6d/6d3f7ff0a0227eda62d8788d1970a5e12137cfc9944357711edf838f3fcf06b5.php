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
        $__internal_c95106ac854e4b76e54a16f0326ed28e5e5bacf78c8f5a8b3ec737893d2b8768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95106ac854e4b76e54a16f0326ed28e5e5bacf78c8f5a8b3ec737893d2b8768->enter($__internal_c95106ac854e4b76e54a16f0326ed28e5e5bacf78c8f5a8b3ec737893d2b8768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ad28a2a44019147c3051d2051c43c376d5046a54c8e3fae64e8c15b50f758b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad28a2a44019147c3051d2051c43c376d5046a54c8e3fae64e8c15b50f758b4d->enter($__internal_ad28a2a44019147c3051d2051c43c376d5046a54c8e3fae64e8c15b50f758b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c95106ac854e4b76e54a16f0326ed28e5e5bacf78c8f5a8b3ec737893d2b8768->leave($__internal_c95106ac854e4b76e54a16f0326ed28e5e5bacf78c8f5a8b3ec737893d2b8768_prof);

        
        $__internal_ad28a2a44019147c3051d2051c43c376d5046a54c8e3fae64e8c15b50f758b4d->leave($__internal_ad28a2a44019147c3051d2051c43c376d5046a54c8e3fae64e8c15b50f758b4d_prof);

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
