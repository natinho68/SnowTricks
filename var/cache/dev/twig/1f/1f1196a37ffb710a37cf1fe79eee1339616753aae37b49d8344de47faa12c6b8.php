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
        $__internal_1c2137747844b6574f21333568d1e60e6cf83992e76d91e01df3698979d95642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2137747844b6574f21333568d1e60e6cf83992e76d91e01df3698979d95642->enter($__internal_1c2137747844b6574f21333568d1e60e6cf83992e76d91e01df3698979d95642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_dcc65e0360bf2a1f239425715b480ee87f8be21da48fa97fe5bc410c432a9f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc65e0360bf2a1f239425715b480ee87f8be21da48fa97fe5bc410c432a9f46->enter($__internal_dcc65e0360bf2a1f239425715b480ee87f8be21da48fa97fe5bc410c432a9f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c2137747844b6574f21333568d1e60e6cf83992e76d91e01df3698979d95642->leave($__internal_1c2137747844b6574f21333568d1e60e6cf83992e76d91e01df3698979d95642_prof);

        
        $__internal_dcc65e0360bf2a1f239425715b480ee87f8be21da48fa97fe5bc410c432a9f46->leave($__internal_dcc65e0360bf2a1f239425715b480ee87f8be21da48fa97fe5bc410c432a9f46_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f75dfd33a8daadf7b5a8e0f221df9d85450b9865155cfa63434aff8f1aa459f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75dfd33a8daadf7b5a8e0f221df9d85450b9865155cfa63434aff8f1aa459f6->enter($__internal_f75dfd33a8daadf7b5a8e0f221df9d85450b9865155cfa63434aff8f1aa459f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97247cdabcd2e6becc5828bb10d246825e64dbf7704ad90833d6430f976c6757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97247cdabcd2e6becc5828bb10d246825e64dbf7704ad90833d6430f976c6757->enter($__internal_97247cdabcd2e6becc5828bb10d246825e64dbf7704ad90833d6430f976c6757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_97247cdabcd2e6becc5828bb10d246825e64dbf7704ad90833d6430f976c6757->leave($__internal_97247cdabcd2e6becc5828bb10d246825e64dbf7704ad90833d6430f976c6757_prof);

        
        $__internal_f75dfd33a8daadf7b5a8e0f221df9d85450b9865155cfa63434aff8f1aa459f6->leave($__internal_f75dfd33a8daadf7b5a8e0f221df9d85450b9865155cfa63434aff8f1aa459f6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5d3d846a062618257bb017fac471e76bb99410887ce0956d3f6578ecccaf091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d3d846a062618257bb017fac471e76bb99410887ce0956d3f6578ecccaf091->enter($__internal_c5d3d846a062618257bb017fac471e76bb99410887ce0956d3f6578ecccaf091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c94e56bb866af26a91f44d539072af51b21e697072211a6b59c48d0117f220f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94e56bb866af26a91f44d539072af51b21e697072211a6b59c48d0117f220f5->enter($__internal_c94e56bb866af26a91f44d539072af51b21e697072211a6b59c48d0117f220f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c94e56bb866af26a91f44d539072af51b21e697072211a6b59c48d0117f220f5->leave($__internal_c94e56bb866af26a91f44d539072af51b21e697072211a6b59c48d0117f220f5_prof);

        
        $__internal_c5d3d846a062618257bb017fac471e76bb99410887ce0956d3f6578ecccaf091->leave($__internal_c5d3d846a062618257bb017fac471e76bb99410887ce0956d3f6578ecccaf091_prof);

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
