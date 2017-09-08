<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_11910f272efe346c7d3bb943fd5e2f6ef6fe02f8f42e2355b4b1a33f30aff403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_26b9216783df8516f8e1a4fe961464d3bc78d537ce15293308b06c8d54a82019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b9216783df8516f8e1a4fe961464d3bc78d537ce15293308b06c8d54a82019->enter($__internal_26b9216783df8516f8e1a4fe961464d3bc78d537ce15293308b06c8d54a82019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9f410cb5910923bf7adf5b7ea9cce853406b6eb96409216f4aa0649b675564f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f410cb5910923bf7adf5b7ea9cce853406b6eb96409216f4aa0649b675564f5->enter($__internal_9f410cb5910923bf7adf5b7ea9cce853406b6eb96409216f4aa0649b675564f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26b9216783df8516f8e1a4fe961464d3bc78d537ce15293308b06c8d54a82019->leave($__internal_26b9216783df8516f8e1a4fe961464d3bc78d537ce15293308b06c8d54a82019_prof);

        
        $__internal_9f410cb5910923bf7adf5b7ea9cce853406b6eb96409216f4aa0649b675564f5->leave($__internal_9f410cb5910923bf7adf5b7ea9cce853406b6eb96409216f4aa0649b675564f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_781b5574339232e4ce188189898e2f022e073d4c771af9d36970fd6a7db0c9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781b5574339232e4ce188189898e2f022e073d4c771af9d36970fd6a7db0c9eb->enter($__internal_781b5574339232e4ce188189898e2f022e073d4c771af9d36970fd6a7db0c9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_308e56d25feb1b9b1d613e4c9a23a713dbd26963dc8c9aec597ed0b1a443319b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308e56d25feb1b9b1d613e4c9a23a713dbd26963dc8c9aec597ed0b1a443319b->enter($__internal_308e56d25feb1b9b1d613e4c9a23a713dbd26963dc8c9aec597ed0b1a443319b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_308e56d25feb1b9b1d613e4c9a23a713dbd26963dc8c9aec597ed0b1a443319b->leave($__internal_308e56d25feb1b9b1d613e4c9a23a713dbd26963dc8c9aec597ed0b1a443319b_prof);

        
        $__internal_781b5574339232e4ce188189898e2f022e073d4c771af9d36970fd6a7db0c9eb->leave($__internal_781b5574339232e4ce188189898e2f022e073d4c771af9d36970fd6a7db0c9eb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_346397460c28dac75a277a4d9a550e75e8a35f7b1951a5f92eabe4e8d0f2fb8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346397460c28dac75a277a4d9a550e75e8a35f7b1951a5f92eabe4e8d0f2fb8f->enter($__internal_346397460c28dac75a277a4d9a550e75e8a35f7b1951a5f92eabe4e8d0f2fb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f774c6b283f4194b28d747ccd54bc1b0e399fab70555a5d2b80feb7625e0eb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f774c6b283f4194b28d747ccd54bc1b0e399fab70555a5d2b80feb7625e0eb40->enter($__internal_f774c6b283f4194b28d747ccd54bc1b0e399fab70555a5d2b80feb7625e0eb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f774c6b283f4194b28d747ccd54bc1b0e399fab70555a5d2b80feb7625e0eb40->leave($__internal_f774c6b283f4194b28d747ccd54bc1b0e399fab70555a5d2b80feb7625e0eb40_prof);

        
        $__internal_346397460c28dac75a277a4d9a550e75e8a35f7b1951a5f92eabe4e8d0f2fb8f->leave($__internal_346397460c28dac75a277a4d9a550e75e8a35f7b1951a5f92eabe4e8d0f2fb8f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5eddd9d59fb94817f7a2981b44dcfbdcadcc9cecef8d1c42afd7cc9a50eeacc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eddd9d59fb94817f7a2981b44dcfbdcadcc9cecef8d1c42afd7cc9a50eeacc9->enter($__internal_5eddd9d59fb94817f7a2981b44dcfbdcadcc9cecef8d1c42afd7cc9a50eeacc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2b9932dbe16de40b058082ee88d78043b3ed9af105d4f495cdd3753466d6a92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9932dbe16de40b058082ee88d78043b3ed9af105d4f495cdd3753466d6a92e->enter($__internal_2b9932dbe16de40b058082ee88d78043b3ed9af105d4f495cdd3753466d6a92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2b9932dbe16de40b058082ee88d78043b3ed9af105d4f495cdd3753466d6a92e->leave($__internal_2b9932dbe16de40b058082ee88d78043b3ed9af105d4f495cdd3753466d6a92e_prof);

        
        $__internal_5eddd9d59fb94817f7a2981b44dcfbdcadcc9cecef8d1c42afd7cc9a50eeacc9->leave($__internal_5eddd9d59fb94817f7a2981b44dcfbdcadcc9cecef8d1c42afd7cc9a50eeacc9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
