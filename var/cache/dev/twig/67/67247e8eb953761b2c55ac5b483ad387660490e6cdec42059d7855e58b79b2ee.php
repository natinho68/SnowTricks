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
        $__internal_d43624175e7d3340eafe38045f5af8de4049207a4a795722c4d9e8e5cf126596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43624175e7d3340eafe38045f5af8de4049207a4a795722c4d9e8e5cf126596->enter($__internal_d43624175e7d3340eafe38045f5af8de4049207a4a795722c4d9e8e5cf126596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d71c12070aebae78dcdd6410b1d58117765a8a7c2fa75af1e9751e0cbdcb11e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71c12070aebae78dcdd6410b1d58117765a8a7c2fa75af1e9751e0cbdcb11e0->enter($__internal_d71c12070aebae78dcdd6410b1d58117765a8a7c2fa75af1e9751e0cbdcb11e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d43624175e7d3340eafe38045f5af8de4049207a4a795722c4d9e8e5cf126596->leave($__internal_d43624175e7d3340eafe38045f5af8de4049207a4a795722c4d9e8e5cf126596_prof);

        
        $__internal_d71c12070aebae78dcdd6410b1d58117765a8a7c2fa75af1e9751e0cbdcb11e0->leave($__internal_d71c12070aebae78dcdd6410b1d58117765a8a7c2fa75af1e9751e0cbdcb11e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35c2345dd184a5140b93afa051dc852bd63def0e7cee6fe6faf90b00d7e9515c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c2345dd184a5140b93afa051dc852bd63def0e7cee6fe6faf90b00d7e9515c->enter($__internal_35c2345dd184a5140b93afa051dc852bd63def0e7cee6fe6faf90b00d7e9515c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bebe2d1d229d6db564d729ff07eaf5018a31414912dcc0a4fd5230a2908f856d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebe2d1d229d6db564d729ff07eaf5018a31414912dcc0a4fd5230a2908f856d->enter($__internal_bebe2d1d229d6db564d729ff07eaf5018a31414912dcc0a4fd5230a2908f856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bebe2d1d229d6db564d729ff07eaf5018a31414912dcc0a4fd5230a2908f856d->leave($__internal_bebe2d1d229d6db564d729ff07eaf5018a31414912dcc0a4fd5230a2908f856d_prof);

        
        $__internal_35c2345dd184a5140b93afa051dc852bd63def0e7cee6fe6faf90b00d7e9515c->leave($__internal_35c2345dd184a5140b93afa051dc852bd63def0e7cee6fe6faf90b00d7e9515c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84105acdd8a92fe649b328beef7d2485fcaba2ffea6e8633a7917430508a1a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84105acdd8a92fe649b328beef7d2485fcaba2ffea6e8633a7917430508a1a31->enter($__internal_84105acdd8a92fe649b328beef7d2485fcaba2ffea6e8633a7917430508a1a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_36a2ed3b6ff1fae1fbad482d62ddf826428c1752f1e1f71a5c7aa13d7ded643c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a2ed3b6ff1fae1fbad482d62ddf826428c1752f1e1f71a5c7aa13d7ded643c->enter($__internal_36a2ed3b6ff1fae1fbad482d62ddf826428c1752f1e1f71a5c7aa13d7ded643c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36a2ed3b6ff1fae1fbad482d62ddf826428c1752f1e1f71a5c7aa13d7ded643c->leave($__internal_36a2ed3b6ff1fae1fbad482d62ddf826428c1752f1e1f71a5c7aa13d7ded643c_prof);

        
        $__internal_84105acdd8a92fe649b328beef7d2485fcaba2ffea6e8633a7917430508a1a31->leave($__internal_84105acdd8a92fe649b328beef7d2485fcaba2ffea6e8633a7917430508a1a31_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90ad334c00734c3d47818ac0a88c0b92f2057e3e4ca46154071d3f634a852d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ad334c00734c3d47818ac0a88c0b92f2057e3e4ca46154071d3f634a852d57->enter($__internal_90ad334c00734c3d47818ac0a88c0b92f2057e3e4ca46154071d3f634a852d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2bc29b3109f48bde645d111c220b74cd90b75bd8dc9f56c8b0eaaeecc559e32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc29b3109f48bde645d111c220b74cd90b75bd8dc9f56c8b0eaaeecc559e32f->enter($__internal_2bc29b3109f48bde645d111c220b74cd90b75bd8dc9f56c8b0eaaeecc559e32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2bc29b3109f48bde645d111c220b74cd90b75bd8dc9f56c8b0eaaeecc559e32f->leave($__internal_2bc29b3109f48bde645d111c220b74cd90b75bd8dc9f56c8b0eaaeecc559e32f_prof);

        
        $__internal_90ad334c00734c3d47818ac0a88c0b92f2057e3e4ca46154071d3f634a852d57->leave($__internal_90ad334c00734c3d47818ac0a88c0b92f2057e3e4ca46154071d3f634a852d57_prof);

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
