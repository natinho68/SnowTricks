<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d7477e85ff500e2feb3384e4772495977957dfde0ac620b81004c083288b09e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_247f269a1b3eebfe39d082c0f215a7f8ad0b14dab090c3b2e607a05a64063ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247f269a1b3eebfe39d082c0f215a7f8ad0b14dab090c3b2e607a05a64063ff8->enter($__internal_247f269a1b3eebfe39d082c0f215a7f8ad0b14dab090c3b2e607a05a64063ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5b8831317ca4c9182da1b3847881a4d72477f80d334c83cc6abe80f49638e83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8831317ca4c9182da1b3847881a4d72477f80d334c83cc6abe80f49638e83e->enter($__internal_5b8831317ca4c9182da1b3847881a4d72477f80d334c83cc6abe80f49638e83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247f269a1b3eebfe39d082c0f215a7f8ad0b14dab090c3b2e607a05a64063ff8->leave($__internal_247f269a1b3eebfe39d082c0f215a7f8ad0b14dab090c3b2e607a05a64063ff8_prof);

        
        $__internal_5b8831317ca4c9182da1b3847881a4d72477f80d334c83cc6abe80f49638e83e->leave($__internal_5b8831317ca4c9182da1b3847881a4d72477f80d334c83cc6abe80f49638e83e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9df0d8ea42d6be204002980bca0d17c10b2014182f682ff5b627e5cb9860a524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df0d8ea42d6be204002980bca0d17c10b2014182f682ff5b627e5cb9860a524->enter($__internal_9df0d8ea42d6be204002980bca0d17c10b2014182f682ff5b627e5cb9860a524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dc92a73bc38719580667e15c88c4c55b177987eb50a1a042bb39eaee57754901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc92a73bc38719580667e15c88c4c55b177987eb50a1a042bb39eaee57754901->enter($__internal_dc92a73bc38719580667e15c88c4c55b177987eb50a1a042bb39eaee57754901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_dc92a73bc38719580667e15c88c4c55b177987eb50a1a042bb39eaee57754901->leave($__internal_dc92a73bc38719580667e15c88c4c55b177987eb50a1a042bb39eaee57754901_prof);

        
        $__internal_9df0d8ea42d6be204002980bca0d17c10b2014182f682ff5b627e5cb9860a524->leave($__internal_9df0d8ea42d6be204002980bca0d17c10b2014182f682ff5b627e5cb9860a524_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
