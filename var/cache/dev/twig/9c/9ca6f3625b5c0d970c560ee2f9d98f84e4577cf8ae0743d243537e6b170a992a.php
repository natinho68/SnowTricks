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
        $__internal_ac6c5d5b42a9050f877f6461980c0dca466126bad3625c41c511dbfa5e79611f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6c5d5b42a9050f877f6461980c0dca466126bad3625c41c511dbfa5e79611f->enter($__internal_ac6c5d5b42a9050f877f6461980c0dca466126bad3625c41c511dbfa5e79611f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3945f80f4d955a502fecf5335bed9bdc4e2f074f5f491955da61d8f9abdb4302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3945f80f4d955a502fecf5335bed9bdc4e2f074f5f491955da61d8f9abdb4302->enter($__internal_3945f80f4d955a502fecf5335bed9bdc4e2f074f5f491955da61d8f9abdb4302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac6c5d5b42a9050f877f6461980c0dca466126bad3625c41c511dbfa5e79611f->leave($__internal_ac6c5d5b42a9050f877f6461980c0dca466126bad3625c41c511dbfa5e79611f_prof);

        
        $__internal_3945f80f4d955a502fecf5335bed9bdc4e2f074f5f491955da61d8f9abdb4302->leave($__internal_3945f80f4d955a502fecf5335bed9bdc4e2f074f5f491955da61d8f9abdb4302_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c829b6307e21907dacd5f20a1c2437583e90713811b7187d291d6376a07f7be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c829b6307e21907dacd5f20a1c2437583e90713811b7187d291d6376a07f7be1->enter($__internal_c829b6307e21907dacd5f20a1c2437583e90713811b7187d291d6376a07f7be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7ff87bd166abe058532eff67ca5296da4de6b665ae2b95a025e44fc8c6080d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff87bd166abe058532eff67ca5296da4de6b665ae2b95a025e44fc8c6080d0f->enter($__internal_7ff87bd166abe058532eff67ca5296da4de6b665ae2b95a025e44fc8c6080d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7ff87bd166abe058532eff67ca5296da4de6b665ae2b95a025e44fc8c6080d0f->leave($__internal_7ff87bd166abe058532eff67ca5296da4de6b665ae2b95a025e44fc8c6080d0f_prof);

        
        $__internal_c829b6307e21907dacd5f20a1c2437583e90713811b7187d291d6376a07f7be1->leave($__internal_c829b6307e21907dacd5f20a1c2437583e90713811b7187d291d6376a07f7be1_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_971f5283b629082d1b9e8acddc21d1a214d82bfc595d6c3d4af1e9d0388ae2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971f5283b629082d1b9e8acddc21d1a214d82bfc595d6c3d4af1e9d0388ae2bc->enter($__internal_971f5283b629082d1b9e8acddc21d1a214d82bfc595d6c3d4af1e9d0388ae2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7010252a7bc355f63544d22962882b32bfe682d85bd6782ac74c3aff9df0b296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7010252a7bc355f63544d22962882b32bfe682d85bd6782ac74c3aff9df0b296->enter($__internal_7010252a7bc355f63544d22962882b32bfe682d85bd6782ac74c3aff9df0b296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7010252a7bc355f63544d22962882b32bfe682d85bd6782ac74c3aff9df0b296->leave($__internal_7010252a7bc355f63544d22962882b32bfe682d85bd6782ac74c3aff9df0b296_prof);

        
        $__internal_971f5283b629082d1b9e8acddc21d1a214d82bfc595d6c3d4af1e9d0388ae2bc->leave($__internal_971f5283b629082d1b9e8acddc21d1a214d82bfc595d6c3d4af1e9d0388ae2bc_prof);

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
