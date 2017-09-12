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
        $__internal_f5d129100581eba6d9c9163c85e8794614f8e0d252c60eef4ae0e0d8cbce571a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d129100581eba6d9c9163c85e8794614f8e0d252c60eef4ae0e0d8cbce571a->enter($__internal_f5d129100581eba6d9c9163c85e8794614f8e0d252c60eef4ae0e0d8cbce571a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b7bddc4beeba468670921a47ae46f0a32d66e0e8940247dd3c8462c616e93c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bddc4beeba468670921a47ae46f0a32d66e0e8940247dd3c8462c616e93c8d->enter($__internal_b7bddc4beeba468670921a47ae46f0a32d66e0e8940247dd3c8462c616e93c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f5d129100581eba6d9c9163c85e8794614f8e0d252c60eef4ae0e0d8cbce571a->leave($__internal_f5d129100581eba6d9c9163c85e8794614f8e0d252c60eef4ae0e0d8cbce571a_prof);

        
        $__internal_b7bddc4beeba468670921a47ae46f0a32d66e0e8940247dd3c8462c616e93c8d->leave($__internal_b7bddc4beeba468670921a47ae46f0a32d66e0e8940247dd3c8462c616e93c8d_prof);

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
