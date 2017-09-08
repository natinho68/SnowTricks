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
        $__internal_c4c35676f2a8089123188b3e86d80609e06aac776e1bf267f7a670e75364fac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c35676f2a8089123188b3e86d80609e06aac776e1bf267f7a670e75364fac6->enter($__internal_c4c35676f2a8089123188b3e86d80609e06aac776e1bf267f7a670e75364fac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ab90a0d2ffea9934d649c7f4489885cde3f7c95e4e990f86c293efd1ab7432b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab90a0d2ffea9934d649c7f4489885cde3f7c95e4e990f86c293efd1ab7432b5->enter($__internal_ab90a0d2ffea9934d649c7f4489885cde3f7c95e4e990f86c293efd1ab7432b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c35676f2a8089123188b3e86d80609e06aac776e1bf267f7a670e75364fac6->leave($__internal_c4c35676f2a8089123188b3e86d80609e06aac776e1bf267f7a670e75364fac6_prof);

        
        $__internal_ab90a0d2ffea9934d649c7f4489885cde3f7c95e4e990f86c293efd1ab7432b5->leave($__internal_ab90a0d2ffea9934d649c7f4489885cde3f7c95e4e990f86c293efd1ab7432b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c202beb178d0dd3c699d5f1a601cffa846730c837bda27d8f1f8272361fed38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c202beb178d0dd3c699d5f1a601cffa846730c837bda27d8f1f8272361fed38->enter($__internal_4c202beb178d0dd3c699d5f1a601cffa846730c837bda27d8f1f8272361fed38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_676ea5bd46245988b0204129f196b6140382ed817291a845d16de94f019b04a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676ea5bd46245988b0204129f196b6140382ed817291a845d16de94f019b04a4->enter($__internal_676ea5bd46245988b0204129f196b6140382ed817291a845d16de94f019b04a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_676ea5bd46245988b0204129f196b6140382ed817291a845d16de94f019b04a4->leave($__internal_676ea5bd46245988b0204129f196b6140382ed817291a845d16de94f019b04a4_prof);

        
        $__internal_4c202beb178d0dd3c699d5f1a601cffa846730c837bda27d8f1f8272361fed38->leave($__internal_4c202beb178d0dd3c699d5f1a601cffa846730c837bda27d8f1f8272361fed38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00ee48ee05e7139cd17f1c1304a2ec7f7d83168a7408eb59988690b4b848fff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ee48ee05e7139cd17f1c1304a2ec7f7d83168a7408eb59988690b4b848fff5->enter($__internal_00ee48ee05e7139cd17f1c1304a2ec7f7d83168a7408eb59988690b4b848fff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bae5919391f4e36797dc51f21f23829e1a20b25de56791cb47b8ea39e193adc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae5919391f4e36797dc51f21f23829e1a20b25de56791cb47b8ea39e193adc2->enter($__internal_bae5919391f4e36797dc51f21f23829e1a20b25de56791cb47b8ea39e193adc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bae5919391f4e36797dc51f21f23829e1a20b25de56791cb47b8ea39e193adc2->leave($__internal_bae5919391f4e36797dc51f21f23829e1a20b25de56791cb47b8ea39e193adc2_prof);

        
        $__internal_00ee48ee05e7139cd17f1c1304a2ec7f7d83168a7408eb59988690b4b848fff5->leave($__internal_00ee48ee05e7139cd17f1c1304a2ec7f7d83168a7408eb59988690b4b848fff5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1145c1e55dbb979556668ff75956ac701e3141b26fbc9d344493ad125627217c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1145c1e55dbb979556668ff75956ac701e3141b26fbc9d344493ad125627217c->enter($__internal_1145c1e55dbb979556668ff75956ac701e3141b26fbc9d344493ad125627217c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_417501e5e4d8223504cdd70a6357ab2bca87ffad4e288c8393c968954fd488ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417501e5e4d8223504cdd70a6357ab2bca87ffad4e288c8393c968954fd488ac->enter($__internal_417501e5e4d8223504cdd70a6357ab2bca87ffad4e288c8393c968954fd488ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_417501e5e4d8223504cdd70a6357ab2bca87ffad4e288c8393c968954fd488ac->leave($__internal_417501e5e4d8223504cdd70a6357ab2bca87ffad4e288c8393c968954fd488ac_prof);

        
        $__internal_1145c1e55dbb979556668ff75956ac701e3141b26fbc9d344493ad125627217c->leave($__internal_1145c1e55dbb979556668ff75956ac701e3141b26fbc9d344493ad125627217c_prof);

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
