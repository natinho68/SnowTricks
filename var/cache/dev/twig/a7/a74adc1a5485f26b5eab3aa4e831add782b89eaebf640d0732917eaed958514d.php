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
        $__internal_074978b930c0f0712b3106b82a75aed5df8669250f34d4f95e930175f0f53f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074978b930c0f0712b3106b82a75aed5df8669250f34d4f95e930175f0f53f6d->enter($__internal_074978b930c0f0712b3106b82a75aed5df8669250f34d4f95e930175f0f53f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3bb62ee2e05d786143a0a418c9697f6b4c4f9d9c5d298e0e19d4d4cea890f599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb62ee2e05d786143a0a418c9697f6b4c4f9d9c5d298e0e19d4d4cea890f599->enter($__internal_3bb62ee2e05d786143a0a418c9697f6b4c4f9d9c5d298e0e19d4d4cea890f599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_074978b930c0f0712b3106b82a75aed5df8669250f34d4f95e930175f0f53f6d->leave($__internal_074978b930c0f0712b3106b82a75aed5df8669250f34d4f95e930175f0f53f6d_prof);

        
        $__internal_3bb62ee2e05d786143a0a418c9697f6b4c4f9d9c5d298e0e19d4d4cea890f599->leave($__internal_3bb62ee2e05d786143a0a418c9697f6b4c4f9d9c5d298e0e19d4d4cea890f599_prof);

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
