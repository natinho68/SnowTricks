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
        $__internal_dba1073e35f6c4814a7314fd9886dc46afcaa4544bae71872f6612143f380659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba1073e35f6c4814a7314fd9886dc46afcaa4544bae71872f6612143f380659->enter($__internal_dba1073e35f6c4814a7314fd9886dc46afcaa4544bae71872f6612143f380659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_5317a04a93c1196fe7a8955e9c3238b2b76bd8f88dbcc148b0b4ea9af9458e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5317a04a93c1196fe7a8955e9c3238b2b76bd8f88dbcc148b0b4ea9af9458e21->enter($__internal_5317a04a93c1196fe7a8955e9c3238b2b76bd8f88dbcc148b0b4ea9af9458e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dba1073e35f6c4814a7314fd9886dc46afcaa4544bae71872f6612143f380659->leave($__internal_dba1073e35f6c4814a7314fd9886dc46afcaa4544bae71872f6612143f380659_prof);

        
        $__internal_5317a04a93c1196fe7a8955e9c3238b2b76bd8f88dbcc148b0b4ea9af9458e21->leave($__internal_5317a04a93c1196fe7a8955e9c3238b2b76bd8f88dbcc148b0b4ea9af9458e21_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d94a49fe34320b4e0366569aef79ce7685b174958cfe02d6a9110408e5acbd07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94a49fe34320b4e0366569aef79ce7685b174958cfe02d6a9110408e5acbd07->enter($__internal_d94a49fe34320b4e0366569aef79ce7685b174958cfe02d6a9110408e5acbd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_91f5c6086433c126b765fd1f5c5c1cec0bc242d34d4bff0c4523aef20e93d665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f5c6086433c126b765fd1f5c5c1cec0bc242d34d4bff0c4523aef20e93d665->enter($__internal_91f5c6086433c126b765fd1f5c5c1cec0bc242d34d4bff0c4523aef20e93d665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_91f5c6086433c126b765fd1f5c5c1cec0bc242d34d4bff0c4523aef20e93d665->leave($__internal_91f5c6086433c126b765fd1f5c5c1cec0bc242d34d4bff0c4523aef20e93d665_prof);

        
        $__internal_d94a49fe34320b4e0366569aef79ce7685b174958cfe02d6a9110408e5acbd07->leave($__internal_d94a49fe34320b4e0366569aef79ce7685b174958cfe02d6a9110408e5acbd07_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7e36d88bbc2ad1a9d69eb47769fdb6b08b0339926970a46f417b42b21e584e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e36d88bbc2ad1a9d69eb47769fdb6b08b0339926970a46f417b42b21e584e1d->enter($__internal_7e36d88bbc2ad1a9d69eb47769fdb6b08b0339926970a46f417b42b21e584e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c5b023d0c0bdaee426f31c299f3e171d84e7fc51408155a7a1eb714750950910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b023d0c0bdaee426f31c299f3e171d84e7fc51408155a7a1eb714750950910->enter($__internal_c5b023d0c0bdaee426f31c299f3e171d84e7fc51408155a7a1eb714750950910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c5b023d0c0bdaee426f31c299f3e171d84e7fc51408155a7a1eb714750950910->leave($__internal_c5b023d0c0bdaee426f31c299f3e171d84e7fc51408155a7a1eb714750950910_prof);

        
        $__internal_7e36d88bbc2ad1a9d69eb47769fdb6b08b0339926970a46f417b42b21e584e1d->leave($__internal_7e36d88bbc2ad1a9d69eb47769fdb6b08b0339926970a46f417b42b21e584e1d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c88dc4d090812c1e4871f5f98b7751906e7b082f91e9f0f12591adc06bf8684b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88dc4d090812c1e4871f5f98b7751906e7b082f91e9f0f12591adc06bf8684b->enter($__internal_c88dc4d090812c1e4871f5f98b7751906e7b082f91e9f0f12591adc06bf8684b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c80a9fa035b6f96d8e6cf90d19efb85101ff92dd94c81c035c8193beadd387bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80a9fa035b6f96d8e6cf90d19efb85101ff92dd94c81c035c8193beadd387bc->enter($__internal_c80a9fa035b6f96d8e6cf90d19efb85101ff92dd94c81c035c8193beadd387bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c80a9fa035b6f96d8e6cf90d19efb85101ff92dd94c81c035c8193beadd387bc->leave($__internal_c80a9fa035b6f96d8e6cf90d19efb85101ff92dd94c81c035c8193beadd387bc_prof);

        
        $__internal_c88dc4d090812c1e4871f5f98b7751906e7b082f91e9f0f12591adc06bf8684b->leave($__internal_c88dc4d090812c1e4871f5f98b7751906e7b082f91e9f0f12591adc06bf8684b_prof);

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
