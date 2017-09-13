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
        $__internal_8cfd3f64db3f199c6d2f0e9da4bc330817e8812f057312131138ee0ced94f763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfd3f64db3f199c6d2f0e9da4bc330817e8812f057312131138ee0ced94f763->enter($__internal_8cfd3f64db3f199c6d2f0e9da4bc330817e8812f057312131138ee0ced94f763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8da998ac75903fd61dca0e51f65c6be2fbe9e1ac9a4899c1cd7b5f77384bf92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da998ac75903fd61dca0e51f65c6be2fbe9e1ac9a4899c1cd7b5f77384bf92f->enter($__internal_8da998ac75903fd61dca0e51f65c6be2fbe9e1ac9a4899c1cd7b5f77384bf92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cfd3f64db3f199c6d2f0e9da4bc330817e8812f057312131138ee0ced94f763->leave($__internal_8cfd3f64db3f199c6d2f0e9da4bc330817e8812f057312131138ee0ced94f763_prof);

        
        $__internal_8da998ac75903fd61dca0e51f65c6be2fbe9e1ac9a4899c1cd7b5f77384bf92f->leave($__internal_8da998ac75903fd61dca0e51f65c6be2fbe9e1ac9a4899c1cd7b5f77384bf92f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_818a3b56c21ae4324a20c5301ce047f0547967528af124c6a40630cc95a8a55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818a3b56c21ae4324a20c5301ce047f0547967528af124c6a40630cc95a8a55a->enter($__internal_818a3b56c21ae4324a20c5301ce047f0547967528af124c6a40630cc95a8a55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f450ff738d6aeb9f4daba781661a5b5cc5c2f716ff255c5a3f7a168b77bc9a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f450ff738d6aeb9f4daba781661a5b5cc5c2f716ff255c5a3f7a168b77bc9a1a->enter($__internal_f450ff738d6aeb9f4daba781661a5b5cc5c2f716ff255c5a3f7a168b77bc9a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f450ff738d6aeb9f4daba781661a5b5cc5c2f716ff255c5a3f7a168b77bc9a1a->leave($__internal_f450ff738d6aeb9f4daba781661a5b5cc5c2f716ff255c5a3f7a168b77bc9a1a_prof);

        
        $__internal_818a3b56c21ae4324a20c5301ce047f0547967528af124c6a40630cc95a8a55a->leave($__internal_818a3b56c21ae4324a20c5301ce047f0547967528af124c6a40630cc95a8a55a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d77cfa8bd074e8c52c50b298330c6078be1c2f4fdaa1ced79b85794b5d3ff425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77cfa8bd074e8c52c50b298330c6078be1c2f4fdaa1ced79b85794b5d3ff425->enter($__internal_d77cfa8bd074e8c52c50b298330c6078be1c2f4fdaa1ced79b85794b5d3ff425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e681fd7bf3e0bbf25138d0523d078b6e6c53f26808e2c60753c9ad1469c7432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e681fd7bf3e0bbf25138d0523d078b6e6c53f26808e2c60753c9ad1469c7432->enter($__internal_6e681fd7bf3e0bbf25138d0523d078b6e6c53f26808e2c60753c9ad1469c7432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e681fd7bf3e0bbf25138d0523d078b6e6c53f26808e2c60753c9ad1469c7432->leave($__internal_6e681fd7bf3e0bbf25138d0523d078b6e6c53f26808e2c60753c9ad1469c7432_prof);

        
        $__internal_d77cfa8bd074e8c52c50b298330c6078be1c2f4fdaa1ced79b85794b5d3ff425->leave($__internal_d77cfa8bd074e8c52c50b298330c6078be1c2f4fdaa1ced79b85794b5d3ff425_prof);

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
