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
        $__internal_b6bf213e606e5000c2da5840f954c8858a96ceaacedabb20407e0abc3c699ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6bf213e606e5000c2da5840f954c8858a96ceaacedabb20407e0abc3c699ef2->enter($__internal_b6bf213e606e5000c2da5840f954c8858a96ceaacedabb20407e0abc3c699ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_8a7c661adffb891de4b7dd1e6f0ce8b632c84877aae1d4811451350348dcbde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7c661adffb891de4b7dd1e6f0ce8b632c84877aae1d4811451350348dcbde9->enter($__internal_8a7c661adffb891de4b7dd1e6f0ce8b632c84877aae1d4811451350348dcbde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6bf213e606e5000c2da5840f954c8858a96ceaacedabb20407e0abc3c699ef2->leave($__internal_b6bf213e606e5000c2da5840f954c8858a96ceaacedabb20407e0abc3c699ef2_prof);

        
        $__internal_8a7c661adffb891de4b7dd1e6f0ce8b632c84877aae1d4811451350348dcbde9->leave($__internal_8a7c661adffb891de4b7dd1e6f0ce8b632c84877aae1d4811451350348dcbde9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21256a342064905c1a38743339b60ac987c6096aa5fe3d8ddf45beb9d8c8464b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21256a342064905c1a38743339b60ac987c6096aa5fe3d8ddf45beb9d8c8464b->enter($__internal_21256a342064905c1a38743339b60ac987c6096aa5fe3d8ddf45beb9d8c8464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7754a72c6c80353f56191d7ce7fabe7aaf9435eeec59d2f24d359743fc2556f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7754a72c6c80353f56191d7ce7fabe7aaf9435eeec59d2f24d359743fc2556f->enter($__internal_f7754a72c6c80353f56191d7ce7fabe7aaf9435eeec59d2f24d359743fc2556f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f7754a72c6c80353f56191d7ce7fabe7aaf9435eeec59d2f24d359743fc2556f->leave($__internal_f7754a72c6c80353f56191d7ce7fabe7aaf9435eeec59d2f24d359743fc2556f_prof);

        
        $__internal_21256a342064905c1a38743339b60ac987c6096aa5fe3d8ddf45beb9d8c8464b->leave($__internal_21256a342064905c1a38743339b60ac987c6096aa5fe3d8ddf45beb9d8c8464b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23a407189d94ea1caca6f6af3de0b4718b60d6d0b6723cf642134edf3bc709b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a407189d94ea1caca6f6af3de0b4718b60d6d0b6723cf642134edf3bc709b5->enter($__internal_23a407189d94ea1caca6f6af3de0b4718b60d6d0b6723cf642134edf3bc709b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b10400ea6ac10743c7ecb85f77bf5ce3cfce872dfea08f84ca647c168fecfe53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10400ea6ac10743c7ecb85f77bf5ce3cfce872dfea08f84ca647c168fecfe53->enter($__internal_b10400ea6ac10743c7ecb85f77bf5ce3cfce872dfea08f84ca647c168fecfe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b10400ea6ac10743c7ecb85f77bf5ce3cfce872dfea08f84ca647c168fecfe53->leave($__internal_b10400ea6ac10743c7ecb85f77bf5ce3cfce872dfea08f84ca647c168fecfe53_prof);

        
        $__internal_23a407189d94ea1caca6f6af3de0b4718b60d6d0b6723cf642134edf3bc709b5->leave($__internal_23a407189d94ea1caca6f6af3de0b4718b60d6d0b6723cf642134edf3bc709b5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abed2b4aaeaa662806e04a41ca7ecea9406b6fdbe6c1588d96e808def776a05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abed2b4aaeaa662806e04a41ca7ecea9406b6fdbe6c1588d96e808def776a05c->enter($__internal_abed2b4aaeaa662806e04a41ca7ecea9406b6fdbe6c1588d96e808def776a05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b97604a07a66bbf97d8dc0ebfdeccec40407f98d130780689472f1961d68ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b97604a07a66bbf97d8dc0ebfdeccec40407f98d130780689472f1961d68ac4->enter($__internal_4b97604a07a66bbf97d8dc0ebfdeccec40407f98d130780689472f1961d68ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4b97604a07a66bbf97d8dc0ebfdeccec40407f98d130780689472f1961d68ac4->leave($__internal_4b97604a07a66bbf97d8dc0ebfdeccec40407f98d130780689472f1961d68ac4_prof);

        
        $__internal_abed2b4aaeaa662806e04a41ca7ecea9406b6fdbe6c1588d96e808def776a05c->leave($__internal_abed2b4aaeaa662806e04a41ca7ecea9406b6fdbe6c1588d96e808def776a05c_prof);

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
