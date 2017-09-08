<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92b2c4b4e50f874b8f58b3408bf890cbfb8607d01265f4d38109cc354eb216d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_cc93df2293f98522f430b35be142e96f86ff2a8bb592353123e44c7035ad6330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc93df2293f98522f430b35be142e96f86ff2a8bb592353123e44c7035ad6330->enter($__internal_cc93df2293f98522f430b35be142e96f86ff2a8bb592353123e44c7035ad6330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_0e2086f15490d65a65a6183a7cdd89dbc278980a5c36d5042adb977f4a71de4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2086f15490d65a65a6183a7cdd89dbc278980a5c36d5042adb977f4a71de4c->enter($__internal_0e2086f15490d65a65a6183a7cdd89dbc278980a5c36d5042adb977f4a71de4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc93df2293f98522f430b35be142e96f86ff2a8bb592353123e44c7035ad6330->leave($__internal_cc93df2293f98522f430b35be142e96f86ff2a8bb592353123e44c7035ad6330_prof);

        
        $__internal_0e2086f15490d65a65a6183a7cdd89dbc278980a5c36d5042adb977f4a71de4c->leave($__internal_0e2086f15490d65a65a6183a7cdd89dbc278980a5c36d5042adb977f4a71de4c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8e86324a0e5df8f70c64335d9afe09fddebab3e5ba369a7fb5c651dec0d487c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e86324a0e5df8f70c64335d9afe09fddebab3e5ba369a7fb5c651dec0d487c->enter($__internal_c8e86324a0e5df8f70c64335d9afe09fddebab3e5ba369a7fb5c651dec0d487c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_49ec943f216c0e5579d53ea8a9ff06b8141374d8d713c9dcbf574d22738aabbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ec943f216c0e5579d53ea8a9ff06b8141374d8d713c9dcbf574d22738aabbf->enter($__internal_49ec943f216c0e5579d53ea8a9ff06b8141374d8d713c9dcbf574d22738aabbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_49ec943f216c0e5579d53ea8a9ff06b8141374d8d713c9dcbf574d22738aabbf->leave($__internal_49ec943f216c0e5579d53ea8a9ff06b8141374d8d713c9dcbf574d22738aabbf_prof);

        
        $__internal_c8e86324a0e5df8f70c64335d9afe09fddebab3e5ba369a7fb5c651dec0d487c->leave($__internal_c8e86324a0e5df8f70c64335d9afe09fddebab3e5ba369a7fb5c651dec0d487c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
