<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9e0f41a45cb33dd4fadfb0adcc3070d66e6201b54a3829017196a88f1cad225f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0e0abb347732aa176ab0e85eb7b671242cc60c2a739704d89f1097597823fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e0abb347732aa176ab0e85eb7b671242cc60c2a739704d89f1097597823fdb->enter($__internal_c0e0abb347732aa176ab0e85eb7b671242cc60c2a739704d89f1097597823fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_a4abf9316bb94b7d4a4a830707c3c954b7fe3601e6a7a1c5c782e70d7c114bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4abf9316bb94b7d4a4a830707c3c954b7fe3601e6a7a1c5c782e70d7c114bbe->enter($__internal_a4abf9316bb94b7d4a4a830707c3c954b7fe3601e6a7a1c5c782e70d7c114bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c0e0abb347732aa176ab0e85eb7b671242cc60c2a739704d89f1097597823fdb->leave($__internal_c0e0abb347732aa176ab0e85eb7b671242cc60c2a739704d89f1097597823fdb_prof);

        
        $__internal_a4abf9316bb94b7d4a4a830707c3c954b7fe3601e6a7a1c5c782e70d7c114bbe->leave($__internal_a4abf9316bb94b7d4a4a830707c3c954b7fe3601e6a7a1c5c782e70d7c114bbe_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_35eeb1e2e8e0d6e211d9205cda0a326da37f4b55fe23be5e5c7f96161cc044ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35eeb1e2e8e0d6e211d9205cda0a326da37f4b55fe23be5e5c7f96161cc044ac->enter($__internal_35eeb1e2e8e0d6e211d9205cda0a326da37f4b55fe23be5e5c7f96161cc044ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0723ba066083a74143eb53bd23ed62e070108a9afb7183f0052f23ba0affc781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0723ba066083a74143eb53bd23ed62e070108a9afb7183f0052f23ba0affc781->enter($__internal_0723ba066083a74143eb53bd23ed62e070108a9afb7183f0052f23ba0affc781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0723ba066083a74143eb53bd23ed62e070108a9afb7183f0052f23ba0affc781->leave($__internal_0723ba066083a74143eb53bd23ed62e070108a9afb7183f0052f23ba0affc781_prof);

        
        $__internal_35eeb1e2e8e0d6e211d9205cda0a326da37f4b55fe23be5e5c7f96161cc044ac->leave($__internal_35eeb1e2e8e0d6e211d9205cda0a326da37f4b55fe23be5e5c7f96161cc044ac_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0bebba83c3fd8483dc4ed22f600b3cc6e8e5585dddcf60e60ce34710f60ea0ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bebba83c3fd8483dc4ed22f600b3cc6e8e5585dddcf60e60ce34710f60ea0ac->enter($__internal_0bebba83c3fd8483dc4ed22f600b3cc6e8e5585dddcf60e60ce34710f60ea0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_eeabafd1767e1cf11bd51a62aab9784d6b69041b10b671ad328a92946498e10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeabafd1767e1cf11bd51a62aab9784d6b69041b10b671ad328a92946498e10a->enter($__internal_eeabafd1767e1cf11bd51a62aab9784d6b69041b10b671ad328a92946498e10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eeabafd1767e1cf11bd51a62aab9784d6b69041b10b671ad328a92946498e10a->leave($__internal_eeabafd1767e1cf11bd51a62aab9784d6b69041b10b671ad328a92946498e10a_prof);

        
        $__internal_0bebba83c3fd8483dc4ed22f600b3cc6e8e5585dddcf60e60ce34710f60ea0ac->leave($__internal_0bebba83c3fd8483dc4ed22f600b3cc6e8e5585dddcf60e60ce34710f60ea0ac_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0c4bd07cdeb9f5c300c40271178b7e889eeaa521847dffdb0bd47b44cdf7b7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4bd07cdeb9f5c300c40271178b7e889eeaa521847dffdb0bd47b44cdf7b7e4->enter($__internal_0c4bd07cdeb9f5c300c40271178b7e889eeaa521847dffdb0bd47b44cdf7b7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_14691137e3794f697e8a70d410fa0e5723a186fbaae2b12fbab4013a90514c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14691137e3794f697e8a70d410fa0e5723a186fbaae2b12fbab4013a90514c31->enter($__internal_14691137e3794f697e8a70d410fa0e5723a186fbaae2b12fbab4013a90514c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_14691137e3794f697e8a70d410fa0e5723a186fbaae2b12fbab4013a90514c31->leave($__internal_14691137e3794f697e8a70d410fa0e5723a186fbaae2b12fbab4013a90514c31_prof);

        
        $__internal_0c4bd07cdeb9f5c300c40271178b7e889eeaa521847dffdb0bd47b44cdf7b7e4->leave($__internal_0c4bd07cdeb9f5c300c40271178b7e889eeaa521847dffdb0bd47b44cdf7b7e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
