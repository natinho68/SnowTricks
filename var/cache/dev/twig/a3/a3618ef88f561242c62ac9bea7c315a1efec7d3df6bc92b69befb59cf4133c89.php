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
        $__internal_e281eb983083f07f879c49fce348303760b8f97829a447878c878dfa05386375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e281eb983083f07f879c49fce348303760b8f97829a447878c878dfa05386375->enter($__internal_e281eb983083f07f879c49fce348303760b8f97829a447878c878dfa05386375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_70b542bef7ba491d8991d9e70a5d56614a74692caa5fd077cadd56152ede6743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b542bef7ba491d8991d9e70a5d56614a74692caa5fd077cadd56152ede6743->enter($__internal_70b542bef7ba491d8991d9e70a5d56614a74692caa5fd077cadd56152ede6743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e281eb983083f07f879c49fce348303760b8f97829a447878c878dfa05386375->leave($__internal_e281eb983083f07f879c49fce348303760b8f97829a447878c878dfa05386375_prof);

        
        $__internal_70b542bef7ba491d8991d9e70a5d56614a74692caa5fd077cadd56152ede6743->leave($__internal_70b542bef7ba491d8991d9e70a5d56614a74692caa5fd077cadd56152ede6743_prof);

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
