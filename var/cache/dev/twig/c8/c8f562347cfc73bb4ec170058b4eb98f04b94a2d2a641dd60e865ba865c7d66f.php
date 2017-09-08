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
        $__internal_6e00d2545b6538e281b1c7bd7b16db0a23adba4e4e7ba3ccded9bcfef42748ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e00d2545b6538e281b1c7bd7b16db0a23adba4e4e7ba3ccded9bcfef42748ee->enter($__internal_6e00d2545b6538e281b1c7bd7b16db0a23adba4e4e7ba3ccded9bcfef42748ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_edcb3839b9f7b43123cb5825d133b63d3cbf2551f43cb8e1d37f8b6ac358e29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edcb3839b9f7b43123cb5825d133b63d3cbf2551f43cb8e1d37f8b6ac358e29e->enter($__internal_edcb3839b9f7b43123cb5825d133b63d3cbf2551f43cb8e1d37f8b6ac358e29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_6e00d2545b6538e281b1c7bd7b16db0a23adba4e4e7ba3ccded9bcfef42748ee->leave($__internal_6e00d2545b6538e281b1c7bd7b16db0a23adba4e4e7ba3ccded9bcfef42748ee_prof);

        
        $__internal_edcb3839b9f7b43123cb5825d133b63d3cbf2551f43cb8e1d37f8b6ac358e29e->leave($__internal_edcb3839b9f7b43123cb5825d133b63d3cbf2551f43cb8e1d37f8b6ac358e29e_prof);

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
