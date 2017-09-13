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
        $__internal_291895dc64e8150dad43ee21eacf9533270a6f3f96f96e55dd59557ca15cf68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291895dc64e8150dad43ee21eacf9533270a6f3f96f96e55dd59557ca15cf68f->enter($__internal_291895dc64e8150dad43ee21eacf9533270a6f3f96f96e55dd59557ca15cf68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_1f544515340b8bb344a5d9a7e24780fcaae1640fd2a93135a99280d2ef151a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f544515340b8bb344a5d9a7e24780fcaae1640fd2a93135a99280d2ef151a9f->enter($__internal_1f544515340b8bb344a5d9a7e24780fcaae1640fd2a93135a99280d2ef151a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_291895dc64e8150dad43ee21eacf9533270a6f3f96f96e55dd59557ca15cf68f->leave($__internal_291895dc64e8150dad43ee21eacf9533270a6f3f96f96e55dd59557ca15cf68f_prof);

        
        $__internal_1f544515340b8bb344a5d9a7e24780fcaae1640fd2a93135a99280d2ef151a9f->leave($__internal_1f544515340b8bb344a5d9a7e24780fcaae1640fd2a93135a99280d2ef151a9f_prof);

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
