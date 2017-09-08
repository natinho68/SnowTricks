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
        $__internal_ac8cbdec6cac67281db660e495d5322c83552d87df810be0b4fce63e9df09a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8cbdec6cac67281db660e495d5322c83552d87df810be0b4fce63e9df09a5d->enter($__internal_ac8cbdec6cac67281db660e495d5322c83552d87df810be0b4fce63e9df09a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_03ffa5b180d46bc4260893cc074d8cee7bbc3c5d38a728128925e989dc44730e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ffa5b180d46bc4260893cc074d8cee7bbc3c5d38a728128925e989dc44730e->enter($__internal_03ffa5b180d46bc4260893cc074d8cee7bbc3c5d38a728128925e989dc44730e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ac8cbdec6cac67281db660e495d5322c83552d87df810be0b4fce63e9df09a5d->leave($__internal_ac8cbdec6cac67281db660e495d5322c83552d87df810be0b4fce63e9df09a5d_prof);

        
        $__internal_03ffa5b180d46bc4260893cc074d8cee7bbc3c5d38a728128925e989dc44730e->leave($__internal_03ffa5b180d46bc4260893cc074d8cee7bbc3c5d38a728128925e989dc44730e_prof);

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
