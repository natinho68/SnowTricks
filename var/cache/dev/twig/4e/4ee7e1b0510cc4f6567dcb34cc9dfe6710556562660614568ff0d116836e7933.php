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
        $__internal_94f4f82c2304a8c1a961a33596ff43e86ed762ff485e82b3f4f2aae3f8fab3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f4f82c2304a8c1a961a33596ff43e86ed762ff485e82b3f4f2aae3f8fab3b1->enter($__internal_94f4f82c2304a8c1a961a33596ff43e86ed762ff485e82b3f4f2aae3f8fab3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_3bc214f370bee121967feefec5818b6113661810d8e654d7e9daf03c10677042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc214f370bee121967feefec5818b6113661810d8e654d7e9daf03c10677042->enter($__internal_3bc214f370bee121967feefec5818b6113661810d8e654d7e9daf03c10677042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_94f4f82c2304a8c1a961a33596ff43e86ed762ff485e82b3f4f2aae3f8fab3b1->leave($__internal_94f4f82c2304a8c1a961a33596ff43e86ed762ff485e82b3f4f2aae3f8fab3b1_prof);

        
        $__internal_3bc214f370bee121967feefec5818b6113661810d8e654d7e9daf03c10677042->leave($__internal_3bc214f370bee121967feefec5818b6113661810d8e654d7e9daf03c10677042_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_30430dbfd46f06dced977c42e79798edd7bda9759dc1e1a0b5959d1091c4adc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30430dbfd46f06dced977c42e79798edd7bda9759dc1e1a0b5959d1091c4adc4->enter($__internal_30430dbfd46f06dced977c42e79798edd7bda9759dc1e1a0b5959d1091c4adc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c9fe3d2708e74ba871b9e7c301e5ebfed36236bed779197c08af6b2a25daf678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fe3d2708e74ba871b9e7c301e5ebfed36236bed779197c08af6b2a25daf678->enter($__internal_c9fe3d2708e74ba871b9e7c301e5ebfed36236bed779197c08af6b2a25daf678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c9fe3d2708e74ba871b9e7c301e5ebfed36236bed779197c08af6b2a25daf678->leave($__internal_c9fe3d2708e74ba871b9e7c301e5ebfed36236bed779197c08af6b2a25daf678_prof);

        
        $__internal_30430dbfd46f06dced977c42e79798edd7bda9759dc1e1a0b5959d1091c4adc4->leave($__internal_30430dbfd46f06dced977c42e79798edd7bda9759dc1e1a0b5959d1091c4adc4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_08638f20a4c313ed73d9c385ca6354d9677954a5f898704f04bd3cc4fd70cdea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08638f20a4c313ed73d9c385ca6354d9677954a5f898704f04bd3cc4fd70cdea->enter($__internal_08638f20a4c313ed73d9c385ca6354d9677954a5f898704f04bd3cc4fd70cdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2904702c86166560ae06a3488eceb54bfed8fa3eddad849ea04fdb9167f4da7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2904702c86166560ae06a3488eceb54bfed8fa3eddad849ea04fdb9167f4da7f->enter($__internal_2904702c86166560ae06a3488eceb54bfed8fa3eddad849ea04fdb9167f4da7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2904702c86166560ae06a3488eceb54bfed8fa3eddad849ea04fdb9167f4da7f->leave($__internal_2904702c86166560ae06a3488eceb54bfed8fa3eddad849ea04fdb9167f4da7f_prof);

        
        $__internal_08638f20a4c313ed73d9c385ca6354d9677954a5f898704f04bd3cc4fd70cdea->leave($__internal_08638f20a4c313ed73d9c385ca6354d9677954a5f898704f04bd3cc4fd70cdea_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6ae72b2a333bbbaa8976f605353ea3e67ad32df7274901fe3a60dcc9dc327b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae72b2a333bbbaa8976f605353ea3e67ad32df7274901fe3a60dcc9dc327b91->enter($__internal_6ae72b2a333bbbaa8976f605353ea3e67ad32df7274901fe3a60dcc9dc327b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_1818d3647f3b633bd0935c943127ba2f34f2755f5b3f1d4301598823da83ca50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1818d3647f3b633bd0935c943127ba2f34f2755f5b3f1d4301598823da83ca50->enter($__internal_1818d3647f3b633bd0935c943127ba2f34f2755f5b3f1d4301598823da83ca50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1818d3647f3b633bd0935c943127ba2f34f2755f5b3f1d4301598823da83ca50->leave($__internal_1818d3647f3b633bd0935c943127ba2f34f2755f5b3f1d4301598823da83ca50_prof);

        
        $__internal_6ae72b2a333bbbaa8976f605353ea3e67ad32df7274901fe3a60dcc9dc327b91->leave($__internal_6ae72b2a333bbbaa8976f605353ea3e67ad32df7274901fe3a60dcc9dc327b91_prof);

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
