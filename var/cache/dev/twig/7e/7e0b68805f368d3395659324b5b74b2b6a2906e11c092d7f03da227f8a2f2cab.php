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
        $__internal_b7884a472672d3a6b0e9444a2236fa1523e8a25c2ce2abd573f6329519be52ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7884a472672d3a6b0e9444a2236fa1523e8a25c2ce2abd573f6329519be52ac->enter($__internal_b7884a472672d3a6b0e9444a2236fa1523e8a25c2ce2abd573f6329519be52ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_356eed3a94567b1e17bd7a213831f27bfb13055f364b8006b1317020c6a3ffc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356eed3a94567b1e17bd7a213831f27bfb13055f364b8006b1317020c6a3ffc7->enter($__internal_356eed3a94567b1e17bd7a213831f27bfb13055f364b8006b1317020c6a3ffc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b7884a472672d3a6b0e9444a2236fa1523e8a25c2ce2abd573f6329519be52ac->leave($__internal_b7884a472672d3a6b0e9444a2236fa1523e8a25c2ce2abd573f6329519be52ac_prof);

        
        $__internal_356eed3a94567b1e17bd7a213831f27bfb13055f364b8006b1317020c6a3ffc7->leave($__internal_356eed3a94567b1e17bd7a213831f27bfb13055f364b8006b1317020c6a3ffc7_prof);

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
