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
        $__internal_c3b4b42288671dfc30526694f8cfd1b47e69ecad3c7ecba9ae7425960a2ef1d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b4b42288671dfc30526694f8cfd1b47e69ecad3c7ecba9ae7425960a2ef1d7->enter($__internal_c3b4b42288671dfc30526694f8cfd1b47e69ecad3c7ecba9ae7425960a2ef1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fec44acfc4aec93b0c20214017edecb372afe13f931d3716e8567b22257d34fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec44acfc4aec93b0c20214017edecb372afe13f931d3716e8567b22257d34fa->enter($__internal_fec44acfc4aec93b0c20214017edecb372afe13f931d3716e8567b22257d34fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3b4b42288671dfc30526694f8cfd1b47e69ecad3c7ecba9ae7425960a2ef1d7->leave($__internal_c3b4b42288671dfc30526694f8cfd1b47e69ecad3c7ecba9ae7425960a2ef1d7_prof);

        
        $__internal_fec44acfc4aec93b0c20214017edecb372afe13f931d3716e8567b22257d34fa->leave($__internal_fec44acfc4aec93b0c20214017edecb372afe13f931d3716e8567b22257d34fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92cd4ab41002daee0a667c5a8d4f47f75ef9289d4080a1b4ace0718bb1c73f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cd4ab41002daee0a667c5a8d4f47f75ef9289d4080a1b4ace0718bb1c73f7a->enter($__internal_92cd4ab41002daee0a667c5a8d4f47f75ef9289d4080a1b4ace0718bb1c73f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42497758332d6bb654d5327d12ef8f08571e95fa2bf15ef4d687a091625b8ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42497758332d6bb654d5327d12ef8f08571e95fa2bf15ef4d687a091625b8ebf->enter($__internal_42497758332d6bb654d5327d12ef8f08571e95fa2bf15ef4d687a091625b8ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_42497758332d6bb654d5327d12ef8f08571e95fa2bf15ef4d687a091625b8ebf->leave($__internal_42497758332d6bb654d5327d12ef8f08571e95fa2bf15ef4d687a091625b8ebf_prof);

        
        $__internal_92cd4ab41002daee0a667c5a8d4f47f75ef9289d4080a1b4ace0718bb1c73f7a->leave($__internal_92cd4ab41002daee0a667c5a8d4f47f75ef9289d4080a1b4ace0718bb1c73f7a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_601b826ef789dfb657107c215b2a2e770e770b15049933f93409348e8ae69b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601b826ef789dfb657107c215b2a2e770e770b15049933f93409348e8ae69b9f->enter($__internal_601b826ef789dfb657107c215b2a2e770e770b15049933f93409348e8ae69b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4694dda872b30b2c56b38fc92eaad74cc8eb6e1e30eb26ebf2ef11b15fd73fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4694dda872b30b2c56b38fc92eaad74cc8eb6e1e30eb26ebf2ef11b15fd73fcf->enter($__internal_4694dda872b30b2c56b38fc92eaad74cc8eb6e1e30eb26ebf2ef11b15fd73fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4694dda872b30b2c56b38fc92eaad74cc8eb6e1e30eb26ebf2ef11b15fd73fcf->leave($__internal_4694dda872b30b2c56b38fc92eaad74cc8eb6e1e30eb26ebf2ef11b15fd73fcf_prof);

        
        $__internal_601b826ef789dfb657107c215b2a2e770e770b15049933f93409348e8ae69b9f->leave($__internal_601b826ef789dfb657107c215b2a2e770e770b15049933f93409348e8ae69b9f_prof);

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
