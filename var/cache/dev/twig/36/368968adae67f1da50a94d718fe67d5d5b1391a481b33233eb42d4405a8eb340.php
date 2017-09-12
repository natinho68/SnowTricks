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
        $__internal_8c9d372db1b0f3fd5ad4e8f450f1b20b0f66b21090ca4cc354c561f8a98a44a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9d372db1b0f3fd5ad4e8f450f1b20b0f66b21090ca4cc354c561f8a98a44a5->enter($__internal_8c9d372db1b0f3fd5ad4e8f450f1b20b0f66b21090ca4cc354c561f8a98a44a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c1879440a8d23d75a1ca1f201183382c4d37cb27eba380c4cdc5289b247e13ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1879440a8d23d75a1ca1f201183382c4d37cb27eba380c4cdc5289b247e13ad->enter($__internal_c1879440a8d23d75a1ca1f201183382c4d37cb27eba380c4cdc5289b247e13ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8c9d372db1b0f3fd5ad4e8f450f1b20b0f66b21090ca4cc354c561f8a98a44a5->leave($__internal_8c9d372db1b0f3fd5ad4e8f450f1b20b0f66b21090ca4cc354c561f8a98a44a5_prof);

        
        $__internal_c1879440a8d23d75a1ca1f201183382c4d37cb27eba380c4cdc5289b247e13ad->leave($__internal_c1879440a8d23d75a1ca1f201183382c4d37cb27eba380c4cdc5289b247e13ad_prof);

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
