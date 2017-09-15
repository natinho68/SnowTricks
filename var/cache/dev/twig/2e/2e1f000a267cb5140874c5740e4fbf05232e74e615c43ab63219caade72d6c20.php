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
        $__internal_c28ad5e9d22c1dcdf15ea2470f7d453528fe94c460637917a59469c45006ea73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28ad5e9d22c1dcdf15ea2470f7d453528fe94c460637917a59469c45006ea73->enter($__internal_c28ad5e9d22c1dcdf15ea2470f7d453528fe94c460637917a59469c45006ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e5f5c57f29d5ab62ca610f93794e67c333553ddf33df815e04cadc11b341e4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f5c57f29d5ab62ca610f93794e67c333553ddf33df815e04cadc11b341e4b8->enter($__internal_e5f5c57f29d5ab62ca610f93794e67c333553ddf33df815e04cadc11b341e4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c28ad5e9d22c1dcdf15ea2470f7d453528fe94c460637917a59469c45006ea73->leave($__internal_c28ad5e9d22c1dcdf15ea2470f7d453528fe94c460637917a59469c45006ea73_prof);

        
        $__internal_e5f5c57f29d5ab62ca610f93794e67c333553ddf33df815e04cadc11b341e4b8->leave($__internal_e5f5c57f29d5ab62ca610f93794e67c333553ddf33df815e04cadc11b341e4b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbdd7db8dd7840280bec4c06f649223066d79329365c3a801afb08fc482523ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbdd7db8dd7840280bec4c06f649223066d79329365c3a801afb08fc482523ba->enter($__internal_fbdd7db8dd7840280bec4c06f649223066d79329365c3a801afb08fc482523ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ebc85b7b97f10e5c5a072203d2524306c98cd84f54f0eb7ffa1b3de369bb7d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc85b7b97f10e5c5a072203d2524306c98cd84f54f0eb7ffa1b3de369bb7d2f->enter($__internal_ebc85b7b97f10e5c5a072203d2524306c98cd84f54f0eb7ffa1b3de369bb7d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ebc85b7b97f10e5c5a072203d2524306c98cd84f54f0eb7ffa1b3de369bb7d2f->leave($__internal_ebc85b7b97f10e5c5a072203d2524306c98cd84f54f0eb7ffa1b3de369bb7d2f_prof);

        
        $__internal_fbdd7db8dd7840280bec4c06f649223066d79329365c3a801afb08fc482523ba->leave($__internal_fbdd7db8dd7840280bec4c06f649223066d79329365c3a801afb08fc482523ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4837961f4072888e259bd2dd4a0a2d64906a4f75ccf9bc3ba745d84318a47c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4837961f4072888e259bd2dd4a0a2d64906a4f75ccf9bc3ba745d84318a47c63->enter($__internal_4837961f4072888e259bd2dd4a0a2d64906a4f75ccf9bc3ba745d84318a47c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_49badcd9fd62500f6bbe4f45af19186d26e6c23339d9693ba646ccae455102ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49badcd9fd62500f6bbe4f45af19186d26e6c23339d9693ba646ccae455102ea->enter($__internal_49badcd9fd62500f6bbe4f45af19186d26e6c23339d9693ba646ccae455102ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_49badcd9fd62500f6bbe4f45af19186d26e6c23339d9693ba646ccae455102ea->leave($__internal_49badcd9fd62500f6bbe4f45af19186d26e6c23339d9693ba646ccae455102ea_prof);

        
        $__internal_4837961f4072888e259bd2dd4a0a2d64906a4f75ccf9bc3ba745d84318a47c63->leave($__internal_4837961f4072888e259bd2dd4a0a2d64906a4f75ccf9bc3ba745d84318a47c63_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59a1fef950a8ccf3c66bbed9b2080533ab841dc1377e644f6717a9607151b74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a1fef950a8ccf3c66bbed9b2080533ab841dc1377e644f6717a9607151b74d->enter($__internal_59a1fef950a8ccf3c66bbed9b2080533ab841dc1377e644f6717a9607151b74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee3a9340a3504292786377841526b22aad04d1164db58ea7d7b5977931c3867f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3a9340a3504292786377841526b22aad04d1164db58ea7d7b5977931c3867f->enter($__internal_ee3a9340a3504292786377841526b22aad04d1164db58ea7d7b5977931c3867f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ee3a9340a3504292786377841526b22aad04d1164db58ea7d7b5977931c3867f->leave($__internal_ee3a9340a3504292786377841526b22aad04d1164db58ea7d7b5977931c3867f_prof);

        
        $__internal_59a1fef950a8ccf3c66bbed9b2080533ab841dc1377e644f6717a9607151b74d->leave($__internal_59a1fef950a8ccf3c66bbed9b2080533ab841dc1377e644f6717a9607151b74d_prof);

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
