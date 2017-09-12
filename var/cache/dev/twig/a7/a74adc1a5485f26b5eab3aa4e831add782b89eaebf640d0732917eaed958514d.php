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
        $__internal_e9ed6b47c529fb743c6b34d3b2816cc0efd8e0408774b7379806a1cf48215b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ed6b47c529fb743c6b34d3b2816cc0efd8e0408774b7379806a1cf48215b4a->enter($__internal_e9ed6b47c529fb743c6b34d3b2816cc0efd8e0408774b7379806a1cf48215b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_dc94a0b2ca0bd98af225525c286eb3a46f2c7bddf2f9ee6c88bd5248090724ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc94a0b2ca0bd98af225525c286eb3a46f2c7bddf2f9ee6c88bd5248090724ad->enter($__internal_dc94a0b2ca0bd98af225525c286eb3a46f2c7bddf2f9ee6c88bd5248090724ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e9ed6b47c529fb743c6b34d3b2816cc0efd8e0408774b7379806a1cf48215b4a->leave($__internal_e9ed6b47c529fb743c6b34d3b2816cc0efd8e0408774b7379806a1cf48215b4a_prof);

        
        $__internal_dc94a0b2ca0bd98af225525c286eb3a46f2c7bddf2f9ee6c88bd5248090724ad->leave($__internal_dc94a0b2ca0bd98af225525c286eb3a46f2c7bddf2f9ee6c88bd5248090724ad_prof);

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
