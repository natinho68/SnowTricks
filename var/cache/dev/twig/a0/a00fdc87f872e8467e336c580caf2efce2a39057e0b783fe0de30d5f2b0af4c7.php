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
        $__internal_f0398fb151ef9ab9c2c742c85733a05fee102114d095660bc36a76bd255aa044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0398fb151ef9ab9c2c742c85733a05fee102114d095660bc36a76bd255aa044->enter($__internal_f0398fb151ef9ab9c2c742c85733a05fee102114d095660bc36a76bd255aa044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_da4af80427428ee8c9065f63c2a6be06bc545a93a4ef6fe6c0d89af9ca270832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4af80427428ee8c9065f63c2a6be06bc545a93a4ef6fe6c0d89af9ca270832->enter($__internal_da4af80427428ee8c9065f63c2a6be06bc545a93a4ef6fe6c0d89af9ca270832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f0398fb151ef9ab9c2c742c85733a05fee102114d095660bc36a76bd255aa044->leave($__internal_f0398fb151ef9ab9c2c742c85733a05fee102114d095660bc36a76bd255aa044_prof);

        
        $__internal_da4af80427428ee8c9065f63c2a6be06bc545a93a4ef6fe6c0d89af9ca270832->leave($__internal_da4af80427428ee8c9065f63c2a6be06bc545a93a4ef6fe6c0d89af9ca270832_prof);

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
