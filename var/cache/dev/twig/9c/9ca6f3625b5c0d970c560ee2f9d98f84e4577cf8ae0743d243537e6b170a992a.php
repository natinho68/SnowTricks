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
        $__internal_8b1e62239ef38cf381ee8a7af6c2bc1df0d60d0413a152ca57882cc1454bf274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1e62239ef38cf381ee8a7af6c2bc1df0d60d0413a152ca57882cc1454bf274->enter($__internal_8b1e62239ef38cf381ee8a7af6c2bc1df0d60d0413a152ca57882cc1454bf274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4b3b4d233fdd2c30eba1cd59be910be21f33129d74987c0ab090f17d1dcf3fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3b4d233fdd2c30eba1cd59be910be21f33129d74987c0ab090f17d1dcf3fd7->enter($__internal_4b3b4d233fdd2c30eba1cd59be910be21f33129d74987c0ab090f17d1dcf3fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b1e62239ef38cf381ee8a7af6c2bc1df0d60d0413a152ca57882cc1454bf274->leave($__internal_8b1e62239ef38cf381ee8a7af6c2bc1df0d60d0413a152ca57882cc1454bf274_prof);

        
        $__internal_4b3b4d233fdd2c30eba1cd59be910be21f33129d74987c0ab090f17d1dcf3fd7->leave($__internal_4b3b4d233fdd2c30eba1cd59be910be21f33129d74987c0ab090f17d1dcf3fd7_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_666379781ee5ec5f712be951d257bc4062c579885b73e433a6e355d8f81cd5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666379781ee5ec5f712be951d257bc4062c579885b73e433a6e355d8f81cd5a7->enter($__internal_666379781ee5ec5f712be951d257bc4062c579885b73e433a6e355d8f81cd5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_80a3b093982602cb02175dc799c369906d747e9d028d666df7c5bce44b5ccfac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a3b093982602cb02175dc799c369906d747e9d028d666df7c5bce44b5ccfac->enter($__internal_80a3b093982602cb02175dc799c369906d747e9d028d666df7c5bce44b5ccfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_80a3b093982602cb02175dc799c369906d747e9d028d666df7c5bce44b5ccfac->leave($__internal_80a3b093982602cb02175dc799c369906d747e9d028d666df7c5bce44b5ccfac_prof);

        
        $__internal_666379781ee5ec5f712be951d257bc4062c579885b73e433a6e355d8f81cd5a7->leave($__internal_666379781ee5ec5f712be951d257bc4062c579885b73e433a6e355d8f81cd5a7_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_185486e890cb665465b9df4506b0497ba16dc3adb00813ed2da7a84b59e639bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185486e890cb665465b9df4506b0497ba16dc3adb00813ed2da7a84b59e639bb->enter($__internal_185486e890cb665465b9df4506b0497ba16dc3adb00813ed2da7a84b59e639bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_643244c42d0dcd8d2399748a080337674ba6d207ac4b90335e531a5d877baf5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643244c42d0dcd8d2399748a080337674ba6d207ac4b90335e531a5d877baf5c->enter($__internal_643244c42d0dcd8d2399748a080337674ba6d207ac4b90335e531a5d877baf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_643244c42d0dcd8d2399748a080337674ba6d207ac4b90335e531a5d877baf5c->leave($__internal_643244c42d0dcd8d2399748a080337674ba6d207ac4b90335e531a5d877baf5c_prof);

        
        $__internal_185486e890cb665465b9df4506b0497ba16dc3adb00813ed2da7a84b59e639bb->leave($__internal_185486e890cb665465b9df4506b0497ba16dc3adb00813ed2da7a84b59e639bb_prof);

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
