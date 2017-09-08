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
        $__internal_2a79a99bd67c326f30b429fc7576c6d8f18379c8c1d546acff3939ce8f9e756d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a79a99bd67c326f30b429fc7576c6d8f18379c8c1d546acff3939ce8f9e756d->enter($__internal_2a79a99bd67c326f30b429fc7576c6d8f18379c8c1d546acff3939ce8f9e756d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_7051b46d6b61200f29436e30d662d5ca7c96ca551235cc1f8bd847c7394356e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7051b46d6b61200f29436e30d662d5ca7c96ca551235cc1f8bd847c7394356e5->enter($__internal_7051b46d6b61200f29436e30d662d5ca7c96ca551235cc1f8bd847c7394356e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a79a99bd67c326f30b429fc7576c6d8f18379c8c1d546acff3939ce8f9e756d->leave($__internal_2a79a99bd67c326f30b429fc7576c6d8f18379c8c1d546acff3939ce8f9e756d_prof);

        
        $__internal_7051b46d6b61200f29436e30d662d5ca7c96ca551235cc1f8bd847c7394356e5->leave($__internal_7051b46d6b61200f29436e30d662d5ca7c96ca551235cc1f8bd847c7394356e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f86e6ded1e3053f11b799ec664c792cf14643ac6a27f9de2c70a2cd80d28db3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86e6ded1e3053f11b799ec664c792cf14643ac6a27f9de2c70a2cd80d28db3d->enter($__internal_f86e6ded1e3053f11b799ec664c792cf14643ac6a27f9de2c70a2cd80d28db3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_75213ba407876344cd498b4b240d584911440438a32d01965e24c534eab9e0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75213ba407876344cd498b4b240d584911440438a32d01965e24c534eab9e0c8->enter($__internal_75213ba407876344cd498b4b240d584911440438a32d01965e24c534eab9e0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_75213ba407876344cd498b4b240d584911440438a32d01965e24c534eab9e0c8->leave($__internal_75213ba407876344cd498b4b240d584911440438a32d01965e24c534eab9e0c8_prof);

        
        $__internal_f86e6ded1e3053f11b799ec664c792cf14643ac6a27f9de2c70a2cd80d28db3d->leave($__internal_f86e6ded1e3053f11b799ec664c792cf14643ac6a27f9de2c70a2cd80d28db3d_prof);

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
