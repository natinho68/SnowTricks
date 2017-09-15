<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c5c9375d9b89940dd81a9fa35f5a7bf7a9a9e20b5cddb35153f223565894d2c6 extends Twig_Template
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
        $__internal_41eed0c20e63db04d3414f68b06055754b81193ef30a614d9743924fdc3c72b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41eed0c20e63db04d3414f68b06055754b81193ef30a614d9743924fdc3c72b7->enter($__internal_41eed0c20e63db04d3414f68b06055754b81193ef30a614d9743924fdc3c72b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6c6784ca9229f9f3a42cfde4ca95287d5327cc5e4b714c69c1d1f0fb9b26a048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6784ca9229f9f3a42cfde4ca95287d5327cc5e4b714c69c1d1f0fb9b26a048->enter($__internal_6c6784ca9229f9f3a42cfde4ca95287d5327cc5e4b714c69c1d1f0fb9b26a048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_41eed0c20e63db04d3414f68b06055754b81193ef30a614d9743924fdc3c72b7->leave($__internal_41eed0c20e63db04d3414f68b06055754b81193ef30a614d9743924fdc3c72b7_prof);

        
        $__internal_6c6784ca9229f9f3a42cfde4ca95287d5327cc5e4b714c69c1d1f0fb9b26a048->leave($__internal_6c6784ca9229f9f3a42cfde4ca95287d5327cc5e4b714c69c1d1f0fb9b26a048_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
