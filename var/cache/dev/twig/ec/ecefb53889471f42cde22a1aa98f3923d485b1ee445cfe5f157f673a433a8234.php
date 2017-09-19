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
        $__internal_2e354f6cf8826257d1ac48e21c66eb8e373e24fe04f89c8b86dff096981bb99c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e354f6cf8826257d1ac48e21c66eb8e373e24fe04f89c8b86dff096981bb99c->enter($__internal_2e354f6cf8826257d1ac48e21c66eb8e373e24fe04f89c8b86dff096981bb99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_c3a66708e0760519294d6552923794363cc95723bfad10b26a2f2f931d1093c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a66708e0760519294d6552923794363cc95723bfad10b26a2f2f931d1093c2->enter($__internal_c3a66708e0760519294d6552923794363cc95723bfad10b26a2f2f931d1093c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e354f6cf8826257d1ac48e21c66eb8e373e24fe04f89c8b86dff096981bb99c->leave($__internal_2e354f6cf8826257d1ac48e21c66eb8e373e24fe04f89c8b86dff096981bb99c_prof);

        
        $__internal_c3a66708e0760519294d6552923794363cc95723bfad10b26a2f2f931d1093c2->leave($__internal_c3a66708e0760519294d6552923794363cc95723bfad10b26a2f2f931d1093c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d021b74f39b8c04b59c621fa07d5e5d6d7c6279317a57356bcae0c59a7ed6ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d021b74f39b8c04b59c621fa07d5e5d6d7c6279317a57356bcae0c59a7ed6ff1->enter($__internal_d021b74f39b8c04b59c621fa07d5e5d6d7c6279317a57356bcae0c59a7ed6ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5d596114966c2bf7c53df6b13cbb0ad11ff8448cefe350bfb73243a603f91ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d596114966c2bf7c53df6b13cbb0ad11ff8448cefe350bfb73243a603f91ece->enter($__internal_5d596114966c2bf7c53df6b13cbb0ad11ff8448cefe350bfb73243a603f91ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5d596114966c2bf7c53df6b13cbb0ad11ff8448cefe350bfb73243a603f91ece->leave($__internal_5d596114966c2bf7c53df6b13cbb0ad11ff8448cefe350bfb73243a603f91ece_prof);

        
        $__internal_d021b74f39b8c04b59c621fa07d5e5d6d7c6279317a57356bcae0c59a7ed6ff1->leave($__internal_d021b74f39b8c04b59c621fa07d5e5d6d7c6279317a57356bcae0c59a7ed6ff1_prof);

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
