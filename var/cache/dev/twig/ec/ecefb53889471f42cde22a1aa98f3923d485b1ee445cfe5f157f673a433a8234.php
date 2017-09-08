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
        $__internal_686aa4e2da5ffcbfbec8508d4f62bd19edc5d29a760b179b9628b6af28531db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686aa4e2da5ffcbfbec8508d4f62bd19edc5d29a760b179b9628b6af28531db2->enter($__internal_686aa4e2da5ffcbfbec8508d4f62bd19edc5d29a760b179b9628b6af28531db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_f8918b758fbfe80d41f771ddcef0b53c049b3e1ff482556c59add99014e9ed0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8918b758fbfe80d41f771ddcef0b53c049b3e1ff482556c59add99014e9ed0c->enter($__internal_f8918b758fbfe80d41f771ddcef0b53c049b3e1ff482556c59add99014e9ed0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_686aa4e2da5ffcbfbec8508d4f62bd19edc5d29a760b179b9628b6af28531db2->leave($__internal_686aa4e2da5ffcbfbec8508d4f62bd19edc5d29a760b179b9628b6af28531db2_prof);

        
        $__internal_f8918b758fbfe80d41f771ddcef0b53c049b3e1ff482556c59add99014e9ed0c->leave($__internal_f8918b758fbfe80d41f771ddcef0b53c049b3e1ff482556c59add99014e9ed0c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b489663a8fbd0b82aa87ff17316a408e30e17789382ae370b3ed815edffea14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b489663a8fbd0b82aa87ff17316a408e30e17789382ae370b3ed815edffea14a->enter($__internal_b489663a8fbd0b82aa87ff17316a408e30e17789382ae370b3ed815edffea14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2509c6545d37364b4cdd0e831c72f88ac7f7ee07519ccbc97daabb944b2eff30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2509c6545d37364b4cdd0e831c72f88ac7f7ee07519ccbc97daabb944b2eff30->enter($__internal_2509c6545d37364b4cdd0e831c72f88ac7f7ee07519ccbc97daabb944b2eff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_2509c6545d37364b4cdd0e831c72f88ac7f7ee07519ccbc97daabb944b2eff30->leave($__internal_2509c6545d37364b4cdd0e831c72f88ac7f7ee07519ccbc97daabb944b2eff30_prof);

        
        $__internal_b489663a8fbd0b82aa87ff17316a408e30e17789382ae370b3ed815edffea14a->leave($__internal_b489663a8fbd0b82aa87ff17316a408e30e17789382ae370b3ed815edffea14a_prof);

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
