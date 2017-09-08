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
        $__internal_3a088951520c2d4959c9ea27e103a2e3dc7fb7e6d0b26920574e6d5ed01a73c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a088951520c2d4959c9ea27e103a2e3dc7fb7e6d0b26920574e6d5ed01a73c5->enter($__internal_3a088951520c2d4959c9ea27e103a2e3dc7fb7e6d0b26920574e6d5ed01a73c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c02ea3924c576a8911de40ac5ced8c9d823823d1052b0fe44c09ab38d1d0042a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02ea3924c576a8911de40ac5ced8c9d823823d1052b0fe44c09ab38d1d0042a->enter($__internal_c02ea3924c576a8911de40ac5ced8c9d823823d1052b0fe44c09ab38d1d0042a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3a088951520c2d4959c9ea27e103a2e3dc7fb7e6d0b26920574e6d5ed01a73c5->leave($__internal_3a088951520c2d4959c9ea27e103a2e3dc7fb7e6d0b26920574e6d5ed01a73c5_prof);

        
        $__internal_c02ea3924c576a8911de40ac5ced8c9d823823d1052b0fe44c09ab38d1d0042a->leave($__internal_c02ea3924c576a8911de40ac5ced8c9d823823d1052b0fe44c09ab38d1d0042a_prof);

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
