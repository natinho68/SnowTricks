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
        $__internal_00ec0504737b5ede798e176d719c2999eca895de6f356a817155a02336cca32c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ec0504737b5ede798e176d719c2999eca895de6f356a817155a02336cca32c->enter($__internal_00ec0504737b5ede798e176d719c2999eca895de6f356a817155a02336cca32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_2f200d5bc1d8fc82216b1315e23ec71a99fe3c6c8dd4d353dbc0bc66ba3090aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f200d5bc1d8fc82216b1315e23ec71a99fe3c6c8dd4d353dbc0bc66ba3090aa->enter($__internal_2f200d5bc1d8fc82216b1315e23ec71a99fe3c6c8dd4d353dbc0bc66ba3090aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ec0504737b5ede798e176d719c2999eca895de6f356a817155a02336cca32c->leave($__internal_00ec0504737b5ede798e176d719c2999eca895de6f356a817155a02336cca32c_prof);

        
        $__internal_2f200d5bc1d8fc82216b1315e23ec71a99fe3c6c8dd4d353dbc0bc66ba3090aa->leave($__internal_2f200d5bc1d8fc82216b1315e23ec71a99fe3c6c8dd4d353dbc0bc66ba3090aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5cdf4f3cc5ef0748383c2d33ba3658c51dd9594748ee8361a8a578e79aac653a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cdf4f3cc5ef0748383c2d33ba3658c51dd9594748ee8361a8a578e79aac653a->enter($__internal_5cdf4f3cc5ef0748383c2d33ba3658c51dd9594748ee8361a8a578e79aac653a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_92c2ada29476199bd9e40e40a5494c2093cbe4367eb8ca3ef3770b0ebcf8c710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c2ada29476199bd9e40e40a5494c2093cbe4367eb8ca3ef3770b0ebcf8c710->enter($__internal_92c2ada29476199bd9e40e40a5494c2093cbe4367eb8ca3ef3770b0ebcf8c710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_92c2ada29476199bd9e40e40a5494c2093cbe4367eb8ca3ef3770b0ebcf8c710->leave($__internal_92c2ada29476199bd9e40e40a5494c2093cbe4367eb8ca3ef3770b0ebcf8c710_prof);

        
        $__internal_5cdf4f3cc5ef0748383c2d33ba3658c51dd9594748ee8361a8a578e79aac653a->leave($__internal_5cdf4f3cc5ef0748383c2d33ba3658c51dd9594748ee8361a8a578e79aac653a_prof);

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
