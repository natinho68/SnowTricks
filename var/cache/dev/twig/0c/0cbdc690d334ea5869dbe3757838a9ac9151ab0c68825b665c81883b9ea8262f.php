<?php

/* ::materializeLayout.html.twig */
class __TwigTemplate_3b3da8f70b61ef3217d8160f54a5c09c2945e289f22927bc7b4949af9cf64e48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "::materializeLayout.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'button_widget' => array($this, 'block_button_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c769593740e8bad9eec344598da16b20caab6e1ed566d35ec50dba75c8bcac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c769593740e8bad9eec344598da16b20caab6e1ed566d35ec50dba75c8bcac4->enter($__internal_7c769593740e8bad9eec344598da16b20caab6e1ed566d35ec50dba75c8bcac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_8f7c788f358685fef1d10774dae83b18613b6f355c3c1329b41019e2e00a1159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7c788f358685fef1d10774dae83b18613b6f355c3c1329b41019e2e00a1159->enter($__internal_8f7c788f358685fef1d10774dae83b18613b6f355c3c1329b41019e2e00a1159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c769593740e8bad9eec344598da16b20caab6e1ed566d35ec50dba75c8bcac4->leave($__internal_7c769593740e8bad9eec344598da16b20caab6e1ed566d35ec50dba75c8bcac4_prof);

        
        $__internal_8f7c788f358685fef1d10774dae83b18613b6f355c3c1329b41019e2e00a1159->leave($__internal_8f7c788f358685fef1d10774dae83b18613b6f355c3c1329b41019e2e00a1159_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c765345fcd1bbd4edf54615f48c636639a278a81855e9d96c26d09f009ca997a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c765345fcd1bbd4edf54615f48c636639a278a81855e9d96c26d09f009ca997a->enter($__internal_c765345fcd1bbd4edf54615f48c636639a278a81855e9d96c26d09f009ca997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1c871890b25f1ee1314317f92b74b374cc8a236cef274f95007b0b5639b3e3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c871890b25f1ee1314317f92b74b374cc8a236cef274f95007b0b5639b3e3fd->enter($__internal_1c871890b25f1ee1314317f92b74b374cc8a236cef274f95007b0b5639b3e3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "::materializeLayout.html.twig", 4)->display($context);
        
        $__internal_1c871890b25f1ee1314317f92b74b374cc8a236cef274f95007b0b5639b3e3fd->leave($__internal_1c871890b25f1ee1314317f92b74b374cc8a236cef274f95007b0b5639b3e3fd_prof);

        
        $__internal_c765345fcd1bbd4edf54615f48c636639a278a81855e9d96c26d09f009ca997a->leave($__internal_c765345fcd1bbd4edf54615f48c636639a278a81855e9d96c26d09f009ca997a_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_232583dad7a377653b01e0329c977b5b13b65b45a0817b5c2064cb13ac363b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232583dad7a377653b01e0329c977b5b13b65b45a0817b5c2064cb13ac363b7c->enter($__internal_232583dad7a377653b01e0329c977b5b13b65b45a0817b5c2064cb13ac363b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6c3b5c869aec5f3a93c5702f39e774957d47c13a266fe7e4216fd4b447112d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3b5c869aec5f3a93c5702f39e774957d47c13a266fe7e4216fd4b447112d88->enter($__internal_6c3b5c869aec5f3a93c5702f39e774957d47c13a266fe7e4216fd4b447112d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 9
        echo "    ";
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 10
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")))));
        }
        // line 12
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 13
        if (array_key_exists("tooltip", $context)) {
            // line 14
            echo "        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")), "html", null, true);
            echo "\">error
        </span>
    ";
        }
        
        $__internal_6c3b5c869aec5f3a93c5702f39e774957d47c13a266fe7e4216fd4b447112d88->leave($__internal_6c3b5c869aec5f3a93c5702f39e774957d47c13a266fe7e4216fd4b447112d88_prof);

        
        $__internal_232583dad7a377653b01e0329c977b5b13b65b45a0817b5c2064cb13ac363b7c->leave($__internal_232583dad7a377653b01e0329c977b5b13b65b45a0817b5c2064cb13ac363b7c_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ca9f0f952f760ec47a30885322b7e3a92d489204925394c8c4c574775e7e90dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9f0f952f760ec47a30885322b7e3a92d489204925394c8c4c574775e7e90dd->enter($__internal_ca9f0f952f760ec47a30885322b7e3a92d489204925394c8c4c574775e7e90dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0d522b3363d6c1313c654ae5630285e71b3fc781ce46e2bd762d20cc02675885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d522b3363d6c1313c654ae5630285e71b3fc781ce46e2bd762d20cc02675885->enter($__internal_0d522b3363d6c1313c654ae5630285e71b3fc781ce46e2bd762d20cc02675885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0d522b3363d6c1313c654ae5630285e71b3fc781ce46e2bd762d20cc02675885->leave($__internal_0d522b3363d6c1313c654ae5630285e71b3fc781ce46e2bd762d20cc02675885_prof);

        
        $__internal_ca9f0f952f760ec47a30885322b7e3a92d489204925394c8c4c574775e7e90dd->leave($__internal_ca9f0f952f760ec47a30885322b7e3a92d489204925394c8c4c574775e7e90dd_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_82e59f20616068d1d82d6a938489e4fd1266969862da019cb02f24d7379f73c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e59f20616068d1d82d6a938489e4fd1266969862da019cb02f24d7379f73c0->enter($__internal_82e59f20616068d1d82d6a938489e4fd1266969862da019cb02f24d7379f73c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b0753a33bcd1ab1496ca4372e50f029826914617f639c3a459e6239c28d4052f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0753a33bcd1ab1496ca4372e50f029826914617f639c3a459e6239c28d4052f->enter($__internal_b0753a33bcd1ab1496ca4372e50f029826914617f639c3a459e6239c28d4052f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b0753a33bcd1ab1496ca4372e50f029826914617f639c3a459e6239c28d4052f->leave($__internal_b0753a33bcd1ab1496ca4372e50f029826914617f639c3a459e6239c28d4052f_prof);

        
        $__internal_82e59f20616068d1d82d6a938489e4fd1266969862da019cb02f24d7379f73c0->leave($__internal_82e59f20616068d1d82d6a938489e4fd1266969862da019cb02f24d7379f73c0_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_79a68a8b1a4b1bffd5a8ceceffca21d32b40925f5e465284bda0adf40447af69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a68a8b1a4b1bffd5a8ceceffca21d32b40925f5e465284bda0adf40447af69->enter($__internal_79a68a8b1a4b1bffd5a8ceceffca21d32b40925f5e465284bda0adf40447af69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_0c1796516730adf6b6df82b25ff01d188ab70c96398b6b882e4b4b615e7ecb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1796516730adf6b6df82b25ff01d188ab70c96398b6b882e4b4b615e7ecb67->enter($__internal_0c1796516730adf6b6df82b25ff01d188ab70c96398b6b882e4b4b615e7ecb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_0c1796516730adf6b6df82b25ff01d188ab70c96398b6b882e4b4b615e7ecb67->leave($__internal_0c1796516730adf6b6df82b25ff01d188ab70c96398b6b882e4b4b615e7ecb67_prof);

        
        $__internal_79a68a8b1a4b1bffd5a8ceceffca21d32b40925f5e465284bda0adf40447af69->leave($__internal_79a68a8b1a4b1bffd5a8ceceffca21d32b40925f5e465284bda0adf40447af69_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7b16dd775cc22054582cfa73b8de4dc9bb116cfec0fb865fdb0b3186dee89567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b16dd775cc22054582cfa73b8de4dc9bb116cfec0fb865fdb0b3186dee89567->enter($__internal_7b16dd775cc22054582cfa73b8de4dc9bb116cfec0fb865fdb0b3186dee89567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ba75d2e60bb2258d4bb9e994d3433397f6ea4dd091fa195887e9b982dfeac3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba75d2e60bb2258d4bb9e994d3433397f6ea4dd091fa195887e9b982dfeac3b6->enter($__internal_ba75d2e60bb2258d4bb9e994d3433397f6ea4dd091fa195887e9b982dfeac3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "::materializeLayout.html.twig", 39)->display($context);
        
        $__internal_ba75d2e60bb2258d4bb9e994d3433397f6ea4dd091fa195887e9b982dfeac3b6->leave($__internal_ba75d2e60bb2258d4bb9e994d3433397f6ea4dd091fa195887e9b982dfeac3b6_prof);

        
        $__internal_7b16dd775cc22054582cfa73b8de4dc9bb116cfec0fb865fdb0b3186dee89567->leave($__internal_7b16dd775cc22054582cfa73b8de4dc9bb116cfec0fb865fdb0b3186dee89567_prof);

    }

    public function getTemplateName()
    {
        return "::materializeLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 39,  164 => 38,  153 => 34,  151 => 33,  142 => 32,  132 => 28,  130 => 27,  121 => 26,  111 => 22,  109 => 21,  100 => 20,  86 => 15,  83 => 14,  81 => 13,  79 => 12,  76 => 10,  73 => 9,  64 => 8,  54 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block form_row -%}
    {% include 'materializeTemp/form_row.html.twig' %}
{%- endblock form_row %}


{% block form_widget_simple %}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
    {% if tooltip is defined %}
        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"{{ tooltip }}\">error
        </span>
    {% endif %}
{% endblock form_widget_simple %}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default(''))|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}


{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('waves-effect waves-light') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}


{%- block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ 'materialize-textarea')|trim}) %}
    {{ parent() }}
{%- endblock -%}


{%- block form_errors -%}
  {% include 'materializeTemp/form_errors.html.twig' %}
{%- endblock form_errors -%}
", "::materializeLayout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/materializeLayout.html.twig");
    }
}
