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
        $__internal_f79b9336a70851948f680af6efc630b033980d51e589f1c514a8a0641909cb72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79b9336a70851948f680af6efc630b033980d51e589f1c514a8a0641909cb72->enter($__internal_f79b9336a70851948f680af6efc630b033980d51e589f1c514a8a0641909cb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3c00cbcf62d83ff9c7d2130c1fa29df2fe13e9fa9481c268254a6bf9c3d9512e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c00cbcf62d83ff9c7d2130c1fa29df2fe13e9fa9481c268254a6bf9c3d9512e->enter($__internal_3c00cbcf62d83ff9c7d2130c1fa29df2fe13e9fa9481c268254a6bf9c3d9512e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f79b9336a70851948f680af6efc630b033980d51e589f1c514a8a0641909cb72->leave($__internal_f79b9336a70851948f680af6efc630b033980d51e589f1c514a8a0641909cb72_prof);

        
        $__internal_3c00cbcf62d83ff9c7d2130c1fa29df2fe13e9fa9481c268254a6bf9c3d9512e->leave($__internal_3c00cbcf62d83ff9c7d2130c1fa29df2fe13e9fa9481c268254a6bf9c3d9512e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_22608b03f0072020773fdb9dd6356f03a67c4bc8f4af172f38bc7790392903d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22608b03f0072020773fdb9dd6356f03a67c4bc8f4af172f38bc7790392903d9->enter($__internal_22608b03f0072020773fdb9dd6356f03a67c4bc8f4af172f38bc7790392903d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e405b27a8559ed12676e437cceec5bef03c875a05f6dd35a82abcc42ea2ac534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e405b27a8559ed12676e437cceec5bef03c875a05f6dd35a82abcc42ea2ac534->enter($__internal_e405b27a8559ed12676e437cceec5bef03c875a05f6dd35a82abcc42ea2ac534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e405b27a8559ed12676e437cceec5bef03c875a05f6dd35a82abcc42ea2ac534->leave($__internal_e405b27a8559ed12676e437cceec5bef03c875a05f6dd35a82abcc42ea2ac534_prof);

        
        $__internal_22608b03f0072020773fdb9dd6356f03a67c4bc8f4af172f38bc7790392903d9->leave($__internal_22608b03f0072020773fdb9dd6356f03a67c4bc8f4af172f38bc7790392903d9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2a62283569d0ab3955c78e368b215e2c4caeebe355f9f6eb21a7e73049cb9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a62283569d0ab3955c78e368b215e2c4caeebe355f9f6eb21a7e73049cb9b0->enter($__internal_b2a62283569d0ab3955c78e368b215e2c4caeebe355f9f6eb21a7e73049cb9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da049a5e082c01554ff5b04fcbf86e4dedbbab50823f8e841d2a656b56e11afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da049a5e082c01554ff5b04fcbf86e4dedbbab50823f8e841d2a656b56e11afd->enter($__internal_da049a5e082c01554ff5b04fcbf86e4dedbbab50823f8e841d2a656b56e11afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_da049a5e082c01554ff5b04fcbf86e4dedbbab50823f8e841d2a656b56e11afd->leave($__internal_da049a5e082c01554ff5b04fcbf86e4dedbbab50823f8e841d2a656b56e11afd_prof);

        
        $__internal_b2a62283569d0ab3955c78e368b215e2c4caeebe355f9f6eb21a7e73049cb9b0->leave($__internal_b2a62283569d0ab3955c78e368b215e2c4caeebe355f9f6eb21a7e73049cb9b0_prof);

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
