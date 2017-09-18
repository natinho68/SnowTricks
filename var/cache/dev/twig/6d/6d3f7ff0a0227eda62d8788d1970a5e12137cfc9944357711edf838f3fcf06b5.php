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
        $__internal_d6d9cbe50a786c3af7b2c68962fdae62e94ad9480e95f62e25e29a8a08ba5828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d9cbe50a786c3af7b2c68962fdae62e94ad9480e95f62e25e29a8a08ba5828->enter($__internal_d6d9cbe50a786c3af7b2c68962fdae62e94ad9480e95f62e25e29a8a08ba5828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b39f7c24c307363d1ed31a551048e618a4cfb368cb3f15e6e6ed037f67022ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39f7c24c307363d1ed31a551048e618a4cfb368cb3f15e6e6ed037f67022ffc->enter($__internal_b39f7c24c307363d1ed31a551048e618a4cfb368cb3f15e6e6ed037f67022ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d6d9cbe50a786c3af7b2c68962fdae62e94ad9480e95f62e25e29a8a08ba5828->leave($__internal_d6d9cbe50a786c3af7b2c68962fdae62e94ad9480e95f62e25e29a8a08ba5828_prof);

        
        $__internal_b39f7c24c307363d1ed31a551048e618a4cfb368cb3f15e6e6ed037f67022ffc->leave($__internal_b39f7c24c307363d1ed31a551048e618a4cfb368cb3f15e6e6ed037f67022ffc_prof);

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
