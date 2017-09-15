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
        $__internal_3da18b84392edbbef55adb826607f558e37f6ed524513647b9144649b22146af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da18b84392edbbef55adb826607f558e37f6ed524513647b9144649b22146af->enter($__internal_3da18b84392edbbef55adb826607f558e37f6ed524513647b9144649b22146af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_08e3c48285c730c1f950e3fffd6c5579ba95885ec9ef5febc6c36d2bf36ea615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e3c48285c730c1f950e3fffd6c5579ba95885ec9ef5febc6c36d2bf36ea615->enter($__internal_08e3c48285c730c1f950e3fffd6c5579ba95885ec9ef5febc6c36d2bf36ea615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3da18b84392edbbef55adb826607f558e37f6ed524513647b9144649b22146af->leave($__internal_3da18b84392edbbef55adb826607f558e37f6ed524513647b9144649b22146af_prof);

        
        $__internal_08e3c48285c730c1f950e3fffd6c5579ba95885ec9ef5febc6c36d2bf36ea615->leave($__internal_08e3c48285c730c1f950e3fffd6c5579ba95885ec9ef5febc6c36d2bf36ea615_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49cdab899cd22b2e3e96dbced74abf39984d2cec437c2bb8965df49bc6c1768e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cdab899cd22b2e3e96dbced74abf39984d2cec437c2bb8965df49bc6c1768e->enter($__internal_49cdab899cd22b2e3e96dbced74abf39984d2cec437c2bb8965df49bc6c1768e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5c3e29aeedd3f93c7a7bf5dea54a4b9dd88a9444b80fdc6fbeedbc2ef54f5191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3e29aeedd3f93c7a7bf5dea54a4b9dd88a9444b80fdc6fbeedbc2ef54f5191->enter($__internal_5c3e29aeedd3f93c7a7bf5dea54a4b9dd88a9444b80fdc6fbeedbc2ef54f5191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c3e29aeedd3f93c7a7bf5dea54a4b9dd88a9444b80fdc6fbeedbc2ef54f5191->leave($__internal_5c3e29aeedd3f93c7a7bf5dea54a4b9dd88a9444b80fdc6fbeedbc2ef54f5191_prof);

        
        $__internal_49cdab899cd22b2e3e96dbced74abf39984d2cec437c2bb8965df49bc6c1768e->leave($__internal_49cdab899cd22b2e3e96dbced74abf39984d2cec437c2bb8965df49bc6c1768e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9adb21530754aee2fd6d1a80298c3d1c5dd8f080e18abcbaf5fa8b020ed2c468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9adb21530754aee2fd6d1a80298c3d1c5dd8f080e18abcbaf5fa8b020ed2c468->enter($__internal_9adb21530754aee2fd6d1a80298c3d1c5dd8f080e18abcbaf5fa8b020ed2c468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4793c9b9d45cb802b0b22f61dc3e72ac7b74d02d50ab2676ecaad6785819b6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4793c9b9d45cb802b0b22f61dc3e72ac7b74d02d50ab2676ecaad6785819b6c2->enter($__internal_4793c9b9d45cb802b0b22f61dc3e72ac7b74d02d50ab2676ecaad6785819b6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4793c9b9d45cb802b0b22f61dc3e72ac7b74d02d50ab2676ecaad6785819b6c2->leave($__internal_4793c9b9d45cb802b0b22f61dc3e72ac7b74d02d50ab2676ecaad6785819b6c2_prof);

        
        $__internal_9adb21530754aee2fd6d1a80298c3d1c5dd8f080e18abcbaf5fa8b020ed2c468->leave($__internal_9adb21530754aee2fd6d1a80298c3d1c5dd8f080e18abcbaf5fa8b020ed2c468_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e2cdd9b08945515895973bba621503eb280fc025c966f0ccd9ff3eafb3c46f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2cdd9b08945515895973bba621503eb280fc025c966f0ccd9ff3eafb3c46f9->enter($__internal_7e2cdd9b08945515895973bba621503eb280fc025c966f0ccd9ff3eafb3c46f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fbcddeb8b2f225f534c4243b95c8c97fdf4b667e1d9d9128951a79e549225ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbcddeb8b2f225f534c4243b95c8c97fdf4b667e1d9d9128951a79e549225ac2->enter($__internal_fbcddeb8b2f225f534c4243b95c8c97fdf4b667e1d9d9128951a79e549225ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fbcddeb8b2f225f534c4243b95c8c97fdf4b667e1d9d9128951a79e549225ac2->leave($__internal_fbcddeb8b2f225f534c4243b95c8c97fdf4b667e1d9d9128951a79e549225ac2_prof);

        
        $__internal_7e2cdd9b08945515895973bba621503eb280fc025c966f0ccd9ff3eafb3c46f9->leave($__internal_7e2cdd9b08945515895973bba621503eb280fc025c966f0ccd9ff3eafb3c46f9_prof);

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
