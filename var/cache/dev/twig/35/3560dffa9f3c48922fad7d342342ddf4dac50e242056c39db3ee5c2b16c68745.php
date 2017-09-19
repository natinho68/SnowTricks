<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d5f2eaef80767f375a47816037a9fad7e42eedff83d6802fa7deb1b76fd187f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_9603e67ca2624f4f3ab81413669c8c4bf45786e2215012a643cb8037b7bb0b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9603e67ca2624f4f3ab81413669c8c4bf45786e2215012a643cb8037b7bb0b55->enter($__internal_9603e67ca2624f4f3ab81413669c8c4bf45786e2215012a643cb8037b7bb0b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_b30ce76f7105e877c4003bc7b63fd1bda6b1ee4c412ee6588004efac9ef7bdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30ce76f7105e877c4003bc7b63fd1bda6b1ee4c412ee6588004efac9ef7bdbe->enter($__internal_b30ce76f7105e877c4003bc7b63fd1bda6b1ee4c412ee6588004efac9ef7bdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9603e67ca2624f4f3ab81413669c8c4bf45786e2215012a643cb8037b7bb0b55->leave($__internal_9603e67ca2624f4f3ab81413669c8c4bf45786e2215012a643cb8037b7bb0b55_prof);

        
        $__internal_b30ce76f7105e877c4003bc7b63fd1bda6b1ee4c412ee6588004efac9ef7bdbe->leave($__internal_b30ce76f7105e877c4003bc7b63fd1bda6b1ee4c412ee6588004efac9ef7bdbe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdad0be621a432b86ec6d85c3a7aa8c98bfba132ce7812f31657f567914624b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdad0be621a432b86ec6d85c3a7aa8c98bfba132ce7812f31657f567914624b3->enter($__internal_bdad0be621a432b86ec6d85c3a7aa8c98bfba132ce7812f31657f567914624b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_33d6ad952df25fd12af8dc438e2e608790909dfae53210270c820b7c431903a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d6ad952df25fd12af8dc438e2e608790909dfae53210270c820b7c431903a2->enter($__internal_33d6ad952df25fd12af8dc438e2e608790909dfae53210270c820b7c431903a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_33d6ad952df25fd12af8dc438e2e608790909dfae53210270c820b7c431903a2->leave($__internal_33d6ad952df25fd12af8dc438e2e608790909dfae53210270c820b7c431903a2_prof);

        
        $__internal_bdad0be621a432b86ec6d85c3a7aa8c98bfba132ce7812f31657f567914624b3->leave($__internal_bdad0be621a432b86ec6d85c3a7aa8c98bfba132ce7812f31657f567914624b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
