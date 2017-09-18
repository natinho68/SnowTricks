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
        $__internal_3196980536eb2a76c77d1673236dfa686f3c7d084b5bd5e2763a7dc667208aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3196980536eb2a76c77d1673236dfa686f3c7d084b5bd5e2763a7dc667208aa4->enter($__internal_3196980536eb2a76c77d1673236dfa686f3c7d084b5bd5e2763a7dc667208aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_33f6daa31f093764ec99d7e63756f2c87465b7cd7b4432e5266f3258cd4c7478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f6daa31f093764ec99d7e63756f2c87465b7cd7b4432e5266f3258cd4c7478->enter($__internal_33f6daa31f093764ec99d7e63756f2c87465b7cd7b4432e5266f3258cd4c7478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3196980536eb2a76c77d1673236dfa686f3c7d084b5bd5e2763a7dc667208aa4->leave($__internal_3196980536eb2a76c77d1673236dfa686f3c7d084b5bd5e2763a7dc667208aa4_prof);

        
        $__internal_33f6daa31f093764ec99d7e63756f2c87465b7cd7b4432e5266f3258cd4c7478->leave($__internal_33f6daa31f093764ec99d7e63756f2c87465b7cd7b4432e5266f3258cd4c7478_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1bbe2e5ed52dd1d1550b1bc9a45aa259cbfd181ae199d3117d6db95c3b6acec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbe2e5ed52dd1d1550b1bc9a45aa259cbfd181ae199d3117d6db95c3b6acec0->enter($__internal_1bbe2e5ed52dd1d1550b1bc9a45aa259cbfd181ae199d3117d6db95c3b6acec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e82a2e0d2b31aa16de8571f6df39d2e33e93e0d0566951a4ef90ad90e3f8c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e82a2e0d2b31aa16de8571f6df39d2e33e93e0d0566951a4ef90ad90e3f8c81->enter($__internal_8e82a2e0d2b31aa16de8571f6df39d2e33e93e0d0566951a4ef90ad90e3f8c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8e82a2e0d2b31aa16de8571f6df39d2e33e93e0d0566951a4ef90ad90e3f8c81->leave($__internal_8e82a2e0d2b31aa16de8571f6df39d2e33e93e0d0566951a4ef90ad90e3f8c81_prof);

        
        $__internal_1bbe2e5ed52dd1d1550b1bc9a45aa259cbfd181ae199d3117d6db95c3b6acec0->leave($__internal_1bbe2e5ed52dd1d1550b1bc9a45aa259cbfd181ae199d3117d6db95c3b6acec0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10c74f9f48972966ae7a0be6ee91c95e2849ac7c661495018fb370b68e1d51e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c74f9f48972966ae7a0be6ee91c95e2849ac7c661495018fb370b68e1d51e2->enter($__internal_10c74f9f48972966ae7a0be6ee91c95e2849ac7c661495018fb370b68e1d51e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8cee475b5cbcd7647b96089fb81c90be62fc626151b212ba38309aed75e6ba1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cee475b5cbcd7647b96089fb81c90be62fc626151b212ba38309aed75e6ba1f->enter($__internal_8cee475b5cbcd7647b96089fb81c90be62fc626151b212ba38309aed75e6ba1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8cee475b5cbcd7647b96089fb81c90be62fc626151b212ba38309aed75e6ba1f->leave($__internal_8cee475b5cbcd7647b96089fb81c90be62fc626151b212ba38309aed75e6ba1f_prof);

        
        $__internal_10c74f9f48972966ae7a0be6ee91c95e2849ac7c661495018fb370b68e1d51e2->leave($__internal_10c74f9f48972966ae7a0be6ee91c95e2849ac7c661495018fb370b68e1d51e2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ab53537a601c6103c87ad6002ca0e1a0f1d4034c47791ea0934e7a9b7a129d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab53537a601c6103c87ad6002ca0e1a0f1d4034c47791ea0934e7a9b7a129d4->enter($__internal_9ab53537a601c6103c87ad6002ca0e1a0f1d4034c47791ea0934e7a9b7a129d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f8a315f02b861a6ee35d994636d5205c283cf77391ebfd3f8f5e3cd88e478b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8a315f02b861a6ee35d994636d5205c283cf77391ebfd3f8f5e3cd88e478b7->enter($__internal_1f8a315f02b861a6ee35d994636d5205c283cf77391ebfd3f8f5e3cd88e478b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1f8a315f02b861a6ee35d994636d5205c283cf77391ebfd3f8f5e3cd88e478b7->leave($__internal_1f8a315f02b861a6ee35d994636d5205c283cf77391ebfd3f8f5e3cd88e478b7_prof);

        
        $__internal_9ab53537a601c6103c87ad6002ca0e1a0f1d4034c47791ea0934e7a9b7a129d4->leave($__internal_9ab53537a601c6103c87ad6002ca0e1a0f1d4034c47791ea0934e7a9b7a129d4_prof);

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
