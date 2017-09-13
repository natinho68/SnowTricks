<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9132cc0f17e2db740ff0538f3c8c82ecd74788b65a8f60039a8f3bee7c7e3575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_792595052dc9a624be094fda4945682bc089aeffb912e15eb5983e9f08cfe278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792595052dc9a624be094fda4945682bc089aeffb912e15eb5983e9f08cfe278->enter($__internal_792595052dc9a624be094fda4945682bc089aeffb912e15eb5983e9f08cfe278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0f69ff1d9af04ffd5832ba2187c301aaa71a1093850050eb6c654df3b0abcee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f69ff1d9af04ffd5832ba2187c301aaa71a1093850050eb6c654df3b0abcee6->enter($__internal_0f69ff1d9af04ffd5832ba2187c301aaa71a1093850050eb6c654df3b0abcee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_792595052dc9a624be094fda4945682bc089aeffb912e15eb5983e9f08cfe278->leave($__internal_792595052dc9a624be094fda4945682bc089aeffb912e15eb5983e9f08cfe278_prof);

        
        $__internal_0f69ff1d9af04ffd5832ba2187c301aaa71a1093850050eb6c654df3b0abcee6->leave($__internal_0f69ff1d9af04ffd5832ba2187c301aaa71a1093850050eb6c654df3b0abcee6_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_385f3867bfa6a0d1e3d2d783f1478fccb43364195460eacb8f88b45a2faac8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385f3867bfa6a0d1e3d2d783f1478fccb43364195460eacb8f88b45a2faac8ca->enter($__internal_385f3867bfa6a0d1e3d2d783f1478fccb43364195460eacb8f88b45a2faac8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_00b7510fda737eb26d81f5d682320dcc890fc9d0c53ac2530202b73af281516e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b7510fda737eb26d81f5d682320dcc890fc9d0c53ac2530202b73af281516e->enter($__internal_00b7510fda737eb26d81f5d682320dcc890fc9d0c53ac2530202b73af281516e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_00b7510fda737eb26d81f5d682320dcc890fc9d0c53ac2530202b73af281516e->leave($__internal_00b7510fda737eb26d81f5d682320dcc890fc9d0c53ac2530202b73af281516e_prof);

        
        $__internal_385f3867bfa6a0d1e3d2d783f1478fccb43364195460eacb8f88b45a2faac8ca->leave($__internal_385f3867bfa6a0d1e3d2d783f1478fccb43364195460eacb8f88b45a2faac8ca_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3037b88a93f3f2892bd0e3242b5117302cd88f6648dc340229a2a7ecd25b6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3037b88a93f3f2892bd0e3242b5117302cd88f6648dc340229a2a7ecd25b6f5->enter($__internal_b3037b88a93f3f2892bd0e3242b5117302cd88f6648dc340229a2a7ecd25b6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc71fb77c5a09647ed56eae43d3f68e8da0f1b5cb402ecc5b8226abb372fad13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc71fb77c5a09647ed56eae43d3f68e8da0f1b5cb402ecc5b8226abb372fad13->enter($__internal_cc71fb77c5a09647ed56eae43d3f68e8da0f1b5cb402ecc5b8226abb372fad13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_cc71fb77c5a09647ed56eae43d3f68e8da0f1b5cb402ecc5b8226abb372fad13->leave($__internal_cc71fb77c5a09647ed56eae43d3f68e8da0f1b5cb402ecc5b8226abb372fad13_prof);

        
        $__internal_b3037b88a93f3f2892bd0e3242b5117302cd88f6648dc340229a2a7ecd25b6f5->leave($__internal_b3037b88a93f3f2892bd0e3242b5117302cd88f6648dc340229a2a7ecd25b6f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
