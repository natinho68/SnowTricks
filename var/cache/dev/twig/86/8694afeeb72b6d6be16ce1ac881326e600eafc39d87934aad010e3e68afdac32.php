<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a68e0c33a8d3ded61f9c9c07f0530001c797ff93ac99b8ae613da191116ffaee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_e605d166efe77febb4dd840d6a61cf76a3a0cb92e5e41f5137a00e38bdfa518f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e605d166efe77febb4dd840d6a61cf76a3a0cb92e5e41f5137a00e38bdfa518f->enter($__internal_e605d166efe77febb4dd840d6a61cf76a3a0cb92e5e41f5137a00e38bdfa518f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cc0240a0425765578ad2cc86a69068efa4020ec76267c0956b157201f045c75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0240a0425765578ad2cc86a69068efa4020ec76267c0956b157201f045c75b->enter($__internal_cc0240a0425765578ad2cc86a69068efa4020ec76267c0956b157201f045c75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e605d166efe77febb4dd840d6a61cf76a3a0cb92e5e41f5137a00e38bdfa518f->leave($__internal_e605d166efe77febb4dd840d6a61cf76a3a0cb92e5e41f5137a00e38bdfa518f_prof);

        
        $__internal_cc0240a0425765578ad2cc86a69068efa4020ec76267c0956b157201f045c75b->leave($__internal_cc0240a0425765578ad2cc86a69068efa4020ec76267c0956b157201f045c75b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_350a9d64a948b91b96703e776e67440ea670860903e2933645b515e57c2c5f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350a9d64a948b91b96703e776e67440ea670860903e2933645b515e57c2c5f82->enter($__internal_350a9d64a948b91b96703e776e67440ea670860903e2933645b515e57c2c5f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_93628ba059198308cfe82109ee61475fa6cad00909edfce3934238e51a757bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93628ba059198308cfe82109ee61475fa6cad00909edfce3934238e51a757bc9->enter($__internal_93628ba059198308cfe82109ee61475fa6cad00909edfce3934238e51a757bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_93628ba059198308cfe82109ee61475fa6cad00909edfce3934238e51a757bc9->leave($__internal_93628ba059198308cfe82109ee61475fa6cad00909edfce3934238e51a757bc9_prof);

        
        $__internal_350a9d64a948b91b96703e776e67440ea670860903e2933645b515e57c2c5f82->leave($__internal_350a9d64a948b91b96703e776e67440ea670860903e2933645b515e57c2c5f82_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c645aeb703ea015a620eb7eeae1beb492fff75629a697abe6a3c36d7cca6df3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c645aeb703ea015a620eb7eeae1beb492fff75629a697abe6a3c36d7cca6df3c->enter($__internal_c645aeb703ea015a620eb7eeae1beb492fff75629a697abe6a3c36d7cca6df3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cc6b92b5a2ba6e6c2b4311c4b9c32a6a43e6a14cbdc710826c8ceb6b805a4ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6b92b5a2ba6e6c2b4311c4b9c32a6a43e6a14cbdc710826c8ceb6b805a4ce4->enter($__internal_cc6b92b5a2ba6e6c2b4311c4b9c32a6a43e6a14cbdc710826c8ceb6b805a4ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cc6b92b5a2ba6e6c2b4311c4b9c32a6a43e6a14cbdc710826c8ceb6b805a4ce4->leave($__internal_cc6b92b5a2ba6e6c2b4311c4b9c32a6a43e6a14cbdc710826c8ceb6b805a4ce4_prof);

        
        $__internal_c645aeb703ea015a620eb7eeae1beb492fff75629a697abe6a3c36d7cca6df3c->leave($__internal_c645aeb703ea015a620eb7eeae1beb492fff75629a697abe6a3c36d7cca6df3c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9085e2d71ce942b62b6340a772d38b6841a1fceeab7c648420cbe89b31e9687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9085e2d71ce942b62b6340a772d38b6841a1fceeab7c648420cbe89b31e9687->enter($__internal_f9085e2d71ce942b62b6340a772d38b6841a1fceeab7c648420cbe89b31e9687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_671d4586c1b4aa90051d69a652d98684c0711a85ad55ba47608c864dbf1870f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671d4586c1b4aa90051d69a652d98684c0711a85ad55ba47608c864dbf1870f8->enter($__internal_671d4586c1b4aa90051d69a652d98684c0711a85ad55ba47608c864dbf1870f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_671d4586c1b4aa90051d69a652d98684c0711a85ad55ba47608c864dbf1870f8->leave($__internal_671d4586c1b4aa90051d69a652d98684c0711a85ad55ba47608c864dbf1870f8_prof);

        
        $__internal_f9085e2d71ce942b62b6340a772d38b6841a1fceeab7c648420cbe89b31e9687->leave($__internal_f9085e2d71ce942b62b6340a772d38b6841a1fceeab7c648420cbe89b31e9687_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
