<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_04dce6188bf89aab671423f45cf580b533129d98e369dbf6f72e4edb0549e81b extends Twig_Template
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
        $__internal_5f6eae737529061ab00dc856f0c532cc00d382a0a2cf68654a374eda0bb04e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6eae737529061ab00dc856f0c532cc00d382a0a2cf68654a374eda0bb04e58->enter($__internal_5f6eae737529061ab00dc856f0c532cc00d382a0a2cf68654a374eda0bb04e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_aa2e28ab19e6389280ae616e82cce1dfddc940f280bc27362b7a95b02964ddc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2e28ab19e6389280ae616e82cce1dfddc940f280bc27362b7a95b02964ddc0->enter($__internal_aa2e28ab19e6389280ae616e82cce1dfddc940f280bc27362b7a95b02964ddc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_5f6eae737529061ab00dc856f0c532cc00d382a0a2cf68654a374eda0bb04e58->leave($__internal_5f6eae737529061ab00dc856f0c532cc00d382a0a2cf68654a374eda0bb04e58_prof);

        
        $__internal_aa2e28ab19e6389280ae616e82cce1dfddc940f280bc27362b7a95b02964ddc0->leave($__internal_aa2e28ab19e6389280ae616e82cce1dfddc940f280bc27362b7a95b02964ddc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
