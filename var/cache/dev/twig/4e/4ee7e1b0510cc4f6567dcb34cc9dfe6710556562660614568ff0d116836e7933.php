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
        $__internal_fdfc28f28c9c3b4b5cf487f31f8aa3aa69b6f1bce0035b91f4216f8a00592b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdfc28f28c9c3b4b5cf487f31f8aa3aa69b6f1bce0035b91f4216f8a00592b86->enter($__internal_fdfc28f28c9c3b4b5cf487f31f8aa3aa69b6f1bce0035b91f4216f8a00592b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c21df70141ee1149c0fd36d2526ca556d79be64312de39e7077329420311315d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21df70141ee1149c0fd36d2526ca556d79be64312de39e7077329420311315d->enter($__internal_c21df70141ee1149c0fd36d2526ca556d79be64312de39e7077329420311315d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fdfc28f28c9c3b4b5cf487f31f8aa3aa69b6f1bce0035b91f4216f8a00592b86->leave($__internal_fdfc28f28c9c3b4b5cf487f31f8aa3aa69b6f1bce0035b91f4216f8a00592b86_prof);

        
        $__internal_c21df70141ee1149c0fd36d2526ca556d79be64312de39e7077329420311315d->leave($__internal_c21df70141ee1149c0fd36d2526ca556d79be64312de39e7077329420311315d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_646aa74c786ceae91179474c83d5609733e829b8486b25ba23c496e0e39089ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646aa74c786ceae91179474c83d5609733e829b8486b25ba23c496e0e39089ac->enter($__internal_646aa74c786ceae91179474c83d5609733e829b8486b25ba23c496e0e39089ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2c9add0f890153a428fff8af9360d539424218bf21c668e6890070b61fb96c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9add0f890153a428fff8af9360d539424218bf21c668e6890070b61fb96c90->enter($__internal_2c9add0f890153a428fff8af9360d539424218bf21c668e6890070b61fb96c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_2c9add0f890153a428fff8af9360d539424218bf21c668e6890070b61fb96c90->leave($__internal_2c9add0f890153a428fff8af9360d539424218bf21c668e6890070b61fb96c90_prof);

        
        $__internal_646aa74c786ceae91179474c83d5609733e829b8486b25ba23c496e0e39089ac->leave($__internal_646aa74c786ceae91179474c83d5609733e829b8486b25ba23c496e0e39089ac_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_addc391292b3101d523f8697c92b19db9a6b11864b50bf114fcd558afd766845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addc391292b3101d523f8697c92b19db9a6b11864b50bf114fcd558afd766845->enter($__internal_addc391292b3101d523f8697c92b19db9a6b11864b50bf114fcd558afd766845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_22568f218cebb727de3f5bb2c0ca493543e22e08774578a801cadb50514962ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22568f218cebb727de3f5bb2c0ca493543e22e08774578a801cadb50514962ce->enter($__internal_22568f218cebb727de3f5bb2c0ca493543e22e08774578a801cadb50514962ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_22568f218cebb727de3f5bb2c0ca493543e22e08774578a801cadb50514962ce->leave($__internal_22568f218cebb727de3f5bb2c0ca493543e22e08774578a801cadb50514962ce_prof);

        
        $__internal_addc391292b3101d523f8697c92b19db9a6b11864b50bf114fcd558afd766845->leave($__internal_addc391292b3101d523f8697c92b19db9a6b11864b50bf114fcd558afd766845_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bd2fbbd37b75d9991b717f1655dfa8088504424f2e577e75bbca669724789908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2fbbd37b75d9991b717f1655dfa8088504424f2e577e75bbca669724789908->enter($__internal_bd2fbbd37b75d9991b717f1655dfa8088504424f2e577e75bbca669724789908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_17a5bc708b0ed16577e4fee8161051776941ef07ad693f01ee229a4dc4030023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a5bc708b0ed16577e4fee8161051776941ef07ad693f01ee229a4dc4030023->enter($__internal_17a5bc708b0ed16577e4fee8161051776941ef07ad693f01ee229a4dc4030023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_17a5bc708b0ed16577e4fee8161051776941ef07ad693f01ee229a4dc4030023->leave($__internal_17a5bc708b0ed16577e4fee8161051776941ef07ad693f01ee229a4dc4030023_prof);

        
        $__internal_bd2fbbd37b75d9991b717f1655dfa8088504424f2e577e75bbca669724789908->leave($__internal_bd2fbbd37b75d9991b717f1655dfa8088504424f2e577e75bbca669724789908_prof);

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
