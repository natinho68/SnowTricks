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
        $__internal_60ad50a413778aad6c49f2a3181136f27989e127762bd779cfa01729d6c83bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ad50a413778aad6c49f2a3181136f27989e127762bd779cfa01729d6c83bca->enter($__internal_60ad50a413778aad6c49f2a3181136f27989e127762bd779cfa01729d6c83bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d8791e28dee89419225b59fe772fdf007f74582d3404d12895fa99d1361bdd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8791e28dee89419225b59fe772fdf007f74582d3404d12895fa99d1361bdd75->enter($__internal_d8791e28dee89419225b59fe772fdf007f74582d3404d12895fa99d1361bdd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60ad50a413778aad6c49f2a3181136f27989e127762bd779cfa01729d6c83bca->leave($__internal_60ad50a413778aad6c49f2a3181136f27989e127762bd779cfa01729d6c83bca_prof);

        
        $__internal_d8791e28dee89419225b59fe772fdf007f74582d3404d12895fa99d1361bdd75->leave($__internal_d8791e28dee89419225b59fe772fdf007f74582d3404d12895fa99d1361bdd75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6fd51b4cdb2a242eebefac17ff2095be16236b14d57bda95b5264e1839c9e36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd51b4cdb2a242eebefac17ff2095be16236b14d57bda95b5264e1839c9e36e->enter($__internal_6fd51b4cdb2a242eebefac17ff2095be16236b14d57bda95b5264e1839c9e36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_18204031e38f31e4b63b8d6e67d65c3110adbdbf84ec3557f534f78f89f9f93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18204031e38f31e4b63b8d6e67d65c3110adbdbf84ec3557f534f78f89f9f93d->enter($__internal_18204031e38f31e4b63b8d6e67d65c3110adbdbf84ec3557f534f78f89f9f93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_18204031e38f31e4b63b8d6e67d65c3110adbdbf84ec3557f534f78f89f9f93d->leave($__internal_18204031e38f31e4b63b8d6e67d65c3110adbdbf84ec3557f534f78f89f9f93d_prof);

        
        $__internal_6fd51b4cdb2a242eebefac17ff2095be16236b14d57bda95b5264e1839c9e36e->leave($__internal_6fd51b4cdb2a242eebefac17ff2095be16236b14d57bda95b5264e1839c9e36e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9dbf8d959c58835982db39e710db8d79600459ea2f976c71f9c3cdb99b17dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9dbf8d959c58835982db39e710db8d79600459ea2f976c71f9c3cdb99b17dc4->enter($__internal_f9dbf8d959c58835982db39e710db8d79600459ea2f976c71f9c3cdb99b17dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cfbf77a215d0201bbca082ce120a6eeaec3e6c161298b12ad1d67cd47c5ece70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbf77a215d0201bbca082ce120a6eeaec3e6c161298b12ad1d67cd47c5ece70->enter($__internal_cfbf77a215d0201bbca082ce120a6eeaec3e6c161298b12ad1d67cd47c5ece70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cfbf77a215d0201bbca082ce120a6eeaec3e6c161298b12ad1d67cd47c5ece70->leave($__internal_cfbf77a215d0201bbca082ce120a6eeaec3e6c161298b12ad1d67cd47c5ece70_prof);

        
        $__internal_f9dbf8d959c58835982db39e710db8d79600459ea2f976c71f9c3cdb99b17dc4->leave($__internal_f9dbf8d959c58835982db39e710db8d79600459ea2f976c71f9c3cdb99b17dc4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4655ebe6276fc6590dd0e0fafb0cc1b2091fb0f51cda43f5932a32727b6c91a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4655ebe6276fc6590dd0e0fafb0cc1b2091fb0f51cda43f5932a32727b6c91a6->enter($__internal_4655ebe6276fc6590dd0e0fafb0cc1b2091fb0f51cda43f5932a32727b6c91a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dadfd50cc1d3f2f1797ce85045a2236cc7595c92902bc9351f54d88568bfc05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadfd50cc1d3f2f1797ce85045a2236cc7595c92902bc9351f54d88568bfc05a->enter($__internal_dadfd50cc1d3f2f1797ce85045a2236cc7595c92902bc9351f54d88568bfc05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_dadfd50cc1d3f2f1797ce85045a2236cc7595c92902bc9351f54d88568bfc05a->leave($__internal_dadfd50cc1d3f2f1797ce85045a2236cc7595c92902bc9351f54d88568bfc05a_prof);

        
        $__internal_4655ebe6276fc6590dd0e0fafb0cc1b2091fb0f51cda43f5932a32727b6c91a6->leave($__internal_4655ebe6276fc6590dd0e0fafb0cc1b2091fb0f51cda43f5932a32727b6c91a6_prof);

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
