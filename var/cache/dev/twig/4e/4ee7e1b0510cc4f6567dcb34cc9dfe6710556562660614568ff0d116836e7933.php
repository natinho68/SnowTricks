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
        $__internal_feca5ac285255c0fe46b0967790885b46e787ef0091339a510b9fbf59ebdc30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feca5ac285255c0fe46b0967790885b46e787ef0091339a510b9fbf59ebdc30b->enter($__internal_feca5ac285255c0fe46b0967790885b46e787ef0091339a510b9fbf59ebdc30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_17fa12cf2a830f884789bcddee777c8794a087b9858bb03ce177aa1cdd3fd821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17fa12cf2a830f884789bcddee777c8794a087b9858bb03ce177aa1cdd3fd821->enter($__internal_17fa12cf2a830f884789bcddee777c8794a087b9858bb03ce177aa1cdd3fd821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_feca5ac285255c0fe46b0967790885b46e787ef0091339a510b9fbf59ebdc30b->leave($__internal_feca5ac285255c0fe46b0967790885b46e787ef0091339a510b9fbf59ebdc30b_prof);

        
        $__internal_17fa12cf2a830f884789bcddee777c8794a087b9858bb03ce177aa1cdd3fd821->leave($__internal_17fa12cf2a830f884789bcddee777c8794a087b9858bb03ce177aa1cdd3fd821_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_30a732cbecf4945bcb36c68cf59fd5cabb712d0e1ad47eb0ce1f2540877a00b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a732cbecf4945bcb36c68cf59fd5cabb712d0e1ad47eb0ce1f2540877a00b3->enter($__internal_30a732cbecf4945bcb36c68cf59fd5cabb712d0e1ad47eb0ce1f2540877a00b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3f86208a153dff79f7062ee50b20b8e18b98b2f8c57b0c9abba21829c20059c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f86208a153dff79f7062ee50b20b8e18b98b2f8c57b0c9abba21829c20059c6->enter($__internal_3f86208a153dff79f7062ee50b20b8e18b98b2f8c57b0c9abba21829c20059c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_3f86208a153dff79f7062ee50b20b8e18b98b2f8c57b0c9abba21829c20059c6->leave($__internal_3f86208a153dff79f7062ee50b20b8e18b98b2f8c57b0c9abba21829c20059c6_prof);

        
        $__internal_30a732cbecf4945bcb36c68cf59fd5cabb712d0e1ad47eb0ce1f2540877a00b3->leave($__internal_30a732cbecf4945bcb36c68cf59fd5cabb712d0e1ad47eb0ce1f2540877a00b3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_962c14408773a9be92f1a3d8f3b9919e51f525d5ea15939c2a172292518c994d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962c14408773a9be92f1a3d8f3b9919e51f525d5ea15939c2a172292518c994d->enter($__internal_962c14408773a9be92f1a3d8f3b9919e51f525d5ea15939c2a172292518c994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7460261c834563683d9a1fdb8f2c11831c5cb0958aea7d05c3021de040573933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7460261c834563683d9a1fdb8f2c11831c5cb0958aea7d05c3021de040573933->enter($__internal_7460261c834563683d9a1fdb8f2c11831c5cb0958aea7d05c3021de040573933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7460261c834563683d9a1fdb8f2c11831c5cb0958aea7d05c3021de040573933->leave($__internal_7460261c834563683d9a1fdb8f2c11831c5cb0958aea7d05c3021de040573933_prof);

        
        $__internal_962c14408773a9be92f1a3d8f3b9919e51f525d5ea15939c2a172292518c994d->leave($__internal_962c14408773a9be92f1a3d8f3b9919e51f525d5ea15939c2a172292518c994d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_615df27da536fdda07ee61ce21605af34562bf89821c900e2694b72b4dc26b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615df27da536fdda07ee61ce21605af34562bf89821c900e2694b72b4dc26b40->enter($__internal_615df27da536fdda07ee61ce21605af34562bf89821c900e2694b72b4dc26b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_99bdd92bcf83b872fca247550a9dd085b890a79e0fb1b73f8cbb26a4fea2aab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bdd92bcf83b872fca247550a9dd085b890a79e0fb1b73f8cbb26a4fea2aab6->enter($__internal_99bdd92bcf83b872fca247550a9dd085b890a79e0fb1b73f8cbb26a4fea2aab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_99bdd92bcf83b872fca247550a9dd085b890a79e0fb1b73f8cbb26a4fea2aab6->leave($__internal_99bdd92bcf83b872fca247550a9dd085b890a79e0fb1b73f8cbb26a4fea2aab6_prof);

        
        $__internal_615df27da536fdda07ee61ce21605af34562bf89821c900e2694b72b4dc26b40->leave($__internal_615df27da536fdda07ee61ce21605af34562bf89821c900e2694b72b4dc26b40_prof);

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
