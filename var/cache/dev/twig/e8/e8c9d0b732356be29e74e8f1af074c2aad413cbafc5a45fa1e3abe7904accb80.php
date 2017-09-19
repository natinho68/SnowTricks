<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d7477e85ff500e2feb3384e4772495977957dfde0ac620b81004c083288b09e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e4fe9d38844c909d50f970c7de1382f83573e3dc7862c3fdd296acacb60d0af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4fe9d38844c909d50f970c7de1382f83573e3dc7862c3fdd296acacb60d0af5->enter($__internal_e4fe9d38844c909d50f970c7de1382f83573e3dc7862c3fdd296acacb60d0af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_1b9076e4b8d3da85128139154a6537a3f788b888425260d91b897dba610e1b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9076e4b8d3da85128139154a6537a3f788b888425260d91b897dba610e1b64->enter($__internal_1b9076e4b8d3da85128139154a6537a3f788b888425260d91b897dba610e1b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4fe9d38844c909d50f970c7de1382f83573e3dc7862c3fdd296acacb60d0af5->leave($__internal_e4fe9d38844c909d50f970c7de1382f83573e3dc7862c3fdd296acacb60d0af5_prof);

        
        $__internal_1b9076e4b8d3da85128139154a6537a3f788b888425260d91b897dba610e1b64->leave($__internal_1b9076e4b8d3da85128139154a6537a3f788b888425260d91b897dba610e1b64_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fef408e823ff08c186da33e4e1eca2794ba5f18ce57f2c33433db9f83ce3583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fef408e823ff08c186da33e4e1eca2794ba5f18ce57f2c33433db9f83ce3583->enter($__internal_2fef408e823ff08c186da33e4e1eca2794ba5f18ce57f2c33433db9f83ce3583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_33831704be1c933b37ef31b2c18e9f48e5641f9c7beac8f0b9d0b849820ef773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33831704be1c933b37ef31b2c18e9f48e5641f9c7beac8f0b9d0b849820ef773->enter($__internal_33831704be1c933b37ef31b2c18e9f48e5641f9c7beac8f0b9d0b849820ef773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_33831704be1c933b37ef31b2c18e9f48e5641f9c7beac8f0b9d0b849820ef773->leave($__internal_33831704be1c933b37ef31b2c18e9f48e5641f9c7beac8f0b9d0b849820ef773_prof);

        
        $__internal_2fef408e823ff08c186da33e4e1eca2794ba5f18ce57f2c33433db9f83ce3583->leave($__internal_2fef408e823ff08c186da33e4e1eca2794ba5f18ce57f2c33433db9f83ce3583_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
