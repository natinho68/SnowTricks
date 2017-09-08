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
        $__internal_109b9b7f039c2029a9c6e62563f4b20804350c8cba636f95c804e8b058071927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109b9b7f039c2029a9c6e62563f4b20804350c8cba636f95c804e8b058071927->enter($__internal_109b9b7f039c2029a9c6e62563f4b20804350c8cba636f95c804e8b058071927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_72a5d9baf7a1a4ce3780e772fa5af8fc6e44f505510143c3e8cea14072ac974b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a5d9baf7a1a4ce3780e772fa5af8fc6e44f505510143c3e8cea14072ac974b->enter($__internal_72a5d9baf7a1a4ce3780e772fa5af8fc6e44f505510143c3e8cea14072ac974b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_109b9b7f039c2029a9c6e62563f4b20804350c8cba636f95c804e8b058071927->leave($__internal_109b9b7f039c2029a9c6e62563f4b20804350c8cba636f95c804e8b058071927_prof);

        
        $__internal_72a5d9baf7a1a4ce3780e772fa5af8fc6e44f505510143c3e8cea14072ac974b->leave($__internal_72a5d9baf7a1a4ce3780e772fa5af8fc6e44f505510143c3e8cea14072ac974b_prof);

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
