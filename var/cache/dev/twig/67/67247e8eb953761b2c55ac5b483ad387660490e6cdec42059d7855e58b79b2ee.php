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
        $__internal_2c864429c01eaf2949e5ab33f325b99a23381ef5616e3127cd46c047e1576eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c864429c01eaf2949e5ab33f325b99a23381ef5616e3127cd46c047e1576eb5->enter($__internal_2c864429c01eaf2949e5ab33f325b99a23381ef5616e3127cd46c047e1576eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_379c908241d9739fee25100aae4d3a26e6804b50708e9582110e2704189f62e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379c908241d9739fee25100aae4d3a26e6804b50708e9582110e2704189f62e4->enter($__internal_379c908241d9739fee25100aae4d3a26e6804b50708e9582110e2704189f62e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c864429c01eaf2949e5ab33f325b99a23381ef5616e3127cd46c047e1576eb5->leave($__internal_2c864429c01eaf2949e5ab33f325b99a23381ef5616e3127cd46c047e1576eb5_prof);

        
        $__internal_379c908241d9739fee25100aae4d3a26e6804b50708e9582110e2704189f62e4->leave($__internal_379c908241d9739fee25100aae4d3a26e6804b50708e9582110e2704189f62e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_abea86aa6194917752ec612d31291f72ec08d48de42ea28fa3caccba7249811e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abea86aa6194917752ec612d31291f72ec08d48de42ea28fa3caccba7249811e->enter($__internal_abea86aa6194917752ec612d31291f72ec08d48de42ea28fa3caccba7249811e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_96f659e16b13293638a4fdfde74fcee03d5eeeadfcf42c1553c3010a0f1cc0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f659e16b13293638a4fdfde74fcee03d5eeeadfcf42c1553c3010a0f1cc0b0->enter($__internal_96f659e16b13293638a4fdfde74fcee03d5eeeadfcf42c1553c3010a0f1cc0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96f659e16b13293638a4fdfde74fcee03d5eeeadfcf42c1553c3010a0f1cc0b0->leave($__internal_96f659e16b13293638a4fdfde74fcee03d5eeeadfcf42c1553c3010a0f1cc0b0_prof);

        
        $__internal_abea86aa6194917752ec612d31291f72ec08d48de42ea28fa3caccba7249811e->leave($__internal_abea86aa6194917752ec612d31291f72ec08d48de42ea28fa3caccba7249811e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6621e86218d13d92ee0e902e1c900f102ae34e1c3f0bdd78b3e0f0ef3e2c58fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6621e86218d13d92ee0e902e1c900f102ae34e1c3f0bdd78b3e0f0ef3e2c58fa->enter($__internal_6621e86218d13d92ee0e902e1c900f102ae34e1c3f0bdd78b3e0f0ef3e2c58fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d600d1f80e447835832259651285ef2031586a25c44a05f5a98ab322dd5d638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d600d1f80e447835832259651285ef2031586a25c44a05f5a98ab322dd5d638->enter($__internal_6d600d1f80e447835832259651285ef2031586a25c44a05f5a98ab322dd5d638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d600d1f80e447835832259651285ef2031586a25c44a05f5a98ab322dd5d638->leave($__internal_6d600d1f80e447835832259651285ef2031586a25c44a05f5a98ab322dd5d638_prof);

        
        $__internal_6621e86218d13d92ee0e902e1c900f102ae34e1c3f0bdd78b3e0f0ef3e2c58fa->leave($__internal_6621e86218d13d92ee0e902e1c900f102ae34e1c3f0bdd78b3e0f0ef3e2c58fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11bc1c8ea29322b4c7f10fad31f573e33ef2d4419fcdd4d8b331433618b57da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bc1c8ea29322b4c7f10fad31f573e33ef2d4419fcdd4d8b331433618b57da6->enter($__internal_11bc1c8ea29322b4c7f10fad31f573e33ef2d4419fcdd4d8b331433618b57da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c16a9a84c082354025ff1e7497ab930a4d7b0684430065999171921a25e52d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c16a9a84c082354025ff1e7497ab930a4d7b0684430065999171921a25e52d0->enter($__internal_4c16a9a84c082354025ff1e7497ab930a4d7b0684430065999171921a25e52d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4c16a9a84c082354025ff1e7497ab930a4d7b0684430065999171921a25e52d0->leave($__internal_4c16a9a84c082354025ff1e7497ab930a4d7b0684430065999171921a25e52d0_prof);

        
        $__internal_11bc1c8ea29322b4c7f10fad31f573e33ef2d4419fcdd4d8b331433618b57da6->leave($__internal_11bc1c8ea29322b4c7f10fad31f573e33ef2d4419fcdd4d8b331433618b57da6_prof);

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
