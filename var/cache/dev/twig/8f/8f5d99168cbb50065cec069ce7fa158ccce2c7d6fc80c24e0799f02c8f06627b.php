<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_32062474eec4185c97a3f03fbaaf891ec3aeec1eb249121d807016c36e7099e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_311d89b1a529a7876848bebeca85321cddc9599925791bb3e86b1b018b7c538b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311d89b1a529a7876848bebeca85321cddc9599925791bb3e86b1b018b7c538b->enter($__internal_311d89b1a529a7876848bebeca85321cddc9599925791bb3e86b1b018b7c538b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4e6a28b29e03418a8201c7491ca351a60e0d3e73bb8a9f1b590a4855566027fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6a28b29e03418a8201c7491ca351a60e0d3e73bb8a9f1b590a4855566027fa->enter($__internal_4e6a28b29e03418a8201c7491ca351a60e0d3e73bb8a9f1b590a4855566027fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_311d89b1a529a7876848bebeca85321cddc9599925791bb3e86b1b018b7c538b->leave($__internal_311d89b1a529a7876848bebeca85321cddc9599925791bb3e86b1b018b7c538b_prof);

        
        $__internal_4e6a28b29e03418a8201c7491ca351a60e0d3e73bb8a9f1b590a4855566027fa->leave($__internal_4e6a28b29e03418a8201c7491ca351a60e0d3e73bb8a9f1b590a4855566027fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9474fef7a636472d93f9ec6a7eebda8811bc695b38d25d8667c3c60599146308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9474fef7a636472d93f9ec6a7eebda8811bc695b38d25d8667c3c60599146308->enter($__internal_9474fef7a636472d93f9ec6a7eebda8811bc695b38d25d8667c3c60599146308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cfd5647b26a21953d02b63d6f631daf5d9f19f55cae20e63c3c6d3b0ad19e210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd5647b26a21953d02b63d6f631daf5d9f19f55cae20e63c3c6d3b0ad19e210->enter($__internal_cfd5647b26a21953d02b63d6f631daf5d9f19f55cae20e63c3c6d3b0ad19e210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cfd5647b26a21953d02b63d6f631daf5d9f19f55cae20e63c3c6d3b0ad19e210->leave($__internal_cfd5647b26a21953d02b63d6f631daf5d9f19f55cae20e63c3c6d3b0ad19e210_prof);

        
        $__internal_9474fef7a636472d93f9ec6a7eebda8811bc695b38d25d8667c3c60599146308->leave($__internal_9474fef7a636472d93f9ec6a7eebda8811bc695b38d25d8667c3c60599146308_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4df57615b432af6f7aec926c6cdd0fe8aeaa3fb9e8e78446cf44824bf9d8c3d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df57615b432af6f7aec926c6cdd0fe8aeaa3fb9e8e78446cf44824bf9d8c3d7->enter($__internal_4df57615b432af6f7aec926c6cdd0fe8aeaa3fb9e8e78446cf44824bf9d8c3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f2ca2e6674c5cd9653eb6253f1d1e1c1f2dc522cacd8d596f8aafb17a9ba5c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ca2e6674c5cd9653eb6253f1d1e1c1f2dc522cacd8d596f8aafb17a9ba5c66->enter($__internal_f2ca2e6674c5cd9653eb6253f1d1e1c1f2dc522cacd8d596f8aafb17a9ba5c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f2ca2e6674c5cd9653eb6253f1d1e1c1f2dc522cacd8d596f8aafb17a9ba5c66->leave($__internal_f2ca2e6674c5cd9653eb6253f1d1e1c1f2dc522cacd8d596f8aafb17a9ba5c66_prof);

        
        $__internal_4df57615b432af6f7aec926c6cdd0fe8aeaa3fb9e8e78446cf44824bf9d8c3d7->leave($__internal_4df57615b432af6f7aec926c6cdd0fe8aeaa3fb9e8e78446cf44824bf9d8c3d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4768eeef0f3051b3d3fa8452ed8724fab827de2665d62f16b4b3537d15bf44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4768eeef0f3051b3d3fa8452ed8724fab827de2665d62f16b4b3537d15bf44c->enter($__internal_e4768eeef0f3051b3d3fa8452ed8724fab827de2665d62f16b4b3537d15bf44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc5723815718ef5e8e0d902b78c8740a12f030c74a326dba548e515763b7ec7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5723815718ef5e8e0d902b78c8740a12f030c74a326dba548e515763b7ec7a->enter($__internal_dc5723815718ef5e8e0d902b78c8740a12f030c74a326dba548e515763b7ec7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc5723815718ef5e8e0d902b78c8740a12f030c74a326dba548e515763b7ec7a->leave($__internal_dc5723815718ef5e8e0d902b78c8740a12f030c74a326dba548e515763b7ec7a_prof);

        
        $__internal_e4768eeef0f3051b3d3fa8452ed8724fab827de2665d62f16b4b3537d15bf44c->leave($__internal_e4768eeef0f3051b3d3fa8452ed8724fab827de2665d62f16b4b3537d15bf44c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
