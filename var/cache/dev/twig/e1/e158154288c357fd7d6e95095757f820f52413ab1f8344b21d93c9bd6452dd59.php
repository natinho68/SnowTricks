<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92b2c4b4e50f874b8f58b3408bf890cbfb8607d01265f4d38109cc354eb216d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a6fdd79f8b47cbca466150e854820048bdb953f26ea5b3cf4bd6c6d92c0f54ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fdd79f8b47cbca466150e854820048bdb953f26ea5b3cf4bd6c6d92c0f54ce->enter($__internal_a6fdd79f8b47cbca466150e854820048bdb953f26ea5b3cf4bd6c6d92c0f54ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_0d765e26937a0052451da19b682cb83c7e3c014436d58c72f047d42e7aabc6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d765e26937a0052451da19b682cb83c7e3c014436d58c72f047d42e7aabc6f6->enter($__internal_0d765e26937a0052451da19b682cb83c7e3c014436d58c72f047d42e7aabc6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6fdd79f8b47cbca466150e854820048bdb953f26ea5b3cf4bd6c6d92c0f54ce->leave($__internal_a6fdd79f8b47cbca466150e854820048bdb953f26ea5b3cf4bd6c6d92c0f54ce_prof);

        
        $__internal_0d765e26937a0052451da19b682cb83c7e3c014436d58c72f047d42e7aabc6f6->leave($__internal_0d765e26937a0052451da19b682cb83c7e3c014436d58c72f047d42e7aabc6f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d8dcfb428e8e4366ff6d76d014d53851a1f235d19385f1e7700473915a851eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8dcfb428e8e4366ff6d76d014d53851a1f235d19385f1e7700473915a851eb->enter($__internal_7d8dcfb428e8e4366ff6d76d014d53851a1f235d19385f1e7700473915a851eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b229161b351df7f1e01e3ea1260c8d3b8a94b3f838b7da60ed17712a1e1ee01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b229161b351df7f1e01e3ea1260c8d3b8a94b3f838b7da60ed17712a1e1ee01->enter($__internal_4b229161b351df7f1e01e3ea1260c8d3b8a94b3f838b7da60ed17712a1e1ee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4b229161b351df7f1e01e3ea1260c8d3b8a94b3f838b7da60ed17712a1e1ee01->leave($__internal_4b229161b351df7f1e01e3ea1260c8d3b8a94b3f838b7da60ed17712a1e1ee01_prof);

        
        $__internal_7d8dcfb428e8e4366ff6d76d014d53851a1f235d19385f1e7700473915a851eb->leave($__internal_7d8dcfb428e8e4366ff6d76d014d53851a1f235d19385f1e7700473915a851eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
