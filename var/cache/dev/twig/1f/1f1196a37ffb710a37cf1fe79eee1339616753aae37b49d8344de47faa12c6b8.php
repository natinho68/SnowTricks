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
        $__internal_1b07abec331ea2bec2b898c3f195e1874bb9fd9a85d6ed4e9af0bec41e85de64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b07abec331ea2bec2b898c3f195e1874bb9fd9a85d6ed4e9af0bec41e85de64->enter($__internal_1b07abec331ea2bec2b898c3f195e1874bb9fd9a85d6ed4e9af0bec41e85de64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f475246202160944b4c3f7188839faedfce3f7ff19e292a5af463ac325376e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f475246202160944b4c3f7188839faedfce3f7ff19e292a5af463ac325376e34->enter($__internal_f475246202160944b4c3f7188839faedfce3f7ff19e292a5af463ac325376e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b07abec331ea2bec2b898c3f195e1874bb9fd9a85d6ed4e9af0bec41e85de64->leave($__internal_1b07abec331ea2bec2b898c3f195e1874bb9fd9a85d6ed4e9af0bec41e85de64_prof);

        
        $__internal_f475246202160944b4c3f7188839faedfce3f7ff19e292a5af463ac325376e34->leave($__internal_f475246202160944b4c3f7188839faedfce3f7ff19e292a5af463ac325376e34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff753d5e5c0b37ac73ea3ed6a355f2cfa04cdca9c353ac34f2d5a6edca3e62b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff753d5e5c0b37ac73ea3ed6a355f2cfa04cdca9c353ac34f2d5a6edca3e62b6->enter($__internal_ff753d5e5c0b37ac73ea3ed6a355f2cfa04cdca9c353ac34f2d5a6edca3e62b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34fae8f506919aec6f86292fe48038b1765bc616db01bc8f5d1ad2dd7b3f93c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fae8f506919aec6f86292fe48038b1765bc616db01bc8f5d1ad2dd7b3f93c3->enter($__internal_34fae8f506919aec6f86292fe48038b1765bc616db01bc8f5d1ad2dd7b3f93c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_34fae8f506919aec6f86292fe48038b1765bc616db01bc8f5d1ad2dd7b3f93c3->leave($__internal_34fae8f506919aec6f86292fe48038b1765bc616db01bc8f5d1ad2dd7b3f93c3_prof);

        
        $__internal_ff753d5e5c0b37ac73ea3ed6a355f2cfa04cdca9c353ac34f2d5a6edca3e62b6->leave($__internal_ff753d5e5c0b37ac73ea3ed6a355f2cfa04cdca9c353ac34f2d5a6edca3e62b6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_81704d6ea2f102d8f04eac245f3d7a28fea02df9d64246a3cbd68589fe897087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81704d6ea2f102d8f04eac245f3d7a28fea02df9d64246a3cbd68589fe897087->enter($__internal_81704d6ea2f102d8f04eac245f3d7a28fea02df9d64246a3cbd68589fe897087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70ee36c6136a838053e6b1f940885e6c2a69a3a1f023813b42c84703dd9a763b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ee36c6136a838053e6b1f940885e6c2a69a3a1f023813b42c84703dd9a763b->enter($__internal_70ee36c6136a838053e6b1f940885e6c2a69a3a1f023813b42c84703dd9a763b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_70ee36c6136a838053e6b1f940885e6c2a69a3a1f023813b42c84703dd9a763b->leave($__internal_70ee36c6136a838053e6b1f940885e6c2a69a3a1f023813b42c84703dd9a763b_prof);

        
        $__internal_81704d6ea2f102d8f04eac245f3d7a28fea02df9d64246a3cbd68589fe897087->leave($__internal_81704d6ea2f102d8f04eac245f3d7a28fea02df9d64246a3cbd68589fe897087_prof);

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
