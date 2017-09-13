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
        $__internal_bc8a2999314579699b9134e7808eddc708ad7ed1c6db6c51397a21bd718d4eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8a2999314579699b9134e7808eddc708ad7ed1c6db6c51397a21bd718d4eb9->enter($__internal_bc8a2999314579699b9134e7808eddc708ad7ed1c6db6c51397a21bd718d4eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_d5903ae7e8430f77a5c016fd1f2d37f640821ae1f4c34baf0cfa0352a2f477cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5903ae7e8430f77a5c016fd1f2d37f640821ae1f4c34baf0cfa0352a2f477cd->enter($__internal_d5903ae7e8430f77a5c016fd1f2d37f640821ae1f4c34baf0cfa0352a2f477cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc8a2999314579699b9134e7808eddc708ad7ed1c6db6c51397a21bd718d4eb9->leave($__internal_bc8a2999314579699b9134e7808eddc708ad7ed1c6db6c51397a21bd718d4eb9_prof);

        
        $__internal_d5903ae7e8430f77a5c016fd1f2d37f640821ae1f4c34baf0cfa0352a2f477cd->leave($__internal_d5903ae7e8430f77a5c016fd1f2d37f640821ae1f4c34baf0cfa0352a2f477cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdaf0d9295c341262c01b4626048f1182a9c823be92500c4bd2431c6ad861eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdaf0d9295c341262c01b4626048f1182a9c823be92500c4bd2431c6ad861eac->enter($__internal_fdaf0d9295c341262c01b4626048f1182a9c823be92500c4bd2431c6ad861eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b66d4054e74e8d7eca20c1130ef5d9030abce4474b3a9801c5a1dbecc63df58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b66d4054e74e8d7eca20c1130ef5d9030abce4474b3a9801c5a1dbecc63df58->enter($__internal_4b66d4054e74e8d7eca20c1130ef5d9030abce4474b3a9801c5a1dbecc63df58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4b66d4054e74e8d7eca20c1130ef5d9030abce4474b3a9801c5a1dbecc63df58->leave($__internal_4b66d4054e74e8d7eca20c1130ef5d9030abce4474b3a9801c5a1dbecc63df58_prof);

        
        $__internal_fdaf0d9295c341262c01b4626048f1182a9c823be92500c4bd2431c6ad861eac->leave($__internal_fdaf0d9295c341262c01b4626048f1182a9c823be92500c4bd2431c6ad861eac_prof);

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
