<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b410644ae4785e2bb25dabd30ca43e9cb83e8e86a3e4b4a43b4739f0c2dac477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a007d89f673cbfd4834693e1c1b870cd2d19ee379722f633edd7ac1c6929dbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a007d89f673cbfd4834693e1c1b870cd2d19ee379722f633edd7ac1c6929dbdc->enter($__internal_a007d89f673cbfd4834693e1c1b870cd2d19ee379722f633edd7ac1c6929dbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_106844fc4ea17ec9cb9d5a6ab4bb9b0cecff1d236b19905c6b39cad73b80f968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106844fc4ea17ec9cb9d5a6ab4bb9b0cecff1d236b19905c6b39cad73b80f968->enter($__internal_106844fc4ea17ec9cb9d5a6ab4bb9b0cecff1d236b19905c6b39cad73b80f968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a007d89f673cbfd4834693e1c1b870cd2d19ee379722f633edd7ac1c6929dbdc->leave($__internal_a007d89f673cbfd4834693e1c1b870cd2d19ee379722f633edd7ac1c6929dbdc_prof);

        
        $__internal_106844fc4ea17ec9cb9d5a6ab4bb9b0cecff1d236b19905c6b39cad73b80f968->leave($__internal_106844fc4ea17ec9cb9d5a6ab4bb9b0cecff1d236b19905c6b39cad73b80f968_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a71e4ff30bc95af69f45c1eb6a47f9b11c95ab74689cb307d2beec9eceea20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a71e4ff30bc95af69f45c1eb6a47f9b11c95ab74689cb307d2beec9eceea20e->enter($__internal_2a71e4ff30bc95af69f45c1eb6a47f9b11c95ab74689cb307d2beec9eceea20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c0412cc06dd9119fb366630681226d35267238c43c22dc4823dc789ea08fe78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0412cc06dd9119fb366630681226d35267238c43c22dc4823dc789ea08fe78->enter($__internal_5c0412cc06dd9119fb366630681226d35267238c43c22dc4823dc789ea08fe78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5c0412cc06dd9119fb366630681226d35267238c43c22dc4823dc789ea08fe78->leave($__internal_5c0412cc06dd9119fb366630681226d35267238c43c22dc4823dc789ea08fe78_prof);

        
        $__internal_2a71e4ff30bc95af69f45c1eb6a47f9b11c95ab74689cb307d2beec9eceea20e->leave($__internal_2a71e4ff30bc95af69f45c1eb6a47f9b11c95ab74689cb307d2beec9eceea20e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f58548af3ed4ffe616168ece19b96f6cd52e69aa85de0b6b9865415d6764c48f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58548af3ed4ffe616168ece19b96f6cd52e69aa85de0b6b9865415d6764c48f->enter($__internal_f58548af3ed4ffe616168ece19b96f6cd52e69aa85de0b6b9865415d6764c48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83cf7d4ac2ea3332779ce9fdb9384f5cbe7dc7813993382406646d5a3d2a65f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cf7d4ac2ea3332779ce9fdb9384f5cbe7dc7813993382406646d5a3d2a65f5->enter($__internal_83cf7d4ac2ea3332779ce9fdb9384f5cbe7dc7813993382406646d5a3d2a65f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_83cf7d4ac2ea3332779ce9fdb9384f5cbe7dc7813993382406646d5a3d2a65f5->leave($__internal_83cf7d4ac2ea3332779ce9fdb9384f5cbe7dc7813993382406646d5a3d2a65f5_prof);

        
        $__internal_f58548af3ed4ffe616168ece19b96f6cd52e69aa85de0b6b9865415d6764c48f->leave($__internal_f58548af3ed4ffe616168ece19b96f6cd52e69aa85de0b6b9865415d6764c48f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
