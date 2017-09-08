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
        $__internal_36382a437dace8bda6eada9cb8ebb40cd4b377fcca0f4806ff7fd400bc888bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36382a437dace8bda6eada9cb8ebb40cd4b377fcca0f4806ff7fd400bc888bb3->enter($__internal_36382a437dace8bda6eada9cb8ebb40cd4b377fcca0f4806ff7fd400bc888bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d096b73efb83524a5ea60df5384f5bab9311e37a0fb80f7186f0c2d712174c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d096b73efb83524a5ea60df5384f5bab9311e37a0fb80f7186f0c2d712174c5d->enter($__internal_d096b73efb83524a5ea60df5384f5bab9311e37a0fb80f7186f0c2d712174c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36382a437dace8bda6eada9cb8ebb40cd4b377fcca0f4806ff7fd400bc888bb3->leave($__internal_36382a437dace8bda6eada9cb8ebb40cd4b377fcca0f4806ff7fd400bc888bb3_prof);

        
        $__internal_d096b73efb83524a5ea60df5384f5bab9311e37a0fb80f7186f0c2d712174c5d->leave($__internal_d096b73efb83524a5ea60df5384f5bab9311e37a0fb80f7186f0c2d712174c5d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_129f3e8e6086be31f81cdc511da84c380a30e12185aab1f109b4a82fc907b14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129f3e8e6086be31f81cdc511da84c380a30e12185aab1f109b4a82fc907b14e->enter($__internal_129f3e8e6086be31f81cdc511da84c380a30e12185aab1f109b4a82fc907b14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1b7d15f0ce49276b8ab7fe56c52f741fe943eee4efd00732d07e654ad8181306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7d15f0ce49276b8ab7fe56c52f741fe943eee4efd00732d07e654ad8181306->enter($__internal_1b7d15f0ce49276b8ab7fe56c52f741fe943eee4efd00732d07e654ad8181306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b7d15f0ce49276b8ab7fe56c52f741fe943eee4efd00732d07e654ad8181306->leave($__internal_1b7d15f0ce49276b8ab7fe56c52f741fe943eee4efd00732d07e654ad8181306_prof);

        
        $__internal_129f3e8e6086be31f81cdc511da84c380a30e12185aab1f109b4a82fc907b14e->leave($__internal_129f3e8e6086be31f81cdc511da84c380a30e12185aab1f109b4a82fc907b14e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bae4673303cd352c1adcbffcd0f25c3a1d308227f86f5a81e53dc82054709d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae4673303cd352c1adcbffcd0f25c3a1d308227f86f5a81e53dc82054709d63->enter($__internal_bae4673303cd352c1adcbffcd0f25c3a1d308227f86f5a81e53dc82054709d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_25b7c47fa36f733a5407fdd879994b5710863304f0669c884a8185114919cb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b7c47fa36f733a5407fdd879994b5710863304f0669c884a8185114919cb6e->enter($__internal_25b7c47fa36f733a5407fdd879994b5710863304f0669c884a8185114919cb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25b7c47fa36f733a5407fdd879994b5710863304f0669c884a8185114919cb6e->leave($__internal_25b7c47fa36f733a5407fdd879994b5710863304f0669c884a8185114919cb6e_prof);

        
        $__internal_bae4673303cd352c1adcbffcd0f25c3a1d308227f86f5a81e53dc82054709d63->leave($__internal_bae4673303cd352c1adcbffcd0f25c3a1d308227f86f5a81e53dc82054709d63_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66f04b8f1507118165f4fdd3e9fbd88f4781301e847097b3d7cb98f14ba8e376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f04b8f1507118165f4fdd3e9fbd88f4781301e847097b3d7cb98f14ba8e376->enter($__internal_66f04b8f1507118165f4fdd3e9fbd88f4781301e847097b3d7cb98f14ba8e376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_36c2ce158ba80d958e6e9d74debdde094c73aba288e1f25a89d118e74c35a218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c2ce158ba80d958e6e9d74debdde094c73aba288e1f25a89d118e74c35a218->enter($__internal_36c2ce158ba80d958e6e9d74debdde094c73aba288e1f25a89d118e74c35a218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36c2ce158ba80d958e6e9d74debdde094c73aba288e1f25a89d118e74c35a218->leave($__internal_36c2ce158ba80d958e6e9d74debdde094c73aba288e1f25a89d118e74c35a218_prof);

        
        $__internal_66f04b8f1507118165f4fdd3e9fbd88f4781301e847097b3d7cb98f14ba8e376->leave($__internal_66f04b8f1507118165f4fdd3e9fbd88f4781301e847097b3d7cb98f14ba8e376_prof);

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
