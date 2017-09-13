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
        $__internal_8c265d5d55f12bc9990bafc447091149e9451766a856da050e9f23d8af662895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c265d5d55f12bc9990bafc447091149e9451766a856da050e9f23d8af662895->enter($__internal_8c265d5d55f12bc9990bafc447091149e9451766a856da050e9f23d8af662895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a3f81c154165be5cc3be8ff53c85d348ca6d1396c67ac2c3bda31f95983f4d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f81c154165be5cc3be8ff53c85d348ca6d1396c67ac2c3bda31f95983f4d1e->enter($__internal_a3f81c154165be5cc3be8ff53c85d348ca6d1396c67ac2c3bda31f95983f4d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c265d5d55f12bc9990bafc447091149e9451766a856da050e9f23d8af662895->leave($__internal_8c265d5d55f12bc9990bafc447091149e9451766a856da050e9f23d8af662895_prof);

        
        $__internal_a3f81c154165be5cc3be8ff53c85d348ca6d1396c67ac2c3bda31f95983f4d1e->leave($__internal_a3f81c154165be5cc3be8ff53c85d348ca6d1396c67ac2c3bda31f95983f4d1e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e6040057201960cc92f4a4fd9a7cac09cc2be6f410c0270ab04ede6b03229c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6040057201960cc92f4a4fd9a7cac09cc2be6f410c0270ab04ede6b03229c5->enter($__internal_5e6040057201960cc92f4a4fd9a7cac09cc2be6f410c0270ab04ede6b03229c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_205c2bc7465b41852d3799eda3be19e85131ef013a1d2d472b1fe50e3ccdaa34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205c2bc7465b41852d3799eda3be19e85131ef013a1d2d472b1fe50e3ccdaa34->enter($__internal_205c2bc7465b41852d3799eda3be19e85131ef013a1d2d472b1fe50e3ccdaa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_205c2bc7465b41852d3799eda3be19e85131ef013a1d2d472b1fe50e3ccdaa34->leave($__internal_205c2bc7465b41852d3799eda3be19e85131ef013a1d2d472b1fe50e3ccdaa34_prof);

        
        $__internal_5e6040057201960cc92f4a4fd9a7cac09cc2be6f410c0270ab04ede6b03229c5->leave($__internal_5e6040057201960cc92f4a4fd9a7cac09cc2be6f410c0270ab04ede6b03229c5_prof);

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
