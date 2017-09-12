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
        $__internal_67f241de88e9476f63fd327f532087a2132c656060f35939379e11922bc49e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f241de88e9476f63fd327f532087a2132c656060f35939379e11922bc49e6e->enter($__internal_67f241de88e9476f63fd327f532087a2132c656060f35939379e11922bc49e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_bd88e2290d9242e4bc53039a0592364fe279da50a5ab68ac904483d74b2b0937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd88e2290d9242e4bc53039a0592364fe279da50a5ab68ac904483d74b2b0937->enter($__internal_bd88e2290d9242e4bc53039a0592364fe279da50a5ab68ac904483d74b2b0937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67f241de88e9476f63fd327f532087a2132c656060f35939379e11922bc49e6e->leave($__internal_67f241de88e9476f63fd327f532087a2132c656060f35939379e11922bc49e6e_prof);

        
        $__internal_bd88e2290d9242e4bc53039a0592364fe279da50a5ab68ac904483d74b2b0937->leave($__internal_bd88e2290d9242e4bc53039a0592364fe279da50a5ab68ac904483d74b2b0937_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5e101bc0b9b6c4e7758a0dda983a401f520dac79bbd0876022502e7e088660b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e101bc0b9b6c4e7758a0dda983a401f520dac79bbd0876022502e7e088660b->enter($__internal_c5e101bc0b9b6c4e7758a0dda983a401f520dac79bbd0876022502e7e088660b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_479a35b428f73eebe4c5a9256b121e6bdb8f43d3c7167dc42475549b61b25ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479a35b428f73eebe4c5a9256b121e6bdb8f43d3c7167dc42475549b61b25ff8->enter($__internal_479a35b428f73eebe4c5a9256b121e6bdb8f43d3c7167dc42475549b61b25ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_479a35b428f73eebe4c5a9256b121e6bdb8f43d3c7167dc42475549b61b25ff8->leave($__internal_479a35b428f73eebe4c5a9256b121e6bdb8f43d3c7167dc42475549b61b25ff8_prof);

        
        $__internal_c5e101bc0b9b6c4e7758a0dda983a401f520dac79bbd0876022502e7e088660b->leave($__internal_c5e101bc0b9b6c4e7758a0dda983a401f520dac79bbd0876022502e7e088660b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_be548dd96b69c4b6f08a41657cd773bbbf871f86c6451a7ac51ef3337078d069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be548dd96b69c4b6f08a41657cd773bbbf871f86c6451a7ac51ef3337078d069->enter($__internal_be548dd96b69c4b6f08a41657cd773bbbf871f86c6451a7ac51ef3337078d069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21223c64853308c11721f8ee8a5721973ef236b13475f27db0c644500640cfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21223c64853308c11721f8ee8a5721973ef236b13475f27db0c644500640cfee->enter($__internal_21223c64853308c11721f8ee8a5721973ef236b13475f27db0c644500640cfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_21223c64853308c11721f8ee8a5721973ef236b13475f27db0c644500640cfee->leave($__internal_21223c64853308c11721f8ee8a5721973ef236b13475f27db0c644500640cfee_prof);

        
        $__internal_be548dd96b69c4b6f08a41657cd773bbbf871f86c6451a7ac51ef3337078d069->leave($__internal_be548dd96b69c4b6f08a41657cd773bbbf871f86c6451a7ac51ef3337078d069_prof);

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
