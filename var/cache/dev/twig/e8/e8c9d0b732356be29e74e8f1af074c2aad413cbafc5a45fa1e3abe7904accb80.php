<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d7477e85ff500e2feb3384e4772495977957dfde0ac620b81004c083288b09e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c613c76dd79750a9acab0a1bdd5c90208297092de9d24f40d9a176cac9eeaf36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c613c76dd79750a9acab0a1bdd5c90208297092de9d24f40d9a176cac9eeaf36->enter($__internal_c613c76dd79750a9acab0a1bdd5c90208297092de9d24f40d9a176cac9eeaf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_f23e63241c345d50f932f165131e1690f276e40fd33b17c773ff56ab5a5081f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23e63241c345d50f932f165131e1690f276e40fd33b17c773ff56ab5a5081f5->enter($__internal_f23e63241c345d50f932f165131e1690f276e40fd33b17c773ff56ab5a5081f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c613c76dd79750a9acab0a1bdd5c90208297092de9d24f40d9a176cac9eeaf36->leave($__internal_c613c76dd79750a9acab0a1bdd5c90208297092de9d24f40d9a176cac9eeaf36_prof);

        
        $__internal_f23e63241c345d50f932f165131e1690f276e40fd33b17c773ff56ab5a5081f5->leave($__internal_f23e63241c345d50f932f165131e1690f276e40fd33b17c773ff56ab5a5081f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca659c940f4d277ffb8133e716df82ecdd2238b1be94bd9f55510b7d5f8d6ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca659c940f4d277ffb8133e716df82ecdd2238b1be94bd9f55510b7d5f8d6ff0->enter($__internal_ca659c940f4d277ffb8133e716df82ecdd2238b1be94bd9f55510b7d5f8d6ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_023c7910e7ca48c559b74a955674bd5499314a055000399a26cf831238e633ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023c7910e7ca48c559b74a955674bd5499314a055000399a26cf831238e633ee->enter($__internal_023c7910e7ca48c559b74a955674bd5499314a055000399a26cf831238e633ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_023c7910e7ca48c559b74a955674bd5499314a055000399a26cf831238e633ee->leave($__internal_023c7910e7ca48c559b74a955674bd5499314a055000399a26cf831238e633ee_prof);

        
        $__internal_ca659c940f4d277ffb8133e716df82ecdd2238b1be94bd9f55510b7d5f8d6ff0->leave($__internal_ca659c940f4d277ffb8133e716df82ecdd2238b1be94bd9f55510b7d5f8d6ff0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
