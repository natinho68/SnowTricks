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
        $__internal_e747c989e1e0119e6f8a7c9b9c76194f31d45fb4ec26d93376396ff7bf22eab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e747c989e1e0119e6f8a7c9b9c76194f31d45fb4ec26d93376396ff7bf22eab2->enter($__internal_e747c989e1e0119e6f8a7c9b9c76194f31d45fb4ec26d93376396ff7bf22eab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9db02415e2656b4f0b5e8dae59f568bfe0297a48aaf3c4fe4be1ba5d9a7882a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db02415e2656b4f0b5e8dae59f568bfe0297a48aaf3c4fe4be1ba5d9a7882a7->enter($__internal_9db02415e2656b4f0b5e8dae59f568bfe0297a48aaf3c4fe4be1ba5d9a7882a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e747c989e1e0119e6f8a7c9b9c76194f31d45fb4ec26d93376396ff7bf22eab2->leave($__internal_e747c989e1e0119e6f8a7c9b9c76194f31d45fb4ec26d93376396ff7bf22eab2_prof);

        
        $__internal_9db02415e2656b4f0b5e8dae59f568bfe0297a48aaf3c4fe4be1ba5d9a7882a7->leave($__internal_9db02415e2656b4f0b5e8dae59f568bfe0297a48aaf3c4fe4be1ba5d9a7882a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fae10badb6bda8fe3e11ff18c28e749ae7291efcd98df93c0368ae6bd5e03f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae10badb6bda8fe3e11ff18c28e749ae7291efcd98df93c0368ae6bd5e03f84->enter($__internal_fae10badb6bda8fe3e11ff18c28e749ae7291efcd98df93c0368ae6bd5e03f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5da052f3ec58a61599cd46aebb8fb5a72fb7431097bb6c2d6cd671f1397b495a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da052f3ec58a61599cd46aebb8fb5a72fb7431097bb6c2d6cd671f1397b495a->enter($__internal_5da052f3ec58a61599cd46aebb8fb5a72fb7431097bb6c2d6cd671f1397b495a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5da052f3ec58a61599cd46aebb8fb5a72fb7431097bb6c2d6cd671f1397b495a->leave($__internal_5da052f3ec58a61599cd46aebb8fb5a72fb7431097bb6c2d6cd671f1397b495a_prof);

        
        $__internal_fae10badb6bda8fe3e11ff18c28e749ae7291efcd98df93c0368ae6bd5e03f84->leave($__internal_fae10badb6bda8fe3e11ff18c28e749ae7291efcd98df93c0368ae6bd5e03f84_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_725a6538f337500522ff45ca637f864e8e2d0ddefa4e70736d549f82a8a597fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725a6538f337500522ff45ca637f864e8e2d0ddefa4e70736d549f82a8a597fa->enter($__internal_725a6538f337500522ff45ca637f864e8e2d0ddefa4e70736d549f82a8a597fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35f7b8a3a914bbb1fa426eedda06510cf77aa108f1a2a5a1569e7cb7d53c2cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f7b8a3a914bbb1fa426eedda06510cf77aa108f1a2a5a1569e7cb7d53c2cb2->enter($__internal_35f7b8a3a914bbb1fa426eedda06510cf77aa108f1a2a5a1569e7cb7d53c2cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_35f7b8a3a914bbb1fa426eedda06510cf77aa108f1a2a5a1569e7cb7d53c2cb2->leave($__internal_35f7b8a3a914bbb1fa426eedda06510cf77aa108f1a2a5a1569e7cb7d53c2cb2_prof);

        
        $__internal_725a6538f337500522ff45ca637f864e8e2d0ddefa4e70736d549f82a8a597fa->leave($__internal_725a6538f337500522ff45ca637f864e8e2d0ddefa4e70736d549f82a8a597fa_prof);

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
