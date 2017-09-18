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
        $__internal_293a31dcf93328efe39a77813a23ea4d2c2867bc0bf1926ee9843277284a17ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293a31dcf93328efe39a77813a23ea4d2c2867bc0bf1926ee9843277284a17ff->enter($__internal_293a31dcf93328efe39a77813a23ea4d2c2867bc0bf1926ee9843277284a17ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_fc0f90a582b454e5b10b94dda0fd0699a7cf2b649ff090f7269a676a14a74a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0f90a582b454e5b10b94dda0fd0699a7cf2b649ff090f7269a676a14a74a5e->enter($__internal_fc0f90a582b454e5b10b94dda0fd0699a7cf2b649ff090f7269a676a14a74a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_293a31dcf93328efe39a77813a23ea4d2c2867bc0bf1926ee9843277284a17ff->leave($__internal_293a31dcf93328efe39a77813a23ea4d2c2867bc0bf1926ee9843277284a17ff_prof);

        
        $__internal_fc0f90a582b454e5b10b94dda0fd0699a7cf2b649ff090f7269a676a14a74a5e->leave($__internal_fc0f90a582b454e5b10b94dda0fd0699a7cf2b649ff090f7269a676a14a74a5e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c210128664b6d713210350eae0aa31dd8a2aa1559e95b2318cb28890d1dbbe73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c210128664b6d713210350eae0aa31dd8a2aa1559e95b2318cb28890d1dbbe73->enter($__internal_c210128664b6d713210350eae0aa31dd8a2aa1559e95b2318cb28890d1dbbe73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e9ac959f0ffcfaffa32b638f346a1386ab96c37781899254cee0ae7fcf4fb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9ac959f0ffcfaffa32b638f346a1386ab96c37781899254cee0ae7fcf4fb2b->enter($__internal_6e9ac959f0ffcfaffa32b638f346a1386ab96c37781899254cee0ae7fcf4fb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6e9ac959f0ffcfaffa32b638f346a1386ab96c37781899254cee0ae7fcf4fb2b->leave($__internal_6e9ac959f0ffcfaffa32b638f346a1386ab96c37781899254cee0ae7fcf4fb2b_prof);

        
        $__internal_c210128664b6d713210350eae0aa31dd8a2aa1559e95b2318cb28890d1dbbe73->leave($__internal_c210128664b6d713210350eae0aa31dd8a2aa1559e95b2318cb28890d1dbbe73_prof);

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
