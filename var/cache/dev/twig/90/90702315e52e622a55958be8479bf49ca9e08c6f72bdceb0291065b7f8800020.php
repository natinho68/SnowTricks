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
        $__internal_05ed463de71e67198749de97e58882d55609d2a5a32e4941f5d05ec7dfcf532b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ed463de71e67198749de97e58882d55609d2a5a32e4941f5d05ec7dfcf532b->enter($__internal_05ed463de71e67198749de97e58882d55609d2a5a32e4941f5d05ec7dfcf532b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_2a7a90d6cce352935c848db88b76dac009da43c81eba09bdc38b9f0dc8f70607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7a90d6cce352935c848db88b76dac009da43c81eba09bdc38b9f0dc8f70607->enter($__internal_2a7a90d6cce352935c848db88b76dac009da43c81eba09bdc38b9f0dc8f70607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ed463de71e67198749de97e58882d55609d2a5a32e4941f5d05ec7dfcf532b->leave($__internal_05ed463de71e67198749de97e58882d55609d2a5a32e4941f5d05ec7dfcf532b_prof);

        
        $__internal_2a7a90d6cce352935c848db88b76dac009da43c81eba09bdc38b9f0dc8f70607->leave($__internal_2a7a90d6cce352935c848db88b76dac009da43c81eba09bdc38b9f0dc8f70607_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06fddd5cb24ebed1747b9cfdb568edeaf95ed36151ab46031db1f95ed648f6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06fddd5cb24ebed1747b9cfdb568edeaf95ed36151ab46031db1f95ed648f6c3->enter($__internal_06fddd5cb24ebed1747b9cfdb568edeaf95ed36151ab46031db1f95ed648f6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1673c13e3c15d3e322a48ceca567252bef4fe2ad27b68e885121e5a6a2afc233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1673c13e3c15d3e322a48ceca567252bef4fe2ad27b68e885121e5a6a2afc233->enter($__internal_1673c13e3c15d3e322a48ceca567252bef4fe2ad27b68e885121e5a6a2afc233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1673c13e3c15d3e322a48ceca567252bef4fe2ad27b68e885121e5a6a2afc233->leave($__internal_1673c13e3c15d3e322a48ceca567252bef4fe2ad27b68e885121e5a6a2afc233_prof);

        
        $__internal_06fddd5cb24ebed1747b9cfdb568edeaf95ed36151ab46031db1f95ed648f6c3->leave($__internal_06fddd5cb24ebed1747b9cfdb568edeaf95ed36151ab46031db1f95ed648f6c3_prof);

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
