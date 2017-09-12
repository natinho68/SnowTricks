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
        $__internal_846d0c60740c38db2a4d37eb4873858c1b914b55875f7e8afbfd8d8f27f63ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846d0c60740c38db2a4d37eb4873858c1b914b55875f7e8afbfd8d8f27f63ca8->enter($__internal_846d0c60740c38db2a4d37eb4873858c1b914b55875f7e8afbfd8d8f27f63ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8f9a9b0b73b54e59053b43e00a92c05bb827434e3942f489ec18e3c44470efb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9a9b0b73b54e59053b43e00a92c05bb827434e3942f489ec18e3c44470efb4->enter($__internal_8f9a9b0b73b54e59053b43e00a92c05bb827434e3942f489ec18e3c44470efb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_846d0c60740c38db2a4d37eb4873858c1b914b55875f7e8afbfd8d8f27f63ca8->leave($__internal_846d0c60740c38db2a4d37eb4873858c1b914b55875f7e8afbfd8d8f27f63ca8_prof);

        
        $__internal_8f9a9b0b73b54e59053b43e00a92c05bb827434e3942f489ec18e3c44470efb4->leave($__internal_8f9a9b0b73b54e59053b43e00a92c05bb827434e3942f489ec18e3c44470efb4_prof);

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
