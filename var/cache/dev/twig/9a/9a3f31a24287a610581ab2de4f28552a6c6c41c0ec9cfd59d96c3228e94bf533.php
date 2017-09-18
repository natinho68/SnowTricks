<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_0ae84bef562e96a494e412e35134b0f0af758524f850e11ca89498f98c5d0946 extends Twig_Template
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
        $__internal_e854d6cfd75548f17920c2ddf7e6c6ffbc293a2c201e761f65dfffbf8c9ff4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e854d6cfd75548f17920c2ddf7e6c6ffbc293a2c201e761f65dfffbf8c9ff4d7->enter($__internal_e854d6cfd75548f17920c2ddf7e6c6ffbc293a2c201e761f65dfffbf8c9ff4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_f1577608204c0ca2722c06d4a9febf53abf36c7ca78edcdd9be1afec68e9f9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1577608204c0ca2722c06d4a9febf53abf36c7ca78edcdd9be1afec68e9f9de->enter($__internal_f1577608204c0ca2722c06d4a9febf53abf36c7ca78edcdd9be1afec68e9f9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e854d6cfd75548f17920c2ddf7e6c6ffbc293a2c201e761f65dfffbf8c9ff4d7->leave($__internal_e854d6cfd75548f17920c2ddf7e6c6ffbc293a2c201e761f65dfffbf8c9ff4d7_prof);

        
        $__internal_f1577608204c0ca2722c06d4a9febf53abf36c7ca78edcdd9be1afec68e9f9de->leave($__internal_f1577608204c0ca2722c06d4a9febf53abf36c7ca78edcdd9be1afec68e9f9de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
