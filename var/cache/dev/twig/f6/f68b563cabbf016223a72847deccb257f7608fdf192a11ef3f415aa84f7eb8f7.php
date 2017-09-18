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
        $__internal_b59fd7d7ca5f28f990848bea4307268309ef5e1cd6d8c410549881d18f75fc6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59fd7d7ca5f28f990848bea4307268309ef5e1cd6d8c410549881d18f75fc6a->enter($__internal_b59fd7d7ca5f28f990848bea4307268309ef5e1cd6d8c410549881d18f75fc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_c5720faef521a2c796ba96dc730367690b2cd36ba3a65649fee9c4b4ea2cb33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5720faef521a2c796ba96dc730367690b2cd36ba3a65649fee9c4b4ea2cb33d->enter($__internal_c5720faef521a2c796ba96dc730367690b2cd36ba3a65649fee9c4b4ea2cb33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b59fd7d7ca5f28f990848bea4307268309ef5e1cd6d8c410549881d18f75fc6a->leave($__internal_b59fd7d7ca5f28f990848bea4307268309ef5e1cd6d8c410549881d18f75fc6a_prof);

        
        $__internal_c5720faef521a2c796ba96dc730367690b2cd36ba3a65649fee9c4b4ea2cb33d->leave($__internal_c5720faef521a2c796ba96dc730367690b2cd36ba3a65649fee9c4b4ea2cb33d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c02b1a04860793a1596816e59bdbe9efef0976c09b115b0079ce90068e74ed1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02b1a04860793a1596816e59bdbe9efef0976c09b115b0079ce90068e74ed1a->enter($__internal_c02b1a04860793a1596816e59bdbe9efef0976c09b115b0079ce90068e74ed1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ea0c9b74ed5ca449f7f44bfc4567c6b5769f7940cb567cee2b527cb601caa90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea0c9b74ed5ca449f7f44bfc4567c6b5769f7940cb567cee2b527cb601caa90->enter($__internal_2ea0c9b74ed5ca449f7f44bfc4567c6b5769f7940cb567cee2b527cb601caa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2ea0c9b74ed5ca449f7f44bfc4567c6b5769f7940cb567cee2b527cb601caa90->leave($__internal_2ea0c9b74ed5ca449f7f44bfc4567c6b5769f7940cb567cee2b527cb601caa90_prof);

        
        $__internal_c02b1a04860793a1596816e59bdbe9efef0976c09b115b0079ce90068e74ed1a->leave($__internal_c02b1a04860793a1596816e59bdbe9efef0976c09b115b0079ce90068e74ed1a_prof);

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
