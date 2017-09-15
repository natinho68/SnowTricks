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
        $__internal_01183cf32c5f8d2f94d0c0253399e19852703592868399924496f7624bcdc7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01183cf32c5f8d2f94d0c0253399e19852703592868399924496f7624bcdc7ea->enter($__internal_01183cf32c5f8d2f94d0c0253399e19852703592868399924496f7624bcdc7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_3c4a7f8eaad10cf22f67e9e475685400939875cfc615f5bf945cc86a01a5c03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4a7f8eaad10cf22f67e9e475685400939875cfc615f5bf945cc86a01a5c03f->enter($__internal_3c4a7f8eaad10cf22f67e9e475685400939875cfc615f5bf945cc86a01a5c03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01183cf32c5f8d2f94d0c0253399e19852703592868399924496f7624bcdc7ea->leave($__internal_01183cf32c5f8d2f94d0c0253399e19852703592868399924496f7624bcdc7ea_prof);

        
        $__internal_3c4a7f8eaad10cf22f67e9e475685400939875cfc615f5bf945cc86a01a5c03f->leave($__internal_3c4a7f8eaad10cf22f67e9e475685400939875cfc615f5bf945cc86a01a5c03f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de73cab30ba9832a27308069da794b42ae999fc8b001ed7bec90834e5203e886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de73cab30ba9832a27308069da794b42ae999fc8b001ed7bec90834e5203e886->enter($__internal_de73cab30ba9832a27308069da794b42ae999fc8b001ed7bec90834e5203e886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_681fb2adab14a880d4dcef45c0f09fdd9b88df003e70edb73ef0d74190de4015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681fb2adab14a880d4dcef45c0f09fdd9b88df003e70edb73ef0d74190de4015->enter($__internal_681fb2adab14a880d4dcef45c0f09fdd9b88df003e70edb73ef0d74190de4015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_681fb2adab14a880d4dcef45c0f09fdd9b88df003e70edb73ef0d74190de4015->leave($__internal_681fb2adab14a880d4dcef45c0f09fdd9b88df003e70edb73ef0d74190de4015_prof);

        
        $__internal_de73cab30ba9832a27308069da794b42ae999fc8b001ed7bec90834e5203e886->leave($__internal_de73cab30ba9832a27308069da794b42ae999fc8b001ed7bec90834e5203e886_prof);

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
