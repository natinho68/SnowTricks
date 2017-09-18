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
        $__internal_aa86c505e2c8f1a6b124409de21f8bb60396c1847c9876f81922859fa06084b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa86c505e2c8f1a6b124409de21f8bb60396c1847c9876f81922859fa06084b0->enter($__internal_aa86c505e2c8f1a6b124409de21f8bb60396c1847c9876f81922859fa06084b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_2a26134ee0828fc25062f9a9ca920165576794818cb537d52bd0f4de7e992b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a26134ee0828fc25062f9a9ca920165576794818cb537d52bd0f4de7e992b2f->enter($__internal_2a26134ee0828fc25062f9a9ca920165576794818cb537d52bd0f4de7e992b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa86c505e2c8f1a6b124409de21f8bb60396c1847c9876f81922859fa06084b0->leave($__internal_aa86c505e2c8f1a6b124409de21f8bb60396c1847c9876f81922859fa06084b0_prof);

        
        $__internal_2a26134ee0828fc25062f9a9ca920165576794818cb537d52bd0f4de7e992b2f->leave($__internal_2a26134ee0828fc25062f9a9ca920165576794818cb537d52bd0f4de7e992b2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cfa931654427067d1abae70b913b72c436165316b3039437682467fea9537bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa931654427067d1abae70b913b72c436165316b3039437682467fea9537bca->enter($__internal_cfa931654427067d1abae70b913b72c436165316b3039437682467fea9537bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8ce4edfabd8f6eebf60f3fae0bd8e13096cf20ab1d2a308b88071e036b44dd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce4edfabd8f6eebf60f3fae0bd8e13096cf20ab1d2a308b88071e036b44dd30->enter($__internal_8ce4edfabd8f6eebf60f3fae0bd8e13096cf20ab1d2a308b88071e036b44dd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8ce4edfabd8f6eebf60f3fae0bd8e13096cf20ab1d2a308b88071e036b44dd30->leave($__internal_8ce4edfabd8f6eebf60f3fae0bd8e13096cf20ab1d2a308b88071e036b44dd30_prof);

        
        $__internal_cfa931654427067d1abae70b913b72c436165316b3039437682467fea9537bca->leave($__internal_cfa931654427067d1abae70b913b72c436165316b3039437682467fea9537bca_prof);

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
