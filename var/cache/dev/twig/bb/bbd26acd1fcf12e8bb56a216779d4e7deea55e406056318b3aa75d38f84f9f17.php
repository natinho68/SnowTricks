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
        $__internal_41b77270486b0e53951162f7c1cea6442d1baa012098070a9b37db4bc4bc9114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b77270486b0e53951162f7c1cea6442d1baa012098070a9b37db4bc4bc9114->enter($__internal_41b77270486b0e53951162f7c1cea6442d1baa012098070a9b37db4bc4bc9114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_99be07659d161904b70f1f3edfa631b0e3ee65f728046b09e77354d45a6d00cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99be07659d161904b70f1f3edfa631b0e3ee65f728046b09e77354d45a6d00cf->enter($__internal_99be07659d161904b70f1f3edfa631b0e3ee65f728046b09e77354d45a6d00cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41b77270486b0e53951162f7c1cea6442d1baa012098070a9b37db4bc4bc9114->leave($__internal_41b77270486b0e53951162f7c1cea6442d1baa012098070a9b37db4bc4bc9114_prof);

        
        $__internal_99be07659d161904b70f1f3edfa631b0e3ee65f728046b09e77354d45a6d00cf->leave($__internal_99be07659d161904b70f1f3edfa631b0e3ee65f728046b09e77354d45a6d00cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bc9f0a55e07a7fbe5aeacafdbc6ab927da5a6ecb93edc7cc1ce1eee2544997c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc9f0a55e07a7fbe5aeacafdbc6ab927da5a6ecb93edc7cc1ce1eee2544997c->enter($__internal_7bc9f0a55e07a7fbe5aeacafdbc6ab927da5a6ecb93edc7cc1ce1eee2544997c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35f54311cf0deee76dea94dc728a9b66dbaf6a25e463f9f9abf2d3bffd757fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f54311cf0deee76dea94dc728a9b66dbaf6a25e463f9f9abf2d3bffd757fb2->enter($__internal_35f54311cf0deee76dea94dc728a9b66dbaf6a25e463f9f9abf2d3bffd757fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_35f54311cf0deee76dea94dc728a9b66dbaf6a25e463f9f9abf2d3bffd757fb2->leave($__internal_35f54311cf0deee76dea94dc728a9b66dbaf6a25e463f9f9abf2d3bffd757fb2_prof);

        
        $__internal_7bc9f0a55e07a7fbe5aeacafdbc6ab927da5a6ecb93edc7cc1ce1eee2544997c->leave($__internal_7bc9f0a55e07a7fbe5aeacafdbc6ab927da5a6ecb93edc7cc1ce1eee2544997c_prof);

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
