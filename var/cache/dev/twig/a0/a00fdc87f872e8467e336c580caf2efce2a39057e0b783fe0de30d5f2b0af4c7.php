<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2624ebf23c87beda8ecb2b017b0021a66ea15cecd5db003562c3967f6bd31e44 extends Twig_Template
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
        $__internal_37382689218180dfdaabbf954e2527f4b3df8e930b1c00b1bd6c73bdf0b74686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37382689218180dfdaabbf954e2527f4b3df8e930b1c00b1bd6c73bdf0b74686->enter($__internal_37382689218180dfdaabbf954e2527f4b3df8e930b1c00b1bd6c73bdf0b74686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_65035cce259dad9f9ad7c692144ac3412e9d6154c49cbea1406d810bb25bbb50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65035cce259dad9f9ad7c692144ac3412e9d6154c49cbea1406d810bb25bbb50->enter($__internal_65035cce259dad9f9ad7c692144ac3412e9d6154c49cbea1406d810bb25bbb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_37382689218180dfdaabbf954e2527f4b3df8e930b1c00b1bd6c73bdf0b74686->leave($__internal_37382689218180dfdaabbf954e2527f4b3df8e930b1c00b1bd6c73bdf0b74686_prof);

        
        $__internal_65035cce259dad9f9ad7c692144ac3412e9d6154c49cbea1406d810bb25bbb50->leave($__internal_65035cce259dad9f9ad7c692144ac3412e9d6154c49cbea1406d810bb25bbb50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
