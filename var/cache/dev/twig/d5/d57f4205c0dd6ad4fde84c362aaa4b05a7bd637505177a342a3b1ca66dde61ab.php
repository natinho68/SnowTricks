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
        $__internal_ad3f819213b02152b7af77f6da59773858c163a5f77c093a396f85137bc54c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3f819213b02152b7af77f6da59773858c163a5f77c093a396f85137bc54c2f->enter($__internal_ad3f819213b02152b7af77f6da59773858c163a5f77c093a396f85137bc54c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_858d0f77d8679acd3a94496209a7f175e802042db4f756402071f2940ad1afed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858d0f77d8679acd3a94496209a7f175e802042db4f756402071f2940ad1afed->enter($__internal_858d0f77d8679acd3a94496209a7f175e802042db4f756402071f2940ad1afed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad3f819213b02152b7af77f6da59773858c163a5f77c093a396f85137bc54c2f->leave($__internal_ad3f819213b02152b7af77f6da59773858c163a5f77c093a396f85137bc54c2f_prof);

        
        $__internal_858d0f77d8679acd3a94496209a7f175e802042db4f756402071f2940ad1afed->leave($__internal_858d0f77d8679acd3a94496209a7f175e802042db4f756402071f2940ad1afed_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8bad2f24e1984138627bff070728a7c62d552fd9a3305bd0843aff31a858e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8bad2f24e1984138627bff070728a7c62d552fd9a3305bd0843aff31a858e32->enter($__internal_c8bad2f24e1984138627bff070728a7c62d552fd9a3305bd0843aff31a858e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e93c746e18d67d08fafc76fa10d76b8d80c94b9ed749c2d5146c9162698c6e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93c746e18d67d08fafc76fa10d76b8d80c94b9ed749c2d5146c9162698c6e08->enter($__internal_e93c746e18d67d08fafc76fa10d76b8d80c94b9ed749c2d5146c9162698c6e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e93c746e18d67d08fafc76fa10d76b8d80c94b9ed749c2d5146c9162698c6e08->leave($__internal_e93c746e18d67d08fafc76fa10d76b8d80c94b9ed749c2d5146c9162698c6e08_prof);

        
        $__internal_c8bad2f24e1984138627bff070728a7c62d552fd9a3305bd0843aff31a858e32->leave($__internal_c8bad2f24e1984138627bff070728a7c62d552fd9a3305bd0843aff31a858e32_prof);

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
