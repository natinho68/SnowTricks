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
        $__internal_267efa0a4b1d33e8d0e7e9e4a42d3fa44349855fe8f9eee8513ff475f320b2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267efa0a4b1d33e8d0e7e9e4a42d3fa44349855fe8f9eee8513ff475f320b2de->enter($__internal_267efa0a4b1d33e8d0e7e9e4a42d3fa44349855fe8f9eee8513ff475f320b2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_38cff3d9129abbbf0c3c8ead6abe4b9228d7060a357d35c1e493c91899d046b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cff3d9129abbbf0c3c8ead6abe4b9228d7060a357d35c1e493c91899d046b9->enter($__internal_38cff3d9129abbbf0c3c8ead6abe4b9228d7060a357d35c1e493c91899d046b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_267efa0a4b1d33e8d0e7e9e4a42d3fa44349855fe8f9eee8513ff475f320b2de->leave($__internal_267efa0a4b1d33e8d0e7e9e4a42d3fa44349855fe8f9eee8513ff475f320b2de_prof);

        
        $__internal_38cff3d9129abbbf0c3c8ead6abe4b9228d7060a357d35c1e493c91899d046b9->leave($__internal_38cff3d9129abbbf0c3c8ead6abe4b9228d7060a357d35c1e493c91899d046b9_prof);

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
