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
        $__internal_0f782679b2d0b0834db04eb5fa7376af94b737d8ccbb3e0af584c8dc6a8da449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f782679b2d0b0834db04eb5fa7376af94b737d8ccbb3e0af584c8dc6a8da449->enter($__internal_0f782679b2d0b0834db04eb5fa7376af94b737d8ccbb3e0af584c8dc6a8da449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9d83eaa218482234137ae380976ed854e75fd0bd399f3a295bfd2f82e7f9a607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d83eaa218482234137ae380976ed854e75fd0bd399f3a295bfd2f82e7f9a607->enter($__internal_9d83eaa218482234137ae380976ed854e75fd0bd399f3a295bfd2f82e7f9a607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f782679b2d0b0834db04eb5fa7376af94b737d8ccbb3e0af584c8dc6a8da449->leave($__internal_0f782679b2d0b0834db04eb5fa7376af94b737d8ccbb3e0af584c8dc6a8da449_prof);

        
        $__internal_9d83eaa218482234137ae380976ed854e75fd0bd399f3a295bfd2f82e7f9a607->leave($__internal_9d83eaa218482234137ae380976ed854e75fd0bd399f3a295bfd2f82e7f9a607_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_29b52bff08ae02a2830b026457ab803db99e5191f19e3d9c9f7e7b1bf23422ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b52bff08ae02a2830b026457ab803db99e5191f19e3d9c9f7e7b1bf23422ae->enter($__internal_29b52bff08ae02a2830b026457ab803db99e5191f19e3d9c9f7e7b1bf23422ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_445b9b82c93661ffe8c9d2fa93b22bd37f2723a9368be08ac7adbf742140d426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445b9b82c93661ffe8c9d2fa93b22bd37f2723a9368be08ac7adbf742140d426->enter($__internal_445b9b82c93661ffe8c9d2fa93b22bd37f2723a9368be08ac7adbf742140d426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_445b9b82c93661ffe8c9d2fa93b22bd37f2723a9368be08ac7adbf742140d426->leave($__internal_445b9b82c93661ffe8c9d2fa93b22bd37f2723a9368be08ac7adbf742140d426_prof);

        
        $__internal_29b52bff08ae02a2830b026457ab803db99e5191f19e3d9c9f7e7b1bf23422ae->leave($__internal_29b52bff08ae02a2830b026457ab803db99e5191f19e3d9c9f7e7b1bf23422ae_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32d61822d6aa6b8314dd8c5ed5a44c5f84e94998c2689d38888b460ec1b325c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d61822d6aa6b8314dd8c5ed5a44c5f84e94998c2689d38888b460ec1b325c8->enter($__internal_32d61822d6aa6b8314dd8c5ed5a44c5f84e94998c2689d38888b460ec1b325c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_71c17292f97d209824d91c3df3aa8e263b52d278cba47575f60c6c868ea2bb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c17292f97d209824d91c3df3aa8e263b52d278cba47575f60c6c868ea2bb31->enter($__internal_71c17292f97d209824d91c3df3aa8e263b52d278cba47575f60c6c868ea2bb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_71c17292f97d209824d91c3df3aa8e263b52d278cba47575f60c6c868ea2bb31->leave($__internal_71c17292f97d209824d91c3df3aa8e263b52d278cba47575f60c6c868ea2bb31_prof);

        
        $__internal_32d61822d6aa6b8314dd8c5ed5a44c5f84e94998c2689d38888b460ec1b325c8->leave($__internal_32d61822d6aa6b8314dd8c5ed5a44c5f84e94998c2689d38888b460ec1b325c8_prof);

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
