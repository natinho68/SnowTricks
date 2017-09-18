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
        $__internal_64b7f35ffd3ff30cf0d341b844022398ebe766748f746a09516a339c52ded6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b7f35ffd3ff30cf0d341b844022398ebe766748f746a09516a339c52ded6de->enter($__internal_64b7f35ffd3ff30cf0d341b844022398ebe766748f746a09516a339c52ded6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_4f0a775847f2c24482508fe89e9feb3ebf06a1f86b5e4d8b43391c421b7ceef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0a775847f2c24482508fe89e9feb3ebf06a1f86b5e4d8b43391c421b7ceef8->enter($__internal_4f0a775847f2c24482508fe89e9feb3ebf06a1f86b5e4d8b43391c421b7ceef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64b7f35ffd3ff30cf0d341b844022398ebe766748f746a09516a339c52ded6de->leave($__internal_64b7f35ffd3ff30cf0d341b844022398ebe766748f746a09516a339c52ded6de_prof);

        
        $__internal_4f0a775847f2c24482508fe89e9feb3ebf06a1f86b5e4d8b43391c421b7ceef8->leave($__internal_4f0a775847f2c24482508fe89e9feb3ebf06a1f86b5e4d8b43391c421b7ceef8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ed89fe17e50ae02c7e4e3b6e54592c0575a1ba6b037c749d9e26c31f97fac2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed89fe17e50ae02c7e4e3b6e54592c0575a1ba6b037c749d9e26c31f97fac2c->enter($__internal_8ed89fe17e50ae02c7e4e3b6e54592c0575a1ba6b037c749d9e26c31f97fac2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e604eeae77d42431cd67f206ea571523a6e9cfde41ed5d861fc7454c516b283f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e604eeae77d42431cd67f206ea571523a6e9cfde41ed5d861fc7454c516b283f->enter($__internal_e604eeae77d42431cd67f206ea571523a6e9cfde41ed5d861fc7454c516b283f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e604eeae77d42431cd67f206ea571523a6e9cfde41ed5d861fc7454c516b283f->leave($__internal_e604eeae77d42431cd67f206ea571523a6e9cfde41ed5d861fc7454c516b283f_prof);

        
        $__internal_8ed89fe17e50ae02c7e4e3b6e54592c0575a1ba6b037c749d9e26c31f97fac2c->leave($__internal_8ed89fe17e50ae02c7e4e3b6e54592c0575a1ba6b037c749d9e26c31f97fac2c_prof);

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
