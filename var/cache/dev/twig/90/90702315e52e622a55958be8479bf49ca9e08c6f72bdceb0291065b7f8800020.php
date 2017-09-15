<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_7e84b3604ebc1c3322e971fb56a326110ccd698d8d6b171d6ca323c8dbd89467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_6943c451f9dea0d37e90853b164d2d16c0e28773cd2a5f1402184ec449b9b7ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6943c451f9dea0d37e90853b164d2d16c0e28773cd2a5f1402184ec449b9b7ce->enter($__internal_6943c451f9dea0d37e90853b164d2d16c0e28773cd2a5f1402184ec449b9b7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_17a2fcc92f5fdab62a7b732a3860b0a69520685b24291dd84f1c407cccad8a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a2fcc92f5fdab62a7b732a3860b0a69520685b24291dd84f1c407cccad8a18->enter($__internal_17a2fcc92f5fdab62a7b732a3860b0a69520685b24291dd84f1c407cccad8a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6943c451f9dea0d37e90853b164d2d16c0e28773cd2a5f1402184ec449b9b7ce->leave($__internal_6943c451f9dea0d37e90853b164d2d16c0e28773cd2a5f1402184ec449b9b7ce_prof);

        
        $__internal_17a2fcc92f5fdab62a7b732a3860b0a69520685b24291dd84f1c407cccad8a18->leave($__internal_17a2fcc92f5fdab62a7b732a3860b0a69520685b24291dd84f1c407cccad8a18_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e0957d44504500a174d93690db4d67b9956a6ea0ef39ce344e11b58a4ef92eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0957d44504500a174d93690db4d67b9956a6ea0ef39ce344e11b58a4ef92eb->enter($__internal_3e0957d44504500a174d93690db4d67b9956a6ea0ef39ce344e11b58a4ef92eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8def1766a64f36cf94b534f5fa8d30a0e0357d28d0b270be78ea9758ff8ddfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8def1766a64f36cf94b534f5fa8d30a0e0357d28d0b270be78ea9758ff8ddfc4->enter($__internal_8def1766a64f36cf94b534f5fa8d30a0e0357d28d0b270be78ea9758ff8ddfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_8def1766a64f36cf94b534f5fa8d30a0e0357d28d0b270be78ea9758ff8ddfc4->leave($__internal_8def1766a64f36cf94b534f5fa8d30a0e0357d28d0b270be78ea9758ff8ddfc4_prof);

        
        $__internal_3e0957d44504500a174d93690db4d67b9956a6ea0ef39ce344e11b58a4ef92eb->leave($__internal_3e0957d44504500a174d93690db4d67b9956a6ea0ef39ce344e11b58a4ef92eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
