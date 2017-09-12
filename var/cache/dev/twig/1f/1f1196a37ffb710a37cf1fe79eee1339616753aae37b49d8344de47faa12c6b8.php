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
        $__internal_49dfd403e4c881bc2b5f173b64ffb235cc138d4fb7ee09141b05556cd5d34312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49dfd403e4c881bc2b5f173b64ffb235cc138d4fb7ee09141b05556cd5d34312->enter($__internal_49dfd403e4c881bc2b5f173b64ffb235cc138d4fb7ee09141b05556cd5d34312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4c3e6a7b6ad4b9d26c1730c50eedfd1c48ddc09583bf3d2f2125dff36844c03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3e6a7b6ad4b9d26c1730c50eedfd1c48ddc09583bf3d2f2125dff36844c03f->enter($__internal_4c3e6a7b6ad4b9d26c1730c50eedfd1c48ddc09583bf3d2f2125dff36844c03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49dfd403e4c881bc2b5f173b64ffb235cc138d4fb7ee09141b05556cd5d34312->leave($__internal_49dfd403e4c881bc2b5f173b64ffb235cc138d4fb7ee09141b05556cd5d34312_prof);

        
        $__internal_4c3e6a7b6ad4b9d26c1730c50eedfd1c48ddc09583bf3d2f2125dff36844c03f->leave($__internal_4c3e6a7b6ad4b9d26c1730c50eedfd1c48ddc09583bf3d2f2125dff36844c03f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc9f8ccb0bcad184aa678474cb3e0303954c8d2d236703b3ad71a3cbbb781925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9f8ccb0bcad184aa678474cb3e0303954c8d2d236703b3ad71a3cbbb781925->enter($__internal_bc9f8ccb0bcad184aa678474cb3e0303954c8d2d236703b3ad71a3cbbb781925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee54ac95f8cbe1d2040033bc613de209402a0d9c054cb7b340917b1fd0a4a1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee54ac95f8cbe1d2040033bc613de209402a0d9c054cb7b340917b1fd0a4a1ff->enter($__internal_ee54ac95f8cbe1d2040033bc613de209402a0d9c054cb7b340917b1fd0a4a1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ee54ac95f8cbe1d2040033bc613de209402a0d9c054cb7b340917b1fd0a4a1ff->leave($__internal_ee54ac95f8cbe1d2040033bc613de209402a0d9c054cb7b340917b1fd0a4a1ff_prof);

        
        $__internal_bc9f8ccb0bcad184aa678474cb3e0303954c8d2d236703b3ad71a3cbbb781925->leave($__internal_bc9f8ccb0bcad184aa678474cb3e0303954c8d2d236703b3ad71a3cbbb781925_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99ef2c0e592d28813b82dc0479206b971efa043ea9c08485494ea40a6fac1613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ef2c0e592d28813b82dc0479206b971efa043ea9c08485494ea40a6fac1613->enter($__internal_99ef2c0e592d28813b82dc0479206b971efa043ea9c08485494ea40a6fac1613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35d87deaa0ecdbef985c75cf4f93d80125f50ed6542616901bd6197338b9592e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d87deaa0ecdbef985c75cf4f93d80125f50ed6542616901bd6197338b9592e->enter($__internal_35d87deaa0ecdbef985c75cf4f93d80125f50ed6542616901bd6197338b9592e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_35d87deaa0ecdbef985c75cf4f93d80125f50ed6542616901bd6197338b9592e->leave($__internal_35d87deaa0ecdbef985c75cf4f93d80125f50ed6542616901bd6197338b9592e_prof);

        
        $__internal_99ef2c0e592d28813b82dc0479206b971efa043ea9c08485494ea40a6fac1613->leave($__internal_99ef2c0e592d28813b82dc0479206b971efa043ea9c08485494ea40a6fac1613_prof);

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
