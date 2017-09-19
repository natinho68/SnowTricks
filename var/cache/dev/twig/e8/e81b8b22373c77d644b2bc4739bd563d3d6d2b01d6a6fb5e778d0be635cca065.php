<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9c13e6317dbd1fece29cb113238f2f2e9bcbaf08252766ce5685b29ebfb500b2 extends Twig_Template
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
        $__internal_3d0373c612825efa0d531321b69fe79348d016c7b38c2649122b0207fdc19367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0373c612825efa0d531321b69fe79348d016c7b38c2649122b0207fdc19367->enter($__internal_3d0373c612825efa0d531321b69fe79348d016c7b38c2649122b0207fdc19367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_708b64c4c588a2cbbf6027cf14adfe7d0dea40ecc8ca8e880a0f8c28431e78fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708b64c4c588a2cbbf6027cf14adfe7d0dea40ecc8ca8e880a0f8c28431e78fc->enter($__internal_708b64c4c588a2cbbf6027cf14adfe7d0dea40ecc8ca8e880a0f8c28431e78fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3d0373c612825efa0d531321b69fe79348d016c7b38c2649122b0207fdc19367->leave($__internal_3d0373c612825efa0d531321b69fe79348d016c7b38c2649122b0207fdc19367_prof);

        
        $__internal_708b64c4c588a2cbbf6027cf14adfe7d0dea40ecc8ca8e880a0f8c28431e78fc->leave($__internal_708b64c4c588a2cbbf6027cf14adfe7d0dea40ecc8ca8e880a0f8c28431e78fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
