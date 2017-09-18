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
        $__internal_4b095f695797857b98a4489c896b458524d79b396af57d9b6dc5c7d2b7136ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b095f695797857b98a4489c896b458524d79b396af57d9b6dc5c7d2b7136ab2->enter($__internal_4b095f695797857b98a4489c896b458524d79b396af57d9b6dc5c7d2b7136ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_7229a690b03508658f77ac3f345ac742bd3efc3fe3d9efe20802963647ee9487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7229a690b03508658f77ac3f345ac742bd3efc3fe3d9efe20802963647ee9487->enter($__internal_7229a690b03508658f77ac3f345ac742bd3efc3fe3d9efe20802963647ee9487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b095f695797857b98a4489c896b458524d79b396af57d9b6dc5c7d2b7136ab2->leave($__internal_4b095f695797857b98a4489c896b458524d79b396af57d9b6dc5c7d2b7136ab2_prof);

        
        $__internal_7229a690b03508658f77ac3f345ac742bd3efc3fe3d9efe20802963647ee9487->leave($__internal_7229a690b03508658f77ac3f345ac742bd3efc3fe3d9efe20802963647ee9487_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e3ba122c0224059bebeae810770239c46f845965a1eaaad401e73526f3dedc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3ba122c0224059bebeae810770239c46f845965a1eaaad401e73526f3dedc3->enter($__internal_0e3ba122c0224059bebeae810770239c46f845965a1eaaad401e73526f3dedc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0b271fc9ffc40d24e940eccc65087d443155e0d8b5ec01f20e99f97c439cf9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b271fc9ffc40d24e940eccc65087d443155e0d8b5ec01f20e99f97c439cf9c->enter($__internal_c0b271fc9ffc40d24e940eccc65087d443155e0d8b5ec01f20e99f97c439cf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c0b271fc9ffc40d24e940eccc65087d443155e0d8b5ec01f20e99f97c439cf9c->leave($__internal_c0b271fc9ffc40d24e940eccc65087d443155e0d8b5ec01f20e99f97c439cf9c_prof);

        
        $__internal_0e3ba122c0224059bebeae810770239c46f845965a1eaaad401e73526f3dedc3->leave($__internal_0e3ba122c0224059bebeae810770239c46f845965a1eaaad401e73526f3dedc3_prof);

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
