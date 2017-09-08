<?php

/* materializeLayout.html.twig */
class __TwigTemplate_97b4eca8f95b07f71d09699f3adcae0fbe6ddbaed569c88acd9b634871663538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "materializeLayout.html.twig", 1);
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
        $__internal_5f7858f1f0f0831bb54f69599de18bf42a9a4461240264a73b85e4a605629c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7858f1f0f0831bb54f69599de18bf42a9a4461240264a73b85e4a605629c68->enter($__internal_5f7858f1f0f0831bb54f69599de18bf42a9a4461240264a73b85e4a605629c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materializeLayout.html.twig"));

        $__internal_a43d9ef0966a81002149239f360e3dc6ae832693a83fe7a88e10ee5918ceb789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43d9ef0966a81002149239f360e3dc6ae832693a83fe7a88e10ee5918ceb789->enter($__internal_a43d9ef0966a81002149239f360e3dc6ae832693a83fe7a88e10ee5918ceb789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f7858f1f0f0831bb54f69599de18bf42a9a4461240264a73b85e4a605629c68->leave($__internal_5f7858f1f0f0831bb54f69599de18bf42a9a4461240264a73b85e4a605629c68_prof);

        
        $__internal_a43d9ef0966a81002149239f360e3dc6ae832693a83fe7a88e10ee5918ceb789->leave($__internal_a43d9ef0966a81002149239f360e3dc6ae832693a83fe7a88e10ee5918ceb789_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_195cb23b5f97c52db653d79a6ba760a034cc5b713358aeede961f6db9c30dd3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195cb23b5f97c52db653d79a6ba760a034cc5b713358aeede961f6db9c30dd3f->enter($__internal_195cb23b5f97c52db653d79a6ba760a034cc5b713358aeede961f6db9c30dd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5953275c210a2b3828a1c4a4be45242aaadb1a0aa5caa77130a025e647564b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5953275c210a2b3828a1c4a4be45242aaadb1a0aa5caa77130a025e647564b7c->enter($__internal_5953275c210a2b3828a1c4a4be45242aaadb1a0aa5caa77130a025e647564b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "materializeLayout.html.twig", 4)->display($context);
        
        $__internal_5953275c210a2b3828a1c4a4be45242aaadb1a0aa5caa77130a025e647564b7c->leave($__internal_5953275c210a2b3828a1c4a4be45242aaadb1a0aa5caa77130a025e647564b7c_prof);

        
        $__internal_195cb23b5f97c52db653d79a6ba760a034cc5b713358aeede961f6db9c30dd3f->leave($__internal_195cb23b5f97c52db653d79a6ba760a034cc5b713358aeede961f6db9c30dd3f_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_91df387c8a4b0c9bcc5651769c1eb9630b9efb0c062cbfc25207726a8b73763b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91df387c8a4b0c9bcc5651769c1eb9630b9efb0c062cbfc25207726a8b73763b->enter($__internal_91df387c8a4b0c9bcc5651769c1eb9630b9efb0c062cbfc25207726a8b73763b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_7db785074b1e475da013fb1fc1c12310b170f98294535d8591b01c808ad7cd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db785074b1e475da013fb1fc1c12310b170f98294535d8591b01c808ad7cd90->enter($__internal_7db785074b1e475da013fb1fc1c12310b170f98294535d8591b01c808ad7cd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 9
        echo "    ";
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 10
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")))));
        }
        // line 12
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 13
        if (array_key_exists("tooltip", $context)) {
            // line 14
            echo "        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "html", null, true);
            echo "\">error
        </span>
    ";
        }
        
        $__internal_7db785074b1e475da013fb1fc1c12310b170f98294535d8591b01c808ad7cd90->leave($__internal_7db785074b1e475da013fb1fc1c12310b170f98294535d8591b01c808ad7cd90_prof);

        
        $__internal_91df387c8a4b0c9bcc5651769c1eb9630b9efb0c062cbfc25207726a8b73763b->leave($__internal_91df387c8a4b0c9bcc5651769c1eb9630b9efb0c062cbfc25207726a8b73763b_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_509ba53b7456529268feadaa5766eeeebdb714e34ed869b7dc250e1fefea1cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509ba53b7456529268feadaa5766eeeebdb714e34ed869b7dc250e1fefea1cae->enter($__internal_509ba53b7456529268feadaa5766eeeebdb714e34ed869b7dc250e1fefea1cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_16b63d3bdca3df014c954dc82dad4693123c6a4f5f309b205ff7624b199d5ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b63d3bdca3df014c954dc82dad4693123c6a4f5f309b205ff7624b199d5ace->enter($__internal_16b63d3bdca3df014c954dc82dad4693123c6a4f5f309b205ff7624b199d5ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_16b63d3bdca3df014c954dc82dad4693123c6a4f5f309b205ff7624b199d5ace->leave($__internal_16b63d3bdca3df014c954dc82dad4693123c6a4f5f309b205ff7624b199d5ace_prof);

        
        $__internal_509ba53b7456529268feadaa5766eeeebdb714e34ed869b7dc250e1fefea1cae->leave($__internal_509ba53b7456529268feadaa5766eeeebdb714e34ed869b7dc250e1fefea1cae_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_84b3778d08ec1074897656542897d0d8e70715ed7422719659371ab4373b1b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b3778d08ec1074897656542897d0d8e70715ed7422719659371ab4373b1b25->enter($__internal_84b3778d08ec1074897656542897d0d8e70715ed7422719659371ab4373b1b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_fdd250f55bf9d7d49017b78feea4e1925b5a0b41d2e8effc1136bfd4d4363767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd250f55bf9d7d49017b78feea4e1925b5a0b41d2e8effc1136bfd4d4363767->enter($__internal_fdd250f55bf9d7d49017b78feea4e1925b5a0b41d2e8effc1136bfd4d4363767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_fdd250f55bf9d7d49017b78feea4e1925b5a0b41d2e8effc1136bfd4d4363767->leave($__internal_fdd250f55bf9d7d49017b78feea4e1925b5a0b41d2e8effc1136bfd4d4363767_prof);

        
        $__internal_84b3778d08ec1074897656542897d0d8e70715ed7422719659371ab4373b1b25->leave($__internal_84b3778d08ec1074897656542897d0d8e70715ed7422719659371ab4373b1b25_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_1c5987aaaac74131bab9a9349f3306b1aec668fcfd2a4671e22676d9797e0042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5987aaaac74131bab9a9349f3306b1aec668fcfd2a4671e22676d9797e0042->enter($__internal_1c5987aaaac74131bab9a9349f3306b1aec668fcfd2a4671e22676d9797e0042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f0bf41f4893771caf8544410dd5917d1562ef1e46d7418fd449292a176970ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bf41f4893771caf8544410dd5917d1562ef1e46d7418fd449292a176970ed7->enter($__internal_f0bf41f4893771caf8544410dd5917d1562ef1e46d7418fd449292a176970ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f0bf41f4893771caf8544410dd5917d1562ef1e46d7418fd449292a176970ed7->leave($__internal_f0bf41f4893771caf8544410dd5917d1562ef1e46d7418fd449292a176970ed7_prof);

        
        $__internal_1c5987aaaac74131bab9a9349f3306b1aec668fcfd2a4671e22676d9797e0042->leave($__internal_1c5987aaaac74131bab9a9349f3306b1aec668fcfd2a4671e22676d9797e0042_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_13d29c103a3da57cc69d0cb07ee0947d9dd8a486726aac1971376d11f37af51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d29c103a3da57cc69d0cb07ee0947d9dd8a486726aac1971376d11f37af51a->enter($__internal_13d29c103a3da57cc69d0cb07ee0947d9dd8a486726aac1971376d11f37af51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9e1ac369918521e0642fa6d78412fbdc65ac037f9b52da74ef568a59093ebff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1ac369918521e0642fa6d78412fbdc65ac037f9b52da74ef568a59093ebff6->enter($__internal_9e1ac369918521e0642fa6d78412fbdc65ac037f9b52da74ef568a59093ebff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "materializeLayout.html.twig", 39)->display($context);
        
        $__internal_9e1ac369918521e0642fa6d78412fbdc65ac037f9b52da74ef568a59093ebff6->leave($__internal_9e1ac369918521e0642fa6d78412fbdc65ac037f9b52da74ef568a59093ebff6_prof);

        
        $__internal_13d29c103a3da57cc69d0cb07ee0947d9dd8a486726aac1971376d11f37af51a->leave($__internal_13d29c103a3da57cc69d0cb07ee0947d9dd8a486726aac1971376d11f37af51a_prof);

    }

    public function getTemplateName()
    {
        return "materializeLayout.html.twig";
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
", "materializeLayout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/materializeLayout.html.twig");
    }
}
