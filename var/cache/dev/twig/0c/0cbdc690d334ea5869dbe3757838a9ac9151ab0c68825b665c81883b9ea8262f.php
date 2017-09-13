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
        $__internal_2c87403e8a9bc2bbb13cd7727703d5cd8767d642d35f7abc0461fa3985845582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c87403e8a9bc2bbb13cd7727703d5cd8767d642d35f7abc0461fa3985845582->enter($__internal_2c87403e8a9bc2bbb13cd7727703d5cd8767d642d35f7abc0461fa3985845582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_50233bc0d8681780940472c2724c0db5dd8e2036090a4ce85a468c59f931e55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50233bc0d8681780940472c2724c0db5dd8e2036090a4ce85a468c59f931e55a->enter($__internal_50233bc0d8681780940472c2724c0db5dd8e2036090a4ce85a468c59f931e55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c87403e8a9bc2bbb13cd7727703d5cd8767d642d35f7abc0461fa3985845582->leave($__internal_2c87403e8a9bc2bbb13cd7727703d5cd8767d642d35f7abc0461fa3985845582_prof);

        
        $__internal_50233bc0d8681780940472c2724c0db5dd8e2036090a4ce85a468c59f931e55a->leave($__internal_50233bc0d8681780940472c2724c0db5dd8e2036090a4ce85a468c59f931e55a_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_817c8dbb4662aa2fb9a6c721736c182f9ebe7e025a87717dc4076e810b88aab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_817c8dbb4662aa2fb9a6c721736c182f9ebe7e025a87717dc4076e810b88aab6->enter($__internal_817c8dbb4662aa2fb9a6c721736c182f9ebe7e025a87717dc4076e810b88aab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2e96dd629373cf7d4295f0d67d994ed645a81eee20cee679b0b53b63772cd2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e96dd629373cf7d4295f0d67d994ed645a81eee20cee679b0b53b63772cd2bf->enter($__internal_2e96dd629373cf7d4295f0d67d994ed645a81eee20cee679b0b53b63772cd2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "::materializeLayout.html.twig", 4)->display($context);
        
        $__internal_2e96dd629373cf7d4295f0d67d994ed645a81eee20cee679b0b53b63772cd2bf->leave($__internal_2e96dd629373cf7d4295f0d67d994ed645a81eee20cee679b0b53b63772cd2bf_prof);

        
        $__internal_817c8dbb4662aa2fb9a6c721736c182f9ebe7e025a87717dc4076e810b88aab6->leave($__internal_817c8dbb4662aa2fb9a6c721736c182f9ebe7e025a87717dc4076e810b88aab6_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_827c7efbac1f66e6ca25d8f91b6af957f0e251e7c3b311cbb8880cf5cee46a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827c7efbac1f66e6ca25d8f91b6af957f0e251e7c3b311cbb8880cf5cee46a39->enter($__internal_827c7efbac1f66e6ca25d8f91b6af957f0e251e7c3b311cbb8880cf5cee46a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_06c28515d42661f40ff7991a70da9cdf5b833ad140351018b25d4fb0fad9a8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c28515d42661f40ff7991a70da9cdf5b833ad140351018b25d4fb0fad9a8be->enter($__internal_06c28515d42661f40ff7991a70da9cdf5b833ad140351018b25d4fb0fad9a8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_06c28515d42661f40ff7991a70da9cdf5b833ad140351018b25d4fb0fad9a8be->leave($__internal_06c28515d42661f40ff7991a70da9cdf5b833ad140351018b25d4fb0fad9a8be_prof);

        
        $__internal_827c7efbac1f66e6ca25d8f91b6af957f0e251e7c3b311cbb8880cf5cee46a39->leave($__internal_827c7efbac1f66e6ca25d8f91b6af957f0e251e7c3b311cbb8880cf5cee46a39_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_be262a7be7864f9c731095a1bbb1d1d8d0d62cf9e68965036d50a4ed3a153e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be262a7be7864f9c731095a1bbb1d1d8d0d62cf9e68965036d50a4ed3a153e46->enter($__internal_be262a7be7864f9c731095a1bbb1d1d8d0d62cf9e68965036d50a4ed3a153e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f13648a5eded0a9ebf8ee1444db73df9c45049d1e92fc217d3ae59e0d96031a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13648a5eded0a9ebf8ee1444db73df9c45049d1e92fc217d3ae59e0d96031a2->enter($__internal_f13648a5eded0a9ebf8ee1444db73df9c45049d1e92fc217d3ae59e0d96031a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_f13648a5eded0a9ebf8ee1444db73df9c45049d1e92fc217d3ae59e0d96031a2->leave($__internal_f13648a5eded0a9ebf8ee1444db73df9c45049d1e92fc217d3ae59e0d96031a2_prof);

        
        $__internal_be262a7be7864f9c731095a1bbb1d1d8d0d62cf9e68965036d50a4ed3a153e46->leave($__internal_be262a7be7864f9c731095a1bbb1d1d8d0d62cf9e68965036d50a4ed3a153e46_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ca14223eff62ee77fb5eb135de6734a366e7a46c77ba094fae4f05f2efc5a6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca14223eff62ee77fb5eb135de6734a366e7a46c77ba094fae4f05f2efc5a6ef->enter($__internal_ca14223eff62ee77fb5eb135de6734a366e7a46c77ba094fae4f05f2efc5a6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6a8b3ea45f3cdce3d97366bc809b9227b401c5daecf934516a4e90431cad5c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8b3ea45f3cdce3d97366bc809b9227b401c5daecf934516a4e90431cad5c85->enter($__internal_6a8b3ea45f3cdce3d97366bc809b9227b401c5daecf934516a4e90431cad5c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_6a8b3ea45f3cdce3d97366bc809b9227b401c5daecf934516a4e90431cad5c85->leave($__internal_6a8b3ea45f3cdce3d97366bc809b9227b401c5daecf934516a4e90431cad5c85_prof);

        
        $__internal_ca14223eff62ee77fb5eb135de6734a366e7a46c77ba094fae4f05f2efc5a6ef->leave($__internal_ca14223eff62ee77fb5eb135de6734a366e7a46c77ba094fae4f05f2efc5a6ef_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_abf4f9ee02041f85540322ff420337fb065deb60630dab73d40ae9dad9c47cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf4f9ee02041f85540322ff420337fb065deb60630dab73d40ae9dad9c47cb2->enter($__internal_abf4f9ee02041f85540322ff420337fb065deb60630dab73d40ae9dad9c47cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d5d5682190fb2b9770c9d11ef77eb8ffa6063becedcdd681cf13f2f952764f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d5682190fb2b9770c9d11ef77eb8ffa6063becedcdd681cf13f2f952764f03->enter($__internal_d5d5682190fb2b9770c9d11ef77eb8ffa6063becedcdd681cf13f2f952764f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d5d5682190fb2b9770c9d11ef77eb8ffa6063becedcdd681cf13f2f952764f03->leave($__internal_d5d5682190fb2b9770c9d11ef77eb8ffa6063becedcdd681cf13f2f952764f03_prof);

        
        $__internal_abf4f9ee02041f85540322ff420337fb065deb60630dab73d40ae9dad9c47cb2->leave($__internal_abf4f9ee02041f85540322ff420337fb065deb60630dab73d40ae9dad9c47cb2_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_54c1e62d5279e8406304caeb75b7881a1c14a01538849d27ee2ae348436eeb3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c1e62d5279e8406304caeb75b7881a1c14a01538849d27ee2ae348436eeb3d->enter($__internal_54c1e62d5279e8406304caeb75b7881a1c14a01538849d27ee2ae348436eeb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_106798fd2de5126311334d6c13585b7faaa4a4a11b34f35cc3c35ad755a2c98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106798fd2de5126311334d6c13585b7faaa4a4a11b34f35cc3c35ad755a2c98e->enter($__internal_106798fd2de5126311334d6c13585b7faaa4a4a11b34f35cc3c35ad755a2c98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "::materializeLayout.html.twig", 39)->display($context);
        
        $__internal_106798fd2de5126311334d6c13585b7faaa4a4a11b34f35cc3c35ad755a2c98e->leave($__internal_106798fd2de5126311334d6c13585b7faaa4a4a11b34f35cc3c35ad755a2c98e_prof);

        
        $__internal_54c1e62d5279e8406304caeb75b7881a1c14a01538849d27ee2ae348436eeb3d->leave($__internal_54c1e62d5279e8406304caeb75b7881a1c14a01538849d27ee2ae348436eeb3d_prof);

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
