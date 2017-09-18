<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e0af928166cb9fef112792e9d86f25507714feb76f468929df08c918305c15ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_289d1bba1d60d5566e18dea5f541c0d2d9c8842bea53ba06fd6e7c7d49b584ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289d1bba1d60d5566e18dea5f541c0d2d9c8842bea53ba06fd6e7c7d49b584ee->enter($__internal_289d1bba1d60d5566e18dea5f541c0d2d9c8842bea53ba06fd6e7c7d49b584ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e1300ecff9b6e7082687861827e27d3e0e11c279a3a7d406d37d95a6c77c458d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1300ecff9b6e7082687861827e27d3e0e11c279a3a7d406d37d95a6c77c458d->enter($__internal_e1300ecff9b6e7082687861827e27d3e0e11c279a3a7d406d37d95a6c77c458d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_289d1bba1d60d5566e18dea5f541c0d2d9c8842bea53ba06fd6e7c7d49b584ee->leave($__internal_289d1bba1d60d5566e18dea5f541c0d2d9c8842bea53ba06fd6e7c7d49b584ee_prof);

        
        $__internal_e1300ecff9b6e7082687861827e27d3e0e11c279a3a7d406d37d95a6c77c458d->leave($__internal_e1300ecff9b6e7082687861827e27d3e0e11c279a3a7d406d37d95a6c77c458d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e2994092d429e421b244f477f2cf6bc2cb3f66438d5a9fe43e1b6f42760551c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2994092d429e421b244f477f2cf6bc2cb3f66438d5a9fe43e1b6f42760551c->enter($__internal_6e2994092d429e421b244f477f2cf6bc2cb3f66438d5a9fe43e1b6f42760551c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9415732ba07cb73f094bc3f4988546222217ea259a4ff3a2ee0357074c8d6c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9415732ba07cb73f094bc3f4988546222217ea259a4ff3a2ee0357074c8d6c39->enter($__internal_9415732ba07cb73f094bc3f4988546222217ea259a4ff3a2ee0357074c8d6c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9415732ba07cb73f094bc3f4988546222217ea259a4ff3a2ee0357074c8d6c39->leave($__internal_9415732ba07cb73f094bc3f4988546222217ea259a4ff3a2ee0357074c8d6c39_prof);

        
        $__internal_6e2994092d429e421b244f477f2cf6bc2cb3f66438d5a9fe43e1b6f42760551c->leave($__internal_6e2994092d429e421b244f477f2cf6bc2cb3f66438d5a9fe43e1b6f42760551c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
