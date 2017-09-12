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
        $__internal_8e3d2dccdd6a02cfd8a982fa6e8073a13bbe3408a2dce1af0efac183887eeac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3d2dccdd6a02cfd8a982fa6e8073a13bbe3408a2dce1af0efac183887eeac1->enter($__internal_8e3d2dccdd6a02cfd8a982fa6e8073a13bbe3408a2dce1af0efac183887eeac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_76cf05fafecb2319d3ebe61ae3d0f52d83f572e14fb415300713494e7ed1ff9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76cf05fafecb2319d3ebe61ae3d0f52d83f572e14fb415300713494e7ed1ff9e->enter($__internal_76cf05fafecb2319d3ebe61ae3d0f52d83f572e14fb415300713494e7ed1ff9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e3d2dccdd6a02cfd8a982fa6e8073a13bbe3408a2dce1af0efac183887eeac1->leave($__internal_8e3d2dccdd6a02cfd8a982fa6e8073a13bbe3408a2dce1af0efac183887eeac1_prof);

        
        $__internal_76cf05fafecb2319d3ebe61ae3d0f52d83f572e14fb415300713494e7ed1ff9e->leave($__internal_76cf05fafecb2319d3ebe61ae3d0f52d83f572e14fb415300713494e7ed1ff9e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0db881ae2b32484bb97b7a201458acba0db877396ee3537d04cf9ab07d50614b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db881ae2b32484bb97b7a201458acba0db877396ee3537d04cf9ab07d50614b->enter($__internal_0db881ae2b32484bb97b7a201458acba0db877396ee3537d04cf9ab07d50614b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ae9d9d683df8fc69daeff7be111f747b554c7b11b9b236d09c58b5f9650669c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9d9d683df8fc69daeff7be111f747b554c7b11b9b236d09c58b5f9650669c0->enter($__internal_ae9d9d683df8fc69daeff7be111f747b554c7b11b9b236d09c58b5f9650669c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_ae9d9d683df8fc69daeff7be111f747b554c7b11b9b236d09c58b5f9650669c0->leave($__internal_ae9d9d683df8fc69daeff7be111f747b554c7b11b9b236d09c58b5f9650669c0_prof);

        
        $__internal_0db881ae2b32484bb97b7a201458acba0db877396ee3537d04cf9ab07d50614b->leave($__internal_0db881ae2b32484bb97b7a201458acba0db877396ee3537d04cf9ab07d50614b_prof);

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
