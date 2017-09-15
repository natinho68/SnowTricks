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
        $__internal_308053cf18392abfb0825b6638e1f2c45d276bcfc4aa6fbe8e4525bf3f7c44ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308053cf18392abfb0825b6638e1f2c45d276bcfc4aa6fbe8e4525bf3f7c44ce->enter($__internal_308053cf18392abfb0825b6638e1f2c45d276bcfc4aa6fbe8e4525bf3f7c44ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_7677aa7645004a827cbc9b0c29587f7967d78a6607c050ee89516157c6aaa284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7677aa7645004a827cbc9b0c29587f7967d78a6607c050ee89516157c6aaa284->enter($__internal_7677aa7645004a827cbc9b0c29587f7967d78a6607c050ee89516157c6aaa284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_308053cf18392abfb0825b6638e1f2c45d276bcfc4aa6fbe8e4525bf3f7c44ce->leave($__internal_308053cf18392abfb0825b6638e1f2c45d276bcfc4aa6fbe8e4525bf3f7c44ce_prof);

        
        $__internal_7677aa7645004a827cbc9b0c29587f7967d78a6607c050ee89516157c6aaa284->leave($__internal_7677aa7645004a827cbc9b0c29587f7967d78a6607c050ee89516157c6aaa284_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9598bdb971b7653c898b92b1f6f852791920816e2e3d503c4bff06fc03a592e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9598bdb971b7653c898b92b1f6f852791920816e2e3d503c4bff06fc03a592e1->enter($__internal_9598bdb971b7653c898b92b1f6f852791920816e2e3d503c4bff06fc03a592e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_53cb8c81d1bd3bbd633cf84268e8c23dc9b62ddbf01649401453ab664c0d2aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cb8c81d1bd3bbd633cf84268e8c23dc9b62ddbf01649401453ab664c0d2aef->enter($__internal_53cb8c81d1bd3bbd633cf84268e8c23dc9b62ddbf01649401453ab664c0d2aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_53cb8c81d1bd3bbd633cf84268e8c23dc9b62ddbf01649401453ab664c0d2aef->leave($__internal_53cb8c81d1bd3bbd633cf84268e8c23dc9b62ddbf01649401453ab664c0d2aef_prof);

        
        $__internal_9598bdb971b7653c898b92b1f6f852791920816e2e3d503c4bff06fc03a592e1->leave($__internal_9598bdb971b7653c898b92b1f6f852791920816e2e3d503c4bff06fc03a592e1_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f50d08109a7b89e29e7dd4c41e7866565d3ec4d88db0ec7bdfb840acc7770ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50d08109a7b89e29e7dd4c41e7866565d3ec4d88db0ec7bdfb840acc7770ded->enter($__internal_f50d08109a7b89e29e7dd4c41e7866565d3ec4d88db0ec7bdfb840acc7770ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fe47bff274ec41da505be12159730bddcd333c892bc0a4c07140ea30a0d45d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe47bff274ec41da505be12159730bddcd333c892bc0a4c07140ea30a0d45d2->enter($__internal_7fe47bff274ec41da505be12159730bddcd333c892bc0a4c07140ea30a0d45d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7fe47bff274ec41da505be12159730bddcd333c892bc0a4c07140ea30a0d45d2->leave($__internal_7fe47bff274ec41da505be12159730bddcd333c892bc0a4c07140ea30a0d45d2_prof);

        
        $__internal_f50d08109a7b89e29e7dd4c41e7866565d3ec4d88db0ec7bdfb840acc7770ded->leave($__internal_f50d08109a7b89e29e7dd4c41e7866565d3ec4d88db0ec7bdfb840acc7770ded_prof);

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
