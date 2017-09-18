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
        $__internal_4366f0b1a27ae8cdab7bbde9f9e41720458e22468d1648d35f787cb6ce8cbbc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4366f0b1a27ae8cdab7bbde9f9e41720458e22468d1648d35f787cb6ce8cbbc2->enter($__internal_4366f0b1a27ae8cdab7bbde9f9e41720458e22468d1648d35f787cb6ce8cbbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_c977d69263284f96964dc01fcdbdf71900b3aa2d7b60138ed3c342e90fa5f6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c977d69263284f96964dc01fcdbdf71900b3aa2d7b60138ed3c342e90fa5f6d3->enter($__internal_c977d69263284f96964dc01fcdbdf71900b3aa2d7b60138ed3c342e90fa5f6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4366f0b1a27ae8cdab7bbde9f9e41720458e22468d1648d35f787cb6ce8cbbc2->leave($__internal_4366f0b1a27ae8cdab7bbde9f9e41720458e22468d1648d35f787cb6ce8cbbc2_prof);

        
        $__internal_c977d69263284f96964dc01fcdbdf71900b3aa2d7b60138ed3c342e90fa5f6d3->leave($__internal_c977d69263284f96964dc01fcdbdf71900b3aa2d7b60138ed3c342e90fa5f6d3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e289a5316c4671b15a5123d96fbaf45e51a697f1f1a52e476ab3b512ec20529f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e289a5316c4671b15a5123d96fbaf45e51a697f1f1a52e476ab3b512ec20529f->enter($__internal_e289a5316c4671b15a5123d96fbaf45e51a697f1f1a52e476ab3b512ec20529f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4404be0c2622ed977048e15d27dd9cfddb925ddea512ce181598014fb6639877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4404be0c2622ed977048e15d27dd9cfddb925ddea512ce181598014fb6639877->enter($__internal_4404be0c2622ed977048e15d27dd9cfddb925ddea512ce181598014fb6639877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4404be0c2622ed977048e15d27dd9cfddb925ddea512ce181598014fb6639877->leave($__internal_4404be0c2622ed977048e15d27dd9cfddb925ddea512ce181598014fb6639877_prof);

        
        $__internal_e289a5316c4671b15a5123d96fbaf45e51a697f1f1a52e476ab3b512ec20529f->leave($__internal_e289a5316c4671b15a5123d96fbaf45e51a697f1f1a52e476ab3b512ec20529f_prof);

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
