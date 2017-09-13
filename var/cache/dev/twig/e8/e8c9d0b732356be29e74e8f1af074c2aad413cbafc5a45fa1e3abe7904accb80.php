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
        $__internal_1d255eb79b6bf25282fb3d2aea17b4ec77b01edc28e4cea1e782194478d6192b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d255eb79b6bf25282fb3d2aea17b4ec77b01edc28e4cea1e782194478d6192b->enter($__internal_1d255eb79b6bf25282fb3d2aea17b4ec77b01edc28e4cea1e782194478d6192b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d7e42b8c7c849ce2b43b01ad6ddfe2e3bd2f14eeeba9a8030e07f1c46d0be5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e42b8c7c849ce2b43b01ad6ddfe2e3bd2f14eeeba9a8030e07f1c46d0be5af->enter($__internal_d7e42b8c7c849ce2b43b01ad6ddfe2e3bd2f14eeeba9a8030e07f1c46d0be5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d255eb79b6bf25282fb3d2aea17b4ec77b01edc28e4cea1e782194478d6192b->leave($__internal_1d255eb79b6bf25282fb3d2aea17b4ec77b01edc28e4cea1e782194478d6192b_prof);

        
        $__internal_d7e42b8c7c849ce2b43b01ad6ddfe2e3bd2f14eeeba9a8030e07f1c46d0be5af->leave($__internal_d7e42b8c7c849ce2b43b01ad6ddfe2e3bd2f14eeeba9a8030e07f1c46d0be5af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d89e11a40a1416c622c160fc8fa43742d498f0d491304ff3014fe311a6cdce65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89e11a40a1416c622c160fc8fa43742d498f0d491304ff3014fe311a6cdce65->enter($__internal_d89e11a40a1416c622c160fc8fa43742d498f0d491304ff3014fe311a6cdce65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bbe9fdb4a859e3222fa395c665fe99dc96c98cf7a1a53938bb45f7c0c8a72de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe9fdb4a859e3222fa395c665fe99dc96c98cf7a1a53938bb45f7c0c8a72de7->enter($__internal_bbe9fdb4a859e3222fa395c665fe99dc96c98cf7a1a53938bb45f7c0c8a72de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_bbe9fdb4a859e3222fa395c665fe99dc96c98cf7a1a53938bb45f7c0c8a72de7->leave($__internal_bbe9fdb4a859e3222fa395c665fe99dc96c98cf7a1a53938bb45f7c0c8a72de7_prof);

        
        $__internal_d89e11a40a1416c622c160fc8fa43742d498f0d491304ff3014fe311a6cdce65->leave($__internal_d89e11a40a1416c622c160fc8fa43742d498f0d491304ff3014fe311a6cdce65_prof);

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
