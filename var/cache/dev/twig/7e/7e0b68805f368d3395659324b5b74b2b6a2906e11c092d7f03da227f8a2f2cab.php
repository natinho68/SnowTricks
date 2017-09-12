<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_620061507ae8dfeaaff9d74ca8d6a611f12dc714c98d836e9e9b3c4b8bf8960a extends Twig_Template
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
        $__internal_e2c87ad5595035471e2964cfed51dcbb2e27560396c217ee5d0f2786d91165e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c87ad5595035471e2964cfed51dcbb2e27560396c217ee5d0f2786d91165e5->enter($__internal_e2c87ad5595035471e2964cfed51dcbb2e27560396c217ee5d0f2786d91165e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_97bd34c74d9019bd5d1c49c19fc67ae93ffcc67c021257a9c033deda9bc01a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bd34c74d9019bd5d1c49c19fc67ae93ffcc67c021257a9c033deda9bc01a99->enter($__internal_97bd34c74d9019bd5d1c49c19fc67ae93ffcc67c021257a9c033deda9bc01a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e2c87ad5595035471e2964cfed51dcbb2e27560396c217ee5d0f2786d91165e5->leave($__internal_e2c87ad5595035471e2964cfed51dcbb2e27560396c217ee5d0f2786d91165e5_prof);

        
        $__internal_97bd34c74d9019bd5d1c49c19fc67ae93ffcc67c021257a9c033deda9bc01a99->leave($__internal_97bd34c74d9019bd5d1c49c19fc67ae93ffcc67c021257a9c033deda9bc01a99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
