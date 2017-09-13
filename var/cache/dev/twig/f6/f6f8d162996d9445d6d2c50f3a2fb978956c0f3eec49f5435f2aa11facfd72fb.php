<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_593eee9993242872a9e8bbcae414c864ad7cbe11279d476c58b37bce791ae173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_c940fd5de95d392160d4c57107841338fe8e6d4cd72b4c5ee99c5aa313cd6b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c940fd5de95d392160d4c57107841338fe8e6d4cd72b4c5ee99c5aa313cd6b80->enter($__internal_c940fd5de95d392160d4c57107841338fe8e6d4cd72b4c5ee99c5aa313cd6b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_bc56affaa7b809fdd915b36b5faf5cd79cb0582a697eeea22c7c370ffb86d012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc56affaa7b809fdd915b36b5faf5cd79cb0582a697eeea22c7c370ffb86d012->enter($__internal_bc56affaa7b809fdd915b36b5faf5cd79cb0582a697eeea22c7c370ffb86d012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c940fd5de95d392160d4c57107841338fe8e6d4cd72b4c5ee99c5aa313cd6b80->leave($__internal_c940fd5de95d392160d4c57107841338fe8e6d4cd72b4c5ee99c5aa313cd6b80_prof);

        
        $__internal_bc56affaa7b809fdd915b36b5faf5cd79cb0582a697eeea22c7c370ffb86d012->leave($__internal_bc56affaa7b809fdd915b36b5faf5cd79cb0582a697eeea22c7c370ffb86d012_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_331900045570936f1e7005c458446315db0379fef30914d463061186c1e5c215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331900045570936f1e7005c458446315db0379fef30914d463061186c1e5c215->enter($__internal_331900045570936f1e7005c458446315db0379fef30914d463061186c1e5c215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4738b3513ebec52583dfd4d961519d3b9b134c8295b3d04b6ea76e5613f4cdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4738b3513ebec52583dfd4d961519d3b9b134c8295b3d04b6ea76e5613f4cdc0->enter($__internal_4738b3513ebec52583dfd4d961519d3b9b134c8295b3d04b6ea76e5613f4cdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4738b3513ebec52583dfd4d961519d3b9b134c8295b3d04b6ea76e5613f4cdc0->leave($__internal_4738b3513ebec52583dfd4d961519d3b9b134c8295b3d04b6ea76e5613f4cdc0_prof);

        
        $__internal_331900045570936f1e7005c458446315db0379fef30914d463061186c1e5c215->leave($__internal_331900045570936f1e7005c458446315db0379fef30914d463061186c1e5c215_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
