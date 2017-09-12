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
        $__internal_eecf8c5cee2c4adb8cb281d58ea7e3ca4ce8dd09861afdf4879ba7b6a0e333ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecf8c5cee2c4adb8cb281d58ea7e3ca4ce8dd09861afdf4879ba7b6a0e333ac->enter($__internal_eecf8c5cee2c4adb8cb281d58ea7e3ca4ce8dd09861afdf4879ba7b6a0e333ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_66a85464fe3ef59aa4f17135d1a7e33f926aaa4e88c1097bcae44986063a61fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a85464fe3ef59aa4f17135d1a7e33f926aaa4e88c1097bcae44986063a61fb->enter($__internal_66a85464fe3ef59aa4f17135d1a7e33f926aaa4e88c1097bcae44986063a61fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eecf8c5cee2c4adb8cb281d58ea7e3ca4ce8dd09861afdf4879ba7b6a0e333ac->leave($__internal_eecf8c5cee2c4adb8cb281d58ea7e3ca4ce8dd09861afdf4879ba7b6a0e333ac_prof);

        
        $__internal_66a85464fe3ef59aa4f17135d1a7e33f926aaa4e88c1097bcae44986063a61fb->leave($__internal_66a85464fe3ef59aa4f17135d1a7e33f926aaa4e88c1097bcae44986063a61fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_88485e6ef9ffbba2a8a3d3d061d29f5e4e0b580b69d4805a0d87c625d79827be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88485e6ef9ffbba2a8a3d3d061d29f5e4e0b580b69d4805a0d87c625d79827be->enter($__internal_88485e6ef9ffbba2a8a3d3d061d29f5e4e0b580b69d4805a0d87c625d79827be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60bb262dccda1c8b4ebd7ab73e42aaaedbf235d0045bf1d5ea912f0ddfca9ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bb262dccda1c8b4ebd7ab73e42aaaedbf235d0045bf1d5ea912f0ddfca9ae2->enter($__internal_60bb262dccda1c8b4ebd7ab73e42aaaedbf235d0045bf1d5ea912f0ddfca9ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_60bb262dccda1c8b4ebd7ab73e42aaaedbf235d0045bf1d5ea912f0ddfca9ae2->leave($__internal_60bb262dccda1c8b4ebd7ab73e42aaaedbf235d0045bf1d5ea912f0ddfca9ae2_prof);

        
        $__internal_88485e6ef9ffbba2a8a3d3d061d29f5e4e0b580b69d4805a0d87c625d79827be->leave($__internal_88485e6ef9ffbba2a8a3d3d061d29f5e4e0b580b69d4805a0d87c625d79827be_prof);

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
