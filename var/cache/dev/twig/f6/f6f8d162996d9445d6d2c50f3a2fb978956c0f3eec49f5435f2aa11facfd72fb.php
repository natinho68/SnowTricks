<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_593eee9993242872a9e8bbcae414c864ad7cbe11279d476c58b37bce791ae173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_f31082a1daa29224eeb44690dab042d4631bb647f357fc565d0cbdea7cc8ca85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31082a1daa29224eeb44690dab042d4631bb647f357fc565d0cbdea7cc8ca85->enter($__internal_f31082a1daa29224eeb44690dab042d4631bb647f357fc565d0cbdea7cc8ca85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_da2a5ce423ca6d4d19d85da8e98772a2a1e6cb67319ec3deb8bb14d33e787322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2a5ce423ca6d4d19d85da8e98772a2a1e6cb67319ec3deb8bb14d33e787322->enter($__internal_da2a5ce423ca6d4d19d85da8e98772a2a1e6cb67319ec3deb8bb14d33e787322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f31082a1daa29224eeb44690dab042d4631bb647f357fc565d0cbdea7cc8ca85->leave($__internal_f31082a1daa29224eeb44690dab042d4631bb647f357fc565d0cbdea7cc8ca85_prof);

        
        $__internal_da2a5ce423ca6d4d19d85da8e98772a2a1e6cb67319ec3deb8bb14d33e787322->leave($__internal_da2a5ce423ca6d4d19d85da8e98772a2a1e6cb67319ec3deb8bb14d33e787322_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66aae7bd82aceee53c4685fd50d83e2f0a6f751299a2d9d9499beccca3e0a886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66aae7bd82aceee53c4685fd50d83e2f0a6f751299a2d9d9499beccca3e0a886->enter($__internal_66aae7bd82aceee53c4685fd50d83e2f0a6f751299a2d9d9499beccca3e0a886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_826723941a8584b6dcd1cd21e8f7f16da58249ed324f27b85b029b89a16b7718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826723941a8584b6dcd1cd21e8f7f16da58249ed324f27b85b029b89a16b7718->enter($__internal_826723941a8584b6dcd1cd21e8f7f16da58249ed324f27b85b029b89a16b7718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_826723941a8584b6dcd1cd21e8f7f16da58249ed324f27b85b029b89a16b7718->leave($__internal_826723941a8584b6dcd1cd21e8f7f16da58249ed324f27b85b029b89a16b7718_prof);

        
        $__internal_66aae7bd82aceee53c4685fd50d83e2f0a6f751299a2d9d9499beccca3e0a886->leave($__internal_66aae7bd82aceee53c4685fd50d83e2f0a6f751299a2d9d9499beccca3e0a886_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
