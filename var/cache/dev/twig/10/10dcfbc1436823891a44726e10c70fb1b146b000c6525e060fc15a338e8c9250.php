<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_36ea7196d08e8bba310370e57d5f781c91115dd4bff0bac696d025029cfc55eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f73d9198d3750227b61d04355714a18e8e95f97631238a84ad32732a3a2bc6c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73d9198d3750227b61d04355714a18e8e95f97631238a84ad32732a3a2bc6c5->enter($__internal_f73d9198d3750227b61d04355714a18e8e95f97631238a84ad32732a3a2bc6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_e35b6a5d4190fcfa284a0564195a15e1bcd099977157b821c163e75e251f6ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35b6a5d4190fcfa284a0564195a15e1bcd099977157b821c163e75e251f6ca5->enter($__internal_e35b6a5d4190fcfa284a0564195a15e1bcd099977157b821c163e75e251f6ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73d9198d3750227b61d04355714a18e8e95f97631238a84ad32732a3a2bc6c5->leave($__internal_f73d9198d3750227b61d04355714a18e8e95f97631238a84ad32732a3a2bc6c5_prof);

        
        $__internal_e35b6a5d4190fcfa284a0564195a15e1bcd099977157b821c163e75e251f6ca5->leave($__internal_e35b6a5d4190fcfa284a0564195a15e1bcd099977157b821c163e75e251f6ca5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f990b578dec6db995e3ce1557b8e7bb67cda662827e6fe4b89aab4ddd0bf72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f990b578dec6db995e3ce1557b8e7bb67cda662827e6fe4b89aab4ddd0bf72c->enter($__internal_6f990b578dec6db995e3ce1557b8e7bb67cda662827e6fe4b89aab4ddd0bf72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b6dbe20e4171ce409fc6a63d046c2d86ce3687d213963020dc7ebe5645f0d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6dbe20e4171ce409fc6a63d046c2d86ce3687d213963020dc7ebe5645f0d13->enter($__internal_4b6dbe20e4171ce409fc6a63d046c2d86ce3687d213963020dc7ebe5645f0d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4b6dbe20e4171ce409fc6a63d046c2d86ce3687d213963020dc7ebe5645f0d13->leave($__internal_4b6dbe20e4171ce409fc6a63d046c2d86ce3687d213963020dc7ebe5645f0d13_prof);

        
        $__internal_6f990b578dec6db995e3ce1557b8e7bb67cda662827e6fe4b89aab4ddd0bf72c->leave($__internal_6f990b578dec6db995e3ce1557b8e7bb67cda662827e6fe4b89aab4ddd0bf72c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
