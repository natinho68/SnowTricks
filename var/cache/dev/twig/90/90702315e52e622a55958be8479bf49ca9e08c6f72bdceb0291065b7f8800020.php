<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_7e84b3604ebc1c3322e971fb56a326110ccd698d8d6b171d6ca323c8dbd89467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_665d697dfb6a4bddcbad6ba5228a747ef2a28d648eb0b50111d5a8f81e00d3af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665d697dfb6a4bddcbad6ba5228a747ef2a28d648eb0b50111d5a8f81e00d3af->enter($__internal_665d697dfb6a4bddcbad6ba5228a747ef2a28d648eb0b50111d5a8f81e00d3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_e6adaec516ef4b7da41243c8ff08158485714a39b50e3f4c0b7556e2c3dda401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6adaec516ef4b7da41243c8ff08158485714a39b50e3f4c0b7556e2c3dda401->enter($__internal_e6adaec516ef4b7da41243c8ff08158485714a39b50e3f4c0b7556e2c3dda401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_665d697dfb6a4bddcbad6ba5228a747ef2a28d648eb0b50111d5a8f81e00d3af->leave($__internal_665d697dfb6a4bddcbad6ba5228a747ef2a28d648eb0b50111d5a8f81e00d3af_prof);

        
        $__internal_e6adaec516ef4b7da41243c8ff08158485714a39b50e3f4c0b7556e2c3dda401->leave($__internal_e6adaec516ef4b7da41243c8ff08158485714a39b50e3f4c0b7556e2c3dda401_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6a3695186c7e4b6e953c7dad3803ae17e9b498685adc37667d4e083e8f1ccb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a3695186c7e4b6e953c7dad3803ae17e9b498685adc37667d4e083e8f1ccb6->enter($__internal_b6a3695186c7e4b6e953c7dad3803ae17e9b498685adc37667d4e083e8f1ccb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f97c59eeb6ca7d74ecbb5ed60d308b7924936a3f8811912b501204cada7cf01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f97c59eeb6ca7d74ecbb5ed60d308b7924936a3f8811912b501204cada7cf01->enter($__internal_1f97c59eeb6ca7d74ecbb5ed60d308b7924936a3f8811912b501204cada7cf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1f97c59eeb6ca7d74ecbb5ed60d308b7924936a3f8811912b501204cada7cf01->leave($__internal_1f97c59eeb6ca7d74ecbb5ed60d308b7924936a3f8811912b501204cada7cf01_prof);

        
        $__internal_b6a3695186c7e4b6e953c7dad3803ae17e9b498685adc37667d4e083e8f1ccb6->leave($__internal_b6a3695186c7e4b6e953c7dad3803ae17e9b498685adc37667d4e083e8f1ccb6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
