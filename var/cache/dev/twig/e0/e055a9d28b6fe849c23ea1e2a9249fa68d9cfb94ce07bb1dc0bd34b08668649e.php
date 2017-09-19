<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_997f77e03fc2bc125555a28974a455992b4d4eb288db324c03e3f8156baf19f5 extends Twig_Template
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
        $__internal_6a1e75e82b81afc88636331ab6e8bc726245d81267cdb3fa9b4665dca0973bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a1e75e82b81afc88636331ab6e8bc726245d81267cdb3fa9b4665dca0973bf9->enter($__internal_6a1e75e82b81afc88636331ab6e8bc726245d81267cdb3fa9b4665dca0973bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5c18c9f8e6e7165b47f9a437f14f840d9450bf46adc7dce8cb69f2f24902f2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c18c9f8e6e7165b47f9a437f14f840d9450bf46adc7dce8cb69f2f24902f2db->enter($__internal_5c18c9f8e6e7165b47f9a437f14f840d9450bf46adc7dce8cb69f2f24902f2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6a1e75e82b81afc88636331ab6e8bc726245d81267cdb3fa9b4665dca0973bf9->leave($__internal_6a1e75e82b81afc88636331ab6e8bc726245d81267cdb3fa9b4665dca0973bf9_prof);

        
        $__internal_5c18c9f8e6e7165b47f9a437f14f840d9450bf46adc7dce8cb69f2f24902f2db->leave($__internal_5c18c9f8e6e7165b47f9a437f14f840d9450bf46adc7dce8cb69f2f24902f2db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
