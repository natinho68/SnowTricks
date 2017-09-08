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
        $__internal_4beb3e2c58106e4073d08e813194b9ab6207b2f0aede8b55b9758d5044d8a058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4beb3e2c58106e4073d08e813194b9ab6207b2f0aede8b55b9758d5044d8a058->enter($__internal_4beb3e2c58106e4073d08e813194b9ab6207b2f0aede8b55b9758d5044d8a058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_47b68e45741bdbaa75594535592957c2efce23c2b52e46e4f94730ec1c2b4f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b68e45741bdbaa75594535592957c2efce23c2b52e46e4f94730ec1c2b4f1e->enter($__internal_47b68e45741bdbaa75594535592957c2efce23c2b52e46e4f94730ec1c2b4f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4beb3e2c58106e4073d08e813194b9ab6207b2f0aede8b55b9758d5044d8a058->leave($__internal_4beb3e2c58106e4073d08e813194b9ab6207b2f0aede8b55b9758d5044d8a058_prof);

        
        $__internal_47b68e45741bdbaa75594535592957c2efce23c2b52e46e4f94730ec1c2b4f1e->leave($__internal_47b68e45741bdbaa75594535592957c2efce23c2b52e46e4f94730ec1c2b4f1e_prof);

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
