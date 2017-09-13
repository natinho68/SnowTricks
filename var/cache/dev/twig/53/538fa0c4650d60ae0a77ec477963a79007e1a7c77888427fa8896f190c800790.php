<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_79a23786a19f62969fc816cefa8cdf464d5385559d80244c6cb71f531751dcfb extends Twig_Template
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
        $__internal_2031d7c58c68de6a9a61705b4028f3ed0be522c94c353c2f9fc99fba6a2cf03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2031d7c58c68de6a9a61705b4028f3ed0be522c94c353c2f9fc99fba6a2cf03d->enter($__internal_2031d7c58c68de6a9a61705b4028f3ed0be522c94c353c2f9fc99fba6a2cf03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1a818d7de86f2b4f698382be4dfde5a76c4ad940d819df46908aa96f2dc7b0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a818d7de86f2b4f698382be4dfde5a76c4ad940d819df46908aa96f2dc7b0ac->enter($__internal_1a818d7de86f2b4f698382be4dfde5a76c4ad940d819df46908aa96f2dc7b0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2031d7c58c68de6a9a61705b4028f3ed0be522c94c353c2f9fc99fba6a2cf03d->leave($__internal_2031d7c58c68de6a9a61705b4028f3ed0be522c94c353c2f9fc99fba6a2cf03d_prof);

        
        $__internal_1a818d7de86f2b4f698382be4dfde5a76c4ad940d819df46908aa96f2dc7b0ac->leave($__internal_1a818d7de86f2b4f698382be4dfde5a76c4ad940d819df46908aa96f2dc7b0ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
