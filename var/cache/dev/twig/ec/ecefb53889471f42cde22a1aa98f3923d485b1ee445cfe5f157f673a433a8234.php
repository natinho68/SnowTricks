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
        $__internal_b7b340b5d62eac3acbdce16b471fe4b3ea8f6f4dbffe3df341da06eb17ab3f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b340b5d62eac3acbdce16b471fe4b3ea8f6f4dbffe3df341da06eb17ab3f77->enter($__internal_b7b340b5d62eac3acbdce16b471fe4b3ea8f6f4dbffe3df341da06eb17ab3f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_ee02d7210469fff42dfb6c0f9436be6e16ba6262c19a8dc7638e64a4d0951162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee02d7210469fff42dfb6c0f9436be6e16ba6262c19a8dc7638e64a4d0951162->enter($__internal_ee02d7210469fff42dfb6c0f9436be6e16ba6262c19a8dc7638e64a4d0951162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b340b5d62eac3acbdce16b471fe4b3ea8f6f4dbffe3df341da06eb17ab3f77->leave($__internal_b7b340b5d62eac3acbdce16b471fe4b3ea8f6f4dbffe3df341da06eb17ab3f77_prof);

        
        $__internal_ee02d7210469fff42dfb6c0f9436be6e16ba6262c19a8dc7638e64a4d0951162->leave($__internal_ee02d7210469fff42dfb6c0f9436be6e16ba6262c19a8dc7638e64a4d0951162_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81db73c8725b091750a7b7d698c4cd188dc225e9b19eb9a246e492cfaafce6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81db73c8725b091750a7b7d698c4cd188dc225e9b19eb9a246e492cfaafce6ed->enter($__internal_81db73c8725b091750a7b7d698c4cd188dc225e9b19eb9a246e492cfaafce6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_208f880b978bc3ce95b397ddcf03984806a5fb3268648300a46c8554edb004ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208f880b978bc3ce95b397ddcf03984806a5fb3268648300a46c8554edb004ad->enter($__internal_208f880b978bc3ce95b397ddcf03984806a5fb3268648300a46c8554edb004ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_208f880b978bc3ce95b397ddcf03984806a5fb3268648300a46c8554edb004ad->leave($__internal_208f880b978bc3ce95b397ddcf03984806a5fb3268648300a46c8554edb004ad_prof);

        
        $__internal_81db73c8725b091750a7b7d698c4cd188dc225e9b19eb9a246e492cfaafce6ed->leave($__internal_81db73c8725b091750a7b7d698c4cd188dc225e9b19eb9a246e492cfaafce6ed_prof);

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
