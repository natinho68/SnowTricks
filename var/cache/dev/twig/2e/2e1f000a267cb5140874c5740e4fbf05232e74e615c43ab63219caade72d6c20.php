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
        $__internal_8d7059f03a21858739146964699cace5990cbf89246bb2e8bc8680046c552ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7059f03a21858739146964699cace5990cbf89246bb2e8bc8680046c552ce4->enter($__internal_8d7059f03a21858739146964699cace5990cbf89246bb2e8bc8680046c552ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ffc1848de82e66b9fa761e1c887bbcb54ebb4f8b91524539d3d5c7e178660ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc1848de82e66b9fa761e1c887bbcb54ebb4f8b91524539d3d5c7e178660ff5->enter($__internal_ffc1848de82e66b9fa761e1c887bbcb54ebb4f8b91524539d3d5c7e178660ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d7059f03a21858739146964699cace5990cbf89246bb2e8bc8680046c552ce4->leave($__internal_8d7059f03a21858739146964699cace5990cbf89246bb2e8bc8680046c552ce4_prof);

        
        $__internal_ffc1848de82e66b9fa761e1c887bbcb54ebb4f8b91524539d3d5c7e178660ff5->leave($__internal_ffc1848de82e66b9fa761e1c887bbcb54ebb4f8b91524539d3d5c7e178660ff5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_689e6458f81901bf2aa393c8224aaca4fed801f21196a275a816b73b21de434c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689e6458f81901bf2aa393c8224aaca4fed801f21196a275a816b73b21de434c->enter($__internal_689e6458f81901bf2aa393c8224aaca4fed801f21196a275a816b73b21de434c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a68bd9b9c0d2e97906bf11272f9393bebcbd6010a8fe70f66a31031548bff665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68bd9b9c0d2e97906bf11272f9393bebcbd6010a8fe70f66a31031548bff665->enter($__internal_a68bd9b9c0d2e97906bf11272f9393bebcbd6010a8fe70f66a31031548bff665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a68bd9b9c0d2e97906bf11272f9393bebcbd6010a8fe70f66a31031548bff665->leave($__internal_a68bd9b9c0d2e97906bf11272f9393bebcbd6010a8fe70f66a31031548bff665_prof);

        
        $__internal_689e6458f81901bf2aa393c8224aaca4fed801f21196a275a816b73b21de434c->leave($__internal_689e6458f81901bf2aa393c8224aaca4fed801f21196a275a816b73b21de434c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f7fca46f7493e6aa758dc2e94f859da2b0a0b0bfbd6289a1af71382438189e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7fca46f7493e6aa758dc2e94f859da2b0a0b0bfbd6289a1af71382438189e9->enter($__internal_5f7fca46f7493e6aa758dc2e94f859da2b0a0b0bfbd6289a1af71382438189e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bf74a8ee443c9f842df2e7db2976597937de2f0215a9e95b0ec595804b43fdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf74a8ee443c9f842df2e7db2976597937de2f0215a9e95b0ec595804b43fdcf->enter($__internal_bf74a8ee443c9f842df2e7db2976597937de2f0215a9e95b0ec595804b43fdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bf74a8ee443c9f842df2e7db2976597937de2f0215a9e95b0ec595804b43fdcf->leave($__internal_bf74a8ee443c9f842df2e7db2976597937de2f0215a9e95b0ec595804b43fdcf_prof);

        
        $__internal_5f7fca46f7493e6aa758dc2e94f859da2b0a0b0bfbd6289a1af71382438189e9->leave($__internal_5f7fca46f7493e6aa758dc2e94f859da2b0a0b0bfbd6289a1af71382438189e9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d9b6b7e15902c586c04b73af7e81ba129c612907d5233ee2bfb39ec09bdec32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9b6b7e15902c586c04b73af7e81ba129c612907d5233ee2bfb39ec09bdec32->enter($__internal_0d9b6b7e15902c586c04b73af7e81ba129c612907d5233ee2bfb39ec09bdec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_235a619294adedefa321176c98596df678aeca1b88a8925727affca0b05b74a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235a619294adedefa321176c98596df678aeca1b88a8925727affca0b05b74a2->enter($__internal_235a619294adedefa321176c98596df678aeca1b88a8925727affca0b05b74a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_235a619294adedefa321176c98596df678aeca1b88a8925727affca0b05b74a2->leave($__internal_235a619294adedefa321176c98596df678aeca1b88a8925727affca0b05b74a2_prof);

        
        $__internal_0d9b6b7e15902c586c04b73af7e81ba129c612907d5233ee2bfb39ec09bdec32->leave($__internal_0d9b6b7e15902c586c04b73af7e81ba129c612907d5233ee2bfb39ec09bdec32_prof);

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
