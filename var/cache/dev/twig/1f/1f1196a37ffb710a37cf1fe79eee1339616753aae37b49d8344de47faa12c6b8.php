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
        $__internal_0dc4d67635e75dd732914ccc605d9fec16a3b10d41b778c65d8305b1d0f3d3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc4d67635e75dd732914ccc605d9fec16a3b10d41b778c65d8305b1d0f3d3dc->enter($__internal_0dc4d67635e75dd732914ccc605d9fec16a3b10d41b778c65d8305b1d0f3d3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_32906d62af1e20a74aa1944df22f061cd1f0e7de64f772e4608cca0175de122a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32906d62af1e20a74aa1944df22f061cd1f0e7de64f772e4608cca0175de122a->enter($__internal_32906d62af1e20a74aa1944df22f061cd1f0e7de64f772e4608cca0175de122a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dc4d67635e75dd732914ccc605d9fec16a3b10d41b778c65d8305b1d0f3d3dc->leave($__internal_0dc4d67635e75dd732914ccc605d9fec16a3b10d41b778c65d8305b1d0f3d3dc_prof);

        
        $__internal_32906d62af1e20a74aa1944df22f061cd1f0e7de64f772e4608cca0175de122a->leave($__internal_32906d62af1e20a74aa1944df22f061cd1f0e7de64f772e4608cca0175de122a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8413e89c15b64b4305e9d84bb4b5d62bc1339d3cd66c1d8f5ceb1c2f852340f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8413e89c15b64b4305e9d84bb4b5d62bc1339d3cd66c1d8f5ceb1c2f852340f->enter($__internal_f8413e89c15b64b4305e9d84bb4b5d62bc1339d3cd66c1d8f5ceb1c2f852340f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b89151b8ad258f0b1331768f29bc8232651f63a23d64a933975545b6389bdc26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89151b8ad258f0b1331768f29bc8232651f63a23d64a933975545b6389bdc26->enter($__internal_b89151b8ad258f0b1331768f29bc8232651f63a23d64a933975545b6389bdc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b89151b8ad258f0b1331768f29bc8232651f63a23d64a933975545b6389bdc26->leave($__internal_b89151b8ad258f0b1331768f29bc8232651f63a23d64a933975545b6389bdc26_prof);

        
        $__internal_f8413e89c15b64b4305e9d84bb4b5d62bc1339d3cd66c1d8f5ceb1c2f852340f->leave($__internal_f8413e89c15b64b4305e9d84bb4b5d62bc1339d3cd66c1d8f5ceb1c2f852340f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fc7c700e19100566a19ae9fa115d98d5debefd3d2058ffd61745cc56763f418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc7c700e19100566a19ae9fa115d98d5debefd3d2058ffd61745cc56763f418->enter($__internal_4fc7c700e19100566a19ae9fa115d98d5debefd3d2058ffd61745cc56763f418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3865cd5d134307ea4562f658253aa4dc4ede946926bddefbe3a961860df9dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3865cd5d134307ea4562f658253aa4dc4ede946926bddefbe3a961860df9dcb->enter($__internal_d3865cd5d134307ea4562f658253aa4dc4ede946926bddefbe3a961860df9dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d3865cd5d134307ea4562f658253aa4dc4ede946926bddefbe3a961860df9dcb->leave($__internal_d3865cd5d134307ea4562f658253aa4dc4ede946926bddefbe3a961860df9dcb_prof);

        
        $__internal_4fc7c700e19100566a19ae9fa115d98d5debefd3d2058ffd61745cc56763f418->leave($__internal_4fc7c700e19100566a19ae9fa115d98d5debefd3d2058ffd61745cc56763f418_prof);

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
