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
        $__internal_1ea3d5a5faa267c7eab112ff259b7064a0db1804feb07ad00a8b028aabc68445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea3d5a5faa267c7eab112ff259b7064a0db1804feb07ad00a8b028aabc68445->enter($__internal_1ea3d5a5faa267c7eab112ff259b7064a0db1804feb07ad00a8b028aabc68445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_4d974a10c75797ed6f884f17f0fe5cc8c2efc1cff402a636f29e82b537823d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d974a10c75797ed6f884f17f0fe5cc8c2efc1cff402a636f29e82b537823d1a->enter($__internal_4d974a10c75797ed6f884f17f0fe5cc8c2efc1cff402a636f29e82b537823d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1ea3d5a5faa267c7eab112ff259b7064a0db1804feb07ad00a8b028aabc68445->leave($__internal_1ea3d5a5faa267c7eab112ff259b7064a0db1804feb07ad00a8b028aabc68445_prof);

        
        $__internal_4d974a10c75797ed6f884f17f0fe5cc8c2efc1cff402a636f29e82b537823d1a->leave($__internal_4d974a10c75797ed6f884f17f0fe5cc8c2efc1cff402a636f29e82b537823d1a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bd7d534d41c294561d0d0ea053975621202f1d0d18ef3f4cd2bda944dc051e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7d534d41c294561d0d0ea053975621202f1d0d18ef3f4cd2bda944dc051e4c->enter($__internal_bd7d534d41c294561d0d0ea053975621202f1d0d18ef3f4cd2bda944dc051e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_cb4826e45befa649669d59d5da885f4b1a025a9019def3e4a61510d88e8fbc51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4826e45befa649669d59d5da885f4b1a025a9019def3e4a61510d88e8fbc51->enter($__internal_cb4826e45befa649669d59d5da885f4b1a025a9019def3e4a61510d88e8fbc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_cb4826e45befa649669d59d5da885f4b1a025a9019def3e4a61510d88e8fbc51->leave($__internal_cb4826e45befa649669d59d5da885f4b1a025a9019def3e4a61510d88e8fbc51_prof);

        
        $__internal_bd7d534d41c294561d0d0ea053975621202f1d0d18ef3f4cd2bda944dc051e4c->leave($__internal_bd7d534d41c294561d0d0ea053975621202f1d0d18ef3f4cd2bda944dc051e4c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cf85c9e94d4cd97e7db83498678b56216a347dd7413983fe6470d2f01e279d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf85c9e94d4cd97e7db83498678b56216a347dd7413983fe6470d2f01e279d02->enter($__internal_cf85c9e94d4cd97e7db83498678b56216a347dd7413983fe6470d2f01e279d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d6cfb2877dc166757b17f58dc2dc4ed08bf54e03db16fe0f6a8641ae30a395d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cfb2877dc166757b17f58dc2dc4ed08bf54e03db16fe0f6a8641ae30a395d1->enter($__internal_d6cfb2877dc166757b17f58dc2dc4ed08bf54e03db16fe0f6a8641ae30a395d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d6cfb2877dc166757b17f58dc2dc4ed08bf54e03db16fe0f6a8641ae30a395d1->leave($__internal_d6cfb2877dc166757b17f58dc2dc4ed08bf54e03db16fe0f6a8641ae30a395d1_prof);

        
        $__internal_cf85c9e94d4cd97e7db83498678b56216a347dd7413983fe6470d2f01e279d02->leave($__internal_cf85c9e94d4cd97e7db83498678b56216a347dd7413983fe6470d2f01e279d02_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a5f04ab22c5e78b047ecbeffbb2ee75ab75843f4a22eaf2af3fd0a2979cc06ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f04ab22c5e78b047ecbeffbb2ee75ab75843f4a22eaf2af3fd0a2979cc06ec->enter($__internal_a5f04ab22c5e78b047ecbeffbb2ee75ab75843f4a22eaf2af3fd0a2979cc06ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2bbc4f86f4c043400220e96f4cb6570848b6a822101620a54f5623f692678471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbc4f86f4c043400220e96f4cb6570848b6a822101620a54f5623f692678471->enter($__internal_2bbc4f86f4c043400220e96f4cb6570848b6a822101620a54f5623f692678471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2bbc4f86f4c043400220e96f4cb6570848b6a822101620a54f5623f692678471->leave($__internal_2bbc4f86f4c043400220e96f4cb6570848b6a822101620a54f5623f692678471_prof);

        
        $__internal_a5f04ab22c5e78b047ecbeffbb2ee75ab75843f4a22eaf2af3fd0a2979cc06ec->leave($__internal_a5f04ab22c5e78b047ecbeffbb2ee75ab75843f4a22eaf2af3fd0a2979cc06ec_prof);

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
