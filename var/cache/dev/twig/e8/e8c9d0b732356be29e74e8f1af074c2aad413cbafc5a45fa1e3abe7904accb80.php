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
        $__internal_13683a73aae1e13c8b5a0ddbfbc8fa6a11ca2fa7316b7013477496048837518b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13683a73aae1e13c8b5a0ddbfbc8fa6a11ca2fa7316b7013477496048837518b->enter($__internal_13683a73aae1e13c8b5a0ddbfbc8fa6a11ca2fa7316b7013477496048837518b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_3c9009fd4a6d38d328ed56baa2599c3b5eaf18df669b2de935c636fd1a7bb71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9009fd4a6d38d328ed56baa2599c3b5eaf18df669b2de935c636fd1a7bb71d->enter($__internal_3c9009fd4a6d38d328ed56baa2599c3b5eaf18df669b2de935c636fd1a7bb71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13683a73aae1e13c8b5a0ddbfbc8fa6a11ca2fa7316b7013477496048837518b->leave($__internal_13683a73aae1e13c8b5a0ddbfbc8fa6a11ca2fa7316b7013477496048837518b_prof);

        
        $__internal_3c9009fd4a6d38d328ed56baa2599c3b5eaf18df669b2de935c636fd1a7bb71d->leave($__internal_3c9009fd4a6d38d328ed56baa2599c3b5eaf18df669b2de935c636fd1a7bb71d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d5c84a5b40d3367cccb4370e56b6defdccad8ac0d3bb68f70415bca87dfe153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5c84a5b40d3367cccb4370e56b6defdccad8ac0d3bb68f70415bca87dfe153->enter($__internal_3d5c84a5b40d3367cccb4370e56b6defdccad8ac0d3bb68f70415bca87dfe153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2c819c40e0dc471d1a56c6f45677a4168fb40292add8e9a158fcd2610e79162e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c819c40e0dc471d1a56c6f45677a4168fb40292add8e9a158fcd2610e79162e->enter($__internal_2c819c40e0dc471d1a56c6f45677a4168fb40292add8e9a158fcd2610e79162e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2c819c40e0dc471d1a56c6f45677a4168fb40292add8e9a158fcd2610e79162e->leave($__internal_2c819c40e0dc471d1a56c6f45677a4168fb40292add8e9a158fcd2610e79162e_prof);

        
        $__internal_3d5c84a5b40d3367cccb4370e56b6defdccad8ac0d3bb68f70415bca87dfe153->leave($__internal_3d5c84a5b40d3367cccb4370e56b6defdccad8ac0d3bb68f70415bca87dfe153_prof);

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
