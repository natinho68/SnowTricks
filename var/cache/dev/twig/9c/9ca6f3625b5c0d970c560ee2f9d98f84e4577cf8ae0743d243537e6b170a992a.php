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
        $__internal_81c4f5c5e64c661708bced0c96bfb0635c5fd0aca4da59415f4035a658034c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c4f5c5e64c661708bced0c96bfb0635c5fd0aca4da59415f4035a658034c88->enter($__internal_81c4f5c5e64c661708bced0c96bfb0635c5fd0aca4da59415f4035a658034c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a844afa6d60570193faff85b62637895c20592d82cf7a9d5b641e45add67fb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a844afa6d60570193faff85b62637895c20592d82cf7a9d5b641e45add67fb4e->enter($__internal_a844afa6d60570193faff85b62637895c20592d82cf7a9d5b641e45add67fb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81c4f5c5e64c661708bced0c96bfb0635c5fd0aca4da59415f4035a658034c88->leave($__internal_81c4f5c5e64c661708bced0c96bfb0635c5fd0aca4da59415f4035a658034c88_prof);

        
        $__internal_a844afa6d60570193faff85b62637895c20592d82cf7a9d5b641e45add67fb4e->leave($__internal_a844afa6d60570193faff85b62637895c20592d82cf7a9d5b641e45add67fb4e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ac9e0b3e040131bd96373e513865d9f96c749acb01670c5360ae4cc4751ade28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac9e0b3e040131bd96373e513865d9f96c749acb01670c5360ae4cc4751ade28->enter($__internal_ac9e0b3e040131bd96373e513865d9f96c749acb01670c5360ae4cc4751ade28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7c15d829c97751aa595acb3d0a0e32f503e3d7a5367fd053bcd3dde7c763ea35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c15d829c97751aa595acb3d0a0e32f503e3d7a5367fd053bcd3dde7c763ea35->enter($__internal_7c15d829c97751aa595acb3d0a0e32f503e3d7a5367fd053bcd3dde7c763ea35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7c15d829c97751aa595acb3d0a0e32f503e3d7a5367fd053bcd3dde7c763ea35->leave($__internal_7c15d829c97751aa595acb3d0a0e32f503e3d7a5367fd053bcd3dde7c763ea35_prof);

        
        $__internal_ac9e0b3e040131bd96373e513865d9f96c749acb01670c5360ae4cc4751ade28->leave($__internal_ac9e0b3e040131bd96373e513865d9f96c749acb01670c5360ae4cc4751ade28_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_610f621033a68ed471057fff932300eb40a139c5cec00f5dade4721f14604ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610f621033a68ed471057fff932300eb40a139c5cec00f5dade4721f14604ef7->enter($__internal_610f621033a68ed471057fff932300eb40a139c5cec00f5dade4721f14604ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6bbcfd7c9e35f7c2a05af0354c3d0285eb42a9252bdc62d2ff4749667763153d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbcfd7c9e35f7c2a05af0354c3d0285eb42a9252bdc62d2ff4749667763153d->enter($__internal_6bbcfd7c9e35f7c2a05af0354c3d0285eb42a9252bdc62d2ff4749667763153d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6bbcfd7c9e35f7c2a05af0354c3d0285eb42a9252bdc62d2ff4749667763153d->leave($__internal_6bbcfd7c9e35f7c2a05af0354c3d0285eb42a9252bdc62d2ff4749667763153d_prof);

        
        $__internal_610f621033a68ed471057fff932300eb40a139c5cec00f5dade4721f14604ef7->leave($__internal_610f621033a68ed471057fff932300eb40a139c5cec00f5dade4721f14604ef7_prof);

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
