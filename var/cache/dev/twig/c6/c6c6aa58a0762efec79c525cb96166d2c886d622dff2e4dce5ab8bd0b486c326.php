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
        $__internal_e2a45b763d9b4babf6a12ec97a23b4e1f6ae04f277ce86e2bf7b951bae6b0a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a45b763d9b4babf6a12ec97a23b4e1f6ae04f277ce86e2bf7b951bae6b0a62->enter($__internal_e2a45b763d9b4babf6a12ec97a23b4e1f6ae04f277ce86e2bf7b951bae6b0a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_897134986882fbb6d20e4c31b2b5a5d76a6c7cb914ddfa641af7ce36a5bc1692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897134986882fbb6d20e4c31b2b5a5d76a6c7cb914ddfa641af7ce36a5bc1692->enter($__internal_897134986882fbb6d20e4c31b2b5a5d76a6c7cb914ddfa641af7ce36a5bc1692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e2a45b763d9b4babf6a12ec97a23b4e1f6ae04f277ce86e2bf7b951bae6b0a62->leave($__internal_e2a45b763d9b4babf6a12ec97a23b4e1f6ae04f277ce86e2bf7b951bae6b0a62_prof);

        
        $__internal_897134986882fbb6d20e4c31b2b5a5d76a6c7cb914ddfa641af7ce36a5bc1692->leave($__internal_897134986882fbb6d20e4c31b2b5a5d76a6c7cb914ddfa641af7ce36a5bc1692_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_14f3d6f3fec5fba44050f847881c06fb77c8331074b92ea581c7c90a6e45823d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f3d6f3fec5fba44050f847881c06fb77c8331074b92ea581c7c90a6e45823d->enter($__internal_14f3d6f3fec5fba44050f847881c06fb77c8331074b92ea581c7c90a6e45823d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d251a4e182fa88fa84b8fccd5c06e6e4687eef9108facf203ec34a053a98c8cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d251a4e182fa88fa84b8fccd5c06e6e4687eef9108facf203ec34a053a98c8cc->enter($__internal_d251a4e182fa88fa84b8fccd5c06e6e4687eef9108facf203ec34a053a98c8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d251a4e182fa88fa84b8fccd5c06e6e4687eef9108facf203ec34a053a98c8cc->leave($__internal_d251a4e182fa88fa84b8fccd5c06e6e4687eef9108facf203ec34a053a98c8cc_prof);

        
        $__internal_14f3d6f3fec5fba44050f847881c06fb77c8331074b92ea581c7c90a6e45823d->leave($__internal_14f3d6f3fec5fba44050f847881c06fb77c8331074b92ea581c7c90a6e45823d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b0aace840e1a8620f275754568545aa6c1572b9d4d1e4b5be546aa1a7275ddc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0aace840e1a8620f275754568545aa6c1572b9d4d1e4b5be546aa1a7275ddc2->enter($__internal_b0aace840e1a8620f275754568545aa6c1572b9d4d1e4b5be546aa1a7275ddc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_09a279c8b3c5b96790d7327dda80c66dbc7fc6a6375440c0f015d3670364ef1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a279c8b3c5b96790d7327dda80c66dbc7fc6a6375440c0f015d3670364ef1f->enter($__internal_09a279c8b3c5b96790d7327dda80c66dbc7fc6a6375440c0f015d3670364ef1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_09a279c8b3c5b96790d7327dda80c66dbc7fc6a6375440c0f015d3670364ef1f->leave($__internal_09a279c8b3c5b96790d7327dda80c66dbc7fc6a6375440c0f015d3670364ef1f_prof);

        
        $__internal_b0aace840e1a8620f275754568545aa6c1572b9d4d1e4b5be546aa1a7275ddc2->leave($__internal_b0aace840e1a8620f275754568545aa6c1572b9d4d1e4b5be546aa1a7275ddc2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_35cc0466ed88355f463d2c56c8bd4ac0f13107e989aa9a04311bfc9341147d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cc0466ed88355f463d2c56c8bd4ac0f13107e989aa9a04311bfc9341147d65->enter($__internal_35cc0466ed88355f463d2c56c8bd4ac0f13107e989aa9a04311bfc9341147d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_df3da9170dfc6c6240aa0f1058d47cde4733ab8a2d35f28b84c03608177a5f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3da9170dfc6c6240aa0f1058d47cde4733ab8a2d35f28b84c03608177a5f82->enter($__internal_df3da9170dfc6c6240aa0f1058d47cde4733ab8a2d35f28b84c03608177a5f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_df3da9170dfc6c6240aa0f1058d47cde4733ab8a2d35f28b84c03608177a5f82->leave($__internal_df3da9170dfc6c6240aa0f1058d47cde4733ab8a2d35f28b84c03608177a5f82_prof);

        
        $__internal_35cc0466ed88355f463d2c56c8bd4ac0f13107e989aa9a04311bfc9341147d65->leave($__internal_35cc0466ed88355f463d2c56c8bd4ac0f13107e989aa9a04311bfc9341147d65_prof);

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
