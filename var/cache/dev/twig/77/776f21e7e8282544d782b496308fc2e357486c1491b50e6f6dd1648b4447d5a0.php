<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_68c38a23be265dd6e22e9bb59bc6674cc67df65ac784156f4290ba4aafcd8f5b extends Twig_Template
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
        $__internal_043173055f9d560c77da31620dc061cdb6fc3b97515452025b59ede4dbc34579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043173055f9d560c77da31620dc061cdb6fc3b97515452025b59ede4dbc34579->enter($__internal_043173055f9d560c77da31620dc061cdb6fc3b97515452025b59ede4dbc34579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_cc94c510468adb99b425c4d7cf03c67a7eb5445609c1d0025953c780d2c0ccd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc94c510468adb99b425c4d7cf03c67a7eb5445609c1d0025953c780d2c0ccd6->enter($__internal_cc94c510468adb99b425c4d7cf03c67a7eb5445609c1d0025953c780d2c0ccd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_043173055f9d560c77da31620dc061cdb6fc3b97515452025b59ede4dbc34579->leave($__internal_043173055f9d560c77da31620dc061cdb6fc3b97515452025b59ede4dbc34579_prof);

        
        $__internal_cc94c510468adb99b425c4d7cf03c67a7eb5445609c1d0025953c780d2c0ccd6->leave($__internal_cc94c510468adb99b425c4d7cf03c67a7eb5445609c1d0025953c780d2c0ccd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
