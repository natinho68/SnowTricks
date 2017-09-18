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
        $__internal_f9122a3fa5e479815e99cc9f0a6cf24538194cee2f48c66ec98438eca45c7dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9122a3fa5e479815e99cc9f0a6cf24538194cee2f48c66ec98438eca45c7dca->enter($__internal_f9122a3fa5e479815e99cc9f0a6cf24538194cee2f48c66ec98438eca45c7dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_20cedb4994339fe6de56dfc287f3e0fbc62cb0f002ffb707141aa2c740d25552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cedb4994339fe6de56dfc287f3e0fbc62cb0f002ffb707141aa2c740d25552->enter($__internal_20cedb4994339fe6de56dfc287f3e0fbc62cb0f002ffb707141aa2c740d25552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9122a3fa5e479815e99cc9f0a6cf24538194cee2f48c66ec98438eca45c7dca->leave($__internal_f9122a3fa5e479815e99cc9f0a6cf24538194cee2f48c66ec98438eca45c7dca_prof);

        
        $__internal_20cedb4994339fe6de56dfc287f3e0fbc62cb0f002ffb707141aa2c740d25552->leave($__internal_20cedb4994339fe6de56dfc287f3e0fbc62cb0f002ffb707141aa2c740d25552_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1345fafa76afb9fe7eb1a572757e8c329ba28308858e9f6330395e469fb853e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1345fafa76afb9fe7eb1a572757e8c329ba28308858e9f6330395e469fb853e0->enter($__internal_1345fafa76afb9fe7eb1a572757e8c329ba28308858e9f6330395e469fb853e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e04a95745292b47635db36698c5b4a321e19c09588a6d5ce952020a4c2ffa42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04a95745292b47635db36698c5b4a321e19c09588a6d5ce952020a4c2ffa42b->enter($__internal_e04a95745292b47635db36698c5b4a321e19c09588a6d5ce952020a4c2ffa42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e04a95745292b47635db36698c5b4a321e19c09588a6d5ce952020a4c2ffa42b->leave($__internal_e04a95745292b47635db36698c5b4a321e19c09588a6d5ce952020a4c2ffa42b_prof);

        
        $__internal_1345fafa76afb9fe7eb1a572757e8c329ba28308858e9f6330395e469fb853e0->leave($__internal_1345fafa76afb9fe7eb1a572757e8c329ba28308858e9f6330395e469fb853e0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e425fcfba1d8e96286628a785b5b39f18838f7d6a670b5cb13ba6e2910c8e054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e425fcfba1d8e96286628a785b5b39f18838f7d6a670b5cb13ba6e2910c8e054->enter($__internal_e425fcfba1d8e96286628a785b5b39f18838f7d6a670b5cb13ba6e2910c8e054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f54a10e4bd61302d3ed9460741e075f91310af1f846ccd6374f9d587a09a509d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54a10e4bd61302d3ed9460741e075f91310af1f846ccd6374f9d587a09a509d->enter($__internal_f54a10e4bd61302d3ed9460741e075f91310af1f846ccd6374f9d587a09a509d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f54a10e4bd61302d3ed9460741e075f91310af1f846ccd6374f9d587a09a509d->leave($__internal_f54a10e4bd61302d3ed9460741e075f91310af1f846ccd6374f9d587a09a509d_prof);

        
        $__internal_e425fcfba1d8e96286628a785b5b39f18838f7d6a670b5cb13ba6e2910c8e054->leave($__internal_e425fcfba1d8e96286628a785b5b39f18838f7d6a670b5cb13ba6e2910c8e054_prof);

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
