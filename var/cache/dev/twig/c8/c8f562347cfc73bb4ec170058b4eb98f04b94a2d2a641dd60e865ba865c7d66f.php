<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_7b0117f361a43b79f5155bef8bc1e6987424eea8a959efa6da5b2326c8fabdd3 extends Twig_Template
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
        $__internal_8956111f42ec5a715503c14961e65a5a63e2cd458bb70d7cd066da4f3e869d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8956111f42ec5a715503c14961e65a5a63e2cd458bb70d7cd066da4f3e869d2d->enter($__internal_8956111f42ec5a715503c14961e65a5a63e2cd458bb70d7cd066da4f3e869d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_61b257655c62e29fa6e3934279f929c981ff9fbbab6589819341c79c06f8b385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b257655c62e29fa6e3934279f929c981ff9fbbab6589819341c79c06f8b385->enter($__internal_61b257655c62e29fa6e3934279f929c981ff9fbbab6589819341c79c06f8b385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_8956111f42ec5a715503c14961e65a5a63e2cd458bb70d7cd066da4f3e869d2d->leave($__internal_8956111f42ec5a715503c14961e65a5a63e2cd458bb70d7cd066da4f3e869d2d_prof);

        
        $__internal_61b257655c62e29fa6e3934279f929c981ff9fbbab6589819341c79c06f8b385->leave($__internal_61b257655c62e29fa6e3934279f929c981ff9fbbab6589819341c79c06f8b385_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
