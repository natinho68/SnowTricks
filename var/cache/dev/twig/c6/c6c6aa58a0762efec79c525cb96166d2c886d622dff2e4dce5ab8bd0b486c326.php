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
        $__internal_6b962c1721d2816d51ec0c5f905f58acf83281cef15ce4762439510498620917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b962c1721d2816d51ec0c5f905f58acf83281cef15ce4762439510498620917->enter($__internal_6b962c1721d2816d51ec0c5f905f58acf83281cef15ce4762439510498620917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_0b7dd75eb065d989501fa2dd458309dad6b54b823f7a2cb42178174f58442b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7dd75eb065d989501fa2dd458309dad6b54b823f7a2cb42178174f58442b50->enter($__internal_0b7dd75eb065d989501fa2dd458309dad6b54b823f7a2cb42178174f58442b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6b962c1721d2816d51ec0c5f905f58acf83281cef15ce4762439510498620917->leave($__internal_6b962c1721d2816d51ec0c5f905f58acf83281cef15ce4762439510498620917_prof);

        
        $__internal_0b7dd75eb065d989501fa2dd458309dad6b54b823f7a2cb42178174f58442b50->leave($__internal_0b7dd75eb065d989501fa2dd458309dad6b54b823f7a2cb42178174f58442b50_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e6e9386edf4e553a68ed4aa7b3fbc780a793da58127935dcee9eedc91afbe22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e9386edf4e553a68ed4aa7b3fbc780a793da58127935dcee9eedc91afbe22f->enter($__internal_e6e9386edf4e553a68ed4aa7b3fbc780a793da58127935dcee9eedc91afbe22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4e1ed748e9461cf78ae3a7faa84783f6a3465a1b8ded239d74652756444ae5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1ed748e9461cf78ae3a7faa84783f6a3465a1b8ded239d74652756444ae5cd->enter($__internal_4e1ed748e9461cf78ae3a7faa84783f6a3465a1b8ded239d74652756444ae5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4e1ed748e9461cf78ae3a7faa84783f6a3465a1b8ded239d74652756444ae5cd->leave($__internal_4e1ed748e9461cf78ae3a7faa84783f6a3465a1b8ded239d74652756444ae5cd_prof);

        
        $__internal_e6e9386edf4e553a68ed4aa7b3fbc780a793da58127935dcee9eedc91afbe22f->leave($__internal_e6e9386edf4e553a68ed4aa7b3fbc780a793da58127935dcee9eedc91afbe22f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_13b842ae428cb77fff19473da22d5122f32f548de71eb8db60d0ab3fb8fcb74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b842ae428cb77fff19473da22d5122f32f548de71eb8db60d0ab3fb8fcb74f->enter($__internal_13b842ae428cb77fff19473da22d5122f32f548de71eb8db60d0ab3fb8fcb74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2cfd0fdffa158f0729dbfad0a6f344026912b7fe3f47cd1955984aced20d0fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfd0fdffa158f0729dbfad0a6f344026912b7fe3f47cd1955984aced20d0fc6->enter($__internal_2cfd0fdffa158f0729dbfad0a6f344026912b7fe3f47cd1955984aced20d0fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2cfd0fdffa158f0729dbfad0a6f344026912b7fe3f47cd1955984aced20d0fc6->leave($__internal_2cfd0fdffa158f0729dbfad0a6f344026912b7fe3f47cd1955984aced20d0fc6_prof);

        
        $__internal_13b842ae428cb77fff19473da22d5122f32f548de71eb8db60d0ab3fb8fcb74f->leave($__internal_13b842ae428cb77fff19473da22d5122f32f548de71eb8db60d0ab3fb8fcb74f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_53027ca92ebc7c433ea31e6591ceecafe41f6c024862aa007bb729f099964794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53027ca92ebc7c433ea31e6591ceecafe41f6c024862aa007bb729f099964794->enter($__internal_53027ca92ebc7c433ea31e6591ceecafe41f6c024862aa007bb729f099964794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d220c9eda7097ff2b3074dac508b69bad932e2b21ab71b3a94acdce02fe4eec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d220c9eda7097ff2b3074dac508b69bad932e2b21ab71b3a94acdce02fe4eec1->enter($__internal_d220c9eda7097ff2b3074dac508b69bad932e2b21ab71b3a94acdce02fe4eec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d220c9eda7097ff2b3074dac508b69bad932e2b21ab71b3a94acdce02fe4eec1->leave($__internal_d220c9eda7097ff2b3074dac508b69bad932e2b21ab71b3a94acdce02fe4eec1_prof);

        
        $__internal_53027ca92ebc7c433ea31e6591ceecafe41f6c024862aa007bb729f099964794->leave($__internal_53027ca92ebc7c433ea31e6591ceecafe41f6c024862aa007bb729f099964794_prof);

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
