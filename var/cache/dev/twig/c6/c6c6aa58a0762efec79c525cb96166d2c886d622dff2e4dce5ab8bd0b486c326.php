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
        $__internal_19ea8824fb4a71ca0d7cbb83ed590db4fc83fb3d65b8645a03b04b2774ab3d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ea8824fb4a71ca0d7cbb83ed590db4fc83fb3d65b8645a03b04b2774ab3d57->enter($__internal_19ea8824fb4a71ca0d7cbb83ed590db4fc83fb3d65b8645a03b04b2774ab3d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_11579f251b0cffa3f18b9a1066b239594395eb796415440da0af36009937deab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11579f251b0cffa3f18b9a1066b239594395eb796415440da0af36009937deab->enter($__internal_11579f251b0cffa3f18b9a1066b239594395eb796415440da0af36009937deab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_19ea8824fb4a71ca0d7cbb83ed590db4fc83fb3d65b8645a03b04b2774ab3d57->leave($__internal_19ea8824fb4a71ca0d7cbb83ed590db4fc83fb3d65b8645a03b04b2774ab3d57_prof);

        
        $__internal_11579f251b0cffa3f18b9a1066b239594395eb796415440da0af36009937deab->leave($__internal_11579f251b0cffa3f18b9a1066b239594395eb796415440da0af36009937deab_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_34c803eae1f2e53f6a56fcac341f43975f054429e5fca3af87dab1ff6743de78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c803eae1f2e53f6a56fcac341f43975f054429e5fca3af87dab1ff6743de78->enter($__internal_34c803eae1f2e53f6a56fcac341f43975f054429e5fca3af87dab1ff6743de78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_739d0a7aad3c80157944e2ce081642e2893da52271f7842b25a027a748880e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739d0a7aad3c80157944e2ce081642e2893da52271f7842b25a027a748880e18->enter($__internal_739d0a7aad3c80157944e2ce081642e2893da52271f7842b25a027a748880e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_739d0a7aad3c80157944e2ce081642e2893da52271f7842b25a027a748880e18->leave($__internal_739d0a7aad3c80157944e2ce081642e2893da52271f7842b25a027a748880e18_prof);

        
        $__internal_34c803eae1f2e53f6a56fcac341f43975f054429e5fca3af87dab1ff6743de78->leave($__internal_34c803eae1f2e53f6a56fcac341f43975f054429e5fca3af87dab1ff6743de78_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c0229f761e1feb84297dd98da8f87ba12883509c19f01a229321377e4e357804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0229f761e1feb84297dd98da8f87ba12883509c19f01a229321377e4e357804->enter($__internal_c0229f761e1feb84297dd98da8f87ba12883509c19f01a229321377e4e357804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6775c36a85ff946dd1901a26d7838e88234fbdacf2d445dfeb644fd347fe2b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6775c36a85ff946dd1901a26d7838e88234fbdacf2d445dfeb644fd347fe2b27->enter($__internal_6775c36a85ff946dd1901a26d7838e88234fbdacf2d445dfeb644fd347fe2b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6775c36a85ff946dd1901a26d7838e88234fbdacf2d445dfeb644fd347fe2b27->leave($__internal_6775c36a85ff946dd1901a26d7838e88234fbdacf2d445dfeb644fd347fe2b27_prof);

        
        $__internal_c0229f761e1feb84297dd98da8f87ba12883509c19f01a229321377e4e357804->leave($__internal_c0229f761e1feb84297dd98da8f87ba12883509c19f01a229321377e4e357804_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_55dc99cb4430bb4e488b9ed4fe4b08474bb405ffba734793f48c406607d8b058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55dc99cb4430bb4e488b9ed4fe4b08474bb405ffba734793f48c406607d8b058->enter($__internal_55dc99cb4430bb4e488b9ed4fe4b08474bb405ffba734793f48c406607d8b058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dd9adec025e589cde5f8d61cae97cdd84d3568a97f4ddb54ccabf58b12555f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9adec025e589cde5f8d61cae97cdd84d3568a97f4ddb54ccabf58b12555f09->enter($__internal_dd9adec025e589cde5f8d61cae97cdd84d3568a97f4ddb54ccabf58b12555f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dd9adec025e589cde5f8d61cae97cdd84d3568a97f4ddb54ccabf58b12555f09->leave($__internal_dd9adec025e589cde5f8d61cae97cdd84d3568a97f4ddb54ccabf58b12555f09_prof);

        
        $__internal_55dc99cb4430bb4e488b9ed4fe4b08474bb405ffba734793f48c406607d8b058->leave($__internal_55dc99cb4430bb4e488b9ed4fe4b08474bb405ffba734793f48c406607d8b058_prof);

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
