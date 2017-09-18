<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_18e2f0bcc54199452edcd610b439d96e7b380c6c9bcbdc222b2ccc77b1ca3c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_e3bad4c872757b94f8c88115bfa758aa8c4d0c5f826388c11e674e5da46c4d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bad4c872757b94f8c88115bfa758aa8c4d0c5f826388c11e674e5da46c4d1d->enter($__internal_e3bad4c872757b94f8c88115bfa758aa8c4d0c5f826388c11e674e5da46c4d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_7e3105631c8c133cd28c9b25b6f085b51983af3513e3c70b56a80032eec11060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3105631c8c133cd28c9b25b6f085b51983af3513e3c70b56a80032eec11060->enter($__internal_7e3105631c8c133cd28c9b25b6f085b51983af3513e3c70b56a80032eec11060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3bad4c872757b94f8c88115bfa758aa8c4d0c5f826388c11e674e5da46c4d1d->leave($__internal_e3bad4c872757b94f8c88115bfa758aa8c4d0c5f826388c11e674e5da46c4d1d_prof);

        
        $__internal_7e3105631c8c133cd28c9b25b6f085b51983af3513e3c70b56a80032eec11060->leave($__internal_7e3105631c8c133cd28c9b25b6f085b51983af3513e3c70b56a80032eec11060_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6781277c39db063749fcb2b2888c77fac78b8f9aae0963f5f3f16809adfac558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6781277c39db063749fcb2b2888c77fac78b8f9aae0963f5f3f16809adfac558->enter($__internal_6781277c39db063749fcb2b2888c77fac78b8f9aae0963f5f3f16809adfac558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e1b1544c4e4ac276c930d28118aeec6f8c75c7ea8eb82c4d5e82f145cf6d7a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b1544c4e4ac276c930d28118aeec6f8c75c7ea8eb82c4d5e82f145cf6d7a03->enter($__internal_e1b1544c4e4ac276c930d28118aeec6f8c75c7ea8eb82c4d5e82f145cf6d7a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e1b1544c4e4ac276c930d28118aeec6f8c75c7ea8eb82c4d5e82f145cf6d7a03->leave($__internal_e1b1544c4e4ac276c930d28118aeec6f8c75c7ea8eb82c4d5e82f145cf6d7a03_prof);

        
        $__internal_6781277c39db063749fcb2b2888c77fac78b8f9aae0963f5f3f16809adfac558->leave($__internal_6781277c39db063749fcb2b2888c77fac78b8f9aae0963f5f3f16809adfac558_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
