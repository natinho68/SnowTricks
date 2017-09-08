<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_36ea7196d08e8bba310370e57d5f781c91115dd4bff0bac696d025029cfc55eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d1deb01e38da89e37adce2e10e61a57d329413b7fef29dc3b60da7693755f0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1deb01e38da89e37adce2e10e61a57d329413b7fef29dc3b60da7693755f0fb->enter($__internal_d1deb01e38da89e37adce2e10e61a57d329413b7fef29dc3b60da7693755f0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_053a94d591b3875b4ff3b4d01e510aea34b624bca02cb014d36a5c52cccae052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053a94d591b3875b4ff3b4d01e510aea34b624bca02cb014d36a5c52cccae052->enter($__internal_053a94d591b3875b4ff3b4d01e510aea34b624bca02cb014d36a5c52cccae052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1deb01e38da89e37adce2e10e61a57d329413b7fef29dc3b60da7693755f0fb->leave($__internal_d1deb01e38da89e37adce2e10e61a57d329413b7fef29dc3b60da7693755f0fb_prof);

        
        $__internal_053a94d591b3875b4ff3b4d01e510aea34b624bca02cb014d36a5c52cccae052->leave($__internal_053a94d591b3875b4ff3b4d01e510aea34b624bca02cb014d36a5c52cccae052_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33fea5fdd4a18da448f459880a9ba8e0aa6b4cb771190e745b9ec45af58214f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33fea5fdd4a18da448f459880a9ba8e0aa6b4cb771190e745b9ec45af58214f0->enter($__internal_33fea5fdd4a18da448f459880a9ba8e0aa6b4cb771190e745b9ec45af58214f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc02d71e2d8bc30fa60057aefb4fb8f6b3b1b46c357c8d5cd084c682090badf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc02d71e2d8bc30fa60057aefb4fb8f6b3b1b46c357c8d5cd084c682090badf7->enter($__internal_fc02d71e2d8bc30fa60057aefb4fb8f6b3b1b46c357c8d5cd084c682090badf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_fc02d71e2d8bc30fa60057aefb4fb8f6b3b1b46c357c8d5cd084c682090badf7->leave($__internal_fc02d71e2d8bc30fa60057aefb4fb8f6b3b1b46c357c8d5cd084c682090badf7_prof);

        
        $__internal_33fea5fdd4a18da448f459880a9ba8e0aa6b4cb771190e745b9ec45af58214f0->leave($__internal_33fea5fdd4a18da448f459880a9ba8e0aa6b4cb771190e745b9ec45af58214f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
