<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_62be49f28c80ef8be37421eaf5994a91e42c824b8bc84c08df2b8ecd178335e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_3b23a5d774f3ccc854624941eb18830c02f51b538b6333690626fa8d3fdee0a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b23a5d774f3ccc854624941eb18830c02f51b538b6333690626fa8d3fdee0a1->enter($__internal_3b23a5d774f3ccc854624941eb18830c02f51b538b6333690626fa8d3fdee0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_7527f67d11647bff38b58039b15c1ef6732844d65408c6807e464f46da0abb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7527f67d11647bff38b58039b15c1ef6732844d65408c6807e464f46da0abb8b->enter($__internal_7527f67d11647bff38b58039b15c1ef6732844d65408c6807e464f46da0abb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b23a5d774f3ccc854624941eb18830c02f51b538b6333690626fa8d3fdee0a1->leave($__internal_3b23a5d774f3ccc854624941eb18830c02f51b538b6333690626fa8d3fdee0a1_prof);

        
        $__internal_7527f67d11647bff38b58039b15c1ef6732844d65408c6807e464f46da0abb8b->leave($__internal_7527f67d11647bff38b58039b15c1ef6732844d65408c6807e464f46da0abb8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_022a52e3415b969eb18ac7b7dc45a0183ba0bdb95eb5039f5d9d9ca863b144f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022a52e3415b969eb18ac7b7dc45a0183ba0bdb95eb5039f5d9d9ca863b144f0->enter($__internal_022a52e3415b969eb18ac7b7dc45a0183ba0bdb95eb5039f5d9d9ca863b144f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b24da6843de8b7b03bea604d2bf21dfd49be7249ba5b8ffb1890a1102b7310ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24da6843de8b7b03bea604d2bf21dfd49be7249ba5b8ffb1890a1102b7310ba->enter($__internal_b24da6843de8b7b03bea604d2bf21dfd49be7249ba5b8ffb1890a1102b7310ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b24da6843de8b7b03bea604d2bf21dfd49be7249ba5b8ffb1890a1102b7310ba->leave($__internal_b24da6843de8b7b03bea604d2bf21dfd49be7249ba5b8ffb1890a1102b7310ba_prof);

        
        $__internal_022a52e3415b969eb18ac7b7dc45a0183ba0bdb95eb5039f5d9d9ca863b144f0->leave($__internal_022a52e3415b969eb18ac7b7dc45a0183ba0bdb95eb5039f5d9d9ca863b144f0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
