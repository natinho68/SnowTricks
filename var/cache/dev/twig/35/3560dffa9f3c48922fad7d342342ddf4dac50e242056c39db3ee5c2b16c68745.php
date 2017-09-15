<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d5f2eaef80767f375a47816037a9fad7e42eedff83d6802fa7deb1b76fd187f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8075cee08162594af64cfa1a131c139a33f74a8dd34dffbf592041d2bee551b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8075cee08162594af64cfa1a131c139a33f74a8dd34dffbf592041d2bee551b3->enter($__internal_8075cee08162594af64cfa1a131c139a33f74a8dd34dffbf592041d2bee551b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_108ac9cf1138d2ed2972ace0f1101406931dc48f1e29c1d33fdef396dfef9a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108ac9cf1138d2ed2972ace0f1101406931dc48f1e29c1d33fdef396dfef9a3e->enter($__internal_108ac9cf1138d2ed2972ace0f1101406931dc48f1e29c1d33fdef396dfef9a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8075cee08162594af64cfa1a131c139a33f74a8dd34dffbf592041d2bee551b3->leave($__internal_8075cee08162594af64cfa1a131c139a33f74a8dd34dffbf592041d2bee551b3_prof);

        
        $__internal_108ac9cf1138d2ed2972ace0f1101406931dc48f1e29c1d33fdef396dfef9a3e->leave($__internal_108ac9cf1138d2ed2972ace0f1101406931dc48f1e29c1d33fdef396dfef9a3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcda3d6d3a05f371f51c46d0df50b1d38304b2b47edcf919dd76e39666b71af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcda3d6d3a05f371f51c46d0df50b1d38304b2b47edcf919dd76e39666b71af6->enter($__internal_dcda3d6d3a05f371f51c46d0df50b1d38304b2b47edcf919dd76e39666b71af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_caf1049d541395414730f300a1505fd04c29b91d0a5b4c44736a2347879a21c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf1049d541395414730f300a1505fd04c29b91d0a5b4c44736a2347879a21c2->enter($__internal_caf1049d541395414730f300a1505fd04c29b91d0a5b4c44736a2347879a21c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_caf1049d541395414730f300a1505fd04c29b91d0a5b4c44736a2347879a21c2->leave($__internal_caf1049d541395414730f300a1505fd04c29b91d0a5b4c44736a2347879a21c2_prof);

        
        $__internal_dcda3d6d3a05f371f51c46d0df50b1d38304b2b47edcf919dd76e39666b71af6->leave($__internal_dcda3d6d3a05f371f51c46d0df50b1d38304b2b47edcf919dd76e39666b71af6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
