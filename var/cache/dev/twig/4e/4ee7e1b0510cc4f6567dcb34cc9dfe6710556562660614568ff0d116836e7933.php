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
        $__internal_0094edfd99aa74da602f442f88105f3c789df7a850f8a247799b0dacfe842254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0094edfd99aa74da602f442f88105f3c789df7a850f8a247799b0dacfe842254->enter($__internal_0094edfd99aa74da602f442f88105f3c789df7a850f8a247799b0dacfe842254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_deca3eb3ed49b72a3c665b4ad452b1f47278944c29a26f97ed44c261e718dca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deca3eb3ed49b72a3c665b4ad452b1f47278944c29a26f97ed44c261e718dca9->enter($__internal_deca3eb3ed49b72a3c665b4ad452b1f47278944c29a26f97ed44c261e718dca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0094edfd99aa74da602f442f88105f3c789df7a850f8a247799b0dacfe842254->leave($__internal_0094edfd99aa74da602f442f88105f3c789df7a850f8a247799b0dacfe842254_prof);

        
        $__internal_deca3eb3ed49b72a3c665b4ad452b1f47278944c29a26f97ed44c261e718dca9->leave($__internal_deca3eb3ed49b72a3c665b4ad452b1f47278944c29a26f97ed44c261e718dca9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4fb16776d693ed807919fbfc6e7510b8a4f0fd5c37381df1fec2c6c0d96cb392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb16776d693ed807919fbfc6e7510b8a4f0fd5c37381df1fec2c6c0d96cb392->enter($__internal_4fb16776d693ed807919fbfc6e7510b8a4f0fd5c37381df1fec2c6c0d96cb392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b165f9ac849023f09eebf2c306cee5e19c0ef1c7e42db9d4f2c102dbba0f6f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b165f9ac849023f09eebf2c306cee5e19c0ef1c7e42db9d4f2c102dbba0f6f24->enter($__internal_b165f9ac849023f09eebf2c306cee5e19c0ef1c7e42db9d4f2c102dbba0f6f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b165f9ac849023f09eebf2c306cee5e19c0ef1c7e42db9d4f2c102dbba0f6f24->leave($__internal_b165f9ac849023f09eebf2c306cee5e19c0ef1c7e42db9d4f2c102dbba0f6f24_prof);

        
        $__internal_4fb16776d693ed807919fbfc6e7510b8a4f0fd5c37381df1fec2c6c0d96cb392->leave($__internal_4fb16776d693ed807919fbfc6e7510b8a4f0fd5c37381df1fec2c6c0d96cb392_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b71a0af319e4c526bd3be05d608e5d426921160c699efa4e0776c5d532ff23fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71a0af319e4c526bd3be05d608e5d426921160c699efa4e0776c5d532ff23fd->enter($__internal_b71a0af319e4c526bd3be05d608e5d426921160c699efa4e0776c5d532ff23fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4a0aae604a9d5fcc1b2546ce6d780a0b646590a2e40d4390db52114b4133cd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0aae604a9d5fcc1b2546ce6d780a0b646590a2e40d4390db52114b4133cd68->enter($__internal_4a0aae604a9d5fcc1b2546ce6d780a0b646590a2e40d4390db52114b4133cd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4a0aae604a9d5fcc1b2546ce6d780a0b646590a2e40d4390db52114b4133cd68->leave($__internal_4a0aae604a9d5fcc1b2546ce6d780a0b646590a2e40d4390db52114b4133cd68_prof);

        
        $__internal_b71a0af319e4c526bd3be05d608e5d426921160c699efa4e0776c5d532ff23fd->leave($__internal_b71a0af319e4c526bd3be05d608e5d426921160c699efa4e0776c5d532ff23fd_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bd36d816777ca7a0c1a0fe977e23ab4be17169851a2a214b2781e518dca4a6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd36d816777ca7a0c1a0fe977e23ab4be17169851a2a214b2781e518dca4a6f8->enter($__internal_bd36d816777ca7a0c1a0fe977e23ab4be17169851a2a214b2781e518dca4a6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_690a6f2b7db2fea4e0e7048e022ed1c763cdaf8868c2091c0da915ad438ad81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690a6f2b7db2fea4e0e7048e022ed1c763cdaf8868c2091c0da915ad438ad81d->enter($__internal_690a6f2b7db2fea4e0e7048e022ed1c763cdaf8868c2091c0da915ad438ad81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_690a6f2b7db2fea4e0e7048e022ed1c763cdaf8868c2091c0da915ad438ad81d->leave($__internal_690a6f2b7db2fea4e0e7048e022ed1c763cdaf8868c2091c0da915ad438ad81d_prof);

        
        $__internal_bd36d816777ca7a0c1a0fe977e23ab4be17169851a2a214b2781e518dca4a6f8->leave($__internal_bd36d816777ca7a0c1a0fe977e23ab4be17169851a2a214b2781e518dca4a6f8_prof);

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
