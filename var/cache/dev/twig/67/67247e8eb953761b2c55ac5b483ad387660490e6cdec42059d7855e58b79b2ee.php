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
        $__internal_a24992f4bd58f5c14eb448f45d072a582d3e9127d671f68be6ae9e3a77c1deb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24992f4bd58f5c14eb448f45d072a582d3e9127d671f68be6ae9e3a77c1deb2->enter($__internal_a24992f4bd58f5c14eb448f45d072a582d3e9127d671f68be6ae9e3a77c1deb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2ee5bdfb38ae4088e0a1aa82d33468ba5521b5b97e5793834de2cb1bd92dbed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee5bdfb38ae4088e0a1aa82d33468ba5521b5b97e5793834de2cb1bd92dbed0->enter($__internal_2ee5bdfb38ae4088e0a1aa82d33468ba5521b5b97e5793834de2cb1bd92dbed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a24992f4bd58f5c14eb448f45d072a582d3e9127d671f68be6ae9e3a77c1deb2->leave($__internal_a24992f4bd58f5c14eb448f45d072a582d3e9127d671f68be6ae9e3a77c1deb2_prof);

        
        $__internal_2ee5bdfb38ae4088e0a1aa82d33468ba5521b5b97e5793834de2cb1bd92dbed0->leave($__internal_2ee5bdfb38ae4088e0a1aa82d33468ba5521b5b97e5793834de2cb1bd92dbed0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c8e8f13b184542e4fa745525b7cdde8710ce25612ef99b3b548a6bc9c6ea56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8e8f13b184542e4fa745525b7cdde8710ce25612ef99b3b548a6bc9c6ea56d->enter($__internal_8c8e8f13b184542e4fa745525b7cdde8710ce25612ef99b3b548a6bc9c6ea56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_62462dda8ecd8ac78ea5644165d48c16a1f62d4cca500a802e21ef670b8a564a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62462dda8ecd8ac78ea5644165d48c16a1f62d4cca500a802e21ef670b8a564a->enter($__internal_62462dda8ecd8ac78ea5644165d48c16a1f62d4cca500a802e21ef670b8a564a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_62462dda8ecd8ac78ea5644165d48c16a1f62d4cca500a802e21ef670b8a564a->leave($__internal_62462dda8ecd8ac78ea5644165d48c16a1f62d4cca500a802e21ef670b8a564a_prof);

        
        $__internal_8c8e8f13b184542e4fa745525b7cdde8710ce25612ef99b3b548a6bc9c6ea56d->leave($__internal_8c8e8f13b184542e4fa745525b7cdde8710ce25612ef99b3b548a6bc9c6ea56d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5655c6bde7897a0087b3ffb5510839a92cc3d403d4ed121406b01761659328b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5655c6bde7897a0087b3ffb5510839a92cc3d403d4ed121406b01761659328b1->enter($__internal_5655c6bde7897a0087b3ffb5510839a92cc3d403d4ed121406b01761659328b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2795b0e3044e252ddcc914a686956df2de0525aedee13c5e44324bf4a2706f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2795b0e3044e252ddcc914a686956df2de0525aedee13c5e44324bf4a2706f4b->enter($__internal_2795b0e3044e252ddcc914a686956df2de0525aedee13c5e44324bf4a2706f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2795b0e3044e252ddcc914a686956df2de0525aedee13c5e44324bf4a2706f4b->leave($__internal_2795b0e3044e252ddcc914a686956df2de0525aedee13c5e44324bf4a2706f4b_prof);

        
        $__internal_5655c6bde7897a0087b3ffb5510839a92cc3d403d4ed121406b01761659328b1->leave($__internal_5655c6bde7897a0087b3ffb5510839a92cc3d403d4ed121406b01761659328b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1be27e7f09a9ce70d25afb0d079c5c88a59094eacf3c15265813523bb5a5564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1be27e7f09a9ce70d25afb0d079c5c88a59094eacf3c15265813523bb5a5564->enter($__internal_e1be27e7f09a9ce70d25afb0d079c5c88a59094eacf3c15265813523bb5a5564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62503cb899b53fe9665ddba5535ab7b04cfb0b2a282ed16a2646d9f5f897db62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62503cb899b53fe9665ddba5535ab7b04cfb0b2a282ed16a2646d9f5f897db62->enter($__internal_62503cb899b53fe9665ddba5535ab7b04cfb0b2a282ed16a2646d9f5f897db62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62503cb899b53fe9665ddba5535ab7b04cfb0b2a282ed16a2646d9f5f897db62->leave($__internal_62503cb899b53fe9665ddba5535ab7b04cfb0b2a282ed16a2646d9f5f897db62_prof);

        
        $__internal_e1be27e7f09a9ce70d25afb0d079c5c88a59094eacf3c15265813523bb5a5564->leave($__internal_e1be27e7f09a9ce70d25afb0d079c5c88a59094eacf3c15265813523bb5a5564_prof);

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
