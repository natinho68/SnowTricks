<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_eca13deb91d3d966ee2705303cb96f8790f416f49afe737ccf913c7de0cf2408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b5f37571319b9251073362be57512d6846b384d2e58afe8700c69d520ab9b08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f37571319b9251073362be57512d6846b384d2e58afe8700c69d520ab9b08f->enter($__internal_b5f37571319b9251073362be57512d6846b384d2e58afe8700c69d520ab9b08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_80c9ee317a2d5e508a568cfda6487e8e8a1b533e18559a7277f1facef22b09a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c9ee317a2d5e508a568cfda6487e8e8a1b533e18559a7277f1facef22b09a0->enter($__internal_80c9ee317a2d5e508a568cfda6487e8e8a1b533e18559a7277f1facef22b09a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f37571319b9251073362be57512d6846b384d2e58afe8700c69d520ab9b08f->leave($__internal_b5f37571319b9251073362be57512d6846b384d2e58afe8700c69d520ab9b08f_prof);

        
        $__internal_80c9ee317a2d5e508a568cfda6487e8e8a1b533e18559a7277f1facef22b09a0->leave($__internal_80c9ee317a2d5e508a568cfda6487e8e8a1b533e18559a7277f1facef22b09a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9e72e69c01b4cf8f09df20a6ea482665f9bfb42cd1871c28a5b4152c534cadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e72e69c01b4cf8f09df20a6ea482665f9bfb42cd1871c28a5b4152c534cadd->enter($__internal_d9e72e69c01b4cf8f09df20a6ea482665f9bfb42cd1871c28a5b4152c534cadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3463fa4f4860cd30eeff89f2c2d48269edfa7bdfa1d56b444a3be5b28e6e634b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3463fa4f4860cd30eeff89f2c2d48269edfa7bdfa1d56b444a3be5b28e6e634b->enter($__internal_3463fa4f4860cd30eeff89f2c2d48269edfa7bdfa1d56b444a3be5b28e6e634b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3463fa4f4860cd30eeff89f2c2d48269edfa7bdfa1d56b444a3be5b28e6e634b->leave($__internal_3463fa4f4860cd30eeff89f2c2d48269edfa7bdfa1d56b444a3be5b28e6e634b_prof);

        
        $__internal_d9e72e69c01b4cf8f09df20a6ea482665f9bfb42cd1871c28a5b4152c534cadd->leave($__internal_d9e72e69c01b4cf8f09df20a6ea482665f9bfb42cd1871c28a5b4152c534cadd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
