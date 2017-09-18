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
        $__internal_8e0ce0c514644ed4d4165a75441af16f95b4fcfbb38327505a1d8ca3818edac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0ce0c514644ed4d4165a75441af16f95b4fcfbb38327505a1d8ca3818edac9->enter($__internal_8e0ce0c514644ed4d4165a75441af16f95b4fcfbb38327505a1d8ca3818edac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_9f4b26d95cd11dcf2fb76fd4dceb3f4c0291b724d17a251c8c4a50446795a9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4b26d95cd11dcf2fb76fd4dceb3f4c0291b724d17a251c8c4a50446795a9ac->enter($__internal_9f4b26d95cd11dcf2fb76fd4dceb3f4c0291b724d17a251c8c4a50446795a9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8e0ce0c514644ed4d4165a75441af16f95b4fcfbb38327505a1d8ca3818edac9->leave($__internal_8e0ce0c514644ed4d4165a75441af16f95b4fcfbb38327505a1d8ca3818edac9_prof);

        
        $__internal_9f4b26d95cd11dcf2fb76fd4dceb3f4c0291b724d17a251c8c4a50446795a9ac->leave($__internal_9f4b26d95cd11dcf2fb76fd4dceb3f4c0291b724d17a251c8c4a50446795a9ac_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fcabe8bf97a29445269dc6e0acef50b0f58dfa794372d012d7cfc5ba6e5e2828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcabe8bf97a29445269dc6e0acef50b0f58dfa794372d012d7cfc5ba6e5e2828->enter($__internal_fcabe8bf97a29445269dc6e0acef50b0f58dfa794372d012d7cfc5ba6e5e2828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ff3ee10289d37f57e36bc503d63ffdde89df9bc2e7aa04a3f78e7dba552f9053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3ee10289d37f57e36bc503d63ffdde89df9bc2e7aa04a3f78e7dba552f9053->enter($__internal_ff3ee10289d37f57e36bc503d63ffdde89df9bc2e7aa04a3f78e7dba552f9053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ff3ee10289d37f57e36bc503d63ffdde89df9bc2e7aa04a3f78e7dba552f9053->leave($__internal_ff3ee10289d37f57e36bc503d63ffdde89df9bc2e7aa04a3f78e7dba552f9053_prof);

        
        $__internal_fcabe8bf97a29445269dc6e0acef50b0f58dfa794372d012d7cfc5ba6e5e2828->leave($__internal_fcabe8bf97a29445269dc6e0acef50b0f58dfa794372d012d7cfc5ba6e5e2828_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c23abdc7d0cfa0026619f5d3582116d1d569754078dac0f3b6d430df40eb926d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23abdc7d0cfa0026619f5d3582116d1d569754078dac0f3b6d430df40eb926d->enter($__internal_c23abdc7d0cfa0026619f5d3582116d1d569754078dac0f3b6d430df40eb926d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_112b8fbe3d66bfc3a763c4717e55d140267cadfb65da0bb0d997dfe258e89e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112b8fbe3d66bfc3a763c4717e55d140267cadfb65da0bb0d997dfe258e89e3b->enter($__internal_112b8fbe3d66bfc3a763c4717e55d140267cadfb65da0bb0d997dfe258e89e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_112b8fbe3d66bfc3a763c4717e55d140267cadfb65da0bb0d997dfe258e89e3b->leave($__internal_112b8fbe3d66bfc3a763c4717e55d140267cadfb65da0bb0d997dfe258e89e3b_prof);

        
        $__internal_c23abdc7d0cfa0026619f5d3582116d1d569754078dac0f3b6d430df40eb926d->leave($__internal_c23abdc7d0cfa0026619f5d3582116d1d569754078dac0f3b6d430df40eb926d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2f8ac34fc2ee66a0427e83457c001d0fed9ce080e9f9b99d127bf9ce7d1034aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8ac34fc2ee66a0427e83457c001d0fed9ce080e9f9b99d127bf9ce7d1034aa->enter($__internal_2f8ac34fc2ee66a0427e83457c001d0fed9ce080e9f9b99d127bf9ce7d1034aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8b7d9bc8ba77f08061c3b4f18c3fafb9941bb32929f0fe2255d3e34c62880518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7d9bc8ba77f08061c3b4f18c3fafb9941bb32929f0fe2255d3e34c62880518->enter($__internal_8b7d9bc8ba77f08061c3b4f18c3fafb9941bb32929f0fe2255d3e34c62880518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8b7d9bc8ba77f08061c3b4f18c3fafb9941bb32929f0fe2255d3e34c62880518->leave($__internal_8b7d9bc8ba77f08061c3b4f18c3fafb9941bb32929f0fe2255d3e34c62880518_prof);

        
        $__internal_2f8ac34fc2ee66a0427e83457c001d0fed9ce080e9f9b99d127bf9ce7d1034aa->leave($__internal_2f8ac34fc2ee66a0427e83457c001d0fed9ce080e9f9b99d127bf9ce7d1034aa_prof);

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
