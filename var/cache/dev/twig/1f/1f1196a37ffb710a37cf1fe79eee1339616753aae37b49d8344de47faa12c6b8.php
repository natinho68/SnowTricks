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
        $__internal_e2e993ba2ddaba16cd30f1f2b809788ba056299bf443c985866a08c3207a2741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e993ba2ddaba16cd30f1f2b809788ba056299bf443c985866a08c3207a2741->enter($__internal_e2e993ba2ddaba16cd30f1f2b809788ba056299bf443c985866a08c3207a2741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_06587cff3186d87473f0a626fd61607f8188d50d2364fcfd07689bcef2bd01ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06587cff3186d87473f0a626fd61607f8188d50d2364fcfd07689bcef2bd01ea->enter($__internal_06587cff3186d87473f0a626fd61607f8188d50d2364fcfd07689bcef2bd01ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2e993ba2ddaba16cd30f1f2b809788ba056299bf443c985866a08c3207a2741->leave($__internal_e2e993ba2ddaba16cd30f1f2b809788ba056299bf443c985866a08c3207a2741_prof);

        
        $__internal_06587cff3186d87473f0a626fd61607f8188d50d2364fcfd07689bcef2bd01ea->leave($__internal_06587cff3186d87473f0a626fd61607f8188d50d2364fcfd07689bcef2bd01ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f27ed864aba428ab91e23f30877cc2ca7f28f90f1489f10269b714fea965e851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27ed864aba428ab91e23f30877cc2ca7f28f90f1489f10269b714fea965e851->enter($__internal_f27ed864aba428ab91e23f30877cc2ca7f28f90f1489f10269b714fea965e851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cddd6b133870b52f40fa97f7d571de7c2eecf7f302e1c5acef40faa103018337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddd6b133870b52f40fa97f7d571de7c2eecf7f302e1c5acef40faa103018337->enter($__internal_cddd6b133870b52f40fa97f7d571de7c2eecf7f302e1c5acef40faa103018337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cddd6b133870b52f40fa97f7d571de7c2eecf7f302e1c5acef40faa103018337->leave($__internal_cddd6b133870b52f40fa97f7d571de7c2eecf7f302e1c5acef40faa103018337_prof);

        
        $__internal_f27ed864aba428ab91e23f30877cc2ca7f28f90f1489f10269b714fea965e851->leave($__internal_f27ed864aba428ab91e23f30877cc2ca7f28f90f1489f10269b714fea965e851_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2af3bc5d045fa7d6a1a5f2b7a147aac7552e89954e199af8f8942953e6af84b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af3bc5d045fa7d6a1a5f2b7a147aac7552e89954e199af8f8942953e6af84b9->enter($__internal_2af3bc5d045fa7d6a1a5f2b7a147aac7552e89954e199af8f8942953e6af84b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e11ceecc28345760d13cecdb30ae4c68a9717c4a6e011e42ae6da3f7a9a559b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e11ceecc28345760d13cecdb30ae4c68a9717c4a6e011e42ae6da3f7a9a559b->enter($__internal_5e11ceecc28345760d13cecdb30ae4c68a9717c4a6e011e42ae6da3f7a9a559b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e11ceecc28345760d13cecdb30ae4c68a9717c4a6e011e42ae6da3f7a9a559b->leave($__internal_5e11ceecc28345760d13cecdb30ae4c68a9717c4a6e011e42ae6da3f7a9a559b_prof);

        
        $__internal_2af3bc5d045fa7d6a1a5f2b7a147aac7552e89954e199af8f8942953e6af84b9->leave($__internal_2af3bc5d045fa7d6a1a5f2b7a147aac7552e89954e199af8f8942953e6af84b9_prof);

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
