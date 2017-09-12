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
        $__internal_8991cd4d104255a863b4d95583ab968d482a511f02a818f1fca5ddef41699c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8991cd4d104255a863b4d95583ab968d482a511f02a818f1fca5ddef41699c83->enter($__internal_8991cd4d104255a863b4d95583ab968d482a511f02a818f1fca5ddef41699c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_fe35e728d654af4ead298b5d7c4461a6cf502b207d6480bfaaed911794d564f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe35e728d654af4ead298b5d7c4461a6cf502b207d6480bfaaed911794d564f9->enter($__internal_fe35e728d654af4ead298b5d7c4461a6cf502b207d6480bfaaed911794d564f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8991cd4d104255a863b4d95583ab968d482a511f02a818f1fca5ddef41699c83->leave($__internal_8991cd4d104255a863b4d95583ab968d482a511f02a818f1fca5ddef41699c83_prof);

        
        $__internal_fe35e728d654af4ead298b5d7c4461a6cf502b207d6480bfaaed911794d564f9->leave($__internal_fe35e728d654af4ead298b5d7c4461a6cf502b207d6480bfaaed911794d564f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2116da06aef6fde6e03e14c05939d47d6c93e75882bb538c3c9a4f6c12222539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2116da06aef6fde6e03e14c05939d47d6c93e75882bb538c3c9a4f6c12222539->enter($__internal_2116da06aef6fde6e03e14c05939d47d6c93e75882bb538c3c9a4f6c12222539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b138c4134500fe9222a7cf7f78bc8b6bdf97ae41ad2000e830af7a3f45d964f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b138c4134500fe9222a7cf7f78bc8b6bdf97ae41ad2000e830af7a3f45d964f1->enter($__internal_b138c4134500fe9222a7cf7f78bc8b6bdf97ae41ad2000e830af7a3f45d964f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b138c4134500fe9222a7cf7f78bc8b6bdf97ae41ad2000e830af7a3f45d964f1->leave($__internal_b138c4134500fe9222a7cf7f78bc8b6bdf97ae41ad2000e830af7a3f45d964f1_prof);

        
        $__internal_2116da06aef6fde6e03e14c05939d47d6c93e75882bb538c3c9a4f6c12222539->leave($__internal_2116da06aef6fde6e03e14c05939d47d6c93e75882bb538c3c9a4f6c12222539_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d164279d79e74715cc5221285eb372c5cacde9f870081663bb67d34bb01df877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d164279d79e74715cc5221285eb372c5cacde9f870081663bb67d34bb01df877->enter($__internal_d164279d79e74715cc5221285eb372c5cacde9f870081663bb67d34bb01df877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a749109f0a5d635cb31579c7382311ed921570ce761f12de115fe7ff2498e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a749109f0a5d635cb31579c7382311ed921570ce761f12de115fe7ff2498e8c->enter($__internal_8a749109f0a5d635cb31579c7382311ed921570ce761f12de115fe7ff2498e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a749109f0a5d635cb31579c7382311ed921570ce761f12de115fe7ff2498e8c->leave($__internal_8a749109f0a5d635cb31579c7382311ed921570ce761f12de115fe7ff2498e8c_prof);

        
        $__internal_d164279d79e74715cc5221285eb372c5cacde9f870081663bb67d34bb01df877->leave($__internal_d164279d79e74715cc5221285eb372c5cacde9f870081663bb67d34bb01df877_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3f7076bdd71275d7185e6b74840243c37cd77c76ce2a3c1c7342f74b10e16ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f7076bdd71275d7185e6b74840243c37cd77c76ce2a3c1c7342f74b10e16ca->enter($__internal_f3f7076bdd71275d7185e6b74840243c37cd77c76ce2a3c1c7342f74b10e16ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bfbacc7a0ce73f408eb010181a1ea16ca961cc11e9488eae314b4c23f38ffd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbacc7a0ce73f408eb010181a1ea16ca961cc11e9488eae314b4c23f38ffd34->enter($__internal_bfbacc7a0ce73f408eb010181a1ea16ca961cc11e9488eae314b4c23f38ffd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bfbacc7a0ce73f408eb010181a1ea16ca961cc11e9488eae314b4c23f38ffd34->leave($__internal_bfbacc7a0ce73f408eb010181a1ea16ca961cc11e9488eae314b4c23f38ffd34_prof);

        
        $__internal_f3f7076bdd71275d7185e6b74840243c37cd77c76ce2a3c1c7342f74b10e16ca->leave($__internal_f3f7076bdd71275d7185e6b74840243c37cd77c76ce2a3c1c7342f74b10e16ca_prof);

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
