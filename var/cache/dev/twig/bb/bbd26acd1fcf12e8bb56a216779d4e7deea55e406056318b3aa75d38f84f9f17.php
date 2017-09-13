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
        $__internal_e313e47f77c64334c1da755f4a7e9041f0336b4ea8ba6de491db2c9f00ba0653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e313e47f77c64334c1da755f4a7e9041f0336b4ea8ba6de491db2c9f00ba0653->enter($__internal_e313e47f77c64334c1da755f4a7e9041f0336b4ea8ba6de491db2c9f00ba0653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_d03831bf70e50d3df503ce749a21423d6e75eb653b02e078b6e4e478e4852133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03831bf70e50d3df503ce749a21423d6e75eb653b02e078b6e4e478e4852133->enter($__internal_d03831bf70e50d3df503ce749a21423d6e75eb653b02e078b6e4e478e4852133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e313e47f77c64334c1da755f4a7e9041f0336b4ea8ba6de491db2c9f00ba0653->leave($__internal_e313e47f77c64334c1da755f4a7e9041f0336b4ea8ba6de491db2c9f00ba0653_prof);

        
        $__internal_d03831bf70e50d3df503ce749a21423d6e75eb653b02e078b6e4e478e4852133->leave($__internal_d03831bf70e50d3df503ce749a21423d6e75eb653b02e078b6e4e478e4852133_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4551aed73718589a8df69acafc956df1eefb331db58b0f23c96512d67f630f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4551aed73718589a8df69acafc956df1eefb331db58b0f23c96512d67f630f45->enter($__internal_4551aed73718589a8df69acafc956df1eefb331db58b0f23c96512d67f630f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c4aa83c5ba376c77cdf84d64776b7dc449245613214a68fe8b8b92d364d93a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4aa83c5ba376c77cdf84d64776b7dc449245613214a68fe8b8b92d364d93a6->enter($__internal_0c4aa83c5ba376c77cdf84d64776b7dc449245613214a68fe8b8b92d364d93a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0c4aa83c5ba376c77cdf84d64776b7dc449245613214a68fe8b8b92d364d93a6->leave($__internal_0c4aa83c5ba376c77cdf84d64776b7dc449245613214a68fe8b8b92d364d93a6_prof);

        
        $__internal_4551aed73718589a8df69acafc956df1eefb331db58b0f23c96512d67f630f45->leave($__internal_4551aed73718589a8df69acafc956df1eefb331db58b0f23c96512d67f630f45_prof);

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
