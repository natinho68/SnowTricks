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
        $__internal_20330f3513cc8d1296734e2f4eb8bef70bb519e0fcbabde18907fbf1c6bcb98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20330f3513cc8d1296734e2f4eb8bef70bb519e0fcbabde18907fbf1c6bcb98a->enter($__internal_20330f3513cc8d1296734e2f4eb8bef70bb519e0fcbabde18907fbf1c6bcb98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_61c9af155e836a90a3d9ffe95b04d1022b480f82c438c03736ed582a5a46adbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c9af155e836a90a3d9ffe95b04d1022b480f82c438c03736ed582a5a46adbb->enter($__internal_61c9af155e836a90a3d9ffe95b04d1022b480f82c438c03736ed582a5a46adbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20330f3513cc8d1296734e2f4eb8bef70bb519e0fcbabde18907fbf1c6bcb98a->leave($__internal_20330f3513cc8d1296734e2f4eb8bef70bb519e0fcbabde18907fbf1c6bcb98a_prof);

        
        $__internal_61c9af155e836a90a3d9ffe95b04d1022b480f82c438c03736ed582a5a46adbb->leave($__internal_61c9af155e836a90a3d9ffe95b04d1022b480f82c438c03736ed582a5a46adbb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b64e5f0235229742d15ed37cff0efd39c2688051d6f8e53c9c7020f99fed3da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64e5f0235229742d15ed37cff0efd39c2688051d6f8e53c9c7020f99fed3da0->enter($__internal_b64e5f0235229742d15ed37cff0efd39c2688051d6f8e53c9c7020f99fed3da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_48908c023b99a7dc5ead339048a463ab9101e828d276917fc7feec957e577ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48908c023b99a7dc5ead339048a463ab9101e828d276917fc7feec957e577ecf->enter($__internal_48908c023b99a7dc5ead339048a463ab9101e828d276917fc7feec957e577ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_48908c023b99a7dc5ead339048a463ab9101e828d276917fc7feec957e577ecf->leave($__internal_48908c023b99a7dc5ead339048a463ab9101e828d276917fc7feec957e577ecf_prof);

        
        $__internal_b64e5f0235229742d15ed37cff0efd39c2688051d6f8e53c9c7020f99fed3da0->leave($__internal_b64e5f0235229742d15ed37cff0efd39c2688051d6f8e53c9c7020f99fed3da0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2352e4f5186ec00246b13cc0cfecb074d6941b141bc63fd62a5ec7205d4117ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2352e4f5186ec00246b13cc0cfecb074d6941b141bc63fd62a5ec7205d4117ba->enter($__internal_2352e4f5186ec00246b13cc0cfecb074d6941b141bc63fd62a5ec7205d4117ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d94b64b8f7e4b82edeae958775e534bd50fb9bbadcf198f8645159a64edb09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d94b64b8f7e4b82edeae958775e534bd50fb9bbadcf198f8645159a64edb09f->enter($__internal_3d94b64b8f7e4b82edeae958775e534bd50fb9bbadcf198f8645159a64edb09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d94b64b8f7e4b82edeae958775e534bd50fb9bbadcf198f8645159a64edb09f->leave($__internal_3d94b64b8f7e4b82edeae958775e534bd50fb9bbadcf198f8645159a64edb09f_prof);

        
        $__internal_2352e4f5186ec00246b13cc0cfecb074d6941b141bc63fd62a5ec7205d4117ba->leave($__internal_2352e4f5186ec00246b13cc0cfecb074d6941b141bc63fd62a5ec7205d4117ba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a02cabae9d6eba2c7920de876b2f5670dcc077eed626936ff409dfabedcafe01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02cabae9d6eba2c7920de876b2f5670dcc077eed626936ff409dfabedcafe01->enter($__internal_a02cabae9d6eba2c7920de876b2f5670dcc077eed626936ff409dfabedcafe01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90b02f043990b3894639dfca15851794eb95b22d1acc9a51168b3b72a1a5312c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b02f043990b3894639dfca15851794eb95b22d1acc9a51168b3b72a1a5312c->enter($__internal_90b02f043990b3894639dfca15851794eb95b22d1acc9a51168b3b72a1a5312c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90b02f043990b3894639dfca15851794eb95b22d1acc9a51168b3b72a1a5312c->leave($__internal_90b02f043990b3894639dfca15851794eb95b22d1acc9a51168b3b72a1a5312c_prof);

        
        $__internal_a02cabae9d6eba2c7920de876b2f5670dcc077eed626936ff409dfabedcafe01->leave($__internal_a02cabae9d6eba2c7920de876b2f5670dcc077eed626936ff409dfabedcafe01_prof);

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
