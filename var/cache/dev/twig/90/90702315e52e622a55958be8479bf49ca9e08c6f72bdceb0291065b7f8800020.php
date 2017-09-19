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
        $__internal_dea2339aa4dc5d503c8097c2b1286a6bae8c451349e6b6c2e2508d69b4e236bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea2339aa4dc5d503c8097c2b1286a6bae8c451349e6b6c2e2508d69b4e236bd->enter($__internal_dea2339aa4dc5d503c8097c2b1286a6bae8c451349e6b6c2e2508d69b4e236bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_0a3ab53bb2e9baadf8927540fa8d616ee8aa53f3170a33f3ae447464846bcf96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3ab53bb2e9baadf8927540fa8d616ee8aa53f3170a33f3ae447464846bcf96->enter($__internal_0a3ab53bb2e9baadf8927540fa8d616ee8aa53f3170a33f3ae447464846bcf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea2339aa4dc5d503c8097c2b1286a6bae8c451349e6b6c2e2508d69b4e236bd->leave($__internal_dea2339aa4dc5d503c8097c2b1286a6bae8c451349e6b6c2e2508d69b4e236bd_prof);

        
        $__internal_0a3ab53bb2e9baadf8927540fa8d616ee8aa53f3170a33f3ae447464846bcf96->leave($__internal_0a3ab53bb2e9baadf8927540fa8d616ee8aa53f3170a33f3ae447464846bcf96_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73a7e40301757dd6210084525f42ec61dc4876cad34724df92b13ea08a659494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a7e40301757dd6210084525f42ec61dc4876cad34724df92b13ea08a659494->enter($__internal_73a7e40301757dd6210084525f42ec61dc4876cad34724df92b13ea08a659494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_083dd72413c500fa255afeb27f110ec77b2396374327f8758ec67a2173860228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083dd72413c500fa255afeb27f110ec77b2396374327f8758ec67a2173860228->enter($__internal_083dd72413c500fa255afeb27f110ec77b2396374327f8758ec67a2173860228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_083dd72413c500fa255afeb27f110ec77b2396374327f8758ec67a2173860228->leave($__internal_083dd72413c500fa255afeb27f110ec77b2396374327f8758ec67a2173860228_prof);

        
        $__internal_73a7e40301757dd6210084525f42ec61dc4876cad34724df92b13ea08a659494->leave($__internal_73a7e40301757dd6210084525f42ec61dc4876cad34724df92b13ea08a659494_prof);

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
