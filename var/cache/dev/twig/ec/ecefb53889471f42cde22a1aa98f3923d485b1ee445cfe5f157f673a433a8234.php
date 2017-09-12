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
        $__internal_e18d6659d0e0c59c1e396b0544f0e7204629a743c16076c281d2526511ca7304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18d6659d0e0c59c1e396b0544f0e7204629a743c16076c281d2526511ca7304->enter($__internal_e18d6659d0e0c59c1e396b0544f0e7204629a743c16076c281d2526511ca7304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_0ec5632323ff88c6848d3391b3bccee7e1538331aab614363f5b2be8ad06f652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec5632323ff88c6848d3391b3bccee7e1538331aab614363f5b2be8ad06f652->enter($__internal_0ec5632323ff88c6848d3391b3bccee7e1538331aab614363f5b2be8ad06f652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e18d6659d0e0c59c1e396b0544f0e7204629a743c16076c281d2526511ca7304->leave($__internal_e18d6659d0e0c59c1e396b0544f0e7204629a743c16076c281d2526511ca7304_prof);

        
        $__internal_0ec5632323ff88c6848d3391b3bccee7e1538331aab614363f5b2be8ad06f652->leave($__internal_0ec5632323ff88c6848d3391b3bccee7e1538331aab614363f5b2be8ad06f652_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0707f07d3b43d26451c99885bf460d5d7afb1cbf5d25b0a602fb87b25686e3f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0707f07d3b43d26451c99885bf460d5d7afb1cbf5d25b0a602fb87b25686e3f7->enter($__internal_0707f07d3b43d26451c99885bf460d5d7afb1cbf5d25b0a602fb87b25686e3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_14ea9a7b487ad3bfaa1b10da013803e42ddcb2f65b8fdac24f640848ca028a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ea9a7b487ad3bfaa1b10da013803e42ddcb2f65b8fdac24f640848ca028a4b->enter($__internal_14ea9a7b487ad3bfaa1b10da013803e42ddcb2f65b8fdac24f640848ca028a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_14ea9a7b487ad3bfaa1b10da013803e42ddcb2f65b8fdac24f640848ca028a4b->leave($__internal_14ea9a7b487ad3bfaa1b10da013803e42ddcb2f65b8fdac24f640848ca028a4b_prof);

        
        $__internal_0707f07d3b43d26451c99885bf460d5d7afb1cbf5d25b0a602fb87b25686e3f7->leave($__internal_0707f07d3b43d26451c99885bf460d5d7afb1cbf5d25b0a602fb87b25686e3f7_prof);

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
