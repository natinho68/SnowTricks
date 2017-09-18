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
        $__internal_7bee5f80719e0e72963518c8ab5a30651cfc738a8e13f174d19f4ca5826521da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bee5f80719e0e72963518c8ab5a30651cfc738a8e13f174d19f4ca5826521da->enter($__internal_7bee5f80719e0e72963518c8ab5a30651cfc738a8e13f174d19f4ca5826521da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8faaec25e7c89d70074ded6d87eded85fb65af13c0fd2ef97e5d7d29469f1941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8faaec25e7c89d70074ded6d87eded85fb65af13c0fd2ef97e5d7d29469f1941->enter($__internal_8faaec25e7c89d70074ded6d87eded85fb65af13c0fd2ef97e5d7d29469f1941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bee5f80719e0e72963518c8ab5a30651cfc738a8e13f174d19f4ca5826521da->leave($__internal_7bee5f80719e0e72963518c8ab5a30651cfc738a8e13f174d19f4ca5826521da_prof);

        
        $__internal_8faaec25e7c89d70074ded6d87eded85fb65af13c0fd2ef97e5d7d29469f1941->leave($__internal_8faaec25e7c89d70074ded6d87eded85fb65af13c0fd2ef97e5d7d29469f1941_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90272c352c0bf82d4ae1272a99a5e92193739b04f1ce444d3eb1f0c10c324280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90272c352c0bf82d4ae1272a99a5e92193739b04f1ce444d3eb1f0c10c324280->enter($__internal_90272c352c0bf82d4ae1272a99a5e92193739b04f1ce444d3eb1f0c10c324280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_092057a8ce7ff34d918d1624735f25e7cf7c0eb8452f93d7480b2453cac27cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092057a8ce7ff34d918d1624735f25e7cf7c0eb8452f93d7480b2453cac27cfd->enter($__internal_092057a8ce7ff34d918d1624735f25e7cf7c0eb8452f93d7480b2453cac27cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_092057a8ce7ff34d918d1624735f25e7cf7c0eb8452f93d7480b2453cac27cfd->leave($__internal_092057a8ce7ff34d918d1624735f25e7cf7c0eb8452f93d7480b2453cac27cfd_prof);

        
        $__internal_90272c352c0bf82d4ae1272a99a5e92193739b04f1ce444d3eb1f0c10c324280->leave($__internal_90272c352c0bf82d4ae1272a99a5e92193739b04f1ce444d3eb1f0c10c324280_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b593239e8ab091fd2da684d736e26d4ba84313eb496d0d030a2ea296d9066532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b593239e8ab091fd2da684d736e26d4ba84313eb496d0d030a2ea296d9066532->enter($__internal_b593239e8ab091fd2da684d736e26d4ba84313eb496d0d030a2ea296d9066532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_49db74b4b6b10204a699ab81a27b887a84d31e5ab43fd785bf20a1631cd1ff4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49db74b4b6b10204a699ab81a27b887a84d31e5ab43fd785bf20a1631cd1ff4c->enter($__internal_49db74b4b6b10204a699ab81a27b887a84d31e5ab43fd785bf20a1631cd1ff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49db74b4b6b10204a699ab81a27b887a84d31e5ab43fd785bf20a1631cd1ff4c->leave($__internal_49db74b4b6b10204a699ab81a27b887a84d31e5ab43fd785bf20a1631cd1ff4c_prof);

        
        $__internal_b593239e8ab091fd2da684d736e26d4ba84313eb496d0d030a2ea296d9066532->leave($__internal_b593239e8ab091fd2da684d736e26d4ba84313eb496d0d030a2ea296d9066532_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e83ea4841c263d16e6cca605314954a9d1e025544c888806075bba2157cf57bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83ea4841c263d16e6cca605314954a9d1e025544c888806075bba2157cf57bc->enter($__internal_e83ea4841c263d16e6cca605314954a9d1e025544c888806075bba2157cf57bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c6aed39c6ca1a30a1621bf2dfe0ecb254b7be21d6ea06fec3f9eb1ee4a43a8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6aed39c6ca1a30a1621bf2dfe0ecb254b7be21d6ea06fec3f9eb1ee4a43a8a3->enter($__internal_c6aed39c6ca1a30a1621bf2dfe0ecb254b7be21d6ea06fec3f9eb1ee4a43a8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c6aed39c6ca1a30a1621bf2dfe0ecb254b7be21d6ea06fec3f9eb1ee4a43a8a3->leave($__internal_c6aed39c6ca1a30a1621bf2dfe0ecb254b7be21d6ea06fec3f9eb1ee4a43a8a3_prof);

        
        $__internal_e83ea4841c263d16e6cca605314954a9d1e025544c888806075bba2157cf57bc->leave($__internal_e83ea4841c263d16e6cca605314954a9d1e025544c888806075bba2157cf57bc_prof);

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
