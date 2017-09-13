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
        $__internal_21c5a807845acb70b617b215abc0b1a705678b55136af0e1dba9d4b32fbaace4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c5a807845acb70b617b215abc0b1a705678b55136af0e1dba9d4b32fbaace4->enter($__internal_21c5a807845acb70b617b215abc0b1a705678b55136af0e1dba9d4b32fbaace4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_400560d79f2d27056b222b49eed266ce1331ea249ad8d6aefb556ced63bc3e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400560d79f2d27056b222b49eed266ce1331ea249ad8d6aefb556ced63bc3e08->enter($__internal_400560d79f2d27056b222b49eed266ce1331ea249ad8d6aefb556ced63bc3e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21c5a807845acb70b617b215abc0b1a705678b55136af0e1dba9d4b32fbaace4->leave($__internal_21c5a807845acb70b617b215abc0b1a705678b55136af0e1dba9d4b32fbaace4_prof);

        
        $__internal_400560d79f2d27056b222b49eed266ce1331ea249ad8d6aefb556ced63bc3e08->leave($__internal_400560d79f2d27056b222b49eed266ce1331ea249ad8d6aefb556ced63bc3e08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ad1a9602cc8d6d24d17c263231ff9e45cdd1b4c432b5118c8979742750c50a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad1a9602cc8d6d24d17c263231ff9e45cdd1b4c432b5118c8979742750c50a8->enter($__internal_8ad1a9602cc8d6d24d17c263231ff9e45cdd1b4c432b5118c8979742750c50a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41528a50c3d18fb452111d00c6320e49647c1fe788015b43f8d2172aad084819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41528a50c3d18fb452111d00c6320e49647c1fe788015b43f8d2172aad084819->enter($__internal_41528a50c3d18fb452111d00c6320e49647c1fe788015b43f8d2172aad084819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_41528a50c3d18fb452111d00c6320e49647c1fe788015b43f8d2172aad084819->leave($__internal_41528a50c3d18fb452111d00c6320e49647c1fe788015b43f8d2172aad084819_prof);

        
        $__internal_8ad1a9602cc8d6d24d17c263231ff9e45cdd1b4c432b5118c8979742750c50a8->leave($__internal_8ad1a9602cc8d6d24d17c263231ff9e45cdd1b4c432b5118c8979742750c50a8_prof);

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
