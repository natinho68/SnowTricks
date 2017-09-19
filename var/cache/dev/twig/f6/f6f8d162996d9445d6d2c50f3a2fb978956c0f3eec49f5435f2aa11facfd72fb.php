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
        $__internal_857b59745bd8a51db45996ae74cf0c4e7c61f2612a301c9a1a3a92d28ed2401d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857b59745bd8a51db45996ae74cf0c4e7c61f2612a301c9a1a3a92d28ed2401d->enter($__internal_857b59745bd8a51db45996ae74cf0c4e7c61f2612a301c9a1a3a92d28ed2401d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_3b5ec5616d2949243169f0ff367693b7e2f1d14f214ae599a1231915aee1d92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5ec5616d2949243169f0ff367693b7e2f1d14f214ae599a1231915aee1d92c->enter($__internal_3b5ec5616d2949243169f0ff367693b7e2f1d14f214ae599a1231915aee1d92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_857b59745bd8a51db45996ae74cf0c4e7c61f2612a301c9a1a3a92d28ed2401d->leave($__internal_857b59745bd8a51db45996ae74cf0c4e7c61f2612a301c9a1a3a92d28ed2401d_prof);

        
        $__internal_3b5ec5616d2949243169f0ff367693b7e2f1d14f214ae599a1231915aee1d92c->leave($__internal_3b5ec5616d2949243169f0ff367693b7e2f1d14f214ae599a1231915aee1d92c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1add9a44b2f95427cef439028c5f304dd4de8756943a2484c322bef97e075fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1add9a44b2f95427cef439028c5f304dd4de8756943a2484c322bef97e075fd8->enter($__internal_1add9a44b2f95427cef439028c5f304dd4de8756943a2484c322bef97e075fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb66dad27b872a260d491cdf54bb0578a13421a7f8f1187640a59b38d436b9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb66dad27b872a260d491cdf54bb0578a13421a7f8f1187640a59b38d436b9cf->enter($__internal_cb66dad27b872a260d491cdf54bb0578a13421a7f8f1187640a59b38d436b9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_cb66dad27b872a260d491cdf54bb0578a13421a7f8f1187640a59b38d436b9cf->leave($__internal_cb66dad27b872a260d491cdf54bb0578a13421a7f8f1187640a59b38d436b9cf_prof);

        
        $__internal_1add9a44b2f95427cef439028c5f304dd4de8756943a2484c322bef97e075fd8->leave($__internal_1add9a44b2f95427cef439028c5f304dd4de8756943a2484c322bef97e075fd8_prof);

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
