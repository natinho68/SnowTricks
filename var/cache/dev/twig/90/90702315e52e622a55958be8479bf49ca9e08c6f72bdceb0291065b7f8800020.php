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
        $__internal_7c072ad68561e92ab9b9a4ed04de730dbc55b95fd4612e342424de0e3ce7ffb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c072ad68561e92ab9b9a4ed04de730dbc55b95fd4612e342424de0e3ce7ffb1->enter($__internal_7c072ad68561e92ab9b9a4ed04de730dbc55b95fd4612e342424de0e3ce7ffb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_d17f561c6697d0ef32782829cf8594b92b4c426aaae3f065a0e65bd0c92d8163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17f561c6697d0ef32782829cf8594b92b4c426aaae3f065a0e65bd0c92d8163->enter($__internal_d17f561c6697d0ef32782829cf8594b92b4c426aaae3f065a0e65bd0c92d8163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c072ad68561e92ab9b9a4ed04de730dbc55b95fd4612e342424de0e3ce7ffb1->leave($__internal_7c072ad68561e92ab9b9a4ed04de730dbc55b95fd4612e342424de0e3ce7ffb1_prof);

        
        $__internal_d17f561c6697d0ef32782829cf8594b92b4c426aaae3f065a0e65bd0c92d8163->leave($__internal_d17f561c6697d0ef32782829cf8594b92b4c426aaae3f065a0e65bd0c92d8163_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43924ea5b22f937946d3d11687d2c9435234a38e20f35a2bf1db93a0962cb15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43924ea5b22f937946d3d11687d2c9435234a38e20f35a2bf1db93a0962cb15d->enter($__internal_43924ea5b22f937946d3d11687d2c9435234a38e20f35a2bf1db93a0962cb15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e0d84b89cbff9c4595198f5b136e8c02e887087e4d00a9dd4a45b68acb8090dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d84b89cbff9c4595198f5b136e8c02e887087e4d00a9dd4a45b68acb8090dd->enter($__internal_e0d84b89cbff9c4595198f5b136e8c02e887087e4d00a9dd4a45b68acb8090dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e0d84b89cbff9c4595198f5b136e8c02e887087e4d00a9dd4a45b68acb8090dd->leave($__internal_e0d84b89cbff9c4595198f5b136e8c02e887087e4d00a9dd4a45b68acb8090dd_prof);

        
        $__internal_43924ea5b22f937946d3d11687d2c9435234a38e20f35a2bf1db93a0962cb15d->leave($__internal_43924ea5b22f937946d3d11687d2c9435234a38e20f35a2bf1db93a0962cb15d_prof);

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
