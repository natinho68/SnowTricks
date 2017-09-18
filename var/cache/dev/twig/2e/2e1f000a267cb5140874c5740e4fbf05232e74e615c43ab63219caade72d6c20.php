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
        $__internal_75d010b612727bc5e2cd30a3243fc9352b19bcaa287c0d3c93c612f116071476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d010b612727bc5e2cd30a3243fc9352b19bcaa287c0d3c93c612f116071476->enter($__internal_75d010b612727bc5e2cd30a3243fc9352b19bcaa287c0d3c93c612f116071476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e0fb9953f0b6ce70ace3c5e023fe1d3c340835633341a1c0d62dce607cf8735b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fb9953f0b6ce70ace3c5e023fe1d3c340835633341a1c0d62dce607cf8735b->enter($__internal_e0fb9953f0b6ce70ace3c5e023fe1d3c340835633341a1c0d62dce607cf8735b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75d010b612727bc5e2cd30a3243fc9352b19bcaa287c0d3c93c612f116071476->leave($__internal_75d010b612727bc5e2cd30a3243fc9352b19bcaa287c0d3c93c612f116071476_prof);

        
        $__internal_e0fb9953f0b6ce70ace3c5e023fe1d3c340835633341a1c0d62dce607cf8735b->leave($__internal_e0fb9953f0b6ce70ace3c5e023fe1d3c340835633341a1c0d62dce607cf8735b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfb95a779f3d5968a6f7f1efa3a16bab4302f9ff8b39c6b3625d47c9dcb701f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb95a779f3d5968a6f7f1efa3a16bab4302f9ff8b39c6b3625d47c9dcb701f2->enter($__internal_dfb95a779f3d5968a6f7f1efa3a16bab4302f9ff8b39c6b3625d47c9dcb701f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da3c7d9f63f087efd1f5f0e0eaeb183007f91f4a2ed06b4e6938c42957489ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3c7d9f63f087efd1f5f0e0eaeb183007f91f4a2ed06b4e6938c42957489ec1->enter($__internal_da3c7d9f63f087efd1f5f0e0eaeb183007f91f4a2ed06b4e6938c42957489ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_da3c7d9f63f087efd1f5f0e0eaeb183007f91f4a2ed06b4e6938c42957489ec1->leave($__internal_da3c7d9f63f087efd1f5f0e0eaeb183007f91f4a2ed06b4e6938c42957489ec1_prof);

        
        $__internal_dfb95a779f3d5968a6f7f1efa3a16bab4302f9ff8b39c6b3625d47c9dcb701f2->leave($__internal_dfb95a779f3d5968a6f7f1efa3a16bab4302f9ff8b39c6b3625d47c9dcb701f2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3071e31d4f380856619c72c283f563c2cb15efeecf4a70a4cfd93e364ba58bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3071e31d4f380856619c72c283f563c2cb15efeecf4a70a4cfd93e364ba58bda->enter($__internal_3071e31d4f380856619c72c283f563c2cb15efeecf4a70a4cfd93e364ba58bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b473633214072e4a0e37be2411607e7d1706c94b3674b7330c71b5d78a0f84a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b473633214072e4a0e37be2411607e7d1706c94b3674b7330c71b5d78a0f84a2->enter($__internal_b473633214072e4a0e37be2411607e7d1706c94b3674b7330c71b5d78a0f84a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b473633214072e4a0e37be2411607e7d1706c94b3674b7330c71b5d78a0f84a2->leave($__internal_b473633214072e4a0e37be2411607e7d1706c94b3674b7330c71b5d78a0f84a2_prof);

        
        $__internal_3071e31d4f380856619c72c283f563c2cb15efeecf4a70a4cfd93e364ba58bda->leave($__internal_3071e31d4f380856619c72c283f563c2cb15efeecf4a70a4cfd93e364ba58bda_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26b8f4a944cd14a764424714db76c1a22ba2553593778c072bb9d73563d1075b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b8f4a944cd14a764424714db76c1a22ba2553593778c072bb9d73563d1075b->enter($__internal_26b8f4a944cd14a764424714db76c1a22ba2553593778c072bb9d73563d1075b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_090576e2e344e5fa98654bd115d783fa1e93cc18fa61fa7e4dcc8c418e87d5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090576e2e344e5fa98654bd115d783fa1e93cc18fa61fa7e4dcc8c418e87d5c3->enter($__internal_090576e2e344e5fa98654bd115d783fa1e93cc18fa61fa7e4dcc8c418e87d5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_090576e2e344e5fa98654bd115d783fa1e93cc18fa61fa7e4dcc8c418e87d5c3->leave($__internal_090576e2e344e5fa98654bd115d783fa1e93cc18fa61fa7e4dcc8c418e87d5c3_prof);

        
        $__internal_26b8f4a944cd14a764424714db76c1a22ba2553593778c072bb9d73563d1075b->leave($__internal_26b8f4a944cd14a764424714db76c1a22ba2553593778c072bb9d73563d1075b_prof);

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
