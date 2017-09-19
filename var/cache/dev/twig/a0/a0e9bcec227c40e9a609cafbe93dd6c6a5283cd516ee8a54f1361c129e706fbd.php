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
        $__internal_6a1522b360a255436df6e8bc9755eda3d559bc71d95dfc4f92d744aa252c38bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a1522b360a255436df6e8bc9755eda3d559bc71d95dfc4f92d744aa252c38bd->enter($__internal_6a1522b360a255436df6e8bc9755eda3d559bc71d95dfc4f92d744aa252c38bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4bb46ab3069ec49e79317ee2a2962aebafc2bd43fc908b843b7a6eacd341c2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb46ab3069ec49e79317ee2a2962aebafc2bd43fc908b843b7a6eacd341c2e2->enter($__internal_4bb46ab3069ec49e79317ee2a2962aebafc2bd43fc908b843b7a6eacd341c2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6a1522b360a255436df6e8bc9755eda3d559bc71d95dfc4f92d744aa252c38bd->leave($__internal_6a1522b360a255436df6e8bc9755eda3d559bc71d95dfc4f92d744aa252c38bd_prof);

        
        $__internal_4bb46ab3069ec49e79317ee2a2962aebafc2bd43fc908b843b7a6eacd341c2e2->leave($__internal_4bb46ab3069ec49e79317ee2a2962aebafc2bd43fc908b843b7a6eacd341c2e2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b078285b70ce665f6badf9f92ac4fbc5d76cb90be8a4c7861d4b483f90526edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b078285b70ce665f6badf9f92ac4fbc5d76cb90be8a4c7861d4b483f90526edf->enter($__internal_b078285b70ce665f6badf9f92ac4fbc5d76cb90be8a4c7861d4b483f90526edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_34451c5d8cf713f2675e6fedd2f7457348509e2286b3596ec12db5d9c8be5d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34451c5d8cf713f2675e6fedd2f7457348509e2286b3596ec12db5d9c8be5d9e->enter($__internal_34451c5d8cf713f2675e6fedd2f7457348509e2286b3596ec12db5d9c8be5d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_34451c5d8cf713f2675e6fedd2f7457348509e2286b3596ec12db5d9c8be5d9e->leave($__internal_34451c5d8cf713f2675e6fedd2f7457348509e2286b3596ec12db5d9c8be5d9e_prof);

        
        $__internal_b078285b70ce665f6badf9f92ac4fbc5d76cb90be8a4c7861d4b483f90526edf->leave($__internal_b078285b70ce665f6badf9f92ac4fbc5d76cb90be8a4c7861d4b483f90526edf_prof);

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
