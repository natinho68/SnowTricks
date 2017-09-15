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
        $__internal_2d1590d0db318a3b450fc4d8d8203778ebf11ce4b0756fe70d1d1d5418adc6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1590d0db318a3b450fc4d8d8203778ebf11ce4b0756fe70d1d1d5418adc6e2->enter($__internal_2d1590d0db318a3b450fc4d8d8203778ebf11ce4b0756fe70d1d1d5418adc6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_39a289a3362c1a5f2acd757dcdd843edcfdd9d2ebce54221aa0980bbd5a04757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a289a3362c1a5f2acd757dcdd843edcfdd9d2ebce54221aa0980bbd5a04757->enter($__internal_39a289a3362c1a5f2acd757dcdd843edcfdd9d2ebce54221aa0980bbd5a04757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d1590d0db318a3b450fc4d8d8203778ebf11ce4b0756fe70d1d1d5418adc6e2->leave($__internal_2d1590d0db318a3b450fc4d8d8203778ebf11ce4b0756fe70d1d1d5418adc6e2_prof);

        
        $__internal_39a289a3362c1a5f2acd757dcdd843edcfdd9d2ebce54221aa0980bbd5a04757->leave($__internal_39a289a3362c1a5f2acd757dcdd843edcfdd9d2ebce54221aa0980bbd5a04757_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30131b43b9770b77c87746b541de776aacabf527cc6c99fa72db9239c858c677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30131b43b9770b77c87746b541de776aacabf527cc6c99fa72db9239c858c677->enter($__internal_30131b43b9770b77c87746b541de776aacabf527cc6c99fa72db9239c858c677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_61561253a7ca1cd01477fd5ffe83a074aa2cd0eb67c0b4400ba22ff1d9cee905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61561253a7ca1cd01477fd5ffe83a074aa2cd0eb67c0b4400ba22ff1d9cee905->enter($__internal_61561253a7ca1cd01477fd5ffe83a074aa2cd0eb67c0b4400ba22ff1d9cee905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_61561253a7ca1cd01477fd5ffe83a074aa2cd0eb67c0b4400ba22ff1d9cee905->leave($__internal_61561253a7ca1cd01477fd5ffe83a074aa2cd0eb67c0b4400ba22ff1d9cee905_prof);

        
        $__internal_30131b43b9770b77c87746b541de776aacabf527cc6c99fa72db9239c858c677->leave($__internal_30131b43b9770b77c87746b541de776aacabf527cc6c99fa72db9239c858c677_prof);

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
