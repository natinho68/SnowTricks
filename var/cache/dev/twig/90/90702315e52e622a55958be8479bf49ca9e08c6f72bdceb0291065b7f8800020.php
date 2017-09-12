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
        $__internal_8c0034bc757088d196e7a8fa38ea8378b5b94e0a982451b9a46edd5e9579d060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0034bc757088d196e7a8fa38ea8378b5b94e0a982451b9a46edd5e9579d060->enter($__internal_8c0034bc757088d196e7a8fa38ea8378b5b94e0a982451b9a46edd5e9579d060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_1e8e35ede477bb7e6ab8bdb9aac2f86f1386b7dacc0f3d1a8fe3ed775f8499cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8e35ede477bb7e6ab8bdb9aac2f86f1386b7dacc0f3d1a8fe3ed775f8499cd->enter($__internal_1e8e35ede477bb7e6ab8bdb9aac2f86f1386b7dacc0f3d1a8fe3ed775f8499cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0034bc757088d196e7a8fa38ea8378b5b94e0a982451b9a46edd5e9579d060->leave($__internal_8c0034bc757088d196e7a8fa38ea8378b5b94e0a982451b9a46edd5e9579d060_prof);

        
        $__internal_1e8e35ede477bb7e6ab8bdb9aac2f86f1386b7dacc0f3d1a8fe3ed775f8499cd->leave($__internal_1e8e35ede477bb7e6ab8bdb9aac2f86f1386b7dacc0f3d1a8fe3ed775f8499cd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a84c18b3453b775f320796ff1ac3a1d2fd18e10fe4574e76fba03382302ca8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a84c18b3453b775f320796ff1ac3a1d2fd18e10fe4574e76fba03382302ca8c->enter($__internal_4a84c18b3453b775f320796ff1ac3a1d2fd18e10fe4574e76fba03382302ca8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b5ab5b8ee7c78f271ff93dab939175b4d6ac5330b8b43a3df3df0076ededbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5ab5b8ee7c78f271ff93dab939175b4d6ac5330b8b43a3df3df0076ededbb7->enter($__internal_9b5ab5b8ee7c78f271ff93dab939175b4d6ac5330b8b43a3df3df0076ededbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9b5ab5b8ee7c78f271ff93dab939175b4d6ac5330b8b43a3df3df0076ededbb7->leave($__internal_9b5ab5b8ee7c78f271ff93dab939175b4d6ac5330b8b43a3df3df0076ededbb7_prof);

        
        $__internal_4a84c18b3453b775f320796ff1ac3a1d2fd18e10fe4574e76fba03382302ca8c->leave($__internal_4a84c18b3453b775f320796ff1ac3a1d2fd18e10fe4574e76fba03382302ca8c_prof);

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
