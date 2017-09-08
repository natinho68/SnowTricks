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
        $__internal_c91f34fe2e38134b2950e34209e4760fd8bec48e36f33368da61fb693c5d6f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91f34fe2e38134b2950e34209e4760fd8bec48e36f33368da61fb693c5d6f7a->enter($__internal_c91f34fe2e38134b2950e34209e4760fd8bec48e36f33368da61fb693c5d6f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9c89ef321d6ccef6d7b0d795c17a1007763f4c2b6010cd386742eb523f3d8bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c89ef321d6ccef6d7b0d795c17a1007763f4c2b6010cd386742eb523f3d8bfc->enter($__internal_9c89ef321d6ccef6d7b0d795c17a1007763f4c2b6010cd386742eb523f3d8bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c91f34fe2e38134b2950e34209e4760fd8bec48e36f33368da61fb693c5d6f7a->leave($__internal_c91f34fe2e38134b2950e34209e4760fd8bec48e36f33368da61fb693c5d6f7a_prof);

        
        $__internal_9c89ef321d6ccef6d7b0d795c17a1007763f4c2b6010cd386742eb523f3d8bfc->leave($__internal_9c89ef321d6ccef6d7b0d795c17a1007763f4c2b6010cd386742eb523f3d8bfc_prof);

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
