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
        $__internal_0fba98bc191140632b307b14a3d18f83e46d141207f5c29e203ecbce50bb9a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fba98bc191140632b307b14a3d18f83e46d141207f5c29e203ecbce50bb9a5e->enter($__internal_0fba98bc191140632b307b14a3d18f83e46d141207f5c29e203ecbce50bb9a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_6d199ca1835cf2cd0f70e9fbcf38d51b9b349a5c5eb572f94c4bb3d30f4398d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d199ca1835cf2cd0f70e9fbcf38d51b9b349a5c5eb572f94c4bb3d30f4398d1->enter($__internal_6d199ca1835cf2cd0f70e9fbcf38d51b9b349a5c5eb572f94c4bb3d30f4398d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fba98bc191140632b307b14a3d18f83e46d141207f5c29e203ecbce50bb9a5e->leave($__internal_0fba98bc191140632b307b14a3d18f83e46d141207f5c29e203ecbce50bb9a5e_prof);

        
        $__internal_6d199ca1835cf2cd0f70e9fbcf38d51b9b349a5c5eb572f94c4bb3d30f4398d1->leave($__internal_6d199ca1835cf2cd0f70e9fbcf38d51b9b349a5c5eb572f94c4bb3d30f4398d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7917342128ff07a6c2efdb8ad238bd927b2181c729d28e808248eff42fc3994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7917342128ff07a6c2efdb8ad238bd927b2181c729d28e808248eff42fc3994->enter($__internal_b7917342128ff07a6c2efdb8ad238bd927b2181c729d28e808248eff42fc3994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b23afba749dd22f46550f6cb19fd1c9505feb4afa2f76a1a5b81d456177fdf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23afba749dd22f46550f6cb19fd1c9505feb4afa2f76a1a5b81d456177fdf9b->enter($__internal_b23afba749dd22f46550f6cb19fd1c9505feb4afa2f76a1a5b81d456177fdf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b23afba749dd22f46550f6cb19fd1c9505feb4afa2f76a1a5b81d456177fdf9b->leave($__internal_b23afba749dd22f46550f6cb19fd1c9505feb4afa2f76a1a5b81d456177fdf9b_prof);

        
        $__internal_b7917342128ff07a6c2efdb8ad238bd927b2181c729d28e808248eff42fc3994->leave($__internal_b7917342128ff07a6c2efdb8ad238bd927b2181c729d28e808248eff42fc3994_prof);

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
