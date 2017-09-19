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
        $__internal_effd1d78eb35a868f0c39016b5b59839dd2f81a164585fcd709aa5d51e3f25f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effd1d78eb35a868f0c39016b5b59839dd2f81a164585fcd709aa5d51e3f25f8->enter($__internal_effd1d78eb35a868f0c39016b5b59839dd2f81a164585fcd709aa5d51e3f25f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3e4acf4eade7867fbde050314578bdacb5bf7774e35bbe4dfe76e49cb2fbc995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4acf4eade7867fbde050314578bdacb5bf7774e35bbe4dfe76e49cb2fbc995->enter($__internal_3e4acf4eade7867fbde050314578bdacb5bf7774e35bbe4dfe76e49cb2fbc995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_effd1d78eb35a868f0c39016b5b59839dd2f81a164585fcd709aa5d51e3f25f8->leave($__internal_effd1d78eb35a868f0c39016b5b59839dd2f81a164585fcd709aa5d51e3f25f8_prof);

        
        $__internal_3e4acf4eade7867fbde050314578bdacb5bf7774e35bbe4dfe76e49cb2fbc995->leave($__internal_3e4acf4eade7867fbde050314578bdacb5bf7774e35bbe4dfe76e49cb2fbc995_prof);

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
