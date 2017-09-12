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
        $__internal_1626c75564c82de5f74aa3970aa65cb86ed4c61ff2d6f7a6754c03dd7504dd18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1626c75564c82de5f74aa3970aa65cb86ed4c61ff2d6f7a6754c03dd7504dd18->enter($__internal_1626c75564c82de5f74aa3970aa65cb86ed4c61ff2d6f7a6754c03dd7504dd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a49199a35f3fa1b24beba5fc13d4eefe40a0c2d7e909edc688568360076506cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49199a35f3fa1b24beba5fc13d4eefe40a0c2d7e909edc688568360076506cb->enter($__internal_a49199a35f3fa1b24beba5fc13d4eefe40a0c2d7e909edc688568360076506cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1626c75564c82de5f74aa3970aa65cb86ed4c61ff2d6f7a6754c03dd7504dd18->leave($__internal_1626c75564c82de5f74aa3970aa65cb86ed4c61ff2d6f7a6754c03dd7504dd18_prof);

        
        $__internal_a49199a35f3fa1b24beba5fc13d4eefe40a0c2d7e909edc688568360076506cb->leave($__internal_a49199a35f3fa1b24beba5fc13d4eefe40a0c2d7e909edc688568360076506cb_prof);

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
