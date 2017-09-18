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
        $__internal_7a910479759bfa2e7fb9fd82443cb2b114bc597a7f792ad09400580bd9ee2136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a910479759bfa2e7fb9fd82443cb2b114bc597a7f792ad09400580bd9ee2136->enter($__internal_7a910479759bfa2e7fb9fd82443cb2b114bc597a7f792ad09400580bd9ee2136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5bedd3fe4c0834b914d142468051ce6a1ea97af0d81da5c11571d3bec6460bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bedd3fe4c0834b914d142468051ce6a1ea97af0d81da5c11571d3bec6460bc8->enter($__internal_5bedd3fe4c0834b914d142468051ce6a1ea97af0d81da5c11571d3bec6460bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a910479759bfa2e7fb9fd82443cb2b114bc597a7f792ad09400580bd9ee2136->leave($__internal_7a910479759bfa2e7fb9fd82443cb2b114bc597a7f792ad09400580bd9ee2136_prof);

        
        $__internal_5bedd3fe4c0834b914d142468051ce6a1ea97af0d81da5c11571d3bec6460bc8->leave($__internal_5bedd3fe4c0834b914d142468051ce6a1ea97af0d81da5c11571d3bec6460bc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8bac984b0e19a4339b949ef034672301bc4f8396786aadb3316249ada622617e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bac984b0e19a4339b949ef034672301bc4f8396786aadb3316249ada622617e->enter($__internal_8bac984b0e19a4339b949ef034672301bc4f8396786aadb3316249ada622617e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_65788a747ebfe9f43de2f7f0af3f6e07eb7f2e8de253a089f90aaf4b4920e7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65788a747ebfe9f43de2f7f0af3f6e07eb7f2e8de253a089f90aaf4b4920e7e7->enter($__internal_65788a747ebfe9f43de2f7f0af3f6e07eb7f2e8de253a089f90aaf4b4920e7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_65788a747ebfe9f43de2f7f0af3f6e07eb7f2e8de253a089f90aaf4b4920e7e7->leave($__internal_65788a747ebfe9f43de2f7f0af3f6e07eb7f2e8de253a089f90aaf4b4920e7e7_prof);

        
        $__internal_8bac984b0e19a4339b949ef034672301bc4f8396786aadb3316249ada622617e->leave($__internal_8bac984b0e19a4339b949ef034672301bc4f8396786aadb3316249ada622617e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f522398015df026bf20d394deccf8ad47fe21de1fa67ad3ee344bf767ff0deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f522398015df026bf20d394deccf8ad47fe21de1fa67ad3ee344bf767ff0deb->enter($__internal_2f522398015df026bf20d394deccf8ad47fe21de1fa67ad3ee344bf767ff0deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a8915c0ce28c08a14c99da2818d275df137c0f30547496e32cec43ec108b119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8915c0ce28c08a14c99da2818d275df137c0f30547496e32cec43ec108b119->enter($__internal_8a8915c0ce28c08a14c99da2818d275df137c0f30547496e32cec43ec108b119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8a8915c0ce28c08a14c99da2818d275df137c0f30547496e32cec43ec108b119->leave($__internal_8a8915c0ce28c08a14c99da2818d275df137c0f30547496e32cec43ec108b119_prof);

        
        $__internal_2f522398015df026bf20d394deccf8ad47fe21de1fa67ad3ee344bf767ff0deb->leave($__internal_2f522398015df026bf20d394deccf8ad47fe21de1fa67ad3ee344bf767ff0deb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3dfa39bdaa8e0966a9321285bef21862ccb77c8844b1161703a4f78abba19c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3dfa39bdaa8e0966a9321285bef21862ccb77c8844b1161703a4f78abba19c2->enter($__internal_a3dfa39bdaa8e0966a9321285bef21862ccb77c8844b1161703a4f78abba19c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_197f184afa849d6d97f16d92e5692631162b46296cb35b686e44eeedaf6d0c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197f184afa849d6d97f16d92e5692631162b46296cb35b686e44eeedaf6d0c66->enter($__internal_197f184afa849d6d97f16d92e5692631162b46296cb35b686e44eeedaf6d0c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_197f184afa849d6d97f16d92e5692631162b46296cb35b686e44eeedaf6d0c66->leave($__internal_197f184afa849d6d97f16d92e5692631162b46296cb35b686e44eeedaf6d0c66_prof);

        
        $__internal_a3dfa39bdaa8e0966a9321285bef21862ccb77c8844b1161703a4f78abba19c2->leave($__internal_a3dfa39bdaa8e0966a9321285bef21862ccb77c8844b1161703a4f78abba19c2_prof);

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
