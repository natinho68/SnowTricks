<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_87763d4938b8a69549d8d249f60b1d24048edfceba0c859d6997ebb81fa85e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_375cb706f3512adad6dc23483b5134b496cf0bf0b23ff2981d440c3a65ebf14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375cb706f3512adad6dc23483b5134b496cf0bf0b23ff2981d440c3a65ebf14e->enter($__internal_375cb706f3512adad6dc23483b5134b496cf0bf0b23ff2981d440c3a65ebf14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_7bfedbbb7e173e46d7919856034e6362b5fe652596b34bae77953d654f7790c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfedbbb7e173e46d7919856034e6362b5fe652596b34bae77953d654f7790c3->enter($__internal_7bfedbbb7e173e46d7919856034e6362b5fe652596b34bae77953d654f7790c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_375cb706f3512adad6dc23483b5134b496cf0bf0b23ff2981d440c3a65ebf14e->leave($__internal_375cb706f3512adad6dc23483b5134b496cf0bf0b23ff2981d440c3a65ebf14e_prof);

        
        $__internal_7bfedbbb7e173e46d7919856034e6362b5fe652596b34bae77953d654f7790c3->leave($__internal_7bfedbbb7e173e46d7919856034e6362b5fe652596b34bae77953d654f7790c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_acd5fece23a6abc71c31d61bcb4235fcf723c2092e5da2af3b87505bf101e81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd5fece23a6abc71c31d61bcb4235fcf723c2092e5da2af3b87505bf101e81b->enter($__internal_acd5fece23a6abc71c31d61bcb4235fcf723c2092e5da2af3b87505bf101e81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9607405b46da4ede865e388c420769a20afc0e73b545ed7bfc12255d902664a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9607405b46da4ede865e388c420769a20afc0e73b545ed7bfc12255d902664a6->enter($__internal_9607405b46da4ede865e388c420769a20afc0e73b545ed7bfc12255d902664a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_9607405b46da4ede865e388c420769a20afc0e73b545ed7bfc12255d902664a6->leave($__internal_9607405b46da4ede865e388c420769a20afc0e73b545ed7bfc12255d902664a6_prof);

        
        $__internal_acd5fece23a6abc71c31d61bcb4235fcf723c2092e5da2af3b87505bf101e81b->leave($__internal_acd5fece23a6abc71c31d61bcb4235fcf723c2092e5da2af3b87505bf101e81b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
