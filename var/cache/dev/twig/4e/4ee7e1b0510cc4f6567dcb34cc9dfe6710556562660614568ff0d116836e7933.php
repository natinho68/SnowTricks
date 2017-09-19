<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_c885ebaea4afcd1b1cccbeadae710866f07f76bb81c60aeb95781441b5ee6791 extends Twig_Template
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
        $__internal_fec8232fb6831c7c9d58a40189e5d978f0ba07f9ddb1eb92b3abaf67967bf640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec8232fb6831c7c9d58a40189e5d978f0ba07f9ddb1eb92b3abaf67967bf640->enter($__internal_fec8232fb6831c7c9d58a40189e5d978f0ba07f9ddb1eb92b3abaf67967bf640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_5d71c8d43dbd451d9189f0a152f314eb9e95f41a14a1c208fe4054aa9517724c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d71c8d43dbd451d9189f0a152f314eb9e95f41a14a1c208fe4054aa9517724c->enter($__internal_5d71c8d43dbd451d9189f0a152f314eb9e95f41a14a1c208fe4054aa9517724c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fec8232fb6831c7c9d58a40189e5d978f0ba07f9ddb1eb92b3abaf67967bf640->leave($__internal_fec8232fb6831c7c9d58a40189e5d978f0ba07f9ddb1eb92b3abaf67967bf640_prof);

        
        $__internal_5d71c8d43dbd451d9189f0a152f314eb9e95f41a14a1c208fe4054aa9517724c->leave($__internal_5d71c8d43dbd451d9189f0a152f314eb9e95f41a14a1c208fe4054aa9517724c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_aabe0020ca27740c9766b11aaea5a82e1862519d69e87733a686ddeb825afa9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aabe0020ca27740c9766b11aaea5a82e1862519d69e87733a686ddeb825afa9c->enter($__internal_aabe0020ca27740c9766b11aaea5a82e1862519d69e87733a686ddeb825afa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d0afe7676272821dceb13f64b5e4aca2bc406d580d9859a6da06cca4f0afef59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0afe7676272821dceb13f64b5e4aca2bc406d580d9859a6da06cca4f0afef59->enter($__internal_d0afe7676272821dceb13f64b5e4aca2bc406d580d9859a6da06cca4f0afef59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d0afe7676272821dceb13f64b5e4aca2bc406d580d9859a6da06cca4f0afef59->leave($__internal_d0afe7676272821dceb13f64b5e4aca2bc406d580d9859a6da06cca4f0afef59_prof);

        
        $__internal_aabe0020ca27740c9766b11aaea5a82e1862519d69e87733a686ddeb825afa9c->leave($__internal_aabe0020ca27740c9766b11aaea5a82e1862519d69e87733a686ddeb825afa9c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_03c89af6d69be3a2c0c8a56f609870fcf88c9f29985e07e582ab2a7c386193d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c89af6d69be3a2c0c8a56f609870fcf88c9f29985e07e582ab2a7c386193d1->enter($__internal_03c89af6d69be3a2c0c8a56f609870fcf88c9f29985e07e582ab2a7c386193d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d66214196cdc42dd2e4a3d3da58f8460d443685187045956c0251f032ee7e7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66214196cdc42dd2e4a3d3da58f8460d443685187045956c0251f032ee7e7b6->enter($__internal_d66214196cdc42dd2e4a3d3da58f8460d443685187045956c0251f032ee7e7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d66214196cdc42dd2e4a3d3da58f8460d443685187045956c0251f032ee7e7b6->leave($__internal_d66214196cdc42dd2e4a3d3da58f8460d443685187045956c0251f032ee7e7b6_prof);

        
        $__internal_03c89af6d69be3a2c0c8a56f609870fcf88c9f29985e07e582ab2a7c386193d1->leave($__internal_03c89af6d69be3a2c0c8a56f609870fcf88c9f29985e07e582ab2a7c386193d1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5f62a23c949ddd5fd7f60d0ce8d9ea599222c51a558a031898654d8b650f6d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f62a23c949ddd5fd7f60d0ce8d9ea599222c51a558a031898654d8b650f6d0c->enter($__internal_5f62a23c949ddd5fd7f60d0ce8d9ea599222c51a558a031898654d8b650f6d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_53dc1a7058386de0c9369849ea08e4d7fc161c6db74014ff1040dfd189b70e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53dc1a7058386de0c9369849ea08e4d7fc161c6db74014ff1040dfd189b70e31->enter($__internal_53dc1a7058386de0c9369849ea08e4d7fc161c6db74014ff1040dfd189b70e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_53dc1a7058386de0c9369849ea08e4d7fc161c6db74014ff1040dfd189b70e31->leave($__internal_53dc1a7058386de0c9369849ea08e4d7fc161c6db74014ff1040dfd189b70e31_prof);

        
        $__internal_5f62a23c949ddd5fd7f60d0ce8d9ea599222c51a558a031898654d8b650f6d0c->leave($__internal_5f62a23c949ddd5fd7f60d0ce8d9ea599222c51a558a031898654d8b650f6d0c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
