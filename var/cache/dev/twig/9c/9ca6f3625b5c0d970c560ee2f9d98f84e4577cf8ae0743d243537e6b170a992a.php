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
        $__internal_45e203148c010de46da432d68c9f1231707ae91a175183ae56ee895be0047243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e203148c010de46da432d68c9f1231707ae91a175183ae56ee895be0047243->enter($__internal_45e203148c010de46da432d68c9f1231707ae91a175183ae56ee895be0047243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_756680ff44fd47fecd2b1b686cda5fbc0f9332840194572029ba9a8d3b9bbca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756680ff44fd47fecd2b1b686cda5fbc0f9332840194572029ba9a8d3b9bbca9->enter($__internal_756680ff44fd47fecd2b1b686cda5fbc0f9332840194572029ba9a8d3b9bbca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45e203148c010de46da432d68c9f1231707ae91a175183ae56ee895be0047243->leave($__internal_45e203148c010de46da432d68c9f1231707ae91a175183ae56ee895be0047243_prof);

        
        $__internal_756680ff44fd47fecd2b1b686cda5fbc0f9332840194572029ba9a8d3b9bbca9->leave($__internal_756680ff44fd47fecd2b1b686cda5fbc0f9332840194572029ba9a8d3b9bbca9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3ce38a303ec3976c07c740640614b7001218a8beb36774274cedc62f33b29228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce38a303ec3976c07c740640614b7001218a8beb36774274cedc62f33b29228->enter($__internal_3ce38a303ec3976c07c740640614b7001218a8beb36774274cedc62f33b29228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_273afb7ad23f768027303ec4a4621e404c11fa8c9a142685dd4154a11ac880e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273afb7ad23f768027303ec4a4621e404c11fa8c9a142685dd4154a11ac880e9->enter($__internal_273afb7ad23f768027303ec4a4621e404c11fa8c9a142685dd4154a11ac880e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_273afb7ad23f768027303ec4a4621e404c11fa8c9a142685dd4154a11ac880e9->leave($__internal_273afb7ad23f768027303ec4a4621e404c11fa8c9a142685dd4154a11ac880e9_prof);

        
        $__internal_3ce38a303ec3976c07c740640614b7001218a8beb36774274cedc62f33b29228->leave($__internal_3ce38a303ec3976c07c740640614b7001218a8beb36774274cedc62f33b29228_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef1ed5877c1c129e689d99097f61325ef3ce1d18de5b800a1ea7d1ddff010340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1ed5877c1c129e689d99097f61325ef3ce1d18de5b800a1ea7d1ddff010340->enter($__internal_ef1ed5877c1c129e689d99097f61325ef3ce1d18de5b800a1ea7d1ddff010340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_044acee0774ce72cec9a636d79dad0f4b3f260b34cee40666f34a7f6e1b37c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044acee0774ce72cec9a636d79dad0f4b3f260b34cee40666f34a7f6e1b37c6b->enter($__internal_044acee0774ce72cec9a636d79dad0f4b3f260b34cee40666f34a7f6e1b37c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_044acee0774ce72cec9a636d79dad0f4b3f260b34cee40666f34a7f6e1b37c6b->leave($__internal_044acee0774ce72cec9a636d79dad0f4b3f260b34cee40666f34a7f6e1b37c6b_prof);

        
        $__internal_ef1ed5877c1c129e689d99097f61325ef3ce1d18de5b800a1ea7d1ddff010340->leave($__internal_ef1ed5877c1c129e689d99097f61325ef3ce1d18de5b800a1ea7d1ddff010340_prof);

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
