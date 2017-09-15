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
        $__internal_bb3f0e9469f7b99c8423f7c4ef4917a414be2c54a8d262daecdeaacf03741f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3f0e9469f7b99c8423f7c4ef4917a414be2c54a8d262daecdeaacf03741f21->enter($__internal_bb3f0e9469f7b99c8423f7c4ef4917a414be2c54a8d262daecdeaacf03741f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_6ac7e0e975cf94d44cbf7d32c30e22a7873cabe2266e462c6f94ea100ffb340e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac7e0e975cf94d44cbf7d32c30e22a7873cabe2266e462c6f94ea100ffb340e->enter($__internal_6ac7e0e975cf94d44cbf7d32c30e22a7873cabe2266e462c6f94ea100ffb340e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bb3f0e9469f7b99c8423f7c4ef4917a414be2c54a8d262daecdeaacf03741f21->leave($__internal_bb3f0e9469f7b99c8423f7c4ef4917a414be2c54a8d262daecdeaacf03741f21_prof);

        
        $__internal_6ac7e0e975cf94d44cbf7d32c30e22a7873cabe2266e462c6f94ea100ffb340e->leave($__internal_6ac7e0e975cf94d44cbf7d32c30e22a7873cabe2266e462c6f94ea100ffb340e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1a1ef66cc24b61126b872c60576beda642ff780dca15f93e3a34937ef854148a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1ef66cc24b61126b872c60576beda642ff780dca15f93e3a34937ef854148a->enter($__internal_1a1ef66cc24b61126b872c60576beda642ff780dca15f93e3a34937ef854148a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2d43f1ea4ec69bf17c4db70892c0bc6529cb9a40bca3c49df7f36a5120254173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d43f1ea4ec69bf17c4db70892c0bc6529cb9a40bca3c49df7f36a5120254173->enter($__internal_2d43f1ea4ec69bf17c4db70892c0bc6529cb9a40bca3c49df7f36a5120254173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_2d43f1ea4ec69bf17c4db70892c0bc6529cb9a40bca3c49df7f36a5120254173->leave($__internal_2d43f1ea4ec69bf17c4db70892c0bc6529cb9a40bca3c49df7f36a5120254173_prof);

        
        $__internal_1a1ef66cc24b61126b872c60576beda642ff780dca15f93e3a34937ef854148a->leave($__internal_1a1ef66cc24b61126b872c60576beda642ff780dca15f93e3a34937ef854148a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ede09cb1662391e6e3f6f9d323412c29cd34d9e99bf5b6631bb03f1cb7144fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede09cb1662391e6e3f6f9d323412c29cd34d9e99bf5b6631bb03f1cb7144fa2->enter($__internal_ede09cb1662391e6e3f6f9d323412c29cd34d9e99bf5b6631bb03f1cb7144fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_388c2329eb2e686ff5ad8e717bc7cacb31e177c78407e5d3c55ce43773f46735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388c2329eb2e686ff5ad8e717bc7cacb31e177c78407e5d3c55ce43773f46735->enter($__internal_388c2329eb2e686ff5ad8e717bc7cacb31e177c78407e5d3c55ce43773f46735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_388c2329eb2e686ff5ad8e717bc7cacb31e177c78407e5d3c55ce43773f46735->leave($__internal_388c2329eb2e686ff5ad8e717bc7cacb31e177c78407e5d3c55ce43773f46735_prof);

        
        $__internal_ede09cb1662391e6e3f6f9d323412c29cd34d9e99bf5b6631bb03f1cb7144fa2->leave($__internal_ede09cb1662391e6e3f6f9d323412c29cd34d9e99bf5b6631bb03f1cb7144fa2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3d23604af3c114012d94bdddb84bcbdeb41319b022948ded277f55b984423441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d23604af3c114012d94bdddb84bcbdeb41319b022948ded277f55b984423441->enter($__internal_3d23604af3c114012d94bdddb84bcbdeb41319b022948ded277f55b984423441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4858a9fc5bd81809988228ed54aa0540b5abf315c4a1d9be8d45ba64ad3f97f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4858a9fc5bd81809988228ed54aa0540b5abf315c4a1d9be8d45ba64ad3f97f9->enter($__internal_4858a9fc5bd81809988228ed54aa0540b5abf315c4a1d9be8d45ba64ad3f97f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4858a9fc5bd81809988228ed54aa0540b5abf315c4a1d9be8d45ba64ad3f97f9->leave($__internal_4858a9fc5bd81809988228ed54aa0540b5abf315c4a1d9be8d45ba64ad3f97f9_prof);

        
        $__internal_3d23604af3c114012d94bdddb84bcbdeb41319b022948ded277f55b984423441->leave($__internal_3d23604af3c114012d94bdddb84bcbdeb41319b022948ded277f55b984423441_prof);

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
