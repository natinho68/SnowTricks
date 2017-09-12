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
        $__internal_eedf79d4c1f371921009c2ea4a5c59ba36ed69e7c128466b4f0da55decdba165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedf79d4c1f371921009c2ea4a5c59ba36ed69e7c128466b4f0da55decdba165->enter($__internal_eedf79d4c1f371921009c2ea4a5c59ba36ed69e7c128466b4f0da55decdba165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_3f08e39dd6039bdc8c8f2abfefb956af3e8499327c8baded62df29704d1f7386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f08e39dd6039bdc8c8f2abfefb956af3e8499327c8baded62df29704d1f7386->enter($__internal_3f08e39dd6039bdc8c8f2abfefb956af3e8499327c8baded62df29704d1f7386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_eedf79d4c1f371921009c2ea4a5c59ba36ed69e7c128466b4f0da55decdba165->leave($__internal_eedf79d4c1f371921009c2ea4a5c59ba36ed69e7c128466b4f0da55decdba165_prof);

        
        $__internal_3f08e39dd6039bdc8c8f2abfefb956af3e8499327c8baded62df29704d1f7386->leave($__internal_3f08e39dd6039bdc8c8f2abfefb956af3e8499327c8baded62df29704d1f7386_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0baffd23b977428531599efc3b642134d2e14c5bf2b1776c0587d690bacedfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0baffd23b977428531599efc3b642134d2e14c5bf2b1776c0587d690bacedfb5->enter($__internal_0baffd23b977428531599efc3b642134d2e14c5bf2b1776c0587d690bacedfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c024cf64405d4761a02b61a9c21e75c042d2fe97d3cea0757a4c4a5d7458b0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c024cf64405d4761a02b61a9c21e75c042d2fe97d3cea0757a4c4a5d7458b0cc->enter($__internal_c024cf64405d4761a02b61a9c21e75c042d2fe97d3cea0757a4c4a5d7458b0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c024cf64405d4761a02b61a9c21e75c042d2fe97d3cea0757a4c4a5d7458b0cc->leave($__internal_c024cf64405d4761a02b61a9c21e75c042d2fe97d3cea0757a4c4a5d7458b0cc_prof);

        
        $__internal_0baffd23b977428531599efc3b642134d2e14c5bf2b1776c0587d690bacedfb5->leave($__internal_0baffd23b977428531599efc3b642134d2e14c5bf2b1776c0587d690bacedfb5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_84ec5e2bfa55e1f45aa4079b5fb23545efcbb38d28d76499a3c30a553ef44832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ec5e2bfa55e1f45aa4079b5fb23545efcbb38d28d76499a3c30a553ef44832->enter($__internal_84ec5e2bfa55e1f45aa4079b5fb23545efcbb38d28d76499a3c30a553ef44832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6bbc0ca8184de0ca17b0b1330a61e106f7f5446fc7dc38e37f02c27836d90cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbc0ca8184de0ca17b0b1330a61e106f7f5446fc7dc38e37f02c27836d90cd9->enter($__internal_6bbc0ca8184de0ca17b0b1330a61e106f7f5446fc7dc38e37f02c27836d90cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6bbc0ca8184de0ca17b0b1330a61e106f7f5446fc7dc38e37f02c27836d90cd9->leave($__internal_6bbc0ca8184de0ca17b0b1330a61e106f7f5446fc7dc38e37f02c27836d90cd9_prof);

        
        $__internal_84ec5e2bfa55e1f45aa4079b5fb23545efcbb38d28d76499a3c30a553ef44832->leave($__internal_84ec5e2bfa55e1f45aa4079b5fb23545efcbb38d28d76499a3c30a553ef44832_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9b2e14a01d539b634064e505bf6e015c51337c541fc7c408b50d031511c01a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2e14a01d539b634064e505bf6e015c51337c541fc7c408b50d031511c01a63->enter($__internal_9b2e14a01d539b634064e505bf6e015c51337c541fc7c408b50d031511c01a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bb1bc8e6c177d7bc6c92ef96550dac786c6d52cf813d5b6156f8896149d5f145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1bc8e6c177d7bc6c92ef96550dac786c6d52cf813d5b6156f8896149d5f145->enter($__internal_bb1bc8e6c177d7bc6c92ef96550dac786c6d52cf813d5b6156f8896149d5f145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bb1bc8e6c177d7bc6c92ef96550dac786c6d52cf813d5b6156f8896149d5f145->leave($__internal_bb1bc8e6c177d7bc6c92ef96550dac786c6d52cf813d5b6156f8896149d5f145_prof);

        
        $__internal_9b2e14a01d539b634064e505bf6e015c51337c541fc7c408b50d031511c01a63->leave($__internal_9b2e14a01d539b634064e505bf6e015c51337c541fc7c408b50d031511c01a63_prof);

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
