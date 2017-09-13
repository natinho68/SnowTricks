<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8141540d67b76e07da041ed6b44a4815c8d45068883409da694fc643cfaf5875 extends Twig_Template
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
        $__internal_6c5e3cf07654efc2dd8b18c65f4da132181d056c2335c0e0a7d00a99b1d4f931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5e3cf07654efc2dd8b18c65f4da132181d056c2335c0e0a7d00a99b1d4f931->enter($__internal_6c5e3cf07654efc2dd8b18c65f4da132181d056c2335c0e0a7d00a99b1d4f931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d4eba5d23e27a33a2639ffe65a99c122f823be1fe4e303baad238c2a0dd36289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4eba5d23e27a33a2639ffe65a99c122f823be1fe4e303baad238c2a0dd36289->enter($__internal_d4eba5d23e27a33a2639ffe65a99c122f823be1fe4e303baad238c2a0dd36289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6c5e3cf07654efc2dd8b18c65f4da132181d056c2335c0e0a7d00a99b1d4f931->leave($__internal_6c5e3cf07654efc2dd8b18c65f4da132181d056c2335c0e0a7d00a99b1d4f931_prof);

        
        $__internal_d4eba5d23e27a33a2639ffe65a99c122f823be1fe4e303baad238c2a0dd36289->leave($__internal_d4eba5d23e27a33a2639ffe65a99c122f823be1fe4e303baad238c2a0dd36289_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
