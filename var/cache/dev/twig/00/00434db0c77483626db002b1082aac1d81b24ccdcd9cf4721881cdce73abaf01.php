<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8060bfa98c2aa1cffc1d51e6abe2c912792cc01fd243fb535febdb256a9466bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc061c5c32347a1ac9f5b6f407ebb3611c0a6c9e7dd4b845103177cf1341af5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc061c5c32347a1ac9f5b6f407ebb3611c0a6c9e7dd4b845103177cf1341af5e->enter($__internal_dc061c5c32347a1ac9f5b6f407ebb3611c0a6c9e7dd4b845103177cf1341af5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_28d5030361ba660a50387e312bb0c35e2efd10026202e86c09cbadb9c48e40a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d5030361ba660a50387e312bb0c35e2efd10026202e86c09cbadb9c48e40a0->enter($__internal_28d5030361ba660a50387e312bb0c35e2efd10026202e86c09cbadb9c48e40a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc061c5c32347a1ac9f5b6f407ebb3611c0a6c9e7dd4b845103177cf1341af5e->leave($__internal_dc061c5c32347a1ac9f5b6f407ebb3611c0a6c9e7dd4b845103177cf1341af5e_prof);

        
        $__internal_28d5030361ba660a50387e312bb0c35e2efd10026202e86c09cbadb9c48e40a0->leave($__internal_28d5030361ba660a50387e312bb0c35e2efd10026202e86c09cbadb9c48e40a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5d5589dfeaa661b158fbc77d00fb075eb5a45e69e0728b370d86257dabf5abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d5589dfeaa661b158fbc77d00fb075eb5a45e69e0728b370d86257dabf5abc->enter($__internal_f5d5589dfeaa661b158fbc77d00fb075eb5a45e69e0728b370d86257dabf5abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9b36ff939e13687a878fccaf5919a045b2ff082f6173d35153839b0669138c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b36ff939e13687a878fccaf5919a045b2ff082f6173d35153839b0669138c10->enter($__internal_9b36ff939e13687a878fccaf5919a045b2ff082f6173d35153839b0669138c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9b36ff939e13687a878fccaf5919a045b2ff082f6173d35153839b0669138c10->leave($__internal_9b36ff939e13687a878fccaf5919a045b2ff082f6173d35153839b0669138c10_prof);

        
        $__internal_f5d5589dfeaa661b158fbc77d00fb075eb5a45e69e0728b370d86257dabf5abc->leave($__internal_f5d5589dfeaa661b158fbc77d00fb075eb5a45e69e0728b370d86257dabf5abc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
