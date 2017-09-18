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
        $__internal_7b3900762567f423b6f7bd06dba2cdc8ec272ffe377da58b22e62efb0e55d0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3900762567f423b6f7bd06dba2cdc8ec272ffe377da58b22e62efb0e55d0b6->enter($__internal_7b3900762567f423b6f7bd06dba2cdc8ec272ffe377da58b22e62efb0e55d0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_2ad6f349c5d797f55d8ac50380c2e3bc0b32741879b9e1881018d173936e8add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad6f349c5d797f55d8ac50380c2e3bc0b32741879b9e1881018d173936e8add->enter($__internal_2ad6f349c5d797f55d8ac50380c2e3bc0b32741879b9e1881018d173936e8add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7b3900762567f423b6f7bd06dba2cdc8ec272ffe377da58b22e62efb0e55d0b6->leave($__internal_7b3900762567f423b6f7bd06dba2cdc8ec272ffe377da58b22e62efb0e55d0b6_prof);

        
        $__internal_2ad6f349c5d797f55d8ac50380c2e3bc0b32741879b9e1881018d173936e8add->leave($__internal_2ad6f349c5d797f55d8ac50380c2e3bc0b32741879b9e1881018d173936e8add_prof);

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
