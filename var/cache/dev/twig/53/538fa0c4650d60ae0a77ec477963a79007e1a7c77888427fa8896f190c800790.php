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
        $__internal_168e0d50fa124b3c7ff55093ff17064d30c9841d448360fb9fa962bf1eaad4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168e0d50fa124b3c7ff55093ff17064d30c9841d448360fb9fa962bf1eaad4ba->enter($__internal_168e0d50fa124b3c7ff55093ff17064d30c9841d448360fb9fa962bf1eaad4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5b983f0e175252f2e09cda2c48f78cb9b6ccc8770f92ec9bc2781c826bba2b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b983f0e175252f2e09cda2c48f78cb9b6ccc8770f92ec9bc2781c826bba2b1e->enter($__internal_5b983f0e175252f2e09cda2c48f78cb9b6ccc8770f92ec9bc2781c826bba2b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_168e0d50fa124b3c7ff55093ff17064d30c9841d448360fb9fa962bf1eaad4ba->leave($__internal_168e0d50fa124b3c7ff55093ff17064d30c9841d448360fb9fa962bf1eaad4ba_prof);

        
        $__internal_5b983f0e175252f2e09cda2c48f78cb9b6ccc8770f92ec9bc2781c826bba2b1e->leave($__internal_5b983f0e175252f2e09cda2c48f78cb9b6ccc8770f92ec9bc2781c826bba2b1e_prof);

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
