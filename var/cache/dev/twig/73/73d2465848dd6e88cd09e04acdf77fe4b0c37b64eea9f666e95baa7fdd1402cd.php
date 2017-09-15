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
        $__internal_44dfe3f5901f2df01bec14fe967bfc645884286b6bf13c15e7a6d222b358d8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44dfe3f5901f2df01bec14fe967bfc645884286b6bf13c15e7a6d222b358d8c5->enter($__internal_44dfe3f5901f2df01bec14fe967bfc645884286b6bf13c15e7a6d222b358d8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_df37ff3b799dc8e3ceeb936dbf57c9e4312d0d93d4d82368c842d529a2915761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df37ff3b799dc8e3ceeb936dbf57c9e4312d0d93d4d82368c842d529a2915761->enter($__internal_df37ff3b799dc8e3ceeb936dbf57c9e4312d0d93d4d82368c842d529a2915761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_44dfe3f5901f2df01bec14fe967bfc645884286b6bf13c15e7a6d222b358d8c5->leave($__internal_44dfe3f5901f2df01bec14fe967bfc645884286b6bf13c15e7a6d222b358d8c5_prof);

        
        $__internal_df37ff3b799dc8e3ceeb936dbf57c9e4312d0d93d4d82368c842d529a2915761->leave($__internal_df37ff3b799dc8e3ceeb936dbf57c9e4312d0d93d4d82368c842d529a2915761_prof);

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
