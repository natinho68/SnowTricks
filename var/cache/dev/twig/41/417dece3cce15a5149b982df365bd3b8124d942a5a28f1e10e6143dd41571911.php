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
        $__internal_071469b88d4613dd7e16bc11eb0b6fce0e90f53f01e99de5d1330dce6d0cb962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071469b88d4613dd7e16bc11eb0b6fce0e90f53f01e99de5d1330dce6d0cb962->enter($__internal_071469b88d4613dd7e16bc11eb0b6fce0e90f53f01e99de5d1330dce6d0cb962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2298be5b880ceacd0ff58511c3a7ad41a0cf4ce5cedf84a3966399d85b1f1d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2298be5b880ceacd0ff58511c3a7ad41a0cf4ce5cedf84a3966399d85b1f1d11->enter($__internal_2298be5b880ceacd0ff58511c3a7ad41a0cf4ce5cedf84a3966399d85b1f1d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_071469b88d4613dd7e16bc11eb0b6fce0e90f53f01e99de5d1330dce6d0cb962->leave($__internal_071469b88d4613dd7e16bc11eb0b6fce0e90f53f01e99de5d1330dce6d0cb962_prof);

        
        $__internal_2298be5b880ceacd0ff58511c3a7ad41a0cf4ce5cedf84a3966399d85b1f1d11->leave($__internal_2298be5b880ceacd0ff58511c3a7ad41a0cf4ce5cedf84a3966399d85b1f1d11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6574e9d4f0bc1edfccff71d8ae6eb40a1b3b293be225a480e67205fd2f0de676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6574e9d4f0bc1edfccff71d8ae6eb40a1b3b293be225a480e67205fd2f0de676->enter($__internal_6574e9d4f0bc1edfccff71d8ae6eb40a1b3b293be225a480e67205fd2f0de676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e74616a055f5cca8af7f38bba1a1a019e74d5b58df8099b626b6ba7c1a43fd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74616a055f5cca8af7f38bba1a1a019e74d5b58df8099b626b6ba7c1a43fd0e->enter($__internal_e74616a055f5cca8af7f38bba1a1a019e74d5b58df8099b626b6ba7c1a43fd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e74616a055f5cca8af7f38bba1a1a019e74d5b58df8099b626b6ba7c1a43fd0e->leave($__internal_e74616a055f5cca8af7f38bba1a1a019e74d5b58df8099b626b6ba7c1a43fd0e_prof);

        
        $__internal_6574e9d4f0bc1edfccff71d8ae6eb40a1b3b293be225a480e67205fd2f0de676->leave($__internal_6574e9d4f0bc1edfccff71d8ae6eb40a1b3b293be225a480e67205fd2f0de676_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2758b8824b252454c871f5152dc6ce9b713086aa32a83dfaa3c1e6000812a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2758b8824b252454c871f5152dc6ce9b713086aa32a83dfaa3c1e6000812a59->enter($__internal_c2758b8824b252454c871f5152dc6ce9b713086aa32a83dfaa3c1e6000812a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_532557987bb2cc6a6dd2bfd909de786a0c9ffd51b116739d76c0f3085a7b167f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532557987bb2cc6a6dd2bfd909de786a0c9ffd51b116739d76c0f3085a7b167f->enter($__internal_532557987bb2cc6a6dd2bfd909de786a0c9ffd51b116739d76c0f3085a7b167f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_532557987bb2cc6a6dd2bfd909de786a0c9ffd51b116739d76c0f3085a7b167f->leave($__internal_532557987bb2cc6a6dd2bfd909de786a0c9ffd51b116739d76c0f3085a7b167f_prof);

        
        $__internal_c2758b8824b252454c871f5152dc6ce9b713086aa32a83dfaa3c1e6000812a59->leave($__internal_c2758b8824b252454c871f5152dc6ce9b713086aa32a83dfaa3c1e6000812a59_prof);

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
