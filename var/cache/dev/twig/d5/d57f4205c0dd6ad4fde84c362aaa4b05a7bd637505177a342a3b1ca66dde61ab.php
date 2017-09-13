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
        $__internal_060bdcb05bece82738853475c7c21e8d2789f1d6d23a19ce698916ef8a8634db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_060bdcb05bece82738853475c7c21e8d2789f1d6d23a19ce698916ef8a8634db->enter($__internal_060bdcb05bece82738853475c7c21e8d2789f1d6d23a19ce698916ef8a8634db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_1d521cca959f411638e407712e2d687fe8e23dc4fde9d85f558ddf778b989da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d521cca959f411638e407712e2d687fe8e23dc4fde9d85f558ddf778b989da9->enter($__internal_1d521cca959f411638e407712e2d687fe8e23dc4fde9d85f558ddf778b989da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060bdcb05bece82738853475c7c21e8d2789f1d6d23a19ce698916ef8a8634db->leave($__internal_060bdcb05bece82738853475c7c21e8d2789f1d6d23a19ce698916ef8a8634db_prof);

        
        $__internal_1d521cca959f411638e407712e2d687fe8e23dc4fde9d85f558ddf778b989da9->leave($__internal_1d521cca959f411638e407712e2d687fe8e23dc4fde9d85f558ddf778b989da9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18b4982d2db615aaa59b4ae0f7953a12189d8bc192d7fd7ff31871af093056e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b4982d2db615aaa59b4ae0f7953a12189d8bc192d7fd7ff31871af093056e7->enter($__internal_18b4982d2db615aaa59b4ae0f7953a12189d8bc192d7fd7ff31871af093056e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_296e5af7c3c1491c832e5e715c8171e70adfc02eb5a7a36bbbd86ea6aee76223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296e5af7c3c1491c832e5e715c8171e70adfc02eb5a7a36bbbd86ea6aee76223->enter($__internal_296e5af7c3c1491c832e5e715c8171e70adfc02eb5a7a36bbbd86ea6aee76223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_296e5af7c3c1491c832e5e715c8171e70adfc02eb5a7a36bbbd86ea6aee76223->leave($__internal_296e5af7c3c1491c832e5e715c8171e70adfc02eb5a7a36bbbd86ea6aee76223_prof);

        
        $__internal_18b4982d2db615aaa59b4ae0f7953a12189d8bc192d7fd7ff31871af093056e7->leave($__internal_18b4982d2db615aaa59b4ae0f7953a12189d8bc192d7fd7ff31871af093056e7_prof);

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
