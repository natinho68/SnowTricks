<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cb7172d56f89681fa1747d8de546b50def28c198f93713a3d852f41402ea7697 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16c1f01e4e23e1d2121e13e0a5b58949fe64e7b15f98b0cc1b7173bd704ba910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c1f01e4e23e1d2121e13e0a5b58949fe64e7b15f98b0cc1b7173bd704ba910->enter($__internal_16c1f01e4e23e1d2121e13e0a5b58949fe64e7b15f98b0cc1b7173bd704ba910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7c495e3f839fd9f0f06703eac6345993c374332ef6f5fa6f3ab614bd01b8c2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c495e3f839fd9f0f06703eac6345993c374332ef6f5fa6f3ab614bd01b8c2f7->enter($__internal_7c495e3f839fd9f0f06703eac6345993c374332ef6f5fa6f3ab614bd01b8c2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c1f01e4e23e1d2121e13e0a5b58949fe64e7b15f98b0cc1b7173bd704ba910->leave($__internal_16c1f01e4e23e1d2121e13e0a5b58949fe64e7b15f98b0cc1b7173bd704ba910_prof);

        
        $__internal_7c495e3f839fd9f0f06703eac6345993c374332ef6f5fa6f3ab614bd01b8c2f7->leave($__internal_7c495e3f839fd9f0f06703eac6345993c374332ef6f5fa6f3ab614bd01b8c2f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cdc3a0e0d3798d45ea4a704e3e6c1d5f3197037e43a9363896bce5f2d1b5fd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc3a0e0d3798d45ea4a704e3e6c1d5f3197037e43a9363896bce5f2d1b5fd5a->enter($__internal_cdc3a0e0d3798d45ea4a704e3e6c1d5f3197037e43a9363896bce5f2d1b5fd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f7a45d63400ad281fd2d334f7ed6b4d9c4b5c22540bb40dc97a3ab9ba6bc312b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a45d63400ad281fd2d334f7ed6b4d9c4b5c22540bb40dc97a3ab9ba6bc312b->enter($__internal_f7a45d63400ad281fd2d334f7ed6b4d9c4b5c22540bb40dc97a3ab9ba6bc312b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7a45d63400ad281fd2d334f7ed6b4d9c4b5c22540bb40dc97a3ab9ba6bc312b->leave($__internal_f7a45d63400ad281fd2d334f7ed6b4d9c4b5c22540bb40dc97a3ab9ba6bc312b_prof);

        
        $__internal_cdc3a0e0d3798d45ea4a704e3e6c1d5f3197037e43a9363896bce5f2d1b5fd5a->leave($__internal_cdc3a0e0d3798d45ea4a704e3e6c1d5f3197037e43a9363896bce5f2d1b5fd5a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87ce10fd56cef8e5d1ce8961f4feecf67a2f6a465ae4da3d5f22100936a21b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ce10fd56cef8e5d1ce8961f4feecf67a2f6a465ae4da3d5f22100936a21b25->enter($__internal_87ce10fd56cef8e5d1ce8961f4feecf67a2f6a465ae4da3d5f22100936a21b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9959f35b30ee83b2a2856210740ece204830d209b9cd5b5faeec106527f50858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9959f35b30ee83b2a2856210740ece204830d209b9cd5b5faeec106527f50858->enter($__internal_9959f35b30ee83b2a2856210740ece204830d209b9cd5b5faeec106527f50858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9959f35b30ee83b2a2856210740ece204830d209b9cd5b5faeec106527f50858->leave($__internal_9959f35b30ee83b2a2856210740ece204830d209b9cd5b5faeec106527f50858_prof);

        
        $__internal_87ce10fd56cef8e5d1ce8961f4feecf67a2f6a465ae4da3d5f22100936a21b25->leave($__internal_87ce10fd56cef8e5d1ce8961f4feecf67a2f6a465ae4da3d5f22100936a21b25_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb3721f72b0c9d0d29727ed26cd8fc622ab66ff510576d67a5868052e59fcfe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3721f72b0c9d0d29727ed26cd8fc622ab66ff510576d67a5868052e59fcfe5->enter($__internal_bb3721f72b0c9d0d29727ed26cd8fc622ab66ff510576d67a5868052e59fcfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63185f9c54c223d6612814d78a75666015060ebe08615235ec5fc225d287d527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63185f9c54c223d6612814d78a75666015060ebe08615235ec5fc225d287d527->enter($__internal_63185f9c54c223d6612814d78a75666015060ebe08615235ec5fc225d287d527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63185f9c54c223d6612814d78a75666015060ebe08615235ec5fc225d287d527->leave($__internal_63185f9c54c223d6612814d78a75666015060ebe08615235ec5fc225d287d527_prof);

        
        $__internal_bb3721f72b0c9d0d29727ed26cd8fc622ab66ff510576d67a5868052e59fcfe5->leave($__internal_bb3721f72b0c9d0d29727ed26cd8fc622ab66ff510576d67a5868052e59fcfe5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
