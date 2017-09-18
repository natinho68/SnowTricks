<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3e6f5e750dbcc360b571427a623b93ca2a5f48b2ecbfc89d25c27ef43d770603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_c81a3e7b6c5225bf82a6818511f965461ed2ab069b66e980b42df7b655f48841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81a3e7b6c5225bf82a6818511f965461ed2ab069b66e980b42df7b655f48841->enter($__internal_c81a3e7b6c5225bf82a6818511f965461ed2ab069b66e980b42df7b655f48841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_806b0b326fd79c6625263a970529f81c5e93fa86e8d89f77b9e5d99bee0f99d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806b0b326fd79c6625263a970529f81c5e93fa86e8d89f77b9e5d99bee0f99d5->enter($__internal_806b0b326fd79c6625263a970529f81c5e93fa86e8d89f77b9e5d99bee0f99d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c81a3e7b6c5225bf82a6818511f965461ed2ab069b66e980b42df7b655f48841->leave($__internal_c81a3e7b6c5225bf82a6818511f965461ed2ab069b66e980b42df7b655f48841_prof);

        
        $__internal_806b0b326fd79c6625263a970529f81c5e93fa86e8d89f77b9e5d99bee0f99d5->leave($__internal_806b0b326fd79c6625263a970529f81c5e93fa86e8d89f77b9e5d99bee0f99d5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85bde529cbfe4b9048b00fac5021ec2f355a812cc55899080518958083e01882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85bde529cbfe4b9048b00fac5021ec2f355a812cc55899080518958083e01882->enter($__internal_85bde529cbfe4b9048b00fac5021ec2f355a812cc55899080518958083e01882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c694ddb2bdf1782053a8c38ad6d6df8e3e5235fe1dd159e9e9e1ee2384e7f896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c694ddb2bdf1782053a8c38ad6d6df8e3e5235fe1dd159e9e9e1ee2384e7f896->enter($__internal_c694ddb2bdf1782053a8c38ad6d6df8e3e5235fe1dd159e9e9e1ee2384e7f896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c694ddb2bdf1782053a8c38ad6d6df8e3e5235fe1dd159e9e9e1ee2384e7f896->leave($__internal_c694ddb2bdf1782053a8c38ad6d6df8e3e5235fe1dd159e9e9e1ee2384e7f896_prof);

        
        $__internal_85bde529cbfe4b9048b00fac5021ec2f355a812cc55899080518958083e01882->leave($__internal_85bde529cbfe4b9048b00fac5021ec2f355a812cc55899080518958083e01882_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
