<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_dc1a8875c01074426ad305bf1c6da9fbe96fbe0ca276db236bcdbaa3bd1ec44b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baec6c622dddc115210e673001044f5bc3e118feb45639ac82c763e5e19e44a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baec6c622dddc115210e673001044f5bc3e118feb45639ac82c763e5e19e44a2->enter($__internal_baec6c622dddc115210e673001044f5bc3e118feb45639ac82c763e5e19e44a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8f488e1a63d36b7a2091c074ff6d60c552d0291d3ddcc379366cf0e9e9b7aee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f488e1a63d36b7a2091c074ff6d60c552d0291d3ddcc379366cf0e9e9b7aee7->enter($__internal_8f488e1a63d36b7a2091c074ff6d60c552d0291d3ddcc379366cf0e9e9b7aee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baec6c622dddc115210e673001044f5bc3e118feb45639ac82c763e5e19e44a2->leave($__internal_baec6c622dddc115210e673001044f5bc3e118feb45639ac82c763e5e19e44a2_prof);

        
        $__internal_8f488e1a63d36b7a2091c074ff6d60c552d0291d3ddcc379366cf0e9e9b7aee7->leave($__internal_8f488e1a63d36b7a2091c074ff6d60c552d0291d3ddcc379366cf0e9e9b7aee7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f03ef0d47d5bb578e4bf4389681b12b0d89b94c2c7502566e5724b0f5b7dc81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f03ef0d47d5bb578e4bf4389681b12b0d89b94c2c7502566e5724b0f5b7dc81->enter($__internal_1f03ef0d47d5bb578e4bf4389681b12b0d89b94c2c7502566e5724b0f5b7dc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7483c89426dce857eff8aed72129e4fbf05bac4c0d16f89352975c8a5fdfd6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7483c89426dce857eff8aed72129e4fbf05bac4c0d16f89352975c8a5fdfd6a8->enter($__internal_7483c89426dce857eff8aed72129e4fbf05bac4c0d16f89352975c8a5fdfd6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7483c89426dce857eff8aed72129e4fbf05bac4c0d16f89352975c8a5fdfd6a8->leave($__internal_7483c89426dce857eff8aed72129e4fbf05bac4c0d16f89352975c8a5fdfd6a8_prof);

        
        $__internal_1f03ef0d47d5bb578e4bf4389681b12b0d89b94c2c7502566e5724b0f5b7dc81->leave($__internal_1f03ef0d47d5bb578e4bf4389681b12b0d89b94c2c7502566e5724b0f5b7dc81_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac18e136810b1edb472d07df2647b3afcaf622bcaee9b0d3a6f1660d8aeaa27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac18e136810b1edb472d07df2647b3afcaf622bcaee9b0d3a6f1660d8aeaa27d->enter($__internal_ac18e136810b1edb472d07df2647b3afcaf622bcaee9b0d3a6f1660d8aeaa27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74da3402dfbf45fe0201518517adfeee1ac9564185dd80d323990105df45ef9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74da3402dfbf45fe0201518517adfeee1ac9564185dd80d323990105df45ef9b->enter($__internal_74da3402dfbf45fe0201518517adfeee1ac9564185dd80d323990105df45ef9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_74da3402dfbf45fe0201518517adfeee1ac9564185dd80d323990105df45ef9b->leave($__internal_74da3402dfbf45fe0201518517adfeee1ac9564185dd80d323990105df45ef9b_prof);

        
        $__internal_ac18e136810b1edb472d07df2647b3afcaf622bcaee9b0d3a6f1660d8aeaa27d->leave($__internal_ac18e136810b1edb472d07df2647b3afcaf622bcaee9b0d3a6f1660d8aeaa27d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
