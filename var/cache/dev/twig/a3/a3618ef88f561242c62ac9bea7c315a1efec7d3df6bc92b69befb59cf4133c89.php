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
        $__internal_a6c8da365669a21651a7d913a5ad32091909aa8a36d9b8248ac414707d518f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c8da365669a21651a7d913a5ad32091909aa8a36d9b8248ac414707d518f6b->enter($__internal_a6c8da365669a21651a7d913a5ad32091909aa8a36d9b8248ac414707d518f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_8011b1cc2a2ae887b72d0e94f385057355cf34a3769455c6860fecdeea8613ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8011b1cc2a2ae887b72d0e94f385057355cf34a3769455c6860fecdeea8613ac->enter($__internal_8011b1cc2a2ae887b72d0e94f385057355cf34a3769455c6860fecdeea8613ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a6c8da365669a21651a7d913a5ad32091909aa8a36d9b8248ac414707d518f6b->leave($__internal_a6c8da365669a21651a7d913a5ad32091909aa8a36d9b8248ac414707d518f6b_prof);

        
        $__internal_8011b1cc2a2ae887b72d0e94f385057355cf34a3769455c6860fecdeea8613ac->leave($__internal_8011b1cc2a2ae887b72d0e94f385057355cf34a3769455c6860fecdeea8613ac_prof);

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
