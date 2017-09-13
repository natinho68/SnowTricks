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
        $__internal_0092db485f4d7d55a9893e8e2727fdd590625d6088f5bd391393084d5022942f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0092db485f4d7d55a9893e8e2727fdd590625d6088f5bd391393084d5022942f->enter($__internal_0092db485f4d7d55a9893e8e2727fdd590625d6088f5bd391393084d5022942f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8eb6137315c0b6d670b9338c29d43afd2b0cd5643e957f140ac4bb3ce171177c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb6137315c0b6d670b9338c29d43afd2b0cd5643e957f140ac4bb3ce171177c->enter($__internal_8eb6137315c0b6d670b9338c29d43afd2b0cd5643e957f140ac4bb3ce171177c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0092db485f4d7d55a9893e8e2727fdd590625d6088f5bd391393084d5022942f->leave($__internal_0092db485f4d7d55a9893e8e2727fdd590625d6088f5bd391393084d5022942f_prof);

        
        $__internal_8eb6137315c0b6d670b9338c29d43afd2b0cd5643e957f140ac4bb3ce171177c->leave($__internal_8eb6137315c0b6d670b9338c29d43afd2b0cd5643e957f140ac4bb3ce171177c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89951234b3f07e40e09161b3674346dc23b499d23adb5ede8869e9f87535f415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89951234b3f07e40e09161b3674346dc23b499d23adb5ede8869e9f87535f415->enter($__internal_89951234b3f07e40e09161b3674346dc23b499d23adb5ede8869e9f87535f415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_605425ad8340cfeafa15da7ad3f5307ccb468a5e6ac3ea031e66f8550c4ecc10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605425ad8340cfeafa15da7ad3f5307ccb468a5e6ac3ea031e66f8550c4ecc10->enter($__internal_605425ad8340cfeafa15da7ad3f5307ccb468a5e6ac3ea031e66f8550c4ecc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_605425ad8340cfeafa15da7ad3f5307ccb468a5e6ac3ea031e66f8550c4ecc10->leave($__internal_605425ad8340cfeafa15da7ad3f5307ccb468a5e6ac3ea031e66f8550c4ecc10_prof);

        
        $__internal_89951234b3f07e40e09161b3674346dc23b499d23adb5ede8869e9f87535f415->leave($__internal_89951234b3f07e40e09161b3674346dc23b499d23adb5ede8869e9f87535f415_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0586d08a1b85f53a6f4c321e2521dbbeab07936e20f3254e78d4656473f0a596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0586d08a1b85f53a6f4c321e2521dbbeab07936e20f3254e78d4656473f0a596->enter($__internal_0586d08a1b85f53a6f4c321e2521dbbeab07936e20f3254e78d4656473f0a596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6dedd262ef37c3de47e6bbc99ef5ca771b153289dc6a6d6267def1a5aead1ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dedd262ef37c3de47e6bbc99ef5ca771b153289dc6a6d6267def1a5aead1ab5->enter($__internal_6dedd262ef37c3de47e6bbc99ef5ca771b153289dc6a6d6267def1a5aead1ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6dedd262ef37c3de47e6bbc99ef5ca771b153289dc6a6d6267def1a5aead1ab5->leave($__internal_6dedd262ef37c3de47e6bbc99ef5ca771b153289dc6a6d6267def1a5aead1ab5_prof);

        
        $__internal_0586d08a1b85f53a6f4c321e2521dbbeab07936e20f3254e78d4656473f0a596->leave($__internal_0586d08a1b85f53a6f4c321e2521dbbeab07936e20f3254e78d4656473f0a596_prof);

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
