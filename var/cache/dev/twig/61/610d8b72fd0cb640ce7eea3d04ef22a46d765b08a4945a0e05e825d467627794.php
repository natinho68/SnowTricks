<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_290ce38760978f0db598839df3e1d384f0eae48af636154b5c7d15e0899b8d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_752966c3b76a6e8f98137476591edc4cadf462e8b77cd88bf6dcf871ff930efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752966c3b76a6e8f98137476591edc4cadf462e8b77cd88bf6dcf871ff930efe->enter($__internal_752966c3b76a6e8f98137476591edc4cadf462e8b77cd88bf6dcf871ff930efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_8991f4a5565a2d45eb87c7f39dddf820c2f4f6b1fd23d398cb2d3271e56d2470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8991f4a5565a2d45eb87c7f39dddf820c2f4f6b1fd23d398cb2d3271e56d2470->enter($__internal_8991f4a5565a2d45eb87c7f39dddf820c2f4f6b1fd23d398cb2d3271e56d2470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_752966c3b76a6e8f98137476591edc4cadf462e8b77cd88bf6dcf871ff930efe->leave($__internal_752966c3b76a6e8f98137476591edc4cadf462e8b77cd88bf6dcf871ff930efe_prof);

        
        $__internal_8991f4a5565a2d45eb87c7f39dddf820c2f4f6b1fd23d398cb2d3271e56d2470->leave($__internal_8991f4a5565a2d45eb87c7f39dddf820c2f4f6b1fd23d398cb2d3271e56d2470_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5643d8b428da6ed2a083d38a3cd8e2bfc6d0525655b09d8a2692f6e9ed9bc5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5643d8b428da6ed2a083d38a3cd8e2bfc6d0525655b09d8a2692f6e9ed9bc5e->enter($__internal_e5643d8b428da6ed2a083d38a3cd8e2bfc6d0525655b09d8a2692f6e9ed9bc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_73f84c14048efc179433877a5991820685c0d066c4e90b76279e4e349458d3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f84c14048efc179433877a5991820685c0d066c4e90b76279e4e349458d3ca->enter($__internal_73f84c14048efc179433877a5991820685c0d066c4e90b76279e4e349458d3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_73f84c14048efc179433877a5991820685c0d066c4e90b76279e4e349458d3ca->leave($__internal_73f84c14048efc179433877a5991820685c0d066c4e90b76279e4e349458d3ca_prof);

        
        $__internal_e5643d8b428da6ed2a083d38a3cd8e2bfc6d0525655b09d8a2692f6e9ed9bc5e->leave($__internal_e5643d8b428da6ed2a083d38a3cd8e2bfc6d0525655b09d8a2692f6e9ed9bc5e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
