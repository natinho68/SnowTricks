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
        $__internal_bf67049903c9e279abab0db264aaa2640be5a594ad6bba1edab3197a970d7d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf67049903c9e279abab0db264aaa2640be5a594ad6bba1edab3197a970d7d04->enter($__internal_bf67049903c9e279abab0db264aaa2640be5a594ad6bba1edab3197a970d7d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_0b23c0d19d77d56cfecb754dc7ebd618d2a01096dffb13761b67a9ccac00c7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b23c0d19d77d56cfecb754dc7ebd618d2a01096dffb13761b67a9ccac00c7df->enter($__internal_0b23c0d19d77d56cfecb754dc7ebd618d2a01096dffb13761b67a9ccac00c7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf67049903c9e279abab0db264aaa2640be5a594ad6bba1edab3197a970d7d04->leave($__internal_bf67049903c9e279abab0db264aaa2640be5a594ad6bba1edab3197a970d7d04_prof);

        
        $__internal_0b23c0d19d77d56cfecb754dc7ebd618d2a01096dffb13761b67a9ccac00c7df->leave($__internal_0b23c0d19d77d56cfecb754dc7ebd618d2a01096dffb13761b67a9ccac00c7df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed6b2615b4ec85d47fdf8945b31566bf79ca48ca9e4bb5b5e800281f161c40aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6b2615b4ec85d47fdf8945b31566bf79ca48ca9e4bb5b5e800281f161c40aa->enter($__internal_ed6b2615b4ec85d47fdf8945b31566bf79ca48ca9e4bb5b5e800281f161c40aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e56a41b3fc4ea8cd6cf5ffbc6038562ae6800ecf9aba1b3f3699670ff1cae058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56a41b3fc4ea8cd6cf5ffbc6038562ae6800ecf9aba1b3f3699670ff1cae058->enter($__internal_e56a41b3fc4ea8cd6cf5ffbc6038562ae6800ecf9aba1b3f3699670ff1cae058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e56a41b3fc4ea8cd6cf5ffbc6038562ae6800ecf9aba1b3f3699670ff1cae058->leave($__internal_e56a41b3fc4ea8cd6cf5ffbc6038562ae6800ecf9aba1b3f3699670ff1cae058_prof);

        
        $__internal_ed6b2615b4ec85d47fdf8945b31566bf79ca48ca9e4bb5b5e800281f161c40aa->leave($__internal_ed6b2615b4ec85d47fdf8945b31566bf79ca48ca9e4bb5b5e800281f161c40aa_prof);

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
