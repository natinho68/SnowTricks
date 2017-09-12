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
        $__internal_9f945ace3babbf21f12bc4f2ad918e498f4c9df4b100751af32f97c68f046710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f945ace3babbf21f12bc4f2ad918e498f4c9df4b100751af32f97c68f046710->enter($__internal_9f945ace3babbf21f12bc4f2ad918e498f4c9df4b100751af32f97c68f046710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_fc289de3af35a314237a2f85c2a862c4f9eaaffaed47d6e882f2e9e4ddddb693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc289de3af35a314237a2f85c2a862c4f9eaaffaed47d6e882f2e9e4ddddb693->enter($__internal_fc289de3af35a314237a2f85c2a862c4f9eaaffaed47d6e882f2e9e4ddddb693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9f945ace3babbf21f12bc4f2ad918e498f4c9df4b100751af32f97c68f046710->leave($__internal_9f945ace3babbf21f12bc4f2ad918e498f4c9df4b100751af32f97c68f046710_prof);

        
        $__internal_fc289de3af35a314237a2f85c2a862c4f9eaaffaed47d6e882f2e9e4ddddb693->leave($__internal_fc289de3af35a314237a2f85c2a862c4f9eaaffaed47d6e882f2e9e4ddddb693_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_754bed0da8cdc5b21ce593196b6da37472af21b3cc4171bce7b6416f94c7aadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754bed0da8cdc5b21ce593196b6da37472af21b3cc4171bce7b6416f94c7aadb->enter($__internal_754bed0da8cdc5b21ce593196b6da37472af21b3cc4171bce7b6416f94c7aadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1568bce5a2baae733b13a287606c24e53557aff3019070544c1684920f9ea50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1568bce5a2baae733b13a287606c24e53557aff3019070544c1684920f9ea50f->enter($__internal_1568bce5a2baae733b13a287606c24e53557aff3019070544c1684920f9ea50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_1568bce5a2baae733b13a287606c24e53557aff3019070544c1684920f9ea50f->leave($__internal_1568bce5a2baae733b13a287606c24e53557aff3019070544c1684920f9ea50f_prof);

        
        $__internal_754bed0da8cdc5b21ce593196b6da37472af21b3cc4171bce7b6416f94c7aadb->leave($__internal_754bed0da8cdc5b21ce593196b6da37472af21b3cc4171bce7b6416f94c7aadb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_aa7b113daafd8d8a1d6505b5589ff6148e5b7afb94e4989e9d975964caf1b01a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7b113daafd8d8a1d6505b5589ff6148e5b7afb94e4989e9d975964caf1b01a->enter($__internal_aa7b113daafd8d8a1d6505b5589ff6148e5b7afb94e4989e9d975964caf1b01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_cec79f8cdcb8f0e69d9088c5e30a5b51f66477e8d2d969f87984793df6f9b38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec79f8cdcb8f0e69d9088c5e30a5b51f66477e8d2d969f87984793df6f9b38f->enter($__internal_cec79f8cdcb8f0e69d9088c5e30a5b51f66477e8d2d969f87984793df6f9b38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cec79f8cdcb8f0e69d9088c5e30a5b51f66477e8d2d969f87984793df6f9b38f->leave($__internal_cec79f8cdcb8f0e69d9088c5e30a5b51f66477e8d2d969f87984793df6f9b38f_prof);

        
        $__internal_aa7b113daafd8d8a1d6505b5589ff6148e5b7afb94e4989e9d975964caf1b01a->leave($__internal_aa7b113daafd8d8a1d6505b5589ff6148e5b7afb94e4989e9d975964caf1b01a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1a0df7ade56ef4e8b0e545f73dc953f9a0dee0fa40b62670e88b88217ea726af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0df7ade56ef4e8b0e545f73dc953f9a0dee0fa40b62670e88b88217ea726af->enter($__internal_1a0df7ade56ef4e8b0e545f73dc953f9a0dee0fa40b62670e88b88217ea726af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ad1f45d27ce79c264bf05e42c98633d4c1d4dad9da236dfd88b7c7d47137a65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1f45d27ce79c264bf05e42c98633d4c1d4dad9da236dfd88b7c7d47137a65b->enter($__internal_ad1f45d27ce79c264bf05e42c98633d4c1d4dad9da236dfd88b7c7d47137a65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ad1f45d27ce79c264bf05e42c98633d4c1d4dad9da236dfd88b7c7d47137a65b->leave($__internal_ad1f45d27ce79c264bf05e42c98633d4c1d4dad9da236dfd88b7c7d47137a65b_prof);

        
        $__internal_1a0df7ade56ef4e8b0e545f73dc953f9a0dee0fa40b62670e88b88217ea726af->leave($__internal_1a0df7ade56ef4e8b0e545f73dc953f9a0dee0fa40b62670e88b88217ea726af_prof);

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
