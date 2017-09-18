<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_24f495f5af7909031b588a8f9f8f5868b93a0e794dfe937b6c19ab69397ddd77 extends Twig_Template
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
        $__internal_9d171dc2b28feb40703d9b631f1b9b23545582fa0c9006b59d75749c054905d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d171dc2b28feb40703d9b631f1b9b23545582fa0c9006b59d75749c054905d7->enter($__internal_9d171dc2b28feb40703d9b631f1b9b23545582fa0c9006b59d75749c054905d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_db54cceb888889c8817bd864399e3beed3fb5b0645c63e432531593330eeaf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db54cceb888889c8817bd864399e3beed3fb5b0645c63e432531593330eeaf47->enter($__internal_db54cceb888889c8817bd864399e3beed3fb5b0645c63e432531593330eeaf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9d171dc2b28feb40703d9b631f1b9b23545582fa0c9006b59d75749c054905d7->leave($__internal_9d171dc2b28feb40703d9b631f1b9b23545582fa0c9006b59d75749c054905d7_prof);

        
        $__internal_db54cceb888889c8817bd864399e3beed3fb5b0645c63e432531593330eeaf47->leave($__internal_db54cceb888889c8817bd864399e3beed3fb5b0645c63e432531593330eeaf47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
