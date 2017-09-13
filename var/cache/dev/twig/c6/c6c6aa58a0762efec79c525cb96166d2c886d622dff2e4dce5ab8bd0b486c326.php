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
        $__internal_3a1ba258ce500e82374cbd4ee6931e66e5a555f7dbf645face248ae8ecdb65de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1ba258ce500e82374cbd4ee6931e66e5a555f7dbf645face248ae8ecdb65de->enter($__internal_3a1ba258ce500e82374cbd4ee6931e66e5a555f7dbf645face248ae8ecdb65de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_6ec41022907183e31fac1ac8060bfd7c8ddcd182ea3e72a6a82041ad30634a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec41022907183e31fac1ac8060bfd7c8ddcd182ea3e72a6a82041ad30634a6e->enter($__internal_6ec41022907183e31fac1ac8060bfd7c8ddcd182ea3e72a6a82041ad30634a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3a1ba258ce500e82374cbd4ee6931e66e5a555f7dbf645face248ae8ecdb65de->leave($__internal_3a1ba258ce500e82374cbd4ee6931e66e5a555f7dbf645face248ae8ecdb65de_prof);

        
        $__internal_6ec41022907183e31fac1ac8060bfd7c8ddcd182ea3e72a6a82041ad30634a6e->leave($__internal_6ec41022907183e31fac1ac8060bfd7c8ddcd182ea3e72a6a82041ad30634a6e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c164b74c927a93e44ef90690f013074010be14cde6376b7d9a1fb5d94bbe9c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c164b74c927a93e44ef90690f013074010be14cde6376b7d9a1fb5d94bbe9c3b->enter($__internal_c164b74c927a93e44ef90690f013074010be14cde6376b7d9a1fb5d94bbe9c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_04a7efab38a0728017d27ea902933f6752b4c625232b03762105731b96db6465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a7efab38a0728017d27ea902933f6752b4c625232b03762105731b96db6465->enter($__internal_04a7efab38a0728017d27ea902933f6752b4c625232b03762105731b96db6465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_04a7efab38a0728017d27ea902933f6752b4c625232b03762105731b96db6465->leave($__internal_04a7efab38a0728017d27ea902933f6752b4c625232b03762105731b96db6465_prof);

        
        $__internal_c164b74c927a93e44ef90690f013074010be14cde6376b7d9a1fb5d94bbe9c3b->leave($__internal_c164b74c927a93e44ef90690f013074010be14cde6376b7d9a1fb5d94bbe9c3b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_de0ab0b053811805591dfba420cb141ee69dec394f95b71163943932c590f04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0ab0b053811805591dfba420cb141ee69dec394f95b71163943932c590f04b->enter($__internal_de0ab0b053811805591dfba420cb141ee69dec394f95b71163943932c590f04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_cd8c702b059ecd0af1bf24fe241a1f4f52e4f6bb76f6282bace118b272b79704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8c702b059ecd0af1bf24fe241a1f4f52e4f6bb76f6282bace118b272b79704->enter($__internal_cd8c702b059ecd0af1bf24fe241a1f4f52e4f6bb76f6282bace118b272b79704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cd8c702b059ecd0af1bf24fe241a1f4f52e4f6bb76f6282bace118b272b79704->leave($__internal_cd8c702b059ecd0af1bf24fe241a1f4f52e4f6bb76f6282bace118b272b79704_prof);

        
        $__internal_de0ab0b053811805591dfba420cb141ee69dec394f95b71163943932c590f04b->leave($__internal_de0ab0b053811805591dfba420cb141ee69dec394f95b71163943932c590f04b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ddfd71551a3c8bd676254423c3b691f49eda62d3859bff3d9fb6a6ae9ff7ae1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfd71551a3c8bd676254423c3b691f49eda62d3859bff3d9fb6a6ae9ff7ae1a->enter($__internal_ddfd71551a3c8bd676254423c3b691f49eda62d3859bff3d9fb6a6ae9ff7ae1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_007661fae476676f776368b50f8eb0c7549d5a1c689c44a3d02896d2ad1ed968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007661fae476676f776368b50f8eb0c7549d5a1c689c44a3d02896d2ad1ed968->enter($__internal_007661fae476676f776368b50f8eb0c7549d5a1c689c44a3d02896d2ad1ed968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_007661fae476676f776368b50f8eb0c7549d5a1c689c44a3d02896d2ad1ed968->leave($__internal_007661fae476676f776368b50f8eb0c7549d5a1c689c44a3d02896d2ad1ed968_prof);

        
        $__internal_ddfd71551a3c8bd676254423c3b691f49eda62d3859bff3d9fb6a6ae9ff7ae1a->leave($__internal_ddfd71551a3c8bd676254423c3b691f49eda62d3859bff3d9fb6a6ae9ff7ae1a_prof);

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
