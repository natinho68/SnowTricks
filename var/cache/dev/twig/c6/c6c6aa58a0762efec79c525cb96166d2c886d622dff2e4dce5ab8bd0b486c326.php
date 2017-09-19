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
        $__internal_b7ab8fb947745d1212653920fbe771985089872321e855d988cd418d394d51e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ab8fb947745d1212653920fbe771985089872321e855d988cd418d394d51e8->enter($__internal_b7ab8fb947745d1212653920fbe771985089872321e855d988cd418d394d51e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_cbbce898a84c78687593cbdc8b20eaa58fd8924d7460b88991e1c2f3b1493099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbce898a84c78687593cbdc8b20eaa58fd8924d7460b88991e1c2f3b1493099->enter($__internal_cbbce898a84c78687593cbdc8b20eaa58fd8924d7460b88991e1c2f3b1493099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b7ab8fb947745d1212653920fbe771985089872321e855d988cd418d394d51e8->leave($__internal_b7ab8fb947745d1212653920fbe771985089872321e855d988cd418d394d51e8_prof);

        
        $__internal_cbbce898a84c78687593cbdc8b20eaa58fd8924d7460b88991e1c2f3b1493099->leave($__internal_cbbce898a84c78687593cbdc8b20eaa58fd8924d7460b88991e1c2f3b1493099_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b4997fae6b3787a1f3e641afa60e98b6294586b6a2a25041ee01e34cb17862a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4997fae6b3787a1f3e641afa60e98b6294586b6a2a25041ee01e34cb17862a3->enter($__internal_b4997fae6b3787a1f3e641afa60e98b6294586b6a2a25041ee01e34cb17862a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9727ba8877d4291118d68eec99a1751e37e20f33f6c39588d7971181038f4fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9727ba8877d4291118d68eec99a1751e37e20f33f6c39588d7971181038f4fc6->enter($__internal_9727ba8877d4291118d68eec99a1751e37e20f33f6c39588d7971181038f4fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9727ba8877d4291118d68eec99a1751e37e20f33f6c39588d7971181038f4fc6->leave($__internal_9727ba8877d4291118d68eec99a1751e37e20f33f6c39588d7971181038f4fc6_prof);

        
        $__internal_b4997fae6b3787a1f3e641afa60e98b6294586b6a2a25041ee01e34cb17862a3->leave($__internal_b4997fae6b3787a1f3e641afa60e98b6294586b6a2a25041ee01e34cb17862a3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a27502b0756722e34bd188f0cd20b2fa5d3320f3ee109362f3026cb2cc66c96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27502b0756722e34bd188f0cd20b2fa5d3320f3ee109362f3026cb2cc66c96c->enter($__internal_a27502b0756722e34bd188f0cd20b2fa5d3320f3ee109362f3026cb2cc66c96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1c314f17b9fc62a37bea626895c74ec89412e5feec39a4af06f79951b3afc5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c314f17b9fc62a37bea626895c74ec89412e5feec39a4af06f79951b3afc5c7->enter($__internal_1c314f17b9fc62a37bea626895c74ec89412e5feec39a4af06f79951b3afc5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1c314f17b9fc62a37bea626895c74ec89412e5feec39a4af06f79951b3afc5c7->leave($__internal_1c314f17b9fc62a37bea626895c74ec89412e5feec39a4af06f79951b3afc5c7_prof);

        
        $__internal_a27502b0756722e34bd188f0cd20b2fa5d3320f3ee109362f3026cb2cc66c96c->leave($__internal_a27502b0756722e34bd188f0cd20b2fa5d3320f3ee109362f3026cb2cc66c96c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0e806df5c9c70023030e16e93d32226a604015dcebdfa2935cf35d9364de6f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e806df5c9c70023030e16e93d32226a604015dcebdfa2935cf35d9364de6f23->enter($__internal_0e806df5c9c70023030e16e93d32226a604015dcebdfa2935cf35d9364de6f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_750721d45d9d408e9ea1172d21bad9b43c531800f373fe8f7888fdc6b36f7bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750721d45d9d408e9ea1172d21bad9b43c531800f373fe8f7888fdc6b36f7bcd->enter($__internal_750721d45d9d408e9ea1172d21bad9b43c531800f373fe8f7888fdc6b36f7bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_750721d45d9d408e9ea1172d21bad9b43c531800f373fe8f7888fdc6b36f7bcd->leave($__internal_750721d45d9d408e9ea1172d21bad9b43c531800f373fe8f7888fdc6b36f7bcd_prof);

        
        $__internal_0e806df5c9c70023030e16e93d32226a604015dcebdfa2935cf35d9364de6f23->leave($__internal_0e806df5c9c70023030e16e93d32226a604015dcebdfa2935cf35d9364de6f23_prof);

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
