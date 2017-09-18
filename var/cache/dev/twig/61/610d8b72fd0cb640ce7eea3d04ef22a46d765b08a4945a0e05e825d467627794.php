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
        $__internal_5039b171553bb0c54c40b547753b0185c998dec6fc680e2cf48eb4667ceb5eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5039b171553bb0c54c40b547753b0185c998dec6fc680e2cf48eb4667ceb5eeb->enter($__internal_5039b171553bb0c54c40b547753b0185c998dec6fc680e2cf48eb4667ceb5eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_ba3613dbb81d202a69becd9c7ca90821d8f53e4ee477f474cbd296fc48e47102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3613dbb81d202a69becd9c7ca90821d8f53e4ee477f474cbd296fc48e47102->enter($__internal_ba3613dbb81d202a69becd9c7ca90821d8f53e4ee477f474cbd296fc48e47102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5039b171553bb0c54c40b547753b0185c998dec6fc680e2cf48eb4667ceb5eeb->leave($__internal_5039b171553bb0c54c40b547753b0185c998dec6fc680e2cf48eb4667ceb5eeb_prof);

        
        $__internal_ba3613dbb81d202a69becd9c7ca90821d8f53e4ee477f474cbd296fc48e47102->leave($__internal_ba3613dbb81d202a69becd9c7ca90821d8f53e4ee477f474cbd296fc48e47102_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9c07cc1aee3cd056cdf2f569da6e28ee89897d7c07de280e172b368fe5a8e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c07cc1aee3cd056cdf2f569da6e28ee89897d7c07de280e172b368fe5a8e75->enter($__internal_a9c07cc1aee3cd056cdf2f569da6e28ee89897d7c07de280e172b368fe5a8e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f577c4fab8328ab816e73751d275b6041b5c2ac264dc5d1e61c69a26e5c29595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f577c4fab8328ab816e73751d275b6041b5c2ac264dc5d1e61c69a26e5c29595->enter($__internal_f577c4fab8328ab816e73751d275b6041b5c2ac264dc5d1e61c69a26e5c29595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f577c4fab8328ab816e73751d275b6041b5c2ac264dc5d1e61c69a26e5c29595->leave($__internal_f577c4fab8328ab816e73751d275b6041b5c2ac264dc5d1e61c69a26e5c29595_prof);

        
        $__internal_a9c07cc1aee3cd056cdf2f569da6e28ee89897d7c07de280e172b368fe5a8e75->leave($__internal_a9c07cc1aee3cd056cdf2f569da6e28ee89897d7c07de280e172b368fe5a8e75_prof);

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
