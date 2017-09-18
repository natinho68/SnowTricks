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
        $__internal_515066b32df55e8d62f10e0433095bcab3505f3032f2b00e687fb4144964286e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_515066b32df55e8d62f10e0433095bcab3505f3032f2b00e687fb4144964286e->enter($__internal_515066b32df55e8d62f10e0433095bcab3505f3032f2b00e687fb4144964286e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_84abcb72d33492c458b9cd6dcfafe19ec6216775e696fb0273a984648a0f2912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84abcb72d33492c458b9cd6dcfafe19ec6216775e696fb0273a984648a0f2912->enter($__internal_84abcb72d33492c458b9cd6dcfafe19ec6216775e696fb0273a984648a0f2912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_515066b32df55e8d62f10e0433095bcab3505f3032f2b00e687fb4144964286e->leave($__internal_515066b32df55e8d62f10e0433095bcab3505f3032f2b00e687fb4144964286e_prof);

        
        $__internal_84abcb72d33492c458b9cd6dcfafe19ec6216775e696fb0273a984648a0f2912->leave($__internal_84abcb72d33492c458b9cd6dcfafe19ec6216775e696fb0273a984648a0f2912_prof);

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
