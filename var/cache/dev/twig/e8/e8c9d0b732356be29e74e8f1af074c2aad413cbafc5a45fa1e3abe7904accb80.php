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
        $__internal_f73b20b9bd4f62939ffa41d490e8be1d32e88b3bb375ff25f674b35519e7777f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73b20b9bd4f62939ffa41d490e8be1d32e88b3bb375ff25f674b35519e7777f->enter($__internal_f73b20b9bd4f62939ffa41d490e8be1d32e88b3bb375ff25f674b35519e7777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_f691d70d8377ef24e104c5a9e7b6c3f862a435bbc37eb82147b57578daeef825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f691d70d8377ef24e104c5a9e7b6c3f862a435bbc37eb82147b57578daeef825->enter($__internal_f691d70d8377ef24e104c5a9e7b6c3f862a435bbc37eb82147b57578daeef825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73b20b9bd4f62939ffa41d490e8be1d32e88b3bb375ff25f674b35519e7777f->leave($__internal_f73b20b9bd4f62939ffa41d490e8be1d32e88b3bb375ff25f674b35519e7777f_prof);

        
        $__internal_f691d70d8377ef24e104c5a9e7b6c3f862a435bbc37eb82147b57578daeef825->leave($__internal_f691d70d8377ef24e104c5a9e7b6c3f862a435bbc37eb82147b57578daeef825_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50bb0eb4d69492cc83938770b1d6fea26a333c367086e8f3d28c304bd5e718f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50bb0eb4d69492cc83938770b1d6fea26a333c367086e8f3d28c304bd5e718f9->enter($__internal_50bb0eb4d69492cc83938770b1d6fea26a333c367086e8f3d28c304bd5e718f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_22fd48df115c5b325dc55d010e49e9de09550488f6280a5ae1bf82c35188227b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fd48df115c5b325dc55d010e49e9de09550488f6280a5ae1bf82c35188227b->enter($__internal_22fd48df115c5b325dc55d010e49e9de09550488f6280a5ae1bf82c35188227b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_22fd48df115c5b325dc55d010e49e9de09550488f6280a5ae1bf82c35188227b->leave($__internal_22fd48df115c5b325dc55d010e49e9de09550488f6280a5ae1bf82c35188227b_prof);

        
        $__internal_50bb0eb4d69492cc83938770b1d6fea26a333c367086e8f3d28c304bd5e718f9->leave($__internal_50bb0eb4d69492cc83938770b1d6fea26a333c367086e8f3d28c304bd5e718f9_prof);

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
