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
        $__internal_4e20f34c4490a5ea6f8c5a2c29a403be03d745efba71e44b6ad272dad267f23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e20f34c4490a5ea6f8c5a2c29a403be03d745efba71e44b6ad272dad267f23e->enter($__internal_4e20f34c4490a5ea6f8c5a2c29a403be03d745efba71e44b6ad272dad267f23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_194edd0d57b77c958296c5f57bb0dbe3445f15e96f54285507efdf516012afd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194edd0d57b77c958296c5f57bb0dbe3445f15e96f54285507efdf516012afd3->enter($__internal_194edd0d57b77c958296c5f57bb0dbe3445f15e96f54285507efdf516012afd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4e20f34c4490a5ea6f8c5a2c29a403be03d745efba71e44b6ad272dad267f23e->leave($__internal_4e20f34c4490a5ea6f8c5a2c29a403be03d745efba71e44b6ad272dad267f23e_prof);

        
        $__internal_194edd0d57b77c958296c5f57bb0dbe3445f15e96f54285507efdf516012afd3->leave($__internal_194edd0d57b77c958296c5f57bb0dbe3445f15e96f54285507efdf516012afd3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cd1f5e64ec46465d540f85a2aaf15470b93620cfad8492f8c225b2d851d0e6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1f5e64ec46465d540f85a2aaf15470b93620cfad8492f8c225b2d851d0e6f4->enter($__internal_cd1f5e64ec46465d540f85a2aaf15470b93620cfad8492f8c225b2d851d0e6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5a77479545f7017dca68d830a92cd0ef2e947feeded249259ccdb61416b8f897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a77479545f7017dca68d830a92cd0ef2e947feeded249259ccdb61416b8f897->enter($__internal_5a77479545f7017dca68d830a92cd0ef2e947feeded249259ccdb61416b8f897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_5a77479545f7017dca68d830a92cd0ef2e947feeded249259ccdb61416b8f897->leave($__internal_5a77479545f7017dca68d830a92cd0ef2e947feeded249259ccdb61416b8f897_prof);

        
        $__internal_cd1f5e64ec46465d540f85a2aaf15470b93620cfad8492f8c225b2d851d0e6f4->leave($__internal_cd1f5e64ec46465d540f85a2aaf15470b93620cfad8492f8c225b2d851d0e6f4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_69aee903fe19715d57205ef1adf21c2b8114620762479fe0b70d67afc8ad6d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69aee903fe19715d57205ef1adf21c2b8114620762479fe0b70d67afc8ad6d01->enter($__internal_69aee903fe19715d57205ef1adf21c2b8114620762479fe0b70d67afc8ad6d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7ec0e1278a9a097113d009f6b93da0fdcfa8bbe8ab278850548558144afdbfb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec0e1278a9a097113d009f6b93da0fdcfa8bbe8ab278850548558144afdbfb1->enter($__internal_7ec0e1278a9a097113d009f6b93da0fdcfa8bbe8ab278850548558144afdbfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7ec0e1278a9a097113d009f6b93da0fdcfa8bbe8ab278850548558144afdbfb1->leave($__internal_7ec0e1278a9a097113d009f6b93da0fdcfa8bbe8ab278850548558144afdbfb1_prof);

        
        $__internal_69aee903fe19715d57205ef1adf21c2b8114620762479fe0b70d67afc8ad6d01->leave($__internal_69aee903fe19715d57205ef1adf21c2b8114620762479fe0b70d67afc8ad6d01_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_73a53be65c4e3932a7b0ddfe0487e4bc371b963d5454345dbb5d9d3b19d0d05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a53be65c4e3932a7b0ddfe0487e4bc371b963d5454345dbb5d9d3b19d0d05c->enter($__internal_73a53be65c4e3932a7b0ddfe0487e4bc371b963d5454345dbb5d9d3b19d0d05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5ea96b10c498cc2c10f323b4f43a2baef616afecc5fec1a6f836d053ec490110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea96b10c498cc2c10f323b4f43a2baef616afecc5fec1a6f836d053ec490110->enter($__internal_5ea96b10c498cc2c10f323b4f43a2baef616afecc5fec1a6f836d053ec490110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5ea96b10c498cc2c10f323b4f43a2baef616afecc5fec1a6f836d053ec490110->leave($__internal_5ea96b10c498cc2c10f323b4f43a2baef616afecc5fec1a6f836d053ec490110_prof);

        
        $__internal_73a53be65c4e3932a7b0ddfe0487e4bc371b963d5454345dbb5d9d3b19d0d05c->leave($__internal_73a53be65c4e3932a7b0ddfe0487e4bc371b963d5454345dbb5d9d3b19d0d05c_prof);

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
