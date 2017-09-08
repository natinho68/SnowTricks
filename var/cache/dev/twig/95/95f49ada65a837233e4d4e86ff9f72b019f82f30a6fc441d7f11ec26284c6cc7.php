<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b698a631faecbeb1173f7e3ea4862376dfdc85256675a1756f933fe185a3b170 extends Twig_Template
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
        $__internal_0dcafe40d9ca3a1d8c349028f85c11dbd8583ea37105b5c387338fcbe0af8c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dcafe40d9ca3a1d8c349028f85c11dbd8583ea37105b5c387338fcbe0af8c79->enter($__internal_0dcafe40d9ca3a1d8c349028f85c11dbd8583ea37105b5c387338fcbe0af8c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_6414896a39d559ebacf5386948b3c53aefdb2b75021988a66beaa0783cc47123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6414896a39d559ebacf5386948b3c53aefdb2b75021988a66beaa0783cc47123->enter($__internal_6414896a39d559ebacf5386948b3c53aefdb2b75021988a66beaa0783cc47123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0dcafe40d9ca3a1d8c349028f85c11dbd8583ea37105b5c387338fcbe0af8c79->leave($__internal_0dcafe40d9ca3a1d8c349028f85c11dbd8583ea37105b5c387338fcbe0af8c79_prof);

        
        $__internal_6414896a39d559ebacf5386948b3c53aefdb2b75021988a66beaa0783cc47123->leave($__internal_6414896a39d559ebacf5386948b3c53aefdb2b75021988a66beaa0783cc47123_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
