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
        $__internal_5e3f8047b5603102cab7a5ccd674c7ab8085971234608ce6c135e15236a61f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3f8047b5603102cab7a5ccd674c7ab8085971234608ce6c135e15236a61f60->enter($__internal_5e3f8047b5603102cab7a5ccd674c7ab8085971234608ce6c135e15236a61f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_327287c0ddcd94bab43e4d3a805e46ba922dc65120522072b127ae1fc4428af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327287c0ddcd94bab43e4d3a805e46ba922dc65120522072b127ae1fc4428af7->enter($__internal_327287c0ddcd94bab43e4d3a805e46ba922dc65120522072b127ae1fc4428af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e3f8047b5603102cab7a5ccd674c7ab8085971234608ce6c135e15236a61f60->leave($__internal_5e3f8047b5603102cab7a5ccd674c7ab8085971234608ce6c135e15236a61f60_prof);

        
        $__internal_327287c0ddcd94bab43e4d3a805e46ba922dc65120522072b127ae1fc4428af7->leave($__internal_327287c0ddcd94bab43e4d3a805e46ba922dc65120522072b127ae1fc4428af7_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_180c5c3f3f88c907f43922e1d463f564ac45d6cd71f56a3c63783f0ba38cca3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180c5c3f3f88c907f43922e1d463f564ac45d6cd71f56a3c63783f0ba38cca3b->enter($__internal_180c5c3f3f88c907f43922e1d463f564ac45d6cd71f56a3c63783f0ba38cca3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_30f2b6324f11ce5dc22da39ab1f8baa02b857313b773994fc458d353f28c8d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f2b6324f11ce5dc22da39ab1f8baa02b857313b773994fc458d353f28c8d0a->enter($__internal_30f2b6324f11ce5dc22da39ab1f8baa02b857313b773994fc458d353f28c8d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "::materializeLayout.html.twig", 4)->display($context);
        
        $__internal_30f2b6324f11ce5dc22da39ab1f8baa02b857313b773994fc458d353f28c8d0a->leave($__internal_30f2b6324f11ce5dc22da39ab1f8baa02b857313b773994fc458d353f28c8d0a_prof);

        
        $__internal_180c5c3f3f88c907f43922e1d463f564ac45d6cd71f56a3c63783f0ba38cca3b->leave($__internal_180c5c3f3f88c907f43922e1d463f564ac45d6cd71f56a3c63783f0ba38cca3b_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c517064792cd5a5bf03afd0f8944a33e9d3fb361256cf85cab42a458053d9722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c517064792cd5a5bf03afd0f8944a33e9d3fb361256cf85cab42a458053d9722->enter($__internal_c517064792cd5a5bf03afd0f8944a33e9d3fb361256cf85cab42a458053d9722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c37d76eb6efb880a4a3ddbdc49444b7e4bfa06e6ebe2b6831699714f40ef22d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37d76eb6efb880a4a3ddbdc49444b7e4bfa06e6ebe2b6831699714f40ef22d3->enter($__internal_c37d76eb6efb880a4a3ddbdc49444b7e4bfa06e6ebe2b6831699714f40ef22d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_c37d76eb6efb880a4a3ddbdc49444b7e4bfa06e6ebe2b6831699714f40ef22d3->leave($__internal_c37d76eb6efb880a4a3ddbdc49444b7e4bfa06e6ebe2b6831699714f40ef22d3_prof);

        
        $__internal_c517064792cd5a5bf03afd0f8944a33e9d3fb361256cf85cab42a458053d9722->leave($__internal_c517064792cd5a5bf03afd0f8944a33e9d3fb361256cf85cab42a458053d9722_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c1ef5e3f309a6aa410032d2f7c85da296c4fd764c8caa96e4930691013092d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ef5e3f309a6aa410032d2f7c85da296c4fd764c8caa96e4930691013092d22->enter($__internal_c1ef5e3f309a6aa410032d2f7c85da296c4fd764c8caa96e4930691013092d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8c9155bcfd3a92d9a392609ff74869885222644c48205d7a40b5fcffb9b7bfc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9155bcfd3a92d9a392609ff74869885222644c48205d7a40b5fcffb9b7bfc7->enter($__internal_8c9155bcfd3a92d9a392609ff74869885222644c48205d7a40b5fcffb9b7bfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8c9155bcfd3a92d9a392609ff74869885222644c48205d7a40b5fcffb9b7bfc7->leave($__internal_8c9155bcfd3a92d9a392609ff74869885222644c48205d7a40b5fcffb9b7bfc7_prof);

        
        $__internal_c1ef5e3f309a6aa410032d2f7c85da296c4fd764c8caa96e4930691013092d22->leave($__internal_c1ef5e3f309a6aa410032d2f7c85da296c4fd764c8caa96e4930691013092d22_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d12e919bfc9cb75c2046a182b585ef1c34d14b8d0134465f3787a7b9e1f67c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12e919bfc9cb75c2046a182b585ef1c34d14b8d0134465f3787a7b9e1f67c0c->enter($__internal_d12e919bfc9cb75c2046a182b585ef1c34d14b8d0134465f3787a7b9e1f67c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_47f3a71420a5e02346c7e6d33df463944928c50e07e24d0c6228e273c4ff0627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f3a71420a5e02346c7e6d33df463944928c50e07e24d0c6228e273c4ff0627->enter($__internal_47f3a71420a5e02346c7e6d33df463944928c50e07e24d0c6228e273c4ff0627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_47f3a71420a5e02346c7e6d33df463944928c50e07e24d0c6228e273c4ff0627->leave($__internal_47f3a71420a5e02346c7e6d33df463944928c50e07e24d0c6228e273c4ff0627_prof);

        
        $__internal_d12e919bfc9cb75c2046a182b585ef1c34d14b8d0134465f3787a7b9e1f67c0c->leave($__internal_d12e919bfc9cb75c2046a182b585ef1c34d14b8d0134465f3787a7b9e1f67c0c_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_afd728c8326fc633800203de31a809ea62613f09c4807df5a77f8663a5bd759a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd728c8326fc633800203de31a809ea62613f09c4807df5a77f8663a5bd759a->enter($__internal_afd728c8326fc633800203de31a809ea62613f09c4807df5a77f8663a5bd759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_3dd525e6a217a288beaa10f29c0f84bd013f609258fecbb2e26e4170769e96d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd525e6a217a288beaa10f29c0f84bd013f609258fecbb2e26e4170769e96d1->enter($__internal_3dd525e6a217a288beaa10f29c0f84bd013f609258fecbb2e26e4170769e96d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_3dd525e6a217a288beaa10f29c0f84bd013f609258fecbb2e26e4170769e96d1->leave($__internal_3dd525e6a217a288beaa10f29c0f84bd013f609258fecbb2e26e4170769e96d1_prof);

        
        $__internal_afd728c8326fc633800203de31a809ea62613f09c4807df5a77f8663a5bd759a->leave($__internal_afd728c8326fc633800203de31a809ea62613f09c4807df5a77f8663a5bd759a_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8b002fb098d7de22cec6a69626c1359dcdcea82529c595b457e7050869a2a029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b002fb098d7de22cec6a69626c1359dcdcea82529c595b457e7050869a2a029->enter($__internal_8b002fb098d7de22cec6a69626c1359dcdcea82529c595b457e7050869a2a029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5b986a624909d74d57d3098f3282e858a0e278faa8b90ae9738bd38193cdba78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b986a624909d74d57d3098f3282e858a0e278faa8b90ae9738bd38193cdba78->enter($__internal_5b986a624909d74d57d3098f3282e858a0e278faa8b90ae9738bd38193cdba78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "::materializeLayout.html.twig", 39)->display($context);
        
        $__internal_5b986a624909d74d57d3098f3282e858a0e278faa8b90ae9738bd38193cdba78->leave($__internal_5b986a624909d74d57d3098f3282e858a0e278faa8b90ae9738bd38193cdba78_prof);

        
        $__internal_8b002fb098d7de22cec6a69626c1359dcdcea82529c595b457e7050869a2a029->leave($__internal_8b002fb098d7de22cec6a69626c1359dcdcea82529c595b457e7050869a2a029_prof);

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
