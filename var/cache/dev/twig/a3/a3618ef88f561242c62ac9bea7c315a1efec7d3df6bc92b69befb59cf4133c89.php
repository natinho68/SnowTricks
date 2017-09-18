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
        $__internal_688906378f7a1210d0906a833fad3602350c6719371789021ecc5e55794fe2ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688906378f7a1210d0906a833fad3602350c6719371789021ecc5e55794fe2ce->enter($__internal_688906378f7a1210d0906a833fad3602350c6719371789021ecc5e55794fe2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_821a02cce11d815fcdc0120a176605bcf8c2748220f971e7e8bbfa36def31124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821a02cce11d815fcdc0120a176605bcf8c2748220f971e7e8bbfa36def31124->enter($__internal_821a02cce11d815fcdc0120a176605bcf8c2748220f971e7e8bbfa36def31124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_688906378f7a1210d0906a833fad3602350c6719371789021ecc5e55794fe2ce->leave($__internal_688906378f7a1210d0906a833fad3602350c6719371789021ecc5e55794fe2ce_prof);

        
        $__internal_821a02cce11d815fcdc0120a176605bcf8c2748220f971e7e8bbfa36def31124->leave($__internal_821a02cce11d815fcdc0120a176605bcf8c2748220f971e7e8bbfa36def31124_prof);

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
