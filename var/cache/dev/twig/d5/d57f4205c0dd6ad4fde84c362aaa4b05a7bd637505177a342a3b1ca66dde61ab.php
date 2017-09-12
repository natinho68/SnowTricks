<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3e6f5e750dbcc360b571427a623b93ca2a5f48b2ecbfc89d25c27ef43d770603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29cef907e83bff99355914f5c966cf16af8b43cd32d3c539804454efde2587a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29cef907e83bff99355914f5c966cf16af8b43cd32d3c539804454efde2587a9->enter($__internal_29cef907e83bff99355914f5c966cf16af8b43cd32d3c539804454efde2587a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_b116292dbc0a5ae2d3b39d9fc575203cb2fd7453aed8fdd63a025fbc0f097892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b116292dbc0a5ae2d3b39d9fc575203cb2fd7453aed8fdd63a025fbc0f097892->enter($__internal_b116292dbc0a5ae2d3b39d9fc575203cb2fd7453aed8fdd63a025fbc0f097892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29cef907e83bff99355914f5c966cf16af8b43cd32d3c539804454efde2587a9->leave($__internal_29cef907e83bff99355914f5c966cf16af8b43cd32d3c539804454efde2587a9_prof);

        
        $__internal_b116292dbc0a5ae2d3b39d9fc575203cb2fd7453aed8fdd63a025fbc0f097892->leave($__internal_b116292dbc0a5ae2d3b39d9fc575203cb2fd7453aed8fdd63a025fbc0f097892_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06e9a94140415f8c820c72dc30566475ffe62a6f40f4bd784bc0e52f2452fd58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e9a94140415f8c820c72dc30566475ffe62a6f40f4bd784bc0e52f2452fd58->enter($__internal_06e9a94140415f8c820c72dc30566475ffe62a6f40f4bd784bc0e52f2452fd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_203ff8634ddfdb10ad50ccab0596a8e7bc16012852ab5e59dc063b45452967cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203ff8634ddfdb10ad50ccab0596a8e7bc16012852ab5e59dc063b45452967cd->enter($__internal_203ff8634ddfdb10ad50ccab0596a8e7bc16012852ab5e59dc063b45452967cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_203ff8634ddfdb10ad50ccab0596a8e7bc16012852ab5e59dc063b45452967cd->leave($__internal_203ff8634ddfdb10ad50ccab0596a8e7bc16012852ab5e59dc063b45452967cd_prof);

        
        $__internal_06e9a94140415f8c820c72dc30566475ffe62a6f40f4bd784bc0e52f2452fd58->leave($__internal_06e9a94140415f8c820c72dc30566475ffe62a6f40f4bd784bc0e52f2452fd58_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
