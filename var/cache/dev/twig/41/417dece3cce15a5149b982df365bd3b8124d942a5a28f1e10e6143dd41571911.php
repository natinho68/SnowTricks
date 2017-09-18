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
        $__internal_37423256f2c5967f8dab53257cb955d982bbc1292543ac3ec95cf4c009f8c4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37423256f2c5967f8dab53257cb955d982bbc1292543ac3ec95cf4c009f8c4ff->enter($__internal_37423256f2c5967f8dab53257cb955d982bbc1292543ac3ec95cf4c009f8c4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_72758166be92838a394dd7eb56be86290ead01b556f8a5eb584feaefd9452de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72758166be92838a394dd7eb56be86290ead01b556f8a5eb584feaefd9452de7->enter($__internal_72758166be92838a394dd7eb56be86290ead01b556f8a5eb584feaefd9452de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37423256f2c5967f8dab53257cb955d982bbc1292543ac3ec95cf4c009f8c4ff->leave($__internal_37423256f2c5967f8dab53257cb955d982bbc1292543ac3ec95cf4c009f8c4ff_prof);

        
        $__internal_72758166be92838a394dd7eb56be86290ead01b556f8a5eb584feaefd9452de7->leave($__internal_72758166be92838a394dd7eb56be86290ead01b556f8a5eb584feaefd9452de7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3abc57d20b58ff4d322fbdcdb2d7098efd24f99dd5e3317d3b7bfef16eebeaae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abc57d20b58ff4d322fbdcdb2d7098efd24f99dd5e3317d3b7bfef16eebeaae->enter($__internal_3abc57d20b58ff4d322fbdcdb2d7098efd24f99dd5e3317d3b7bfef16eebeaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_332bac1a23a6310da9a19ff234a267ba81a84e394ed73f7c64a769f2a7bae5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332bac1a23a6310da9a19ff234a267ba81a84e394ed73f7c64a769f2a7bae5a9->enter($__internal_332bac1a23a6310da9a19ff234a267ba81a84e394ed73f7c64a769f2a7bae5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_332bac1a23a6310da9a19ff234a267ba81a84e394ed73f7c64a769f2a7bae5a9->leave($__internal_332bac1a23a6310da9a19ff234a267ba81a84e394ed73f7c64a769f2a7bae5a9_prof);

        
        $__internal_3abc57d20b58ff4d322fbdcdb2d7098efd24f99dd5e3317d3b7bfef16eebeaae->leave($__internal_3abc57d20b58ff4d322fbdcdb2d7098efd24f99dd5e3317d3b7bfef16eebeaae_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_df69e022ef0732f661d258d400ecdd15069e6c3d8e35ff5ebbfec2d049ae06ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df69e022ef0732f661d258d400ecdd15069e6c3d8e35ff5ebbfec2d049ae06ce->enter($__internal_df69e022ef0732f661d258d400ecdd15069e6c3d8e35ff5ebbfec2d049ae06ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa9cd3d900fead30459c03b6899237a1949230669119d97563044d0bf262fcd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9cd3d900fead30459c03b6899237a1949230669119d97563044d0bf262fcd0->enter($__internal_aa9cd3d900fead30459c03b6899237a1949230669119d97563044d0bf262fcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa9cd3d900fead30459c03b6899237a1949230669119d97563044d0bf262fcd0->leave($__internal_aa9cd3d900fead30459c03b6899237a1949230669119d97563044d0bf262fcd0_prof);

        
        $__internal_df69e022ef0732f661d258d400ecdd15069e6c3d8e35ff5ebbfec2d049ae06ce->leave($__internal_df69e022ef0732f661d258d400ecdd15069e6c3d8e35ff5ebbfec2d049ae06ce_prof);

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
