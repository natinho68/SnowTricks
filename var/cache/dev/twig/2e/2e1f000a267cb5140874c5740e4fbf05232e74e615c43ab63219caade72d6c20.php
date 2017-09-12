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
        $__internal_5c8ebce25f54c0b9642e5b686091f946a0476236483d2d1c6a1d6a8ff62961f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c8ebce25f54c0b9642e5b686091f946a0476236483d2d1c6a1d6a8ff62961f2->enter($__internal_5c8ebce25f54c0b9642e5b686091f946a0476236483d2d1c6a1d6a8ff62961f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_719494f5afc34b2b42d88c753d56ad9250d0d1b7d8264e098b1d142c0625bf3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719494f5afc34b2b42d88c753d56ad9250d0d1b7d8264e098b1d142c0625bf3c->enter($__internal_719494f5afc34b2b42d88c753d56ad9250d0d1b7d8264e098b1d142c0625bf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c8ebce25f54c0b9642e5b686091f946a0476236483d2d1c6a1d6a8ff62961f2->leave($__internal_5c8ebce25f54c0b9642e5b686091f946a0476236483d2d1c6a1d6a8ff62961f2_prof);

        
        $__internal_719494f5afc34b2b42d88c753d56ad9250d0d1b7d8264e098b1d142c0625bf3c->leave($__internal_719494f5afc34b2b42d88c753d56ad9250d0d1b7d8264e098b1d142c0625bf3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f62bbd815c81e8b6b3daca20029c519db8310af90b945e5c068caba655129af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f62bbd815c81e8b6b3daca20029c519db8310af90b945e5c068caba655129af->enter($__internal_8f62bbd815c81e8b6b3daca20029c519db8310af90b945e5c068caba655129af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a2c259d603ca76837e96d0b1d715cfad23b38af73c414b1a583a3a89883047c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2c259d603ca76837e96d0b1d715cfad23b38af73c414b1a583a3a89883047c->enter($__internal_7a2c259d603ca76837e96d0b1d715cfad23b38af73c414b1a583a3a89883047c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7a2c259d603ca76837e96d0b1d715cfad23b38af73c414b1a583a3a89883047c->leave($__internal_7a2c259d603ca76837e96d0b1d715cfad23b38af73c414b1a583a3a89883047c_prof);

        
        $__internal_8f62bbd815c81e8b6b3daca20029c519db8310af90b945e5c068caba655129af->leave($__internal_8f62bbd815c81e8b6b3daca20029c519db8310af90b945e5c068caba655129af_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08317ca58a4be53cf7ce3aa1d4a1e32ffe13d9daf745dd0a4874b6f5437b9ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08317ca58a4be53cf7ce3aa1d4a1e32ffe13d9daf745dd0a4874b6f5437b9ca4->enter($__internal_08317ca58a4be53cf7ce3aa1d4a1e32ffe13d9daf745dd0a4874b6f5437b9ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b40324a7bde47676e90aa3f9ab26c3af347f4edd0ccb80f4158c85fe21966b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40324a7bde47676e90aa3f9ab26c3af347f4edd0ccb80f4158c85fe21966b2e->enter($__internal_b40324a7bde47676e90aa3f9ab26c3af347f4edd0ccb80f4158c85fe21966b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b40324a7bde47676e90aa3f9ab26c3af347f4edd0ccb80f4158c85fe21966b2e->leave($__internal_b40324a7bde47676e90aa3f9ab26c3af347f4edd0ccb80f4158c85fe21966b2e_prof);

        
        $__internal_08317ca58a4be53cf7ce3aa1d4a1e32ffe13d9daf745dd0a4874b6f5437b9ca4->leave($__internal_08317ca58a4be53cf7ce3aa1d4a1e32ffe13d9daf745dd0a4874b6f5437b9ca4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_129c1c8bfb98933c1b327a3deebdd17b82c964faade8a07225fa27ef07f89ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129c1c8bfb98933c1b327a3deebdd17b82c964faade8a07225fa27ef07f89ab2->enter($__internal_129c1c8bfb98933c1b327a3deebdd17b82c964faade8a07225fa27ef07f89ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aaa77a3bef8bf5809f865fdbadb7f2555c348a0bb59dac157a1d048bfb5283da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa77a3bef8bf5809f865fdbadb7f2555c348a0bb59dac157a1d048bfb5283da->enter($__internal_aaa77a3bef8bf5809f865fdbadb7f2555c348a0bb59dac157a1d048bfb5283da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_aaa77a3bef8bf5809f865fdbadb7f2555c348a0bb59dac157a1d048bfb5283da->leave($__internal_aaa77a3bef8bf5809f865fdbadb7f2555c348a0bb59dac157a1d048bfb5283da_prof);

        
        $__internal_129c1c8bfb98933c1b327a3deebdd17b82c964faade8a07225fa27ef07f89ab2->leave($__internal_129c1c8bfb98933c1b327a3deebdd17b82c964faade8a07225fa27ef07f89ab2_prof);

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
