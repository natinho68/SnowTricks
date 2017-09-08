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
        $__internal_d13c85f691c55c3108e0137e2008b0a630cc65a9fdca1eb366b7b85dec0ca0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13c85f691c55c3108e0137e2008b0a630cc65a9fdca1eb366b7b85dec0ca0e5->enter($__internal_d13c85f691c55c3108e0137e2008b0a630cc65a9fdca1eb366b7b85dec0ca0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_8b8279000879309d6c5e978a3e8f973493f026548c469b31b6034b72d189544c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8279000879309d6c5e978a3e8f973493f026548c469b31b6034b72d189544c->enter($__internal_8b8279000879309d6c5e978a3e8f973493f026548c469b31b6034b72d189544c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d13c85f691c55c3108e0137e2008b0a630cc65a9fdca1eb366b7b85dec0ca0e5->leave($__internal_d13c85f691c55c3108e0137e2008b0a630cc65a9fdca1eb366b7b85dec0ca0e5_prof);

        
        $__internal_8b8279000879309d6c5e978a3e8f973493f026548c469b31b6034b72d189544c->leave($__internal_8b8279000879309d6c5e978a3e8f973493f026548c469b31b6034b72d189544c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_95c0860bd7af5f2aac038c49c7bdc347c09402ae4ac72b70fa6780a2e6c3ec2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c0860bd7af5f2aac038c49c7bdc347c09402ae4ac72b70fa6780a2e6c3ec2e->enter($__internal_95c0860bd7af5f2aac038c49c7bdc347c09402ae4ac72b70fa6780a2e6c3ec2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f5d9b677b4dd690a0f99bdf251b0236a393a6cead8bb6f12dbac856d86cdb33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d9b677b4dd690a0f99bdf251b0236a393a6cead8bb6f12dbac856d86cdb33e->enter($__internal_f5d9b677b4dd690a0f99bdf251b0236a393a6cead8bb6f12dbac856d86cdb33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_f5d9b677b4dd690a0f99bdf251b0236a393a6cead8bb6f12dbac856d86cdb33e->leave($__internal_f5d9b677b4dd690a0f99bdf251b0236a393a6cead8bb6f12dbac856d86cdb33e_prof);

        
        $__internal_95c0860bd7af5f2aac038c49c7bdc347c09402ae4ac72b70fa6780a2e6c3ec2e->leave($__internal_95c0860bd7af5f2aac038c49c7bdc347c09402ae4ac72b70fa6780a2e6c3ec2e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_18e1ecf053b067c942f1515f81462f2611c99304d5fccdb94b9e7be1a64b7300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e1ecf053b067c942f1515f81462f2611c99304d5fccdb94b9e7be1a64b7300->enter($__internal_18e1ecf053b067c942f1515f81462f2611c99304d5fccdb94b9e7be1a64b7300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5a803321351c4f8172b9ff3be03ac7e8ae7d2d1e9adf15e584b35a887abb6b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a803321351c4f8172b9ff3be03ac7e8ae7d2d1e9adf15e584b35a887abb6b76->enter($__internal_5a803321351c4f8172b9ff3be03ac7e8ae7d2d1e9adf15e584b35a887abb6b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5a803321351c4f8172b9ff3be03ac7e8ae7d2d1e9adf15e584b35a887abb6b76->leave($__internal_5a803321351c4f8172b9ff3be03ac7e8ae7d2d1e9adf15e584b35a887abb6b76_prof);

        
        $__internal_18e1ecf053b067c942f1515f81462f2611c99304d5fccdb94b9e7be1a64b7300->leave($__internal_18e1ecf053b067c942f1515f81462f2611c99304d5fccdb94b9e7be1a64b7300_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0b8c2385d95a1fdb252cd8140d4497f148242d6473faf2f64b3cbf580bfffb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8c2385d95a1fdb252cd8140d4497f148242d6473faf2f64b3cbf580bfffb52->enter($__internal_0b8c2385d95a1fdb252cd8140d4497f148242d6473faf2f64b3cbf580bfffb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_cee97fe0c12038b1b5b76ddc85774d939c1e035d5515e2839be8a3a49118b968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee97fe0c12038b1b5b76ddc85774d939c1e035d5515e2839be8a3a49118b968->enter($__internal_cee97fe0c12038b1b5b76ddc85774d939c1e035d5515e2839be8a3a49118b968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cee97fe0c12038b1b5b76ddc85774d939c1e035d5515e2839be8a3a49118b968->leave($__internal_cee97fe0c12038b1b5b76ddc85774d939c1e035d5515e2839be8a3a49118b968_prof);

        
        $__internal_0b8c2385d95a1fdb252cd8140d4497f148242d6473faf2f64b3cbf580bfffb52->leave($__internal_0b8c2385d95a1fdb252cd8140d4497f148242d6473faf2f64b3cbf580bfffb52_prof);

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
