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
        $__internal_64783f71f42da49ff9d3116e8399a4b3d2968b268f6da8f2c5f6964dcc0121d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64783f71f42da49ff9d3116e8399a4b3d2968b268f6da8f2c5f6964dcc0121d6->enter($__internal_64783f71f42da49ff9d3116e8399a4b3d2968b268f6da8f2c5f6964dcc0121d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_b3b18bf9afc6f2231b3a5844ff7983ce1eb05da8d166314528a7efbc29386339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b18bf9afc6f2231b3a5844ff7983ce1eb05da8d166314528a7efbc29386339->enter($__internal_b3b18bf9afc6f2231b3a5844ff7983ce1eb05da8d166314528a7efbc29386339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64783f71f42da49ff9d3116e8399a4b3d2968b268f6da8f2c5f6964dcc0121d6->leave($__internal_64783f71f42da49ff9d3116e8399a4b3d2968b268f6da8f2c5f6964dcc0121d6_prof);

        
        $__internal_b3b18bf9afc6f2231b3a5844ff7983ce1eb05da8d166314528a7efbc29386339->leave($__internal_b3b18bf9afc6f2231b3a5844ff7983ce1eb05da8d166314528a7efbc29386339_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7b1270017c5db7896394012c8dfb6d2071a1ed9c2920d858f4317958e90fecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b1270017c5db7896394012c8dfb6d2071a1ed9c2920d858f4317958e90fecf->enter($__internal_b7b1270017c5db7896394012c8dfb6d2071a1ed9c2920d858f4317958e90fecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9e6a715e4a4c552ace1e5bfa557c6ea71ffc9cfb98b819f73ac55a579360ba84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6a715e4a4c552ace1e5bfa557c6ea71ffc9cfb98b819f73ac55a579360ba84->enter($__internal_9e6a715e4a4c552ace1e5bfa557c6ea71ffc9cfb98b819f73ac55a579360ba84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9e6a715e4a4c552ace1e5bfa557c6ea71ffc9cfb98b819f73ac55a579360ba84->leave($__internal_9e6a715e4a4c552ace1e5bfa557c6ea71ffc9cfb98b819f73ac55a579360ba84_prof);

        
        $__internal_b7b1270017c5db7896394012c8dfb6d2071a1ed9c2920d858f4317958e90fecf->leave($__internal_b7b1270017c5db7896394012c8dfb6d2071a1ed9c2920d858f4317958e90fecf_prof);

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
