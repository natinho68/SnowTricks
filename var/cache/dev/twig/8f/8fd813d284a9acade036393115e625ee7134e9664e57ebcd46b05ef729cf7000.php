<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_dc265bafac2c1f716a9f87c703e742e29d919751276d3bc9ca2c1ef648d59478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_76376e0922a94516e0bd99caee988848899ed9f7c6bee5eea700c9d1bb3efcbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76376e0922a94516e0bd99caee988848899ed9f7c6bee5eea700c9d1bb3efcbf->enter($__internal_76376e0922a94516e0bd99caee988848899ed9f7c6bee5eea700c9d1bb3efcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_19bd2eedb7398a3f87fa953ad97ac6ff17540c70aae659b34262928c1aaefb02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bd2eedb7398a3f87fa953ad97ac6ff17540c70aae659b34262928c1aaefb02->enter($__internal_19bd2eedb7398a3f87fa953ad97ac6ff17540c70aae659b34262928c1aaefb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76376e0922a94516e0bd99caee988848899ed9f7c6bee5eea700c9d1bb3efcbf->leave($__internal_76376e0922a94516e0bd99caee988848899ed9f7c6bee5eea700c9d1bb3efcbf_prof);

        
        $__internal_19bd2eedb7398a3f87fa953ad97ac6ff17540c70aae659b34262928c1aaefb02->leave($__internal_19bd2eedb7398a3f87fa953ad97ac6ff17540c70aae659b34262928c1aaefb02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_678095c06ca3505050cee0b39dea2b4cb1bef0a8f2823a539fba9eb8f7953582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678095c06ca3505050cee0b39dea2b4cb1bef0a8f2823a539fba9eb8f7953582->enter($__internal_678095c06ca3505050cee0b39dea2b4cb1bef0a8f2823a539fba9eb8f7953582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_54e97847d3a9a6bca5ce9c4b1813c4de4f1f653c0ac26f0b4a2fa4a2d243f284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e97847d3a9a6bca5ce9c4b1813c4de4f1f653c0ac26f0b4a2fa4a2d243f284->enter($__internal_54e97847d3a9a6bca5ce9c4b1813c4de4f1f653c0ac26f0b4a2fa4a2d243f284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_54e97847d3a9a6bca5ce9c4b1813c4de4f1f653c0ac26f0b4a2fa4a2d243f284->leave($__internal_54e97847d3a9a6bca5ce9c4b1813c4de4f1f653c0ac26f0b4a2fa4a2d243f284_prof);

        
        $__internal_678095c06ca3505050cee0b39dea2b4cb1bef0a8f2823a539fba9eb8f7953582->leave($__internal_678095c06ca3505050cee0b39dea2b4cb1bef0a8f2823a539fba9eb8f7953582_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
