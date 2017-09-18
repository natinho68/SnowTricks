<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b410644ae4785e2bb25dabd30ca43e9cb83e8e86a3e4b4a43b4739f0c2dac477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2536b9523ad84936891e7c7c09f37c84d19bf990b532b797050f7df89691f5e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2536b9523ad84936891e7c7c09f37c84d19bf990b532b797050f7df89691f5e3->enter($__internal_2536b9523ad84936891e7c7c09f37c84d19bf990b532b797050f7df89691f5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2f5fee5f2f985c83aad08ecdc66a588eecbb7aa9f029867b3276ac1d62035cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5fee5f2f985c83aad08ecdc66a588eecbb7aa9f029867b3276ac1d62035cbb->enter($__internal_2f5fee5f2f985c83aad08ecdc66a588eecbb7aa9f029867b3276ac1d62035cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2536b9523ad84936891e7c7c09f37c84d19bf990b532b797050f7df89691f5e3->leave($__internal_2536b9523ad84936891e7c7c09f37c84d19bf990b532b797050f7df89691f5e3_prof);

        
        $__internal_2f5fee5f2f985c83aad08ecdc66a588eecbb7aa9f029867b3276ac1d62035cbb->leave($__internal_2f5fee5f2f985c83aad08ecdc66a588eecbb7aa9f029867b3276ac1d62035cbb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_162a85b45bbabcbd0eaf15df70b7406215f76a7ba3d1e2d1f271f06cd756780c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162a85b45bbabcbd0eaf15df70b7406215f76a7ba3d1e2d1f271f06cd756780c->enter($__internal_162a85b45bbabcbd0eaf15df70b7406215f76a7ba3d1e2d1f271f06cd756780c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c71f7cd4a6efba8499c83b8145bfc1dbc7e5c53dc1b3ac566144fe9c176c7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c71f7cd4a6efba8499c83b8145bfc1dbc7e5c53dc1b3ac566144fe9c176c7a0->enter($__internal_2c71f7cd4a6efba8499c83b8145bfc1dbc7e5c53dc1b3ac566144fe9c176c7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2c71f7cd4a6efba8499c83b8145bfc1dbc7e5c53dc1b3ac566144fe9c176c7a0->leave($__internal_2c71f7cd4a6efba8499c83b8145bfc1dbc7e5c53dc1b3ac566144fe9c176c7a0_prof);

        
        $__internal_162a85b45bbabcbd0eaf15df70b7406215f76a7ba3d1e2d1f271f06cd756780c->leave($__internal_162a85b45bbabcbd0eaf15df70b7406215f76a7ba3d1e2d1f271f06cd756780c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dce9380055cc72fcefdd16ad17353bdba23cc2ca961230237f767a55cbb20554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce9380055cc72fcefdd16ad17353bdba23cc2ca961230237f767a55cbb20554->enter($__internal_dce9380055cc72fcefdd16ad17353bdba23cc2ca961230237f767a55cbb20554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_649086209bb4cc4b2c2b3e214a8e57146b5ae7faeada9b497d29db7aa08568b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649086209bb4cc4b2c2b3e214a8e57146b5ae7faeada9b497d29db7aa08568b5->enter($__internal_649086209bb4cc4b2c2b3e214a8e57146b5ae7faeada9b497d29db7aa08568b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_649086209bb4cc4b2c2b3e214a8e57146b5ae7faeada9b497d29db7aa08568b5->leave($__internal_649086209bb4cc4b2c2b3e214a8e57146b5ae7faeada9b497d29db7aa08568b5_prof);

        
        $__internal_dce9380055cc72fcefdd16ad17353bdba23cc2ca961230237f767a55cbb20554->leave($__internal_dce9380055cc72fcefdd16ad17353bdba23cc2ca961230237f767a55cbb20554_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
