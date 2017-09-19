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
        $__internal_a4503ef7334623eebc3c09c3a3751f502ef82fdab55bf34d38f4172715a799b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4503ef7334623eebc3c09c3a3751f502ef82fdab55bf34d38f4172715a799b9->enter($__internal_a4503ef7334623eebc3c09c3a3751f502ef82fdab55bf34d38f4172715a799b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_da30bc801a3b65c254afc7f1506472ec983c6a8e3a4dc47fa3e408613e062a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da30bc801a3b65c254afc7f1506472ec983c6a8e3a4dc47fa3e408613e062a17->enter($__internal_da30bc801a3b65c254afc7f1506472ec983c6a8e3a4dc47fa3e408613e062a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4503ef7334623eebc3c09c3a3751f502ef82fdab55bf34d38f4172715a799b9->leave($__internal_a4503ef7334623eebc3c09c3a3751f502ef82fdab55bf34d38f4172715a799b9_prof);

        
        $__internal_da30bc801a3b65c254afc7f1506472ec983c6a8e3a4dc47fa3e408613e062a17->leave($__internal_da30bc801a3b65c254afc7f1506472ec983c6a8e3a4dc47fa3e408613e062a17_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86fdf55c2765557ad0a17a6958b3edc8eff813f952a6c5d0be02565777781958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fdf55c2765557ad0a17a6958b3edc8eff813f952a6c5d0be02565777781958->enter($__internal_86fdf55c2765557ad0a17a6958b3edc8eff813f952a6c5d0be02565777781958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d269c09ce7756620a095a3d360fdfd53ce962f84cee4795f79f59b8ea59582ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d269c09ce7756620a095a3d360fdfd53ce962f84cee4795f79f59b8ea59582ff->enter($__internal_d269c09ce7756620a095a3d360fdfd53ce962f84cee4795f79f59b8ea59582ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d269c09ce7756620a095a3d360fdfd53ce962f84cee4795f79f59b8ea59582ff->leave($__internal_d269c09ce7756620a095a3d360fdfd53ce962f84cee4795f79f59b8ea59582ff_prof);

        
        $__internal_86fdf55c2765557ad0a17a6958b3edc8eff813f952a6c5d0be02565777781958->leave($__internal_86fdf55c2765557ad0a17a6958b3edc8eff813f952a6c5d0be02565777781958_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_898389d75f0d72cb8501c5cc220e5aa27ed403d6fe5223a2ee56257e01cb552d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898389d75f0d72cb8501c5cc220e5aa27ed403d6fe5223a2ee56257e01cb552d->enter($__internal_898389d75f0d72cb8501c5cc220e5aa27ed403d6fe5223a2ee56257e01cb552d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1443acd332f7331777a5bb351ae1dc2dfc8dd349e33ca34a1a8fbff3bc8d1177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1443acd332f7331777a5bb351ae1dc2dfc8dd349e33ca34a1a8fbff3bc8d1177->enter($__internal_1443acd332f7331777a5bb351ae1dc2dfc8dd349e33ca34a1a8fbff3bc8d1177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1443acd332f7331777a5bb351ae1dc2dfc8dd349e33ca34a1a8fbff3bc8d1177->leave($__internal_1443acd332f7331777a5bb351ae1dc2dfc8dd349e33ca34a1a8fbff3bc8d1177_prof);

        
        $__internal_898389d75f0d72cb8501c5cc220e5aa27ed403d6fe5223a2ee56257e01cb552d->leave($__internal_898389d75f0d72cb8501c5cc220e5aa27ed403d6fe5223a2ee56257e01cb552d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4696d484194325fe2b5f8e64669884e61f7e10683e0df91c0fdc6f83c3d3f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4696d484194325fe2b5f8e64669884e61f7e10683e0df91c0fdc6f83c3d3f97->enter($__internal_d4696d484194325fe2b5f8e64669884e61f7e10683e0df91c0fdc6f83c3d3f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ec39df0b1b3108228239f38b50cce429df469552076527bbe2a313c57608812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec39df0b1b3108228239f38b50cce429df469552076527bbe2a313c57608812->enter($__internal_7ec39df0b1b3108228239f38b50cce429df469552076527bbe2a313c57608812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7ec39df0b1b3108228239f38b50cce429df469552076527bbe2a313c57608812->leave($__internal_7ec39df0b1b3108228239f38b50cce429df469552076527bbe2a313c57608812_prof);

        
        $__internal_d4696d484194325fe2b5f8e64669884e61f7e10683e0df91c0fdc6f83c3d3f97->leave($__internal_d4696d484194325fe2b5f8e64669884e61f7e10683e0df91c0fdc6f83c3d3f97_prof);

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
