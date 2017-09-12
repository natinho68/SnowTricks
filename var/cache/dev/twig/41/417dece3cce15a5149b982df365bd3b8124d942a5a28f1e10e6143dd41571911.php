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
        $__internal_71f48e744f130c441f0bd443a504151a77593850f8c5e9ace3dd8196c19193bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f48e744f130c441f0bd443a504151a77593850f8c5e9ace3dd8196c19193bd->enter($__internal_71f48e744f130c441f0bd443a504151a77593850f8c5e9ace3dd8196c19193bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_de94edee417cd211ed9eb103f4956b69148d353b86aea19b8d1da6b9c7af6497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de94edee417cd211ed9eb103f4956b69148d353b86aea19b8d1da6b9c7af6497->enter($__internal_de94edee417cd211ed9eb103f4956b69148d353b86aea19b8d1da6b9c7af6497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71f48e744f130c441f0bd443a504151a77593850f8c5e9ace3dd8196c19193bd->leave($__internal_71f48e744f130c441f0bd443a504151a77593850f8c5e9ace3dd8196c19193bd_prof);

        
        $__internal_de94edee417cd211ed9eb103f4956b69148d353b86aea19b8d1da6b9c7af6497->leave($__internal_de94edee417cd211ed9eb103f4956b69148d353b86aea19b8d1da6b9c7af6497_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75cca2c65d8840b03b3d1b99e4a034f1ca9cb6eef2df4a11c18dbead6facb9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75cca2c65d8840b03b3d1b99e4a034f1ca9cb6eef2df4a11c18dbead6facb9af->enter($__internal_75cca2c65d8840b03b3d1b99e4a034f1ca9cb6eef2df4a11c18dbead6facb9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db11bd9ce96bdd483d5e4bf6544048b3337848bb824eeb668da21b436fd973a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db11bd9ce96bdd483d5e4bf6544048b3337848bb824eeb668da21b436fd973a9->enter($__internal_db11bd9ce96bdd483d5e4bf6544048b3337848bb824eeb668da21b436fd973a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_db11bd9ce96bdd483d5e4bf6544048b3337848bb824eeb668da21b436fd973a9->leave($__internal_db11bd9ce96bdd483d5e4bf6544048b3337848bb824eeb668da21b436fd973a9_prof);

        
        $__internal_75cca2c65d8840b03b3d1b99e4a034f1ca9cb6eef2df4a11c18dbead6facb9af->leave($__internal_75cca2c65d8840b03b3d1b99e4a034f1ca9cb6eef2df4a11c18dbead6facb9af_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5394f90869daa23a73e4605e7a1ec9e2d240ec4e20452883de5d36d1e1a21fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5394f90869daa23a73e4605e7a1ec9e2d240ec4e20452883de5d36d1e1a21fee->enter($__internal_5394f90869daa23a73e4605e7a1ec9e2d240ec4e20452883de5d36d1e1a21fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52d796462886dac22ebbf83068ccbdd3df035a4c2c10e8cd251e753425f68f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d796462886dac22ebbf83068ccbdd3df035a4c2c10e8cd251e753425f68f3f->enter($__internal_52d796462886dac22ebbf83068ccbdd3df035a4c2c10e8cd251e753425f68f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52d796462886dac22ebbf83068ccbdd3df035a4c2c10e8cd251e753425f68f3f->leave($__internal_52d796462886dac22ebbf83068ccbdd3df035a4c2c10e8cd251e753425f68f3f_prof);

        
        $__internal_5394f90869daa23a73e4605e7a1ec9e2d240ec4e20452883de5d36d1e1a21fee->leave($__internal_5394f90869daa23a73e4605e7a1ec9e2d240ec4e20452883de5d36d1e1a21fee_prof);

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
