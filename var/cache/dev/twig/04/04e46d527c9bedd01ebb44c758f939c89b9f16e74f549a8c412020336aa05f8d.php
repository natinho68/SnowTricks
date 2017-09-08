<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_ffbb16c21b1e634bf6bd9829a7329a63fb5c759df6d1cd9dbb576d3f05195b2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_21d28c8218e5cf582a4fffdd24034fa70bc397deea05336eefd87d87b04a6664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d28c8218e5cf582a4fffdd24034fa70bc397deea05336eefd87d87b04a6664->enter($__internal_21d28c8218e5cf582a4fffdd24034fa70bc397deea05336eefd87d87b04a6664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_924ef8c20f00b0565153c45f493d70c96de82d39fb7b6ae662fba92922dd98eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924ef8c20f00b0565153c45f493d70c96de82d39fb7b6ae662fba92922dd98eb->enter($__internal_924ef8c20f00b0565153c45f493d70c96de82d39fb7b6ae662fba92922dd98eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d28c8218e5cf582a4fffdd24034fa70bc397deea05336eefd87d87b04a6664->leave($__internal_21d28c8218e5cf582a4fffdd24034fa70bc397deea05336eefd87d87b04a6664_prof);

        
        $__internal_924ef8c20f00b0565153c45f493d70c96de82d39fb7b6ae662fba92922dd98eb->leave($__internal_924ef8c20f00b0565153c45f493d70c96de82d39fb7b6ae662fba92922dd98eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae583e66ae01f526bee90254ab12b47c9c5919260cd973ab6f0ebe112769a109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae583e66ae01f526bee90254ab12b47c9c5919260cd973ab6f0ebe112769a109->enter($__internal_ae583e66ae01f526bee90254ab12b47c9c5919260cd973ab6f0ebe112769a109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cdb6d16d127f9b5c9fee8b4fa921a0b200dab2328ee24485db778821b25dfb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb6d16d127f9b5c9fee8b4fa921a0b200dab2328ee24485db778821b25dfb38->enter($__internal_cdb6d16d127f9b5c9fee8b4fa921a0b200dab2328ee24485db778821b25dfb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_cdb6d16d127f9b5c9fee8b4fa921a0b200dab2328ee24485db778821b25dfb38->leave($__internal_cdb6d16d127f9b5c9fee8b4fa921a0b200dab2328ee24485db778821b25dfb38_prof);

        
        $__internal_ae583e66ae01f526bee90254ab12b47c9c5919260cd973ab6f0ebe112769a109->leave($__internal_ae583e66ae01f526bee90254ab12b47c9c5919260cd973ab6f0ebe112769a109_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
