<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_458d21bc00723d898918721ce1cc1220dbc8e16363130bb73be0532ff98570f5 extends Twig_Template
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
        $__internal_399bba32ace1b138c905153127413c13508b5523df7fb58f025589df20bf8859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399bba32ace1b138c905153127413c13508b5523df7fb58f025589df20bf8859->enter($__internal_399bba32ace1b138c905153127413c13508b5523df7fb58f025589df20bf8859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fab7b43bfe13795e5d9a7608f11fcfa31e8cb2ae2087f83e492989645e15bc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab7b43bfe13795e5d9a7608f11fcfa31e8cb2ae2087f83e492989645e15bc32->enter($__internal_fab7b43bfe13795e5d9a7608f11fcfa31e8cb2ae2087f83e492989645e15bc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_399bba32ace1b138c905153127413c13508b5523df7fb58f025589df20bf8859->leave($__internal_399bba32ace1b138c905153127413c13508b5523df7fb58f025589df20bf8859_prof);

        
        $__internal_fab7b43bfe13795e5d9a7608f11fcfa31e8cb2ae2087f83e492989645e15bc32->leave($__internal_fab7b43bfe13795e5d9a7608f11fcfa31e8cb2ae2087f83e492989645e15bc32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
