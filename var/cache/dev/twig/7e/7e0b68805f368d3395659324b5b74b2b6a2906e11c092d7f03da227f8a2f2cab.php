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
        $__internal_9cd3578b641bc45573c18dfaf2773643d43109acee7ba0acd0afc605d4bf0429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd3578b641bc45573c18dfaf2773643d43109acee7ba0acd0afc605d4bf0429->enter($__internal_9cd3578b641bc45573c18dfaf2773643d43109acee7ba0acd0afc605d4bf0429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7274a87464cffc729b03e9c61c48fbdbf59273e2fc63f1fcbc68e87dc666963e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7274a87464cffc729b03e9c61c48fbdbf59273e2fc63f1fcbc68e87dc666963e->enter($__internal_7274a87464cffc729b03e9c61c48fbdbf59273e2fc63f1fcbc68e87dc666963e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9cd3578b641bc45573c18dfaf2773643d43109acee7ba0acd0afc605d4bf0429->leave($__internal_9cd3578b641bc45573c18dfaf2773643d43109acee7ba0acd0afc605d4bf0429_prof);

        
        $__internal_7274a87464cffc729b03e9c61c48fbdbf59273e2fc63f1fcbc68e87dc666963e->leave($__internal_7274a87464cffc729b03e9c61c48fbdbf59273e2fc63f1fcbc68e87dc666963e_prof);

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
