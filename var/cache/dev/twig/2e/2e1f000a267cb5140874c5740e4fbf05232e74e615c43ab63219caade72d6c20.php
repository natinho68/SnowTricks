<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_11910f272efe346c7d3bb943fd5e2f6ef6fe02f8f42e2355b4b1a33f30aff403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1162dedb6bdb5169ae367c7c236c129ccd51de6e112f750a2bd0443f7356b2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1162dedb6bdb5169ae367c7c236c129ccd51de6e112f750a2bd0443f7356b2e6->enter($__internal_1162dedb6bdb5169ae367c7c236c129ccd51de6e112f750a2bd0443f7356b2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_fd927a06dae3e7cec08d7ceb03117c06f298d0c291fbc6510e5675b1d3b0d9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd927a06dae3e7cec08d7ceb03117c06f298d0c291fbc6510e5675b1d3b0d9b0->enter($__internal_fd927a06dae3e7cec08d7ceb03117c06f298d0c291fbc6510e5675b1d3b0d9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1162dedb6bdb5169ae367c7c236c129ccd51de6e112f750a2bd0443f7356b2e6->leave($__internal_1162dedb6bdb5169ae367c7c236c129ccd51de6e112f750a2bd0443f7356b2e6_prof);

        
        $__internal_fd927a06dae3e7cec08d7ceb03117c06f298d0c291fbc6510e5675b1d3b0d9b0->leave($__internal_fd927a06dae3e7cec08d7ceb03117c06f298d0c291fbc6510e5675b1d3b0d9b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_659457ae3e84036daf753023dfb453235a3951a44c53959358f6d2c702c76cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659457ae3e84036daf753023dfb453235a3951a44c53959358f6d2c702c76cb6->enter($__internal_659457ae3e84036daf753023dfb453235a3951a44c53959358f6d2c702c76cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfa93995519e6329cee263051d95608fc816a08ffb889f146edcc52e840fc16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa93995519e6329cee263051d95608fc816a08ffb889f146edcc52e840fc16a->enter($__internal_bfa93995519e6329cee263051d95608fc816a08ffb889f146edcc52e840fc16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bfa93995519e6329cee263051d95608fc816a08ffb889f146edcc52e840fc16a->leave($__internal_bfa93995519e6329cee263051d95608fc816a08ffb889f146edcc52e840fc16a_prof);

        
        $__internal_659457ae3e84036daf753023dfb453235a3951a44c53959358f6d2c702c76cb6->leave($__internal_659457ae3e84036daf753023dfb453235a3951a44c53959358f6d2c702c76cb6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a4db7cf142c6b273298b5cc55f95796c26767d75dcff01ec6f07598b87fc4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4db7cf142c6b273298b5cc55f95796c26767d75dcff01ec6f07598b87fc4cf->enter($__internal_0a4db7cf142c6b273298b5cc55f95796c26767d75dcff01ec6f07598b87fc4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_269f986d5878c2100f7af6b0f10db35a76af4576088f0429a6714ae64b591889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269f986d5878c2100f7af6b0f10db35a76af4576088f0429a6714ae64b591889->enter($__internal_269f986d5878c2100f7af6b0f10db35a76af4576088f0429a6714ae64b591889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_269f986d5878c2100f7af6b0f10db35a76af4576088f0429a6714ae64b591889->leave($__internal_269f986d5878c2100f7af6b0f10db35a76af4576088f0429a6714ae64b591889_prof);

        
        $__internal_0a4db7cf142c6b273298b5cc55f95796c26767d75dcff01ec6f07598b87fc4cf->leave($__internal_0a4db7cf142c6b273298b5cc55f95796c26767d75dcff01ec6f07598b87fc4cf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb7d39bc99820f2b4839813e4994d9ac78e55933150d175088298a635f238c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7d39bc99820f2b4839813e4994d9ac78e55933150d175088298a635f238c30->enter($__internal_bb7d39bc99820f2b4839813e4994d9ac78e55933150d175088298a635f238c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78710e0c54347c63860cd8bb7330637cfc2e94638c81d454a20b3269b15e8b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78710e0c54347c63860cd8bb7330637cfc2e94638c81d454a20b3269b15e8b97->enter($__internal_78710e0c54347c63860cd8bb7330637cfc2e94638c81d454a20b3269b15e8b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_78710e0c54347c63860cd8bb7330637cfc2e94638c81d454a20b3269b15e8b97->leave($__internal_78710e0c54347c63860cd8bb7330637cfc2e94638c81d454a20b3269b15e8b97_prof);

        
        $__internal_bb7d39bc99820f2b4839813e4994d9ac78e55933150d175088298a635f238c30->leave($__internal_bb7d39bc99820f2b4839813e4994d9ac78e55933150d175088298a635f238c30_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
