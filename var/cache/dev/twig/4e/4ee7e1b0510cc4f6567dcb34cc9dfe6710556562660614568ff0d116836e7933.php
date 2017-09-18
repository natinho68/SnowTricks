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
        $__internal_1793cb9d1cb5835f1e44197159d1da5f04b506d946b73e4734edd7708a07c263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1793cb9d1cb5835f1e44197159d1da5f04b506d946b73e4734edd7708a07c263->enter($__internal_1793cb9d1cb5835f1e44197159d1da5f04b506d946b73e4734edd7708a07c263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_55cd4b9abad3446569c5dac1ec25da9131f5c66f79bf9f77f465af271c428e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cd4b9abad3446569c5dac1ec25da9131f5c66f79bf9f77f465af271c428e75->enter($__internal_55cd4b9abad3446569c5dac1ec25da9131f5c66f79bf9f77f465af271c428e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1793cb9d1cb5835f1e44197159d1da5f04b506d946b73e4734edd7708a07c263->leave($__internal_1793cb9d1cb5835f1e44197159d1da5f04b506d946b73e4734edd7708a07c263_prof);

        
        $__internal_55cd4b9abad3446569c5dac1ec25da9131f5c66f79bf9f77f465af271c428e75->leave($__internal_55cd4b9abad3446569c5dac1ec25da9131f5c66f79bf9f77f465af271c428e75_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9aa8579022235dd87934a3a9a8e924c9d058e836406466550d26adbee3eea2b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa8579022235dd87934a3a9a8e924c9d058e836406466550d26adbee3eea2b1->enter($__internal_9aa8579022235dd87934a3a9a8e924c9d058e836406466550d26adbee3eea2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_764e3addfb5a441622f30da6e5a7e50c63a8f4076c3e27c48694551ababfeb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764e3addfb5a441622f30da6e5a7e50c63a8f4076c3e27c48694551ababfeb0e->enter($__internal_764e3addfb5a441622f30da6e5a7e50c63a8f4076c3e27c48694551ababfeb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_764e3addfb5a441622f30da6e5a7e50c63a8f4076c3e27c48694551ababfeb0e->leave($__internal_764e3addfb5a441622f30da6e5a7e50c63a8f4076c3e27c48694551ababfeb0e_prof);

        
        $__internal_9aa8579022235dd87934a3a9a8e924c9d058e836406466550d26adbee3eea2b1->leave($__internal_9aa8579022235dd87934a3a9a8e924c9d058e836406466550d26adbee3eea2b1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_19612b391828e201907074e5c81be1f9176859639948b5b78ebc4db96ca9c8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19612b391828e201907074e5c81be1f9176859639948b5b78ebc4db96ca9c8b5->enter($__internal_19612b391828e201907074e5c81be1f9176859639948b5b78ebc4db96ca9c8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_59cb93266912c0cdf7fcf2dca13d6b387f8b08ec4a42e1fa31ea4f041529a9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cb93266912c0cdf7fcf2dca13d6b387f8b08ec4a42e1fa31ea4f041529a9fe->enter($__internal_59cb93266912c0cdf7fcf2dca13d6b387f8b08ec4a42e1fa31ea4f041529a9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_59cb93266912c0cdf7fcf2dca13d6b387f8b08ec4a42e1fa31ea4f041529a9fe->leave($__internal_59cb93266912c0cdf7fcf2dca13d6b387f8b08ec4a42e1fa31ea4f041529a9fe_prof);

        
        $__internal_19612b391828e201907074e5c81be1f9176859639948b5b78ebc4db96ca9c8b5->leave($__internal_19612b391828e201907074e5c81be1f9176859639948b5b78ebc4db96ca9c8b5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8eb460aa4b7cfe544b7b8dac85cfe02ad3db8940a6c431d57f1c7ce017ab3689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb460aa4b7cfe544b7b8dac85cfe02ad3db8940a6c431d57f1c7ce017ab3689->enter($__internal_8eb460aa4b7cfe544b7b8dac85cfe02ad3db8940a6c431d57f1c7ce017ab3689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e349933b6794b7e703ae98dd13fd7629e4fb47ff6d9d335ad024917db0041dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e349933b6794b7e703ae98dd13fd7629e4fb47ff6d9d335ad024917db0041dc2->enter($__internal_e349933b6794b7e703ae98dd13fd7629e4fb47ff6d9d335ad024917db0041dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e349933b6794b7e703ae98dd13fd7629e4fb47ff6d9d335ad024917db0041dc2->leave($__internal_e349933b6794b7e703ae98dd13fd7629e4fb47ff6d9d335ad024917db0041dc2_prof);

        
        $__internal_8eb460aa4b7cfe544b7b8dac85cfe02ad3db8940a6c431d57f1c7ce017ab3689->leave($__internal_8eb460aa4b7cfe544b7b8dac85cfe02ad3db8940a6c431d57f1c7ce017ab3689_prof);

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
