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
        $__internal_f7877dd63e8871f96c6bee90f7efc25cf8859f073b25eae7f2ac9a92207ab9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7877dd63e8871f96c6bee90f7efc25cf8859f073b25eae7f2ac9a92207ab9f4->enter($__internal_f7877dd63e8871f96c6bee90f7efc25cf8859f073b25eae7f2ac9a92207ab9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_8f85a4bbe0b8ec80163f733b0e0fc74714f1cc72d14b584cd51ca5cd14ef1fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f85a4bbe0b8ec80163f733b0e0fc74714f1cc72d14b584cd51ca5cd14ef1fd7->enter($__internal_8f85a4bbe0b8ec80163f733b0e0fc74714f1cc72d14b584cd51ca5cd14ef1fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f7877dd63e8871f96c6bee90f7efc25cf8859f073b25eae7f2ac9a92207ab9f4->leave($__internal_f7877dd63e8871f96c6bee90f7efc25cf8859f073b25eae7f2ac9a92207ab9f4_prof);

        
        $__internal_8f85a4bbe0b8ec80163f733b0e0fc74714f1cc72d14b584cd51ca5cd14ef1fd7->leave($__internal_8f85a4bbe0b8ec80163f733b0e0fc74714f1cc72d14b584cd51ca5cd14ef1fd7_prof);

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
