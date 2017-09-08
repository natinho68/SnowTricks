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
        $__internal_c849c5768b707c22854b3cc4f83ac7cd480f589c202bf0d8c31e90fa9e0deded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c849c5768b707c22854b3cc4f83ac7cd480f589c202bf0d8c31e90fa9e0deded->enter($__internal_c849c5768b707c22854b3cc4f83ac7cd480f589c202bf0d8c31e90fa9e0deded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_e3df6ab7dc394f0765de14d6c45e285a93e7211c209bb7abe8044d157a851a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3df6ab7dc394f0765de14d6c45e285a93e7211c209bb7abe8044d157a851a88->enter($__internal_e3df6ab7dc394f0765de14d6c45e285a93e7211c209bb7abe8044d157a851a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c849c5768b707c22854b3cc4f83ac7cd480f589c202bf0d8c31e90fa9e0deded->leave($__internal_c849c5768b707c22854b3cc4f83ac7cd480f589c202bf0d8c31e90fa9e0deded_prof);

        
        $__internal_e3df6ab7dc394f0765de14d6c45e285a93e7211c209bb7abe8044d157a851a88->leave($__internal_e3df6ab7dc394f0765de14d6c45e285a93e7211c209bb7abe8044d157a851a88_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75ee43db481fbd9a549d84de0c63c59cafa46593b1497761fabf2a8c4b06c363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ee43db481fbd9a549d84de0c63c59cafa46593b1497761fabf2a8c4b06c363->enter($__internal_75ee43db481fbd9a549d84de0c63c59cafa46593b1497761fabf2a8c4b06c363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9476f22459dae0b8641ee25f952e9c4902950fcde373e542317ab879dffcc76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9476f22459dae0b8641ee25f952e9c4902950fcde373e542317ab879dffcc76a->enter($__internal_9476f22459dae0b8641ee25f952e9c4902950fcde373e542317ab879dffcc76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9476f22459dae0b8641ee25f952e9c4902950fcde373e542317ab879dffcc76a->leave($__internal_9476f22459dae0b8641ee25f952e9c4902950fcde373e542317ab879dffcc76a_prof);

        
        $__internal_75ee43db481fbd9a549d84de0c63c59cafa46593b1497761fabf2a8c4b06c363->leave($__internal_75ee43db481fbd9a549d84de0c63c59cafa46593b1497761fabf2a8c4b06c363_prof);

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
