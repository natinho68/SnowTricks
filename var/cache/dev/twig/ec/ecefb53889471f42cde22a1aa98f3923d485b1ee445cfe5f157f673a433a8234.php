<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_87763d4938b8a69549d8d249f60b1d24048edfceba0c859d6997ebb81fa85e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_ab3e86032b2e808929cf21649b67091ab7f39db3b3a357507d195ff403e53d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3e86032b2e808929cf21649b67091ab7f39db3b3a357507d195ff403e53d48->enter($__internal_ab3e86032b2e808929cf21649b67091ab7f39db3b3a357507d195ff403e53d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_52ef530a0aae6cd3ed848b59eced1b0d1e3935f279a798738f71804f680dcb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ef530a0aae6cd3ed848b59eced1b0d1e3935f279a798738f71804f680dcb36->enter($__internal_52ef530a0aae6cd3ed848b59eced1b0d1e3935f279a798738f71804f680dcb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab3e86032b2e808929cf21649b67091ab7f39db3b3a357507d195ff403e53d48->leave($__internal_ab3e86032b2e808929cf21649b67091ab7f39db3b3a357507d195ff403e53d48_prof);

        
        $__internal_52ef530a0aae6cd3ed848b59eced1b0d1e3935f279a798738f71804f680dcb36->leave($__internal_52ef530a0aae6cd3ed848b59eced1b0d1e3935f279a798738f71804f680dcb36_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a34fad31bc965f690aa97c375b201f87a3ea5c42f88dffd145b1656b14018261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34fad31bc965f690aa97c375b201f87a3ea5c42f88dffd145b1656b14018261->enter($__internal_a34fad31bc965f690aa97c375b201f87a3ea5c42f88dffd145b1656b14018261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5de5b4e931908bb5a16920895ab5a9780a5cd9fd21769d6440db300ae5d35128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de5b4e931908bb5a16920895ab5a9780a5cd9fd21769d6440db300ae5d35128->enter($__internal_5de5b4e931908bb5a16920895ab5a9780a5cd9fd21769d6440db300ae5d35128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5de5b4e931908bb5a16920895ab5a9780a5cd9fd21769d6440db300ae5d35128->leave($__internal_5de5b4e931908bb5a16920895ab5a9780a5cd9fd21769d6440db300ae5d35128_prof);

        
        $__internal_a34fad31bc965f690aa97c375b201f87a3ea5c42f88dffd145b1656b14018261->leave($__internal_a34fad31bc965f690aa97c375b201f87a3ea5c42f88dffd145b1656b14018261_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
