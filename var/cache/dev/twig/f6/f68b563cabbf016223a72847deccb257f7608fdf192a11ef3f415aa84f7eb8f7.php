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
        $__internal_87e8fdd9fe882091ac3492f58b5ca61764c110d8fd6e77804f6bdc7585e81cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e8fdd9fe882091ac3492f58b5ca61764c110d8fd6e77804f6bdc7585e81cc7->enter($__internal_87e8fdd9fe882091ac3492f58b5ca61764c110d8fd6e77804f6bdc7585e81cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_41d02a4b2270eea84d113033e8715bf18c11a78c4578fbd703226d368c64b3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d02a4b2270eea84d113033e8715bf18c11a78c4578fbd703226d368c64b3b6->enter($__internal_41d02a4b2270eea84d113033e8715bf18c11a78c4578fbd703226d368c64b3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87e8fdd9fe882091ac3492f58b5ca61764c110d8fd6e77804f6bdc7585e81cc7->leave($__internal_87e8fdd9fe882091ac3492f58b5ca61764c110d8fd6e77804f6bdc7585e81cc7_prof);

        
        $__internal_41d02a4b2270eea84d113033e8715bf18c11a78c4578fbd703226d368c64b3b6->leave($__internal_41d02a4b2270eea84d113033e8715bf18c11a78c4578fbd703226d368c64b3b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb4b296c3b0cfc38ac11345e4a8c26728e12da0608fb67418a57ba871dac5d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4b296c3b0cfc38ac11345e4a8c26728e12da0608fb67418a57ba871dac5d3b->enter($__internal_bb4b296c3b0cfc38ac11345e4a8c26728e12da0608fb67418a57ba871dac5d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_abedc3a1c008b7ede63ee7ea9d70ddeb01359f956fb43eb6fa31b3cb333e2783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abedc3a1c008b7ede63ee7ea9d70ddeb01359f956fb43eb6fa31b3cb333e2783->enter($__internal_abedc3a1c008b7ede63ee7ea9d70ddeb01359f956fb43eb6fa31b3cb333e2783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_abedc3a1c008b7ede63ee7ea9d70ddeb01359f956fb43eb6fa31b3cb333e2783->leave($__internal_abedc3a1c008b7ede63ee7ea9d70ddeb01359f956fb43eb6fa31b3cb333e2783_prof);

        
        $__internal_bb4b296c3b0cfc38ac11345e4a8c26728e12da0608fb67418a57ba871dac5d3b->leave($__internal_bb4b296c3b0cfc38ac11345e4a8c26728e12da0608fb67418a57ba871dac5d3b_prof);

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
