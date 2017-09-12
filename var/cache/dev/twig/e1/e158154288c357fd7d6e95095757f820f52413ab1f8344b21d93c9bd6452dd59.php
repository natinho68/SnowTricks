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
        $__internal_d9e51d76f380ee4cce5a3359db06d7dc7f3d6fff8fb376d0b1bf9537c781571c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e51d76f380ee4cce5a3359db06d7dc7f3d6fff8fb376d0b1bf9537c781571c->enter($__internal_d9e51d76f380ee4cce5a3359db06d7dc7f3d6fff8fb376d0b1bf9537c781571c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_efb639da615b7da8a370baa86aed6af4f07c9678e50ef973344e059ebf6c74f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb639da615b7da8a370baa86aed6af4f07c9678e50ef973344e059ebf6c74f9->enter($__internal_efb639da615b7da8a370baa86aed6af4f07c9678e50ef973344e059ebf6c74f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9e51d76f380ee4cce5a3359db06d7dc7f3d6fff8fb376d0b1bf9537c781571c->leave($__internal_d9e51d76f380ee4cce5a3359db06d7dc7f3d6fff8fb376d0b1bf9537c781571c_prof);

        
        $__internal_efb639da615b7da8a370baa86aed6af4f07c9678e50ef973344e059ebf6c74f9->leave($__internal_efb639da615b7da8a370baa86aed6af4f07c9678e50ef973344e059ebf6c74f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f62c230e95c3566cc0b6c316380491d38c31e3739c78c67682e0edf1ef109ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f62c230e95c3566cc0b6c316380491d38c31e3739c78c67682e0edf1ef109ae->enter($__internal_0f62c230e95c3566cc0b6c316380491d38c31e3739c78c67682e0edf1ef109ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_45ac3ebbe810e7a2b589e6ddff45619fc2b57d2f368957bfa5a5d50b0df4e2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ac3ebbe810e7a2b589e6ddff45619fc2b57d2f368957bfa5a5d50b0df4e2f7->enter($__internal_45ac3ebbe810e7a2b589e6ddff45619fc2b57d2f368957bfa5a5d50b0df4e2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_45ac3ebbe810e7a2b589e6ddff45619fc2b57d2f368957bfa5a5d50b0df4e2f7->leave($__internal_45ac3ebbe810e7a2b589e6ddff45619fc2b57d2f368957bfa5a5d50b0df4e2f7_prof);

        
        $__internal_0f62c230e95c3566cc0b6c316380491d38c31e3739c78c67682e0edf1ef109ae->leave($__internal_0f62c230e95c3566cc0b6c316380491d38c31e3739c78c67682e0edf1ef109ae_prof);

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
