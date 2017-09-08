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
        $__internal_7714e76354663345ed10cd92ba0feafb32ee2e9ac80ac3f146ed276df75b91e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7714e76354663345ed10cd92ba0feafb32ee2e9ac80ac3f146ed276df75b91e0->enter($__internal_7714e76354663345ed10cd92ba0feafb32ee2e9ac80ac3f146ed276df75b91e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_eef3d7adb1db1b7afb73eac74f562a97e04357dcbeb6ef9f461104da1c05d49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef3d7adb1db1b7afb73eac74f562a97e04357dcbeb6ef9f461104da1c05d49e->enter($__internal_eef3d7adb1db1b7afb73eac74f562a97e04357dcbeb6ef9f461104da1c05d49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7714e76354663345ed10cd92ba0feafb32ee2e9ac80ac3f146ed276df75b91e0->leave($__internal_7714e76354663345ed10cd92ba0feafb32ee2e9ac80ac3f146ed276df75b91e0_prof);

        
        $__internal_eef3d7adb1db1b7afb73eac74f562a97e04357dcbeb6ef9f461104da1c05d49e->leave($__internal_eef3d7adb1db1b7afb73eac74f562a97e04357dcbeb6ef9f461104da1c05d49e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3976983e1e11394b3e6c170af294909f5d1ff1b8c085bde3c9bd333a4b0e5ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3976983e1e11394b3e6c170af294909f5d1ff1b8c085bde3c9bd333a4b0e5ebb->enter($__internal_3976983e1e11394b3e6c170af294909f5d1ff1b8c085bde3c9bd333a4b0e5ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c183c398c4698d8686f3d771b1aa29884256d8c6f029311dcd5f790790ae12df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c183c398c4698d8686f3d771b1aa29884256d8c6f029311dcd5f790790ae12df->enter($__internal_c183c398c4698d8686f3d771b1aa29884256d8c6f029311dcd5f790790ae12df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c183c398c4698d8686f3d771b1aa29884256d8c6f029311dcd5f790790ae12df->leave($__internal_c183c398c4698d8686f3d771b1aa29884256d8c6f029311dcd5f790790ae12df_prof);

        
        $__internal_3976983e1e11394b3e6c170af294909f5d1ff1b8c085bde3c9bd333a4b0e5ebb->leave($__internal_3976983e1e11394b3e6c170af294909f5d1ff1b8c085bde3c9bd333a4b0e5ebb_prof);

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
