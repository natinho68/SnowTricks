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
        $__internal_2676e71166a7c3fb6a72f8cecae905b3504e9820f5fd9b32ef0bea5a020be13d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2676e71166a7c3fb6a72f8cecae905b3504e9820f5fd9b32ef0bea5a020be13d->enter($__internal_2676e71166a7c3fb6a72f8cecae905b3504e9820f5fd9b32ef0bea5a020be13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_17f8b2be7fdc6ee5075bd878b566f77298e45b759037d9fee463869a5b51ff3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f8b2be7fdc6ee5075bd878b566f77298e45b759037d9fee463869a5b51ff3e->enter($__internal_17f8b2be7fdc6ee5075bd878b566f77298e45b759037d9fee463869a5b51ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2676e71166a7c3fb6a72f8cecae905b3504e9820f5fd9b32ef0bea5a020be13d->leave($__internal_2676e71166a7c3fb6a72f8cecae905b3504e9820f5fd9b32ef0bea5a020be13d_prof);

        
        $__internal_17f8b2be7fdc6ee5075bd878b566f77298e45b759037d9fee463869a5b51ff3e->leave($__internal_17f8b2be7fdc6ee5075bd878b566f77298e45b759037d9fee463869a5b51ff3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e250505bf75bb2c5cb06a75106eaa8e365de299cf1cc2656fc6280eec5b0625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e250505bf75bb2c5cb06a75106eaa8e365de299cf1cc2656fc6280eec5b0625->enter($__internal_2e250505bf75bb2c5cb06a75106eaa8e365de299cf1cc2656fc6280eec5b0625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_592445963cfbbd5adfa557eb1adad52fbd8034929246d781544eba016acf5809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592445963cfbbd5adfa557eb1adad52fbd8034929246d781544eba016acf5809->enter($__internal_592445963cfbbd5adfa557eb1adad52fbd8034929246d781544eba016acf5809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_592445963cfbbd5adfa557eb1adad52fbd8034929246d781544eba016acf5809->leave($__internal_592445963cfbbd5adfa557eb1adad52fbd8034929246d781544eba016acf5809_prof);

        
        $__internal_2e250505bf75bb2c5cb06a75106eaa8e365de299cf1cc2656fc6280eec5b0625->leave($__internal_2e250505bf75bb2c5cb06a75106eaa8e365de299cf1cc2656fc6280eec5b0625_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ad22d3ed57c3f3c9b19635c21659226f97f3818c2fc2c9542df0e1c8a08a6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad22d3ed57c3f3c9b19635c21659226f97f3818c2fc2c9542df0e1c8a08a6c6->enter($__internal_7ad22d3ed57c3f3c9b19635c21659226f97f3818c2fc2c9542df0e1c8a08a6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0d663f483575ace3b275589dd032f8dac8d580418902ab39f3841a8832e8eade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d663f483575ace3b275589dd032f8dac8d580418902ab39f3841a8832e8eade->enter($__internal_0d663f483575ace3b275589dd032f8dac8d580418902ab39f3841a8832e8eade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0d663f483575ace3b275589dd032f8dac8d580418902ab39f3841a8832e8eade->leave($__internal_0d663f483575ace3b275589dd032f8dac8d580418902ab39f3841a8832e8eade_prof);

        
        $__internal_7ad22d3ed57c3f3c9b19635c21659226f97f3818c2fc2c9542df0e1c8a08a6c6->leave($__internal_7ad22d3ed57c3f3c9b19635c21659226f97f3818c2fc2c9542df0e1c8a08a6c6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_617dbeb263374f76af517a9387f2bc03e02d49b595208516c6c4bba348440671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617dbeb263374f76af517a9387f2bc03e02d49b595208516c6c4bba348440671->enter($__internal_617dbeb263374f76af517a9387f2bc03e02d49b595208516c6c4bba348440671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d3c777995cffac070bcf5cc98b5d319f6212dbe381f769c6e633cd7a89f3b0e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c777995cffac070bcf5cc98b5d319f6212dbe381f769c6e633cd7a89f3b0e6->enter($__internal_d3c777995cffac070bcf5cc98b5d319f6212dbe381f769c6e633cd7a89f3b0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d3c777995cffac070bcf5cc98b5d319f6212dbe381f769c6e633cd7a89f3b0e6->leave($__internal_d3c777995cffac070bcf5cc98b5d319f6212dbe381f769c6e633cd7a89f3b0e6_prof);

        
        $__internal_617dbeb263374f76af517a9387f2bc03e02d49b595208516c6c4bba348440671->leave($__internal_617dbeb263374f76af517a9387f2bc03e02d49b595208516c6c4bba348440671_prof);

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
