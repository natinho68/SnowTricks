<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92b2c4b4e50f874b8f58b3408bf890cbfb8607d01265f4d38109cc354eb216d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2910c18966901de0c12ee9ed5480be03cc5ed2a63b100f93649c0fe468f5df41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2910c18966901de0c12ee9ed5480be03cc5ed2a63b100f93649c0fe468f5df41->enter($__internal_2910c18966901de0c12ee9ed5480be03cc5ed2a63b100f93649c0fe468f5df41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_18850ce04b09985bea094ae30546fff91cefeab67c8d7a63a519b3d03d344008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18850ce04b09985bea094ae30546fff91cefeab67c8d7a63a519b3d03d344008->enter($__internal_18850ce04b09985bea094ae30546fff91cefeab67c8d7a63a519b3d03d344008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2910c18966901de0c12ee9ed5480be03cc5ed2a63b100f93649c0fe468f5df41->leave($__internal_2910c18966901de0c12ee9ed5480be03cc5ed2a63b100f93649c0fe468f5df41_prof);

        
        $__internal_18850ce04b09985bea094ae30546fff91cefeab67c8d7a63a519b3d03d344008->leave($__internal_18850ce04b09985bea094ae30546fff91cefeab67c8d7a63a519b3d03d344008_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8a7eaeb3ac97094e2b794c1b155d501d3751993a7448304a3059acb43aee9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a7eaeb3ac97094e2b794c1b155d501d3751993a7448304a3059acb43aee9e5->enter($__internal_d8a7eaeb3ac97094e2b794c1b155d501d3751993a7448304a3059acb43aee9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_05375159a738245f836ac9e02eb9eeab5b31eed410487b47c929e75d7d7d9ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05375159a738245f836ac9e02eb9eeab5b31eed410487b47c929e75d7d7d9ce3->enter($__internal_05375159a738245f836ac9e02eb9eeab5b31eed410487b47c929e75d7d7d9ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_05375159a738245f836ac9e02eb9eeab5b31eed410487b47c929e75d7d7d9ce3->leave($__internal_05375159a738245f836ac9e02eb9eeab5b31eed410487b47c929e75d7d7d9ce3_prof);

        
        $__internal_d8a7eaeb3ac97094e2b794c1b155d501d3751993a7448304a3059acb43aee9e5->leave($__internal_d8a7eaeb3ac97094e2b794c1b155d501d3751993a7448304a3059acb43aee9e5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
