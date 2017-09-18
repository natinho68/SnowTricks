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
        $__internal_8f150c936ce1a47d4d509d6cfa45aab53a955a22ca167aacbe7efd7f9228a18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f150c936ce1a47d4d509d6cfa45aab53a955a22ca167aacbe7efd7f9228a18e->enter($__internal_8f150c936ce1a47d4d509d6cfa45aab53a955a22ca167aacbe7efd7f9228a18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4fbba2b9f88ff642a030789906ea80fe51be65cac22862646bf4733199e7a24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbba2b9f88ff642a030789906ea80fe51be65cac22862646bf4733199e7a24b->enter($__internal_4fbba2b9f88ff642a030789906ea80fe51be65cac22862646bf4733199e7a24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f150c936ce1a47d4d509d6cfa45aab53a955a22ca167aacbe7efd7f9228a18e->leave($__internal_8f150c936ce1a47d4d509d6cfa45aab53a955a22ca167aacbe7efd7f9228a18e_prof);

        
        $__internal_4fbba2b9f88ff642a030789906ea80fe51be65cac22862646bf4733199e7a24b->leave($__internal_4fbba2b9f88ff642a030789906ea80fe51be65cac22862646bf4733199e7a24b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22e1b09f1531b13ae27ccb24c592281fd2be01c58b1cc6635cd51762805fc7b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e1b09f1531b13ae27ccb24c592281fd2be01c58b1cc6635cd51762805fc7b1->enter($__internal_22e1b09f1531b13ae27ccb24c592281fd2be01c58b1cc6635cd51762805fc7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3626297a10abe7e95c79e6cfc58199a3be5bcebf7e0aeff72bae9dde03841e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3626297a10abe7e95c79e6cfc58199a3be5bcebf7e0aeff72bae9dde03841e92->enter($__internal_3626297a10abe7e95c79e6cfc58199a3be5bcebf7e0aeff72bae9dde03841e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3626297a10abe7e95c79e6cfc58199a3be5bcebf7e0aeff72bae9dde03841e92->leave($__internal_3626297a10abe7e95c79e6cfc58199a3be5bcebf7e0aeff72bae9dde03841e92_prof);

        
        $__internal_22e1b09f1531b13ae27ccb24c592281fd2be01c58b1cc6635cd51762805fc7b1->leave($__internal_22e1b09f1531b13ae27ccb24c592281fd2be01c58b1cc6635cd51762805fc7b1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a946bac230ea6e50a78beda6e2d1b11f74b5d04ed40d3e86e5975a856da2960b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a946bac230ea6e50a78beda6e2d1b11f74b5d04ed40d3e86e5975a856da2960b->enter($__internal_a946bac230ea6e50a78beda6e2d1b11f74b5d04ed40d3e86e5975a856da2960b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ebe79d5a488b10565b8d6fda44f1bc5b96984b4d6ee05b3fde6bc0ee6bb8ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebe79d5a488b10565b8d6fda44f1bc5b96984b4d6ee05b3fde6bc0ee6bb8ca9->enter($__internal_5ebe79d5a488b10565b8d6fda44f1bc5b96984b4d6ee05b3fde6bc0ee6bb8ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5ebe79d5a488b10565b8d6fda44f1bc5b96984b4d6ee05b3fde6bc0ee6bb8ca9->leave($__internal_5ebe79d5a488b10565b8d6fda44f1bc5b96984b4d6ee05b3fde6bc0ee6bb8ca9_prof);

        
        $__internal_a946bac230ea6e50a78beda6e2d1b11f74b5d04ed40d3e86e5975a856da2960b->leave($__internal_a946bac230ea6e50a78beda6e2d1b11f74b5d04ed40d3e86e5975a856da2960b_prof);

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
