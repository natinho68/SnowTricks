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
        $__internal_e5b7766440c58b62d615c19d96382b56fae19a0b483e2454bfaf7f57cf58b4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b7766440c58b62d615c19d96382b56fae19a0b483e2454bfaf7f57cf58b4c2->enter($__internal_e5b7766440c58b62d615c19d96382b56fae19a0b483e2454bfaf7f57cf58b4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_6cbfe3472ba9c8beb2c6685e90b7d6faf04ce4060f3bf24ad156d301c706ac74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbfe3472ba9c8beb2c6685e90b7d6faf04ce4060f3bf24ad156d301c706ac74->enter($__internal_6cbfe3472ba9c8beb2c6685e90b7d6faf04ce4060f3bf24ad156d301c706ac74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5b7766440c58b62d615c19d96382b56fae19a0b483e2454bfaf7f57cf58b4c2->leave($__internal_e5b7766440c58b62d615c19d96382b56fae19a0b483e2454bfaf7f57cf58b4c2_prof);

        
        $__internal_6cbfe3472ba9c8beb2c6685e90b7d6faf04ce4060f3bf24ad156d301c706ac74->leave($__internal_6cbfe3472ba9c8beb2c6685e90b7d6faf04ce4060f3bf24ad156d301c706ac74_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebd43c009555cbe81f6bd2d24b3756903399c46fa7f0bc2470e66e5694993323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd43c009555cbe81f6bd2d24b3756903399c46fa7f0bc2470e66e5694993323->enter($__internal_ebd43c009555cbe81f6bd2d24b3756903399c46fa7f0bc2470e66e5694993323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_45f4b082671e2a6899dc14ed46c0f8342a548555123e715f988cbecdc9c03331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f4b082671e2a6899dc14ed46c0f8342a548555123e715f988cbecdc9c03331->enter($__internal_45f4b082671e2a6899dc14ed46c0f8342a548555123e715f988cbecdc9c03331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_45f4b082671e2a6899dc14ed46c0f8342a548555123e715f988cbecdc9c03331->leave($__internal_45f4b082671e2a6899dc14ed46c0f8342a548555123e715f988cbecdc9c03331_prof);

        
        $__internal_ebd43c009555cbe81f6bd2d24b3756903399c46fa7f0bc2470e66e5694993323->leave($__internal_ebd43c009555cbe81f6bd2d24b3756903399c46fa7f0bc2470e66e5694993323_prof);

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
