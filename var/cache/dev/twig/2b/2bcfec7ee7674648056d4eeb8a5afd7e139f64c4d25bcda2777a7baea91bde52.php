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
        $__internal_7c1054ae435913cbf4dbff987bfa73e8f807c30d9a6461df76254a0d002552a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1054ae435913cbf4dbff987bfa73e8f807c30d9a6461df76254a0d002552a2->enter($__internal_7c1054ae435913cbf4dbff987bfa73e8f807c30d9a6461df76254a0d002552a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ff756800c9b33b98629d27be1a2c992a706cfa3c5c7c4d721e99c65c7f36c9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff756800c9b33b98629d27be1a2c992a706cfa3c5c7c4d721e99c65c7f36c9b5->enter($__internal_ff756800c9b33b98629d27be1a2c992a706cfa3c5c7c4d721e99c65c7f36c9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7c1054ae435913cbf4dbff987bfa73e8f807c30d9a6461df76254a0d002552a2->leave($__internal_7c1054ae435913cbf4dbff987bfa73e8f807c30d9a6461df76254a0d002552a2_prof);

        
        $__internal_ff756800c9b33b98629d27be1a2c992a706cfa3c5c7c4d721e99c65c7f36c9b5->leave($__internal_ff756800c9b33b98629d27be1a2c992a706cfa3c5c7c4d721e99c65c7f36c9b5_prof);

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
