<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b410644ae4785e2bb25dabd30ca43e9cb83e8e86a3e4b4a43b4739f0c2dac477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e36938fe6145fb907f065be6c274f1a5427b338be24fb9eac9c1b7894662b721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36938fe6145fb907f065be6c274f1a5427b338be24fb9eac9c1b7894662b721->enter($__internal_e36938fe6145fb907f065be6c274f1a5427b338be24fb9eac9c1b7894662b721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_bb5c29dbcb62d4e8d07d198ee75c59a8c49cc38f6ed873ae4c864de429c75924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5c29dbcb62d4e8d07d198ee75c59a8c49cc38f6ed873ae4c864de429c75924->enter($__internal_bb5c29dbcb62d4e8d07d198ee75c59a8c49cc38f6ed873ae4c864de429c75924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e36938fe6145fb907f065be6c274f1a5427b338be24fb9eac9c1b7894662b721->leave($__internal_e36938fe6145fb907f065be6c274f1a5427b338be24fb9eac9c1b7894662b721_prof);

        
        $__internal_bb5c29dbcb62d4e8d07d198ee75c59a8c49cc38f6ed873ae4c864de429c75924->leave($__internal_bb5c29dbcb62d4e8d07d198ee75c59a8c49cc38f6ed873ae4c864de429c75924_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbdb5f8f6bff420ec57e62768bb0979fda94d7c96b1a4949dfd81ca4497775aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbdb5f8f6bff420ec57e62768bb0979fda94d7c96b1a4949dfd81ca4497775aa->enter($__internal_bbdb5f8f6bff420ec57e62768bb0979fda94d7c96b1a4949dfd81ca4497775aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c46f81c6011f792897f767f8cce58c78edfd1f8bad56404d1376c8e14b920cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46f81c6011f792897f767f8cce58c78edfd1f8bad56404d1376c8e14b920cdc->enter($__internal_c46f81c6011f792897f767f8cce58c78edfd1f8bad56404d1376c8e14b920cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c46f81c6011f792897f767f8cce58c78edfd1f8bad56404d1376c8e14b920cdc->leave($__internal_c46f81c6011f792897f767f8cce58c78edfd1f8bad56404d1376c8e14b920cdc_prof);

        
        $__internal_bbdb5f8f6bff420ec57e62768bb0979fda94d7c96b1a4949dfd81ca4497775aa->leave($__internal_bbdb5f8f6bff420ec57e62768bb0979fda94d7c96b1a4949dfd81ca4497775aa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fdaa19de4c4ebeb1aea4d77b36bf8a626d53a2892e85264a79a7f6f0a375a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fdaa19de4c4ebeb1aea4d77b36bf8a626d53a2892e85264a79a7f6f0a375a76->enter($__internal_0fdaa19de4c4ebeb1aea4d77b36bf8a626d53a2892e85264a79a7f6f0a375a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0440b9bf475ea1d824f83c88a725934c11d594b1e84baa298c47720e79922aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0440b9bf475ea1d824f83c88a725934c11d594b1e84baa298c47720e79922aab->enter($__internal_0440b9bf475ea1d824f83c88a725934c11d594b1e84baa298c47720e79922aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0440b9bf475ea1d824f83c88a725934c11d594b1e84baa298c47720e79922aab->leave($__internal_0440b9bf475ea1d824f83c88a725934c11d594b1e84baa298c47720e79922aab_prof);

        
        $__internal_0fdaa19de4c4ebeb1aea4d77b36bf8a626d53a2892e85264a79a7f6f0a375a76->leave($__internal_0fdaa19de4c4ebeb1aea4d77b36bf8a626d53a2892e85264a79a7f6f0a375a76_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
