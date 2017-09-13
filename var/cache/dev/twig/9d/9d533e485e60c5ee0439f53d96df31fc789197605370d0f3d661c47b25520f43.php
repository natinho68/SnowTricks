<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_504232e7e0b5c35cd6b8f37d92abd4e08eeba9aeaad073b13d027a6fe6d6db94 extends Twig_Template
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
        $__internal_17660f8f8efdce3cb066d7b21d1f2d489ae074c88016bf69904b333a2d24879b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17660f8f8efdce3cb066d7b21d1f2d489ae074c88016bf69904b333a2d24879b->enter($__internal_17660f8f8efdce3cb066d7b21d1f2d489ae074c88016bf69904b333a2d24879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_d2b45a59285da32eca6c00f5ededfe9e837b5b77eb98a19eb586c9c9c21ea7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b45a59285da32eca6c00f5ededfe9e837b5b77eb98a19eb586c9c9c21ea7a6->enter($__internal_d2b45a59285da32eca6c00f5ededfe9e837b5b77eb98a19eb586c9c9c21ea7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_17660f8f8efdce3cb066d7b21d1f2d489ae074c88016bf69904b333a2d24879b->leave($__internal_17660f8f8efdce3cb066d7b21d1f2d489ae074c88016bf69904b333a2d24879b_prof);

        
        $__internal_d2b45a59285da32eca6c00f5ededfe9e837b5b77eb98a19eb586c9c9c21ea7a6->leave($__internal_d2b45a59285da32eca6c00f5ededfe9e837b5b77eb98a19eb586c9c9c21ea7a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
