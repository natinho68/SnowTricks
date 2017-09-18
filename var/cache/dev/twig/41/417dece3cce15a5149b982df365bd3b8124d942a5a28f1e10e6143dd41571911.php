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
        $__internal_5b69aeccf9f5976c31e0ebcce1bb835290058b0538ac938397f2f71987784d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b69aeccf9f5976c31e0ebcce1bb835290058b0538ac938397f2f71987784d99->enter($__internal_5b69aeccf9f5976c31e0ebcce1bb835290058b0538ac938397f2f71987784d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9c20a0a850a7b4aa4fc7c764b446d9861558a8aba7d4e1ba9074aea12691c87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c20a0a850a7b4aa4fc7c764b446d9861558a8aba7d4e1ba9074aea12691c87e->enter($__internal_9c20a0a850a7b4aa4fc7c764b446d9861558a8aba7d4e1ba9074aea12691c87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b69aeccf9f5976c31e0ebcce1bb835290058b0538ac938397f2f71987784d99->leave($__internal_5b69aeccf9f5976c31e0ebcce1bb835290058b0538ac938397f2f71987784d99_prof);

        
        $__internal_9c20a0a850a7b4aa4fc7c764b446d9861558a8aba7d4e1ba9074aea12691c87e->leave($__internal_9c20a0a850a7b4aa4fc7c764b446d9861558a8aba7d4e1ba9074aea12691c87e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a4937dfee46121eb91b5c1d062f328aecf7da70aa432cfccf85aedd1f22e38b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4937dfee46121eb91b5c1d062f328aecf7da70aa432cfccf85aedd1f22e38b->enter($__internal_9a4937dfee46121eb91b5c1d062f328aecf7da70aa432cfccf85aedd1f22e38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a44ee51a6cb0d1e162c5f53242948c609661cc3477b0ae66a3d7ead3bd5e5f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44ee51a6cb0d1e162c5f53242948c609661cc3477b0ae66a3d7ead3bd5e5f6b->enter($__internal_a44ee51a6cb0d1e162c5f53242948c609661cc3477b0ae66a3d7ead3bd5e5f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a44ee51a6cb0d1e162c5f53242948c609661cc3477b0ae66a3d7ead3bd5e5f6b->leave($__internal_a44ee51a6cb0d1e162c5f53242948c609661cc3477b0ae66a3d7ead3bd5e5f6b_prof);

        
        $__internal_9a4937dfee46121eb91b5c1d062f328aecf7da70aa432cfccf85aedd1f22e38b->leave($__internal_9a4937dfee46121eb91b5c1d062f328aecf7da70aa432cfccf85aedd1f22e38b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b78aded6683a01ae0326e0e92d4b9a734aecbe126bb08ebb337eac58213cf7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78aded6683a01ae0326e0e92d4b9a734aecbe126bb08ebb337eac58213cf7bf->enter($__internal_b78aded6683a01ae0326e0e92d4b9a734aecbe126bb08ebb337eac58213cf7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c78c0d4eaccd76c6dbf2639c8dc4fcb686702676d712e7cb33c154fd4e44390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c78c0d4eaccd76c6dbf2639c8dc4fcb686702676d712e7cb33c154fd4e44390->enter($__internal_7c78c0d4eaccd76c6dbf2639c8dc4fcb686702676d712e7cb33c154fd4e44390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c78c0d4eaccd76c6dbf2639c8dc4fcb686702676d712e7cb33c154fd4e44390->leave($__internal_7c78c0d4eaccd76c6dbf2639c8dc4fcb686702676d712e7cb33c154fd4e44390_prof);

        
        $__internal_b78aded6683a01ae0326e0e92d4b9a734aecbe126bb08ebb337eac58213cf7bf->leave($__internal_b78aded6683a01ae0326e0e92d4b9a734aecbe126bb08ebb337eac58213cf7bf_prof);

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
