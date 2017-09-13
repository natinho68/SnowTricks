<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_75f0d6782c8770f49cb335a145077e81a9d90aa1874c18de0c5e2c408861be67 extends Twig_Template
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
        $__internal_bea605d8a4d2b6a7b001306375d03df6f4fbf21cf1b8600961c006f2c13e85ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea605d8a4d2b6a7b001306375d03df6f4fbf21cf1b8600961c006f2c13e85ef->enter($__internal_bea605d8a4d2b6a7b001306375d03df6f4fbf21cf1b8600961c006f2c13e85ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_60020716197c12b32ae1937188eaeea8534cf08b137d8ed24fb7ab91c183d2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60020716197c12b32ae1937188eaeea8534cf08b137d8ed24fb7ab91c183d2fd->enter($__internal_60020716197c12b32ae1937188eaeea8534cf08b137d8ed24fb7ab91c183d2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bea605d8a4d2b6a7b001306375d03df6f4fbf21cf1b8600961c006f2c13e85ef->leave($__internal_bea605d8a4d2b6a7b001306375d03df6f4fbf21cf1b8600961c006f2c13e85ef_prof);

        
        $__internal_60020716197c12b32ae1937188eaeea8534cf08b137d8ed24fb7ab91c183d2fd->leave($__internal_60020716197c12b32ae1937188eaeea8534cf08b137d8ed24fb7ab91c183d2fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
