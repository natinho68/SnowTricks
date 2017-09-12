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
        $__internal_c72952e008523b876dc570de2d92c9d20ab23f31437ced2982bdb5e6ee790670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72952e008523b876dc570de2d92c9d20ab23f31437ced2982bdb5e6ee790670->enter($__internal_c72952e008523b876dc570de2d92c9d20ab23f31437ced2982bdb5e6ee790670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_baaa2c0b51d3ec7d6d4df9e81e382c9591de2e1f0bb8d8f3652e9c036f004db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baaa2c0b51d3ec7d6d4df9e81e382c9591de2e1f0bb8d8f3652e9c036f004db5->enter($__internal_baaa2c0b51d3ec7d6d4df9e81e382c9591de2e1f0bb8d8f3652e9c036f004db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c72952e008523b876dc570de2d92c9d20ab23f31437ced2982bdb5e6ee790670->leave($__internal_c72952e008523b876dc570de2d92c9d20ab23f31437ced2982bdb5e6ee790670_prof);

        
        $__internal_baaa2c0b51d3ec7d6d4df9e81e382c9591de2e1f0bb8d8f3652e9c036f004db5->leave($__internal_baaa2c0b51d3ec7d6d4df9e81e382c9591de2e1f0bb8d8f3652e9c036f004db5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e5930b97ee7e0c417d1a09e2ab329d1b573a6a424f076f5f0a32565fcbb639b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5930b97ee7e0c417d1a09e2ab329d1b573a6a424f076f5f0a32565fcbb639b->enter($__internal_8e5930b97ee7e0c417d1a09e2ab329d1b573a6a424f076f5f0a32565fcbb639b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_832c80127705135317800622bfb73842b6c45efb668e07a10f8b784ec0fd00f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832c80127705135317800622bfb73842b6c45efb668e07a10f8b784ec0fd00f1->enter($__internal_832c80127705135317800622bfb73842b6c45efb668e07a10f8b784ec0fd00f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_832c80127705135317800622bfb73842b6c45efb668e07a10f8b784ec0fd00f1->leave($__internal_832c80127705135317800622bfb73842b6c45efb668e07a10f8b784ec0fd00f1_prof);

        
        $__internal_8e5930b97ee7e0c417d1a09e2ab329d1b573a6a424f076f5f0a32565fcbb639b->leave($__internal_8e5930b97ee7e0c417d1a09e2ab329d1b573a6a424f076f5f0a32565fcbb639b_prof);

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
