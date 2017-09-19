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
        $__internal_7de634781f032b86ea7bb2821b8343f07cea821d4792746e0a71ff0cd145578a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de634781f032b86ea7bb2821b8343f07cea821d4792746e0a71ff0cd145578a->enter($__internal_7de634781f032b86ea7bb2821b8343f07cea821d4792746e0a71ff0cd145578a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8987a980a9b4ff5167eca031f60da129ccb37385f9f09d77d8f8aedff156c38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8987a980a9b4ff5167eca031f60da129ccb37385f9f09d77d8f8aedff156c38e->enter($__internal_8987a980a9b4ff5167eca031f60da129ccb37385f9f09d77d8f8aedff156c38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de634781f032b86ea7bb2821b8343f07cea821d4792746e0a71ff0cd145578a->leave($__internal_7de634781f032b86ea7bb2821b8343f07cea821d4792746e0a71ff0cd145578a_prof);

        
        $__internal_8987a980a9b4ff5167eca031f60da129ccb37385f9f09d77d8f8aedff156c38e->leave($__internal_8987a980a9b4ff5167eca031f60da129ccb37385f9f09d77d8f8aedff156c38e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7b9bcd8054e3c015b0ac7c57b929aa9242cff2edf6678846aa4d0b6eae1df42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9bcd8054e3c015b0ac7c57b929aa9242cff2edf6678846aa4d0b6eae1df42a->enter($__internal_7b9bcd8054e3c015b0ac7c57b929aa9242cff2edf6678846aa4d0b6eae1df42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f4484cb6d1f0018d07cb81cb0cc79eb50fa260290774d7230e265c35dcab51eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4484cb6d1f0018d07cb81cb0cc79eb50fa260290774d7230e265c35dcab51eb->enter($__internal_f4484cb6d1f0018d07cb81cb0cc79eb50fa260290774d7230e265c35dcab51eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f4484cb6d1f0018d07cb81cb0cc79eb50fa260290774d7230e265c35dcab51eb->leave($__internal_f4484cb6d1f0018d07cb81cb0cc79eb50fa260290774d7230e265c35dcab51eb_prof);

        
        $__internal_7b9bcd8054e3c015b0ac7c57b929aa9242cff2edf6678846aa4d0b6eae1df42a->leave($__internal_7b9bcd8054e3c015b0ac7c57b929aa9242cff2edf6678846aa4d0b6eae1df42a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4e141bb6744fe6f82042f0219a047a093309983fcfdeeb79f13f87a4772271a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e141bb6744fe6f82042f0219a047a093309983fcfdeeb79f13f87a4772271a->enter($__internal_c4e141bb6744fe6f82042f0219a047a093309983fcfdeeb79f13f87a4772271a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc3e089126bbacc5bd0d8bda8e3f59534f3bf63d3dfbba0170e54fc8a9136626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3e089126bbacc5bd0d8bda8e3f59534f3bf63d3dfbba0170e54fc8a9136626->enter($__internal_fc3e089126bbacc5bd0d8bda8e3f59534f3bf63d3dfbba0170e54fc8a9136626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fc3e089126bbacc5bd0d8bda8e3f59534f3bf63d3dfbba0170e54fc8a9136626->leave($__internal_fc3e089126bbacc5bd0d8bda8e3f59534f3bf63d3dfbba0170e54fc8a9136626_prof);

        
        $__internal_c4e141bb6744fe6f82042f0219a047a093309983fcfdeeb79f13f87a4772271a->leave($__internal_c4e141bb6744fe6f82042f0219a047a093309983fcfdeeb79f13f87a4772271a_prof);

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
