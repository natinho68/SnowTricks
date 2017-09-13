<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7c5806aad47eca9dc1d3785e3783897f2a127d8ada33f997d509eaad15b00e73 extends Twig_Template
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
        $__internal_e325a8c6c40195550adfb4cc150ba33503945570b1ab8e36b4c189f69978175a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e325a8c6c40195550adfb4cc150ba33503945570b1ab8e36b4c189f69978175a->enter($__internal_e325a8c6c40195550adfb4cc150ba33503945570b1ab8e36b4c189f69978175a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_657f6aeccef4b015755684318e0c90847be2e8276cb25ec11992725818bc01c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657f6aeccef4b015755684318e0c90847be2e8276cb25ec11992725818bc01c3->enter($__internal_657f6aeccef4b015755684318e0c90847be2e8276cb25ec11992725818bc01c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e325a8c6c40195550adfb4cc150ba33503945570b1ab8e36b4c189f69978175a->leave($__internal_e325a8c6c40195550adfb4cc150ba33503945570b1ab8e36b4c189f69978175a_prof);

        
        $__internal_657f6aeccef4b015755684318e0c90847be2e8276cb25ec11992725818bc01c3->leave($__internal_657f6aeccef4b015755684318e0c90847be2e8276cb25ec11992725818bc01c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
