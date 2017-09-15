<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7f545f45d40b090af3f7723592b96f041df094c47e0e7faa3dfd0caedc111fcf extends Twig_Template
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
        $__internal_98ca38afaf045e093c72cdb078f6f9ac981651aa0a93c98dfc94359fc439cc28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ca38afaf045e093c72cdb078f6f9ac981651aa0a93c98dfc94359fc439cc28->enter($__internal_98ca38afaf045e093c72cdb078f6f9ac981651aa0a93c98dfc94359fc439cc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_cf087c61850791fc0319a67fe4c004aed4973498472877465da1111c4edd39c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf087c61850791fc0319a67fe4c004aed4973498472877465da1111c4edd39c5->enter($__internal_cf087c61850791fc0319a67fe4c004aed4973498472877465da1111c4edd39c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_98ca38afaf045e093c72cdb078f6f9ac981651aa0a93c98dfc94359fc439cc28->leave($__internal_98ca38afaf045e093c72cdb078f6f9ac981651aa0a93c98dfc94359fc439cc28_prof);

        
        $__internal_cf087c61850791fc0319a67fe4c004aed4973498472877465da1111c4edd39c5->leave($__internal_cf087c61850791fc0319a67fe4c004aed4973498472877465da1111c4edd39c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
