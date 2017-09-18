<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d00b3f214028445a3500f45a8127962f2706a31790a3e44aa9210f41cc2bf5ce extends Twig_Template
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
        $__internal_943ee30f0f9ff409cd6c01cf6f592a92c8cf9e31f8137a7119d5b8e8c77b459f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943ee30f0f9ff409cd6c01cf6f592a92c8cf9e31f8137a7119d5b8e8c77b459f->enter($__internal_943ee30f0f9ff409cd6c01cf6f592a92c8cf9e31f8137a7119d5b8e8c77b459f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_125523a53333642d030bc0e3df4914b953cfc665a7684b4ecc6bbc1b016cfbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125523a53333642d030bc0e3df4914b953cfc665a7684b4ecc6bbc1b016cfbb7->enter($__internal_125523a53333642d030bc0e3df4914b953cfc665a7684b4ecc6bbc1b016cfbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_943ee30f0f9ff409cd6c01cf6f592a92c8cf9e31f8137a7119d5b8e8c77b459f->leave($__internal_943ee30f0f9ff409cd6c01cf6f592a92c8cf9e31f8137a7119d5b8e8c77b459f_prof);

        
        $__internal_125523a53333642d030bc0e3df4914b953cfc665a7684b4ecc6bbc1b016cfbb7->leave($__internal_125523a53333642d030bc0e3df4914b953cfc665a7684b4ecc6bbc1b016cfbb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
