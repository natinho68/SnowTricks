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
        $__internal_288db584813c19a95dc297e29dd6bef7148686b4166c8aa6601d7c86d5bacaf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288db584813c19a95dc297e29dd6bef7148686b4166c8aa6601d7c86d5bacaf0->enter($__internal_288db584813c19a95dc297e29dd6bef7148686b4166c8aa6601d7c86d5bacaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_5ba700209b6f0144c25aafc653254b15afa1208a2924231608c5abb545b5b942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba700209b6f0144c25aafc653254b15afa1208a2924231608c5abb545b5b942->enter($__internal_5ba700209b6f0144c25aafc653254b15afa1208a2924231608c5abb545b5b942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_288db584813c19a95dc297e29dd6bef7148686b4166c8aa6601d7c86d5bacaf0->leave($__internal_288db584813c19a95dc297e29dd6bef7148686b4166c8aa6601d7c86d5bacaf0_prof);

        
        $__internal_5ba700209b6f0144c25aafc653254b15afa1208a2924231608c5abb545b5b942->leave($__internal_5ba700209b6f0144c25aafc653254b15afa1208a2924231608c5abb545b5b942_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05e842b5ef74a0011af79f3682b17f8dbc0898da4616965b95fe326cc07d86b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e842b5ef74a0011af79f3682b17f8dbc0898da4616965b95fe326cc07d86b2->enter($__internal_05e842b5ef74a0011af79f3682b17f8dbc0898da4616965b95fe326cc07d86b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_034d6710a955dea2332b4824467ccfed9aca34d774da415d96ee76e1e9ff711e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034d6710a955dea2332b4824467ccfed9aca34d774da415d96ee76e1e9ff711e->enter($__internal_034d6710a955dea2332b4824467ccfed9aca34d774da415d96ee76e1e9ff711e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_034d6710a955dea2332b4824467ccfed9aca34d774da415d96ee76e1e9ff711e->leave($__internal_034d6710a955dea2332b4824467ccfed9aca34d774da415d96ee76e1e9ff711e_prof);

        
        $__internal_05e842b5ef74a0011af79f3682b17f8dbc0898da4616965b95fe326cc07d86b2->leave($__internal_05e842b5ef74a0011af79f3682b17f8dbc0898da4616965b95fe326cc07d86b2_prof);

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
