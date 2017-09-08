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
        $__internal_c6b81e8ac53e8fa8627d151971435442220fa8c7bc25835f0ff490445a0b78b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b81e8ac53e8fa8627d151971435442220fa8c7bc25835f0ff490445a0b78b5->enter($__internal_c6b81e8ac53e8fa8627d151971435442220fa8c7bc25835f0ff490445a0b78b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_eaa7318b3b5293bf2f26c91b26eae04e63a7b55355d189c4a6857b418eb0b2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa7318b3b5293bf2f26c91b26eae04e63a7b55355d189c4a6857b418eb0b2ab->enter($__internal_eaa7318b3b5293bf2f26c91b26eae04e63a7b55355d189c4a6857b418eb0b2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c6b81e8ac53e8fa8627d151971435442220fa8c7bc25835f0ff490445a0b78b5->leave($__internal_c6b81e8ac53e8fa8627d151971435442220fa8c7bc25835f0ff490445a0b78b5_prof);

        
        $__internal_eaa7318b3b5293bf2f26c91b26eae04e63a7b55355d189c4a6857b418eb0b2ab->leave($__internal_eaa7318b3b5293bf2f26c91b26eae04e63a7b55355d189c4a6857b418eb0b2ab_prof);

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
