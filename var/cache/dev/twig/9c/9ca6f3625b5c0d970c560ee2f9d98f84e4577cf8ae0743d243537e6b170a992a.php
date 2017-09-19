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
        $__internal_292ba766467c881158497458b9c701722f8446853ff2043527e4b3495e07b2f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292ba766467c881158497458b9c701722f8446853ff2043527e4b3495e07b2f9->enter($__internal_292ba766467c881158497458b9c701722f8446853ff2043527e4b3495e07b2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4ff630317d4eea30fc11f23a82df238b435908e092a92b71ab398539f2610a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff630317d4eea30fc11f23a82df238b435908e092a92b71ab398539f2610a93->enter($__internal_4ff630317d4eea30fc11f23a82df238b435908e092a92b71ab398539f2610a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_292ba766467c881158497458b9c701722f8446853ff2043527e4b3495e07b2f9->leave($__internal_292ba766467c881158497458b9c701722f8446853ff2043527e4b3495e07b2f9_prof);

        
        $__internal_4ff630317d4eea30fc11f23a82df238b435908e092a92b71ab398539f2610a93->leave($__internal_4ff630317d4eea30fc11f23a82df238b435908e092a92b71ab398539f2610a93_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_246578da7d24b6a47b84cf84f5dcb5f013297304738978079cccef085eb1865b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246578da7d24b6a47b84cf84f5dcb5f013297304738978079cccef085eb1865b->enter($__internal_246578da7d24b6a47b84cf84f5dcb5f013297304738978079cccef085eb1865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8f76fe79faeecab3869afefdc1d1a36bc3de8dcd1e1e0f7bd92d5726840be6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f76fe79faeecab3869afefdc1d1a36bc3de8dcd1e1e0f7bd92d5726840be6e5->enter($__internal_8f76fe79faeecab3869afefdc1d1a36bc3de8dcd1e1e0f7bd92d5726840be6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_8f76fe79faeecab3869afefdc1d1a36bc3de8dcd1e1e0f7bd92d5726840be6e5->leave($__internal_8f76fe79faeecab3869afefdc1d1a36bc3de8dcd1e1e0f7bd92d5726840be6e5_prof);

        
        $__internal_246578da7d24b6a47b84cf84f5dcb5f013297304738978079cccef085eb1865b->leave($__internal_246578da7d24b6a47b84cf84f5dcb5f013297304738978079cccef085eb1865b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c67a0398f4ed1f316b9d2cdd1ddcaa5b1293a055b380b7b842417f678bd5fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c67a0398f4ed1f316b9d2cdd1ddcaa5b1293a055b380b7b842417f678bd5fdb->enter($__internal_6c67a0398f4ed1f316b9d2cdd1ddcaa5b1293a055b380b7b842417f678bd5fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_040211f978ae49dd487f8e1af77b11a3885ccdd5585e61497535802283291aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040211f978ae49dd487f8e1af77b11a3885ccdd5585e61497535802283291aae->enter($__internal_040211f978ae49dd487f8e1af77b11a3885ccdd5585e61497535802283291aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_040211f978ae49dd487f8e1af77b11a3885ccdd5585e61497535802283291aae->leave($__internal_040211f978ae49dd487f8e1af77b11a3885ccdd5585e61497535802283291aae_prof);

        
        $__internal_6c67a0398f4ed1f316b9d2cdd1ddcaa5b1293a055b380b7b842417f678bd5fdb->leave($__internal_6c67a0398f4ed1f316b9d2cdd1ddcaa5b1293a055b380b7b842417f678bd5fdb_prof);

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
