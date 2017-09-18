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
        $__internal_88e2d3ce612be49d27b0ee4f2245f30b002ddffdabc60baeb19fc778ace64273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e2d3ce612be49d27b0ee4f2245f30b002ddffdabc60baeb19fc778ace64273->enter($__internal_88e2d3ce612be49d27b0ee4f2245f30b002ddffdabc60baeb19fc778ace64273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_30c4df360fdd54a2bd1735b55631b5a6edd1fb96eeb8a3437138bbc74d2345aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c4df360fdd54a2bd1735b55631b5a6edd1fb96eeb8a3437138bbc74d2345aa->enter($__internal_30c4df360fdd54a2bd1735b55631b5a6edd1fb96eeb8a3437138bbc74d2345aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88e2d3ce612be49d27b0ee4f2245f30b002ddffdabc60baeb19fc778ace64273->leave($__internal_88e2d3ce612be49d27b0ee4f2245f30b002ddffdabc60baeb19fc778ace64273_prof);

        
        $__internal_30c4df360fdd54a2bd1735b55631b5a6edd1fb96eeb8a3437138bbc74d2345aa->leave($__internal_30c4df360fdd54a2bd1735b55631b5a6edd1fb96eeb8a3437138bbc74d2345aa_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_11eed3f61075f32e2154e03833ea7d3fe29eb192cee242616a43d5774952e279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11eed3f61075f32e2154e03833ea7d3fe29eb192cee242616a43d5774952e279->enter($__internal_11eed3f61075f32e2154e03833ea7d3fe29eb192cee242616a43d5774952e279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ad1821fdb448b6968c55d3acd30c39e5f79cc7187180f01c40a1992d4db68ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1821fdb448b6968c55d3acd30c39e5f79cc7187180f01c40a1992d4db68ec5->enter($__internal_ad1821fdb448b6968c55d3acd30c39e5f79cc7187180f01c40a1992d4db68ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ad1821fdb448b6968c55d3acd30c39e5f79cc7187180f01c40a1992d4db68ec5->leave($__internal_ad1821fdb448b6968c55d3acd30c39e5f79cc7187180f01c40a1992d4db68ec5_prof);

        
        $__internal_11eed3f61075f32e2154e03833ea7d3fe29eb192cee242616a43d5774952e279->leave($__internal_11eed3f61075f32e2154e03833ea7d3fe29eb192cee242616a43d5774952e279_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6972713e888fbe4fc1f7d8dfe58fe4bf79675daad0ab6baebc68908c4445d22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6972713e888fbe4fc1f7d8dfe58fe4bf79675daad0ab6baebc68908c4445d22e->enter($__internal_6972713e888fbe4fc1f7d8dfe58fe4bf79675daad0ab6baebc68908c4445d22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_750433e6677fda725955c37e209f61887485bfed4493f366482e7fa4f6c63d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750433e6677fda725955c37e209f61887485bfed4493f366482e7fa4f6c63d35->enter($__internal_750433e6677fda725955c37e209f61887485bfed4493f366482e7fa4f6c63d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_750433e6677fda725955c37e209f61887485bfed4493f366482e7fa4f6c63d35->leave($__internal_750433e6677fda725955c37e209f61887485bfed4493f366482e7fa4f6c63d35_prof);

        
        $__internal_6972713e888fbe4fc1f7d8dfe58fe4bf79675daad0ab6baebc68908c4445d22e->leave($__internal_6972713e888fbe4fc1f7d8dfe58fe4bf79675daad0ab6baebc68908c4445d22e_prof);

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
