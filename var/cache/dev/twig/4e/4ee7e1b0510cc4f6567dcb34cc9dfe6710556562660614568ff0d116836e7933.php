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
        $__internal_40aba88ec2f979cd9f417d629c8fe3d2f4c6ba924b9ff81b2241b247dbbbca04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40aba88ec2f979cd9f417d629c8fe3d2f4c6ba924b9ff81b2241b247dbbbca04->enter($__internal_40aba88ec2f979cd9f417d629c8fe3d2f4c6ba924b9ff81b2241b247dbbbca04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_ebec37df59403eea0619fcdc977b90f616c85b9aa0e3c9a3e3396758944e4b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebec37df59403eea0619fcdc977b90f616c85b9aa0e3c9a3e3396758944e4b0e->enter($__internal_ebec37df59403eea0619fcdc977b90f616c85b9aa0e3c9a3e3396758944e4b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_40aba88ec2f979cd9f417d629c8fe3d2f4c6ba924b9ff81b2241b247dbbbca04->leave($__internal_40aba88ec2f979cd9f417d629c8fe3d2f4c6ba924b9ff81b2241b247dbbbca04_prof);

        
        $__internal_ebec37df59403eea0619fcdc977b90f616c85b9aa0e3c9a3e3396758944e4b0e->leave($__internal_ebec37df59403eea0619fcdc977b90f616c85b9aa0e3c9a3e3396758944e4b0e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6de2cf0eccb063695396a231f33a66c7d789babfec3484721b014da261a47b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de2cf0eccb063695396a231f33a66c7d789babfec3484721b014da261a47b83->enter($__internal_6de2cf0eccb063695396a231f33a66c7d789babfec3484721b014da261a47b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5c2a94826711bfcc1cc0cfe71ec4327d8cf2e23e4473809544ab88a12e1d8cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2a94826711bfcc1cc0cfe71ec4327d8cf2e23e4473809544ab88a12e1d8cfc->enter($__internal_5c2a94826711bfcc1cc0cfe71ec4327d8cf2e23e4473809544ab88a12e1d8cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_5c2a94826711bfcc1cc0cfe71ec4327d8cf2e23e4473809544ab88a12e1d8cfc->leave($__internal_5c2a94826711bfcc1cc0cfe71ec4327d8cf2e23e4473809544ab88a12e1d8cfc_prof);

        
        $__internal_6de2cf0eccb063695396a231f33a66c7d789babfec3484721b014da261a47b83->leave($__internal_6de2cf0eccb063695396a231f33a66c7d789babfec3484721b014da261a47b83_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_47590cccbd9ae264ecaaf22487f97d3d2734e6e592d68274d901c4160508d818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47590cccbd9ae264ecaaf22487f97d3d2734e6e592d68274d901c4160508d818->enter($__internal_47590cccbd9ae264ecaaf22487f97d3d2734e6e592d68274d901c4160508d818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_08b6ab9893c445f52f18e2cf2978a6dd359f8be3b7072846f187eb38f6c35495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b6ab9893c445f52f18e2cf2978a6dd359f8be3b7072846f187eb38f6c35495->enter($__internal_08b6ab9893c445f52f18e2cf2978a6dd359f8be3b7072846f187eb38f6c35495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_08b6ab9893c445f52f18e2cf2978a6dd359f8be3b7072846f187eb38f6c35495->leave($__internal_08b6ab9893c445f52f18e2cf2978a6dd359f8be3b7072846f187eb38f6c35495_prof);

        
        $__internal_47590cccbd9ae264ecaaf22487f97d3d2734e6e592d68274d901c4160508d818->leave($__internal_47590cccbd9ae264ecaaf22487f97d3d2734e6e592d68274d901c4160508d818_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_adcc5d34c0f86dbd669b6c01ab320fe99fd6b35c41ce3cb84116a54bd41beebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adcc5d34c0f86dbd669b6c01ab320fe99fd6b35c41ce3cb84116a54bd41beebb->enter($__internal_adcc5d34c0f86dbd669b6c01ab320fe99fd6b35c41ce3cb84116a54bd41beebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ad274f45e5370548c8308ab694c9232d4bf8023a813bb1fdeb2a35226a353076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad274f45e5370548c8308ab694c9232d4bf8023a813bb1fdeb2a35226a353076->enter($__internal_ad274f45e5370548c8308ab694c9232d4bf8023a813bb1fdeb2a35226a353076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ad274f45e5370548c8308ab694c9232d4bf8023a813bb1fdeb2a35226a353076->leave($__internal_ad274f45e5370548c8308ab694c9232d4bf8023a813bb1fdeb2a35226a353076_prof);

        
        $__internal_adcc5d34c0f86dbd669b6c01ab320fe99fd6b35c41ce3cb84116a54bd41beebb->leave($__internal_adcc5d34c0f86dbd669b6c01ab320fe99fd6b35c41ce3cb84116a54bd41beebb_prof);

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
