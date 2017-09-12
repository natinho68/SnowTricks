<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_593eee9993242872a9e8bbcae414c864ad7cbe11279d476c58b37bce791ae173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_fb02ccb40a6b7c0394c45a81e43144e00465307e6d4e86edecc7dee4dfccb580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb02ccb40a6b7c0394c45a81e43144e00465307e6d4e86edecc7dee4dfccb580->enter($__internal_fb02ccb40a6b7c0394c45a81e43144e00465307e6d4e86edecc7dee4dfccb580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_7c5ba6a562a8ec8cb2c6f78d9e288a262c0422261424888eaac8b8921b48da1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5ba6a562a8ec8cb2c6f78d9e288a262c0422261424888eaac8b8921b48da1d->enter($__internal_7c5ba6a562a8ec8cb2c6f78d9e288a262c0422261424888eaac8b8921b48da1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb02ccb40a6b7c0394c45a81e43144e00465307e6d4e86edecc7dee4dfccb580->leave($__internal_fb02ccb40a6b7c0394c45a81e43144e00465307e6d4e86edecc7dee4dfccb580_prof);

        
        $__internal_7c5ba6a562a8ec8cb2c6f78d9e288a262c0422261424888eaac8b8921b48da1d->leave($__internal_7c5ba6a562a8ec8cb2c6f78d9e288a262c0422261424888eaac8b8921b48da1d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2bacc75ab15291279714d2e597f55e8da638a85c592c8083284108e06c131d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bacc75ab15291279714d2e597f55e8da638a85c592c8083284108e06c131d0->enter($__internal_f2bacc75ab15291279714d2e597f55e8da638a85c592c8083284108e06c131d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a88d05074171da6d5fdee4df7607342b96225b8b31e3c6b2a507ffd96fba6bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88d05074171da6d5fdee4df7607342b96225b8b31e3c6b2a507ffd96fba6bc8->enter($__internal_a88d05074171da6d5fdee4df7607342b96225b8b31e3c6b2a507ffd96fba6bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a88d05074171da6d5fdee4df7607342b96225b8b31e3c6b2a507ffd96fba6bc8->leave($__internal_a88d05074171da6d5fdee4df7607342b96225b8b31e3c6b2a507ffd96fba6bc8_prof);

        
        $__internal_f2bacc75ab15291279714d2e597f55e8da638a85c592c8083284108e06c131d0->leave($__internal_f2bacc75ab15291279714d2e597f55e8da638a85c592c8083284108e06c131d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
