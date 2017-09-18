<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_290ce38760978f0db598839df3e1d384f0eae48af636154b5c7d15e0899b8d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_1b477bad695e2472a3b54aef8dcf01993e6302cd0d6a86f5898738a42f36d5e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b477bad695e2472a3b54aef8dcf01993e6302cd0d6a86f5898738a42f36d5e1->enter($__internal_1b477bad695e2472a3b54aef8dcf01993e6302cd0d6a86f5898738a42f36d5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_1991af2820cb5ab2e56ce60227819a6601fd530c76581c3cac32d11850353e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1991af2820cb5ab2e56ce60227819a6601fd530c76581c3cac32d11850353e51->enter($__internal_1991af2820cb5ab2e56ce60227819a6601fd530c76581c3cac32d11850353e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b477bad695e2472a3b54aef8dcf01993e6302cd0d6a86f5898738a42f36d5e1->leave($__internal_1b477bad695e2472a3b54aef8dcf01993e6302cd0d6a86f5898738a42f36d5e1_prof);

        
        $__internal_1991af2820cb5ab2e56ce60227819a6601fd530c76581c3cac32d11850353e51->leave($__internal_1991af2820cb5ab2e56ce60227819a6601fd530c76581c3cac32d11850353e51_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f13bc4fc87b4f8d17e806300e2831456a092444f169ebaef52e5f811ba26c263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13bc4fc87b4f8d17e806300e2831456a092444f169ebaef52e5f811ba26c263->enter($__internal_f13bc4fc87b4f8d17e806300e2831456a092444f169ebaef52e5f811ba26c263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2b4dcac108d09eceff5646295101752dbcea5a800c9422f95c2e346c55fd861c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4dcac108d09eceff5646295101752dbcea5a800c9422f95c2e346c55fd861c->enter($__internal_2b4dcac108d09eceff5646295101752dbcea5a800c9422f95c2e346c55fd861c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2b4dcac108d09eceff5646295101752dbcea5a800c9422f95c2e346c55fd861c->leave($__internal_2b4dcac108d09eceff5646295101752dbcea5a800c9422f95c2e346c55fd861c_prof);

        
        $__internal_f13bc4fc87b4f8d17e806300e2831456a092444f169ebaef52e5f811ba26c263->leave($__internal_f13bc4fc87b4f8d17e806300e2831456a092444f169ebaef52e5f811ba26c263_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
