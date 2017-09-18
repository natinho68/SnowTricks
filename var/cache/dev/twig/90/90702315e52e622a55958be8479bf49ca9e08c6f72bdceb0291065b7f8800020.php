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
        $__internal_3ab6e04d67e4b3a6eb3857f1bae257b5becfdd0e29e7c88552bcd6aa132e437a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab6e04d67e4b3a6eb3857f1bae257b5becfdd0e29e7c88552bcd6aa132e437a->enter($__internal_3ab6e04d67e4b3a6eb3857f1bae257b5becfdd0e29e7c88552bcd6aa132e437a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_2b533b7d73ed3cc4c6a48aab18e05e1a673fad4cdc1575bb63002aa25bd9cd91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b533b7d73ed3cc4c6a48aab18e05e1a673fad4cdc1575bb63002aa25bd9cd91->enter($__internal_2b533b7d73ed3cc4c6a48aab18e05e1a673fad4cdc1575bb63002aa25bd9cd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ab6e04d67e4b3a6eb3857f1bae257b5becfdd0e29e7c88552bcd6aa132e437a->leave($__internal_3ab6e04d67e4b3a6eb3857f1bae257b5becfdd0e29e7c88552bcd6aa132e437a_prof);

        
        $__internal_2b533b7d73ed3cc4c6a48aab18e05e1a673fad4cdc1575bb63002aa25bd9cd91->leave($__internal_2b533b7d73ed3cc4c6a48aab18e05e1a673fad4cdc1575bb63002aa25bd9cd91_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64bdb63c4d42b4bcc3d246b92101432be570b2d4d742c833845244c899663af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64bdb63c4d42b4bcc3d246b92101432be570b2d4d742c833845244c899663af6->enter($__internal_64bdb63c4d42b4bcc3d246b92101432be570b2d4d742c833845244c899663af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b0475576e68e2caab98fdcfd9b7709def3547c7e9d20b81ad415204c5728963e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0475576e68e2caab98fdcfd9b7709def3547c7e9d20b81ad415204c5728963e->enter($__internal_b0475576e68e2caab98fdcfd9b7709def3547c7e9d20b81ad415204c5728963e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_b0475576e68e2caab98fdcfd9b7709def3547c7e9d20b81ad415204c5728963e->leave($__internal_b0475576e68e2caab98fdcfd9b7709def3547c7e9d20b81ad415204c5728963e_prof);

        
        $__internal_64bdb63c4d42b4bcc3d246b92101432be570b2d4d742c833845244c899663af6->leave($__internal_64bdb63c4d42b4bcc3d246b92101432be570b2d4d742c833845244c899663af6_prof);

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
