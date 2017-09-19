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
        $__internal_50b9f21e2201bf0357432ffcc990eb0c14d2f8169b8ec7392279a3249e89ec30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b9f21e2201bf0357432ffcc990eb0c14d2f8169b8ec7392279a3249e89ec30->enter($__internal_50b9f21e2201bf0357432ffcc990eb0c14d2f8169b8ec7392279a3249e89ec30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_44b5bf798e41705752b6a2263916218ef7cb4601b11e37c47c4e1e524c515184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b5bf798e41705752b6a2263916218ef7cb4601b11e37c47c4e1e524c515184->enter($__internal_44b5bf798e41705752b6a2263916218ef7cb4601b11e37c47c4e1e524c515184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_50b9f21e2201bf0357432ffcc990eb0c14d2f8169b8ec7392279a3249e89ec30->leave($__internal_50b9f21e2201bf0357432ffcc990eb0c14d2f8169b8ec7392279a3249e89ec30_prof);

        
        $__internal_44b5bf798e41705752b6a2263916218ef7cb4601b11e37c47c4e1e524c515184->leave($__internal_44b5bf798e41705752b6a2263916218ef7cb4601b11e37c47c4e1e524c515184_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2462518f2e006d17cafd62cb18eb1def2b7b7a33d14e744c99b81c9ed4cebff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2462518f2e006d17cafd62cb18eb1def2b7b7a33d14e744c99b81c9ed4cebff5->enter($__internal_2462518f2e006d17cafd62cb18eb1def2b7b7a33d14e744c99b81c9ed4cebff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cfd8aa61f21cf66a2946bc119b390c7e4ff50fb3426d74a0a6d169ef8dc89594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd8aa61f21cf66a2946bc119b390c7e4ff50fb3426d74a0a6d169ef8dc89594->enter($__internal_cfd8aa61f21cf66a2946bc119b390c7e4ff50fb3426d74a0a6d169ef8dc89594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cfd8aa61f21cf66a2946bc119b390c7e4ff50fb3426d74a0a6d169ef8dc89594->leave($__internal_cfd8aa61f21cf66a2946bc119b390c7e4ff50fb3426d74a0a6d169ef8dc89594_prof);

        
        $__internal_2462518f2e006d17cafd62cb18eb1def2b7b7a33d14e744c99b81c9ed4cebff5->leave($__internal_2462518f2e006d17cafd62cb18eb1def2b7b7a33d14e744c99b81c9ed4cebff5_prof);

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
