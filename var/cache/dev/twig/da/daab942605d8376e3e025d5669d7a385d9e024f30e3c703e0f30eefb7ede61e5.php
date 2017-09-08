<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_aa2bd50c6cba0a8439cc67d22b7a49edd8ddcfe04aeeb076ade1dcf46bc46f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_25bfac2ac05fe77839c2d92e08dd7eb3285923dbd01e002beb1735e13f90fc6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bfac2ac05fe77839c2d92e08dd7eb3285923dbd01e002beb1735e13f90fc6e->enter($__internal_25bfac2ac05fe77839c2d92e08dd7eb3285923dbd01e002beb1735e13f90fc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_2e498754b599e5ce0bed0a351cad2099d2b2c9e0f346500e5e7937f51f6ab7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e498754b599e5ce0bed0a351cad2099d2b2c9e0f346500e5e7937f51f6ab7e4->enter($__internal_2e498754b599e5ce0bed0a351cad2099d2b2c9e0f346500e5e7937f51f6ab7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25bfac2ac05fe77839c2d92e08dd7eb3285923dbd01e002beb1735e13f90fc6e->leave($__internal_25bfac2ac05fe77839c2d92e08dd7eb3285923dbd01e002beb1735e13f90fc6e_prof);

        
        $__internal_2e498754b599e5ce0bed0a351cad2099d2b2c9e0f346500e5e7937f51f6ab7e4->leave($__internal_2e498754b599e5ce0bed0a351cad2099d2b2c9e0f346500e5e7937f51f6ab7e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c930a80d3cede0733ee633fa6af3027e0f91167e93def7f989357abe01e5acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c930a80d3cede0733ee633fa6af3027e0f91167e93def7f989357abe01e5acc->enter($__internal_7c930a80d3cede0733ee633fa6af3027e0f91167e93def7f989357abe01e5acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f0917a1fd5cf73ec948d4e20b20935670dbb5cfbcd47c8b7cc6344408a9ae563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0917a1fd5cf73ec948d4e20b20935670dbb5cfbcd47c8b7cc6344408a9ae563->enter($__internal_f0917a1fd5cf73ec948d4e20b20935670dbb5cfbcd47c8b7cc6344408a9ae563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f0917a1fd5cf73ec948d4e20b20935670dbb5cfbcd47c8b7cc6344408a9ae563->leave($__internal_f0917a1fd5cf73ec948d4e20b20935670dbb5cfbcd47c8b7cc6344408a9ae563_prof);

        
        $__internal_7c930a80d3cede0733ee633fa6af3027e0f91167e93def7f989357abe01e5acc->leave($__internal_7c930a80d3cede0733ee633fa6af3027e0f91167e93def7f989357abe01e5acc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
