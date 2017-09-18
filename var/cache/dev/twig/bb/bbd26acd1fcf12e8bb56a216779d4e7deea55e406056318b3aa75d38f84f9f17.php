<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_eca13deb91d3d966ee2705303cb96f8790f416f49afe737ccf913c7de0cf2408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_d1abec32db06f61de0b13e29dc15240485650bb5f839fc9b079cf925e8d5999a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1abec32db06f61de0b13e29dc15240485650bb5f839fc9b079cf925e8d5999a->enter($__internal_d1abec32db06f61de0b13e29dc15240485650bb5f839fc9b079cf925e8d5999a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_ae35308c08de31cf22dcb3cfaf026be308d0c3ee5aee976fb5d52dcaeef89176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae35308c08de31cf22dcb3cfaf026be308d0c3ee5aee976fb5d52dcaeef89176->enter($__internal_ae35308c08de31cf22dcb3cfaf026be308d0c3ee5aee976fb5d52dcaeef89176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1abec32db06f61de0b13e29dc15240485650bb5f839fc9b079cf925e8d5999a->leave($__internal_d1abec32db06f61de0b13e29dc15240485650bb5f839fc9b079cf925e8d5999a_prof);

        
        $__internal_ae35308c08de31cf22dcb3cfaf026be308d0c3ee5aee976fb5d52dcaeef89176->leave($__internal_ae35308c08de31cf22dcb3cfaf026be308d0c3ee5aee976fb5d52dcaeef89176_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13261990e9cb09ecad9af92012aadd8b11e033d935a507ead89d29c50bf075fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13261990e9cb09ecad9af92012aadd8b11e033d935a507ead89d29c50bf075fe->enter($__internal_13261990e9cb09ecad9af92012aadd8b11e033d935a507ead89d29c50bf075fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9cf3915a41a7a218c42915d5eaebeb1684b8f8b0e7a78027716eede4b4f048ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf3915a41a7a218c42915d5eaebeb1684b8f8b0e7a78027716eede4b4f048ab->enter($__internal_9cf3915a41a7a218c42915d5eaebeb1684b8f8b0e7a78027716eede4b4f048ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9cf3915a41a7a218c42915d5eaebeb1684b8f8b0e7a78027716eede4b4f048ab->leave($__internal_9cf3915a41a7a218c42915d5eaebeb1684b8f8b0e7a78027716eede4b4f048ab_prof);

        
        $__internal_13261990e9cb09ecad9af92012aadd8b11e033d935a507ead89d29c50bf075fe->leave($__internal_13261990e9cb09ecad9af92012aadd8b11e033d935a507ead89d29c50bf075fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
