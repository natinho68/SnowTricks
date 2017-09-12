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
        $__internal_f82488dbf8fad84459c7dd11dcbf9d2bda3306e316564ee068bf643e0abf8e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82488dbf8fad84459c7dd11dcbf9d2bda3306e316564ee068bf643e0abf8e24->enter($__internal_f82488dbf8fad84459c7dd11dcbf9d2bda3306e316564ee068bf643e0abf8e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_628cd7ae5dcd9c92a17149ac3b194a5a0a97d423338143546723586db2fbf470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628cd7ae5dcd9c92a17149ac3b194a5a0a97d423338143546723586db2fbf470->enter($__internal_628cd7ae5dcd9c92a17149ac3b194a5a0a97d423338143546723586db2fbf470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82488dbf8fad84459c7dd11dcbf9d2bda3306e316564ee068bf643e0abf8e24->leave($__internal_f82488dbf8fad84459c7dd11dcbf9d2bda3306e316564ee068bf643e0abf8e24_prof);

        
        $__internal_628cd7ae5dcd9c92a17149ac3b194a5a0a97d423338143546723586db2fbf470->leave($__internal_628cd7ae5dcd9c92a17149ac3b194a5a0a97d423338143546723586db2fbf470_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_821e46384d542d954ff58919ae9a6ededeaa561e56c5b35ba9a74bcd11294df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821e46384d542d954ff58919ae9a6ededeaa561e56c5b35ba9a74bcd11294df6->enter($__internal_821e46384d542d954ff58919ae9a6ededeaa561e56c5b35ba9a74bcd11294df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1c0e9214a92b563238d21833b9464fc99f6cd5c6e52e2a6a903dec8248188090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0e9214a92b563238d21833b9464fc99f6cd5c6e52e2a6a903dec8248188090->enter($__internal_1c0e9214a92b563238d21833b9464fc99f6cd5c6e52e2a6a903dec8248188090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "::materializeLayout.html.twig", 4)->display($context);
        
        $__internal_1c0e9214a92b563238d21833b9464fc99f6cd5c6e52e2a6a903dec8248188090->leave($__internal_1c0e9214a92b563238d21833b9464fc99f6cd5c6e52e2a6a903dec8248188090_prof);

        
        $__internal_821e46384d542d954ff58919ae9a6ededeaa561e56c5b35ba9a74bcd11294df6->leave($__internal_821e46384d542d954ff58919ae9a6ededeaa561e56c5b35ba9a74bcd11294df6_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2f233d0cd10c6edec78fe464c68a1d0f9f9b97d6fe9a5a45443d8d9be535b083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f233d0cd10c6edec78fe464c68a1d0f9f9b97d6fe9a5a45443d8d9be535b083->enter($__internal_2f233d0cd10c6edec78fe464c68a1d0f9f9b97d6fe9a5a45443d8d9be535b083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d676075586fa28fab07aff6850b748214cad6cb3874a91da8ebb668931e88fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d676075586fa28fab07aff6850b748214cad6cb3874a91da8ebb668931e88fab->enter($__internal_d676075586fa28fab07aff6850b748214cad6cb3874a91da8ebb668931e88fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_d676075586fa28fab07aff6850b748214cad6cb3874a91da8ebb668931e88fab->leave($__internal_d676075586fa28fab07aff6850b748214cad6cb3874a91da8ebb668931e88fab_prof);

        
        $__internal_2f233d0cd10c6edec78fe464c68a1d0f9f9b97d6fe9a5a45443d8d9be535b083->leave($__internal_2f233d0cd10c6edec78fe464c68a1d0f9f9b97d6fe9a5a45443d8d9be535b083_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9b76d4ed93d9a06dfc8f2434321fc1b717294e7e567b92d1924c79241ebe1f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b76d4ed93d9a06dfc8f2434321fc1b717294e7e567b92d1924c79241ebe1f27->enter($__internal_9b76d4ed93d9a06dfc8f2434321fc1b717294e7e567b92d1924c79241ebe1f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2ad679f93fad990a881e523c533b8d5ee83ca62468b9685bd241c5089b908aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad679f93fad990a881e523c533b8d5ee83ca62468b9685bd241c5089b908aa6->enter($__internal_2ad679f93fad990a881e523c533b8d5ee83ca62468b9685bd241c5089b908aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_2ad679f93fad990a881e523c533b8d5ee83ca62468b9685bd241c5089b908aa6->leave($__internal_2ad679f93fad990a881e523c533b8d5ee83ca62468b9685bd241c5089b908aa6_prof);

        
        $__internal_9b76d4ed93d9a06dfc8f2434321fc1b717294e7e567b92d1924c79241ebe1f27->leave($__internal_9b76d4ed93d9a06dfc8f2434321fc1b717294e7e567b92d1924c79241ebe1f27_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ea4d70617c37274c818908136721dec3a008220b5daf476aa21477dcc87c6e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4d70617c37274c818908136721dec3a008220b5daf476aa21477dcc87c6e27->enter($__internal_ea4d70617c37274c818908136721dec3a008220b5daf476aa21477dcc87c6e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_64388d286d10ca3f8615c6253b862345ca39f1761d968e94bf5c458ec4d86d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64388d286d10ca3f8615c6253b862345ca39f1761d968e94bf5c458ec4d86d4c->enter($__internal_64388d286d10ca3f8615c6253b862345ca39f1761d968e94bf5c458ec4d86d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_64388d286d10ca3f8615c6253b862345ca39f1761d968e94bf5c458ec4d86d4c->leave($__internal_64388d286d10ca3f8615c6253b862345ca39f1761d968e94bf5c458ec4d86d4c_prof);

        
        $__internal_ea4d70617c37274c818908136721dec3a008220b5daf476aa21477dcc87c6e27->leave($__internal_ea4d70617c37274c818908136721dec3a008220b5daf476aa21477dcc87c6e27_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d947ac5a2844de94381c70e8421568abef04114e9a46a11c781092d96e4fbc23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d947ac5a2844de94381c70e8421568abef04114e9a46a11c781092d96e4fbc23->enter($__internal_d947ac5a2844de94381c70e8421568abef04114e9a46a11c781092d96e4fbc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ab09e1c6df140a10ee016662269bc809401b166744a6df18002b1dbd882dab31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab09e1c6df140a10ee016662269bc809401b166744a6df18002b1dbd882dab31->enter($__internal_ab09e1c6df140a10ee016662269bc809401b166744a6df18002b1dbd882dab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_ab09e1c6df140a10ee016662269bc809401b166744a6df18002b1dbd882dab31->leave($__internal_ab09e1c6df140a10ee016662269bc809401b166744a6df18002b1dbd882dab31_prof);

        
        $__internal_d947ac5a2844de94381c70e8421568abef04114e9a46a11c781092d96e4fbc23->leave($__internal_d947ac5a2844de94381c70e8421568abef04114e9a46a11c781092d96e4fbc23_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1a07facc4c858c061e786e568b56e066f191b48673ab6e470480e652e392bcf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a07facc4c858c061e786e568b56e066f191b48673ab6e470480e652e392bcf4->enter($__internal_1a07facc4c858c061e786e568b56e066f191b48673ab6e470480e652e392bcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5451adb9eea76feafa58e5b7bfdfdd5b501fea88cf78abd6d2f54487cd833e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5451adb9eea76feafa58e5b7bfdfdd5b501fea88cf78abd6d2f54487cd833e3b->enter($__internal_5451adb9eea76feafa58e5b7bfdfdd5b501fea88cf78abd6d2f54487cd833e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "::materializeLayout.html.twig", 39)->display($context);
        
        $__internal_5451adb9eea76feafa58e5b7bfdfdd5b501fea88cf78abd6d2f54487cd833e3b->leave($__internal_5451adb9eea76feafa58e5b7bfdfdd5b501fea88cf78abd6d2f54487cd833e3b_prof);

        
        $__internal_1a07facc4c858c061e786e568b56e066f191b48673ab6e470480e652e392bcf4->leave($__internal_1a07facc4c858c061e786e568b56e066f191b48673ab6e470480e652e392bcf4_prof);

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
