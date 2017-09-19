<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_aa2bd50c6cba0a8439cc67d22b7a49edd8ddcfe04aeeb076ade1dcf46bc46f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_23b261b6a96b9bee9c74562c10a870038640ce81c60b60d3fd3fd6daefd64af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b261b6a96b9bee9c74562c10a870038640ce81c60b60d3fd3fd6daefd64af2->enter($__internal_23b261b6a96b9bee9c74562c10a870038640ce81c60b60d3fd3fd6daefd64af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_c36c1eae054c70a4bce51fa415ab9af0d955d750c40e0019a6ef60846d4b12ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36c1eae054c70a4bce51fa415ab9af0d955d750c40e0019a6ef60846d4b12ed->enter($__internal_c36c1eae054c70a4bce51fa415ab9af0d955d750c40e0019a6ef60846d4b12ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23b261b6a96b9bee9c74562c10a870038640ce81c60b60d3fd3fd6daefd64af2->leave($__internal_23b261b6a96b9bee9c74562c10a870038640ce81c60b60d3fd3fd6daefd64af2_prof);

        
        $__internal_c36c1eae054c70a4bce51fa415ab9af0d955d750c40e0019a6ef60846d4b12ed->leave($__internal_c36c1eae054c70a4bce51fa415ab9af0d955d750c40e0019a6ef60846d4b12ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60190c688a0d223431fcf12f5519545778b644c546003a54138567eb7c41cc01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60190c688a0d223431fcf12f5519545778b644c546003a54138567eb7c41cc01->enter($__internal_60190c688a0d223431fcf12f5519545778b644c546003a54138567eb7c41cc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1fcb996ee8636acf6e11205a89eb02223c49406d68c62357b441a8ab5bd82983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcb996ee8636acf6e11205a89eb02223c49406d68c62357b441a8ab5bd82983->enter($__internal_1fcb996ee8636acf6e11205a89eb02223c49406d68c62357b441a8ab5bd82983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1fcb996ee8636acf6e11205a89eb02223c49406d68c62357b441a8ab5bd82983->leave($__internal_1fcb996ee8636acf6e11205a89eb02223c49406d68c62357b441a8ab5bd82983_prof);

        
        $__internal_60190c688a0d223431fcf12f5519545778b644c546003a54138567eb7c41cc01->leave($__internal_60190c688a0d223431fcf12f5519545778b644c546003a54138567eb7c41cc01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
