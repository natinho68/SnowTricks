<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_87763d4938b8a69549d8d249f60b1d24048edfceba0c859d6997ebb81fa85e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_0fd6116198daf28837bfa7b7672f4fba89c1d7e7d76e3dcf48c0060a66794ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd6116198daf28837bfa7b7672f4fba89c1d7e7d76e3dcf48c0060a66794ef5->enter($__internal_0fd6116198daf28837bfa7b7672f4fba89c1d7e7d76e3dcf48c0060a66794ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_3f5ffaeba96c28de50c65c1c57cdaaf88f51dd81a068795788ed760af67c6d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5ffaeba96c28de50c65c1c57cdaaf88f51dd81a068795788ed760af67c6d2f->enter($__internal_3f5ffaeba96c28de50c65c1c57cdaaf88f51dd81a068795788ed760af67c6d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fd6116198daf28837bfa7b7672f4fba89c1d7e7d76e3dcf48c0060a66794ef5->leave($__internal_0fd6116198daf28837bfa7b7672f4fba89c1d7e7d76e3dcf48c0060a66794ef5_prof);

        
        $__internal_3f5ffaeba96c28de50c65c1c57cdaaf88f51dd81a068795788ed760af67c6d2f->leave($__internal_3f5ffaeba96c28de50c65c1c57cdaaf88f51dd81a068795788ed760af67c6d2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17153d245b3ae52e1dcff1dcb1236cda98d620ef0851de3c1ec228e88b449232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17153d245b3ae52e1dcff1dcb1236cda98d620ef0851de3c1ec228e88b449232->enter($__internal_17153d245b3ae52e1dcff1dcb1236cda98d620ef0851de3c1ec228e88b449232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a2944acc786ed29f2e2419f424cbd763e9cf43b9bb53da2173d604f331e0afea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2944acc786ed29f2e2419f424cbd763e9cf43b9bb53da2173d604f331e0afea->enter($__internal_a2944acc786ed29f2e2419f424cbd763e9cf43b9bb53da2173d604f331e0afea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_a2944acc786ed29f2e2419f424cbd763e9cf43b9bb53da2173d604f331e0afea->leave($__internal_a2944acc786ed29f2e2419f424cbd763e9cf43b9bb53da2173d604f331e0afea_prof);

        
        $__internal_17153d245b3ae52e1dcff1dcb1236cda98d620ef0851de3c1ec228e88b449232->leave($__internal_17153d245b3ae52e1dcff1dcb1236cda98d620ef0851de3c1ec228e88b449232_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
