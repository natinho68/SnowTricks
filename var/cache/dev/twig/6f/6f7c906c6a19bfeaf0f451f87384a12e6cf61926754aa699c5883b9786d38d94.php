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
        $__internal_52c7698fe4fde6a2194c1f8b40499f13b170bd86a497e53fc99cd28be99bfcc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c7698fe4fde6a2194c1f8b40499f13b170bd86a497e53fc99cd28be99bfcc1->enter($__internal_52c7698fe4fde6a2194c1f8b40499f13b170bd86a497e53fc99cd28be99bfcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_96bffe056ca6e84e99d0bd88010ff6fdcaea6f3ea93b4066c9effb2bc6540962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bffe056ca6e84e99d0bd88010ff6fdcaea6f3ea93b4066c9effb2bc6540962->enter($__internal_96bffe056ca6e84e99d0bd88010ff6fdcaea6f3ea93b4066c9effb2bc6540962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52c7698fe4fde6a2194c1f8b40499f13b170bd86a497e53fc99cd28be99bfcc1->leave($__internal_52c7698fe4fde6a2194c1f8b40499f13b170bd86a497e53fc99cd28be99bfcc1_prof);

        
        $__internal_96bffe056ca6e84e99d0bd88010ff6fdcaea6f3ea93b4066c9effb2bc6540962->leave($__internal_96bffe056ca6e84e99d0bd88010ff6fdcaea6f3ea93b4066c9effb2bc6540962_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9bbd0c8e8b8b43c7ff4fda9b704b35b19826b4ff9edbae0e5450195c7ba7e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9bbd0c8e8b8b43c7ff4fda9b704b35b19826b4ff9edbae0e5450195c7ba7e75->enter($__internal_b9bbd0c8e8b8b43c7ff4fda9b704b35b19826b4ff9edbae0e5450195c7ba7e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ea5ab939e8503b2772faa6b6bfdb95272ccfead3581457817dabbb84056a5990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5ab939e8503b2772faa6b6bfdb95272ccfead3581457817dabbb84056a5990->enter($__internal_ea5ab939e8503b2772faa6b6bfdb95272ccfead3581457817dabbb84056a5990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ea5ab939e8503b2772faa6b6bfdb95272ccfead3581457817dabbb84056a5990->leave($__internal_ea5ab939e8503b2772faa6b6bfdb95272ccfead3581457817dabbb84056a5990_prof);

        
        $__internal_b9bbd0c8e8b8b43c7ff4fda9b704b35b19826b4ff9edbae0e5450195c7ba7e75->leave($__internal_b9bbd0c8e8b8b43c7ff4fda9b704b35b19826b4ff9edbae0e5450195c7ba7e75_prof);

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
