<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_18e2f0bcc54199452edcd610b439d96e7b380c6c9bcbdc222b2ccc77b1ca3c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4e0b78a74ca57c227ac6e0e42d70b0097f41cb3f8fbb267cd4da9e0a966e4839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0b78a74ca57c227ac6e0e42d70b0097f41cb3f8fbb267cd4da9e0a966e4839->enter($__internal_4e0b78a74ca57c227ac6e0e42d70b0097f41cb3f8fbb267cd4da9e0a966e4839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_1811ccf083f42ce32c3d8b2ec111690407cca9eddcc85ca7d16755680e2b4f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1811ccf083f42ce32c3d8b2ec111690407cca9eddcc85ca7d16755680e2b4f7d->enter($__internal_1811ccf083f42ce32c3d8b2ec111690407cca9eddcc85ca7d16755680e2b4f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e0b78a74ca57c227ac6e0e42d70b0097f41cb3f8fbb267cd4da9e0a966e4839->leave($__internal_4e0b78a74ca57c227ac6e0e42d70b0097f41cb3f8fbb267cd4da9e0a966e4839_prof);

        
        $__internal_1811ccf083f42ce32c3d8b2ec111690407cca9eddcc85ca7d16755680e2b4f7d->leave($__internal_1811ccf083f42ce32c3d8b2ec111690407cca9eddcc85ca7d16755680e2b4f7d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70bc70de52c656e2f094fb613e0ee4c98e147d4e04b9ac79519b740593c6db11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70bc70de52c656e2f094fb613e0ee4c98e147d4e04b9ac79519b740593c6db11->enter($__internal_70bc70de52c656e2f094fb613e0ee4c98e147d4e04b9ac79519b740593c6db11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a29bedbefe8617348573cc0f71e1e5a688f6d3ff125eadd64149ea1bdad13a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29bedbefe8617348573cc0f71e1e5a688f6d3ff125eadd64149ea1bdad13a6e->enter($__internal_a29bedbefe8617348573cc0f71e1e5a688f6d3ff125eadd64149ea1bdad13a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a29bedbefe8617348573cc0f71e1e5a688f6d3ff125eadd64149ea1bdad13a6e->leave($__internal_a29bedbefe8617348573cc0f71e1e5a688f6d3ff125eadd64149ea1bdad13a6e_prof);

        
        $__internal_70bc70de52c656e2f094fb613e0ee4c98e147d4e04b9ac79519b740593c6db11->leave($__internal_70bc70de52c656e2f094fb613e0ee4c98e147d4e04b9ac79519b740593c6db11_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
