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
        $__internal_b022ce4ab63dd84f98092b18b6e6613b0619ba4f53bc14ec6f6f53a0b79be896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b022ce4ab63dd84f98092b18b6e6613b0619ba4f53bc14ec6f6f53a0b79be896->enter($__internal_b022ce4ab63dd84f98092b18b6e6613b0619ba4f53bc14ec6f6f53a0b79be896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_33b17e6d58f1d913503d3bafeb14fb1881508adf97894836c4435b7e215f0215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b17e6d58f1d913503d3bafeb14fb1881508adf97894836c4435b7e215f0215->enter($__internal_33b17e6d58f1d913503d3bafeb14fb1881508adf97894836c4435b7e215f0215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b022ce4ab63dd84f98092b18b6e6613b0619ba4f53bc14ec6f6f53a0b79be896->leave($__internal_b022ce4ab63dd84f98092b18b6e6613b0619ba4f53bc14ec6f6f53a0b79be896_prof);

        
        $__internal_33b17e6d58f1d913503d3bafeb14fb1881508adf97894836c4435b7e215f0215->leave($__internal_33b17e6d58f1d913503d3bafeb14fb1881508adf97894836c4435b7e215f0215_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d2231fc61b39ce47b4be2066af120df3eec1972b1c58a94cca968cd24fdcb53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2231fc61b39ce47b4be2066af120df3eec1972b1c58a94cca968cd24fdcb53->enter($__internal_8d2231fc61b39ce47b4be2066af120df3eec1972b1c58a94cca968cd24fdcb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e421a972345d4e00780a15b933ecb4366166fe652379694f0575f55b79288456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e421a972345d4e00780a15b933ecb4366166fe652379694f0575f55b79288456->enter($__internal_e421a972345d4e00780a15b933ecb4366166fe652379694f0575f55b79288456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e421a972345d4e00780a15b933ecb4366166fe652379694f0575f55b79288456->leave($__internal_e421a972345d4e00780a15b933ecb4366166fe652379694f0575f55b79288456_prof);

        
        $__internal_8d2231fc61b39ce47b4be2066af120df3eec1972b1c58a94cca968cd24fdcb53->leave($__internal_8d2231fc61b39ce47b4be2066af120df3eec1972b1c58a94cca968cd24fdcb53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd3ad766916ba54782fd063e011e35b121fb9076457324e9870e78fd447a6574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3ad766916ba54782fd063e011e35b121fb9076457324e9870e78fd447a6574->enter($__internal_cd3ad766916ba54782fd063e011e35b121fb9076457324e9870e78fd447a6574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_22869f438a2b2748cf33655dfd5f7adc4d3384da7538a0c69f5086e59ebb2677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22869f438a2b2748cf33655dfd5f7adc4d3384da7538a0c69f5086e59ebb2677->enter($__internal_22869f438a2b2748cf33655dfd5f7adc4d3384da7538a0c69f5086e59ebb2677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22869f438a2b2748cf33655dfd5f7adc4d3384da7538a0c69f5086e59ebb2677->leave($__internal_22869f438a2b2748cf33655dfd5f7adc4d3384da7538a0c69f5086e59ebb2677_prof);

        
        $__internal_cd3ad766916ba54782fd063e011e35b121fb9076457324e9870e78fd447a6574->leave($__internal_cd3ad766916ba54782fd063e011e35b121fb9076457324e9870e78fd447a6574_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9b0b498bb52414569e9db3f3b0e24ad65cc0650a5462e820c9fec09c11326fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b0b498bb52414569e9db3f3b0e24ad65cc0650a5462e820c9fec09c11326fa->enter($__internal_e9b0b498bb52414569e9db3f3b0e24ad65cc0650a5462e820c9fec09c11326fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c368f64c65bfb7e61dcd7050e906046f857a188a583dbb122cb2a954a32a2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c368f64c65bfb7e61dcd7050e906046f857a188a583dbb122cb2a954a32a2b4->enter($__internal_8c368f64c65bfb7e61dcd7050e906046f857a188a583dbb122cb2a954a32a2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c368f64c65bfb7e61dcd7050e906046f857a188a583dbb122cb2a954a32a2b4->leave($__internal_8c368f64c65bfb7e61dcd7050e906046f857a188a583dbb122cb2a954a32a2b4_prof);

        
        $__internal_e9b0b498bb52414569e9db3f3b0e24ad65cc0650a5462e820c9fec09c11326fa->leave($__internal_e9b0b498bb52414569e9db3f3b0e24ad65cc0650a5462e820c9fec09c11326fa_prof);

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
