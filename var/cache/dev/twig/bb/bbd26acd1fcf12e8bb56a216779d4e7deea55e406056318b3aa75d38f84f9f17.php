<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_eca13deb91d3d966ee2705303cb96f8790f416f49afe737ccf913c7de0cf2408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_187b7d8c2ed9adcca31ce58f0e51982bb2ad8d341bdb71e92054e403f4a56be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187b7d8c2ed9adcca31ce58f0e51982bb2ad8d341bdb71e92054e403f4a56be9->enter($__internal_187b7d8c2ed9adcca31ce58f0e51982bb2ad8d341bdb71e92054e403f4a56be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c7b62c0cb080043532f195a8c601647abf7fabfb9cbde453bf98e50f533e2403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b62c0cb080043532f195a8c601647abf7fabfb9cbde453bf98e50f533e2403->enter($__internal_c7b62c0cb080043532f195a8c601647abf7fabfb9cbde453bf98e50f533e2403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_187b7d8c2ed9adcca31ce58f0e51982bb2ad8d341bdb71e92054e403f4a56be9->leave($__internal_187b7d8c2ed9adcca31ce58f0e51982bb2ad8d341bdb71e92054e403f4a56be9_prof);

        
        $__internal_c7b62c0cb080043532f195a8c601647abf7fabfb9cbde453bf98e50f533e2403->leave($__internal_c7b62c0cb080043532f195a8c601647abf7fabfb9cbde453bf98e50f533e2403_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_604af071f2eaa0411b62c3e3a44f3b6806fa8b0e5e2133d23ee830768281233d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604af071f2eaa0411b62c3e3a44f3b6806fa8b0e5e2133d23ee830768281233d->enter($__internal_604af071f2eaa0411b62c3e3a44f3b6806fa8b0e5e2133d23ee830768281233d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8be181fbfd6ef5a6682ba7356dd0c46ee82c4fc9549b7f10e723e3ab7761f4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be181fbfd6ef5a6682ba7356dd0c46ee82c4fc9549b7f10e723e3ab7761f4d6->enter($__internal_8be181fbfd6ef5a6682ba7356dd0c46ee82c4fc9549b7f10e723e3ab7761f4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8be181fbfd6ef5a6682ba7356dd0c46ee82c4fc9549b7f10e723e3ab7761f4d6->leave($__internal_8be181fbfd6ef5a6682ba7356dd0c46ee82c4fc9549b7f10e723e3ab7761f4d6_prof);

        
        $__internal_604af071f2eaa0411b62c3e3a44f3b6806fa8b0e5e2133d23ee830768281233d->leave($__internal_604af071f2eaa0411b62c3e3a44f3b6806fa8b0e5e2133d23ee830768281233d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
