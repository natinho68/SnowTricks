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
        $__internal_d3255f77020d7a4503d49b82b36cab7860a067de4ff04ef5a7fb3e1bc401cab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3255f77020d7a4503d49b82b36cab7860a067de4ff04ef5a7fb3e1bc401cab4->enter($__internal_d3255f77020d7a4503d49b82b36cab7860a067de4ff04ef5a7fb3e1bc401cab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_830736d12675bcdfe21756821ce4015821e6cb637fac21efc48d832aa4e8e510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830736d12675bcdfe21756821ce4015821e6cb637fac21efc48d832aa4e8e510->enter($__internal_830736d12675bcdfe21756821ce4015821e6cb637fac21efc48d832aa4e8e510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3255f77020d7a4503d49b82b36cab7860a067de4ff04ef5a7fb3e1bc401cab4->leave($__internal_d3255f77020d7a4503d49b82b36cab7860a067de4ff04ef5a7fb3e1bc401cab4_prof);

        
        $__internal_830736d12675bcdfe21756821ce4015821e6cb637fac21efc48d832aa4e8e510->leave($__internal_830736d12675bcdfe21756821ce4015821e6cb637fac21efc48d832aa4e8e510_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b1498eca2d1f98be5584c7ca695c947846b6ff0b9b9dd073c1656a2f9959c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1498eca2d1f98be5584c7ca695c947846b6ff0b9b9dd073c1656a2f9959c38->enter($__internal_4b1498eca2d1f98be5584c7ca695c947846b6ff0b9b9dd073c1656a2f9959c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91a974c7da7b664e62b27ba295890b5f7cd28df0d91fb82ea5bfe970559b4a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a974c7da7b664e62b27ba295890b5f7cd28df0d91fb82ea5bfe970559b4a9d->enter($__internal_91a974c7da7b664e62b27ba295890b5f7cd28df0d91fb82ea5bfe970559b4a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_91a974c7da7b664e62b27ba295890b5f7cd28df0d91fb82ea5bfe970559b4a9d->leave($__internal_91a974c7da7b664e62b27ba295890b5f7cd28df0d91fb82ea5bfe970559b4a9d_prof);

        
        $__internal_4b1498eca2d1f98be5584c7ca695c947846b6ff0b9b9dd073c1656a2f9959c38->leave($__internal_4b1498eca2d1f98be5584c7ca695c947846b6ff0b9b9dd073c1656a2f9959c38_prof);

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
