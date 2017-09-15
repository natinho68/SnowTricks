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
        $__internal_0ae62a3bac45cb79bb80fddf4f2585251f39e4f84b905bd3a7c43d2cbffd6729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae62a3bac45cb79bb80fddf4f2585251f39e4f84b905bd3a7c43d2cbffd6729->enter($__internal_0ae62a3bac45cb79bb80fddf4f2585251f39e4f84b905bd3a7c43d2cbffd6729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_ee9571927cec20c27f0339eab2a17449166b2f6501a9ca255570f5836b91c79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9571927cec20c27f0339eab2a17449166b2f6501a9ca255570f5836b91c79c->enter($__internal_ee9571927cec20c27f0339eab2a17449166b2f6501a9ca255570f5836b91c79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_0ae62a3bac45cb79bb80fddf4f2585251f39e4f84b905bd3a7c43d2cbffd6729->leave($__internal_0ae62a3bac45cb79bb80fddf4f2585251f39e4f84b905bd3a7c43d2cbffd6729_prof);

        
        $__internal_ee9571927cec20c27f0339eab2a17449166b2f6501a9ca255570f5836b91c79c->leave($__internal_ee9571927cec20c27f0339eab2a17449166b2f6501a9ca255570f5836b91c79c_prof);

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
