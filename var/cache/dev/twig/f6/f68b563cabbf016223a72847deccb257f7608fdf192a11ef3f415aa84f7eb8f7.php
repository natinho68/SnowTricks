<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_18e2f0bcc54199452edcd610b439d96e7b380c6c9bcbdc222b2ccc77b1ca3c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ee4ab3a97355e0d155360ab61ba8e3caed5b64dc1a29cf9211cedea04b845348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4ab3a97355e0d155360ab61ba8e3caed5b64dc1a29cf9211cedea04b845348->enter($__internal_ee4ab3a97355e0d155360ab61ba8e3caed5b64dc1a29cf9211cedea04b845348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_900ce5a70a8d42f7851866d1e7df3eda8e1ad55fb06256ffa751d3808aecd92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900ce5a70a8d42f7851866d1e7df3eda8e1ad55fb06256ffa751d3808aecd92c->enter($__internal_900ce5a70a8d42f7851866d1e7df3eda8e1ad55fb06256ffa751d3808aecd92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee4ab3a97355e0d155360ab61ba8e3caed5b64dc1a29cf9211cedea04b845348->leave($__internal_ee4ab3a97355e0d155360ab61ba8e3caed5b64dc1a29cf9211cedea04b845348_prof);

        
        $__internal_900ce5a70a8d42f7851866d1e7df3eda8e1ad55fb06256ffa751d3808aecd92c->leave($__internal_900ce5a70a8d42f7851866d1e7df3eda8e1ad55fb06256ffa751d3808aecd92c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a7ff4122552c993396c056715524d2e1436add6275620978c9386e0f8260322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7ff4122552c993396c056715524d2e1436add6275620978c9386e0f8260322->enter($__internal_8a7ff4122552c993396c056715524d2e1436add6275620978c9386e0f8260322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f3d41abbe3a65629e45ce6584e7d302ef594d31c3b0e1207b54a1085069d736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3d41abbe3a65629e45ce6584e7d302ef594d31c3b0e1207b54a1085069d736->enter($__internal_7f3d41abbe3a65629e45ce6584e7d302ef594d31c3b0e1207b54a1085069d736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_7f3d41abbe3a65629e45ce6584e7d302ef594d31c3b0e1207b54a1085069d736->leave($__internal_7f3d41abbe3a65629e45ce6584e7d302ef594d31c3b0e1207b54a1085069d736_prof);

        
        $__internal_8a7ff4122552c993396c056715524d2e1436add6275620978c9386e0f8260322->leave($__internal_8a7ff4122552c993396c056715524d2e1436add6275620978c9386e0f8260322_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
