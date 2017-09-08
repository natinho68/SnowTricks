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
        $__internal_63fcbd1d2dfaf8af371915b4362def579a705c477e72bd5c74dc6c1bb9e7ecea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fcbd1d2dfaf8af371915b4362def579a705c477e72bd5c74dc6c1bb9e7ecea->enter($__internal_63fcbd1d2dfaf8af371915b4362def579a705c477e72bd5c74dc6c1bb9e7ecea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5a11224ff8fe6293b77a8a37024bad6d5076c77c08b574845fd6def09cd3fcda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a11224ff8fe6293b77a8a37024bad6d5076c77c08b574845fd6def09cd3fcda->enter($__internal_5a11224ff8fe6293b77a8a37024bad6d5076c77c08b574845fd6def09cd3fcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_63fcbd1d2dfaf8af371915b4362def579a705c477e72bd5c74dc6c1bb9e7ecea->leave($__internal_63fcbd1d2dfaf8af371915b4362def579a705c477e72bd5c74dc6c1bb9e7ecea_prof);

        
        $__internal_5a11224ff8fe6293b77a8a37024bad6d5076c77c08b574845fd6def09cd3fcda->leave($__internal_5a11224ff8fe6293b77a8a37024bad6d5076c77c08b574845fd6def09cd3fcda_prof);

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
