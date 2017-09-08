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
        $__internal_ea820a149cca9e42003820fe2f6eee2d2699c96eb22975c9a8185156f7b9df8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea820a149cca9e42003820fe2f6eee2d2699c96eb22975c9a8185156f7b9df8a->enter($__internal_ea820a149cca9e42003820fe2f6eee2d2699c96eb22975c9a8185156f7b9df8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_33e38d5b2ff45f93c399fc6d9478bcf473751ae9462fd01cb7b48c31a29aa057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e38d5b2ff45f93c399fc6d9478bcf473751ae9462fd01cb7b48c31a29aa057->enter($__internal_33e38d5b2ff45f93c399fc6d9478bcf473751ae9462fd01cb7b48c31a29aa057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea820a149cca9e42003820fe2f6eee2d2699c96eb22975c9a8185156f7b9df8a->leave($__internal_ea820a149cca9e42003820fe2f6eee2d2699c96eb22975c9a8185156f7b9df8a_prof);

        
        $__internal_33e38d5b2ff45f93c399fc6d9478bcf473751ae9462fd01cb7b48c31a29aa057->leave($__internal_33e38d5b2ff45f93c399fc6d9478bcf473751ae9462fd01cb7b48c31a29aa057_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6c0b2159f9e3a2354820ab8686cc78e7e0a5a31d78b2a4ba216747903d6ac88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0b2159f9e3a2354820ab8686cc78e7e0a5a31d78b2a4ba216747903d6ac88f->enter($__internal_6c0b2159f9e3a2354820ab8686cc78e7e0a5a31d78b2a4ba216747903d6ac88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3793db52baaeda2c40587dd615baad06b49968c15d4316b2f3c43bbad9fd9884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3793db52baaeda2c40587dd615baad06b49968c15d4316b2f3c43bbad9fd9884->enter($__internal_3793db52baaeda2c40587dd615baad06b49968c15d4316b2f3c43bbad9fd9884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<div class=\"row";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"input-field col s12\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 9
        echo "</div>
    </div>";
        
        $__internal_3793db52baaeda2c40587dd615baad06b49968c15d4316b2f3c43bbad9fd9884->leave($__internal_3793db52baaeda2c40587dd615baad06b49968c15d4316b2f3c43bbad9fd9884_prof);

        
        $__internal_6c0b2159f9e3a2354820ab8686cc78e7e0a5a31d78b2a4ba216747903d6ac88f->leave($__internal_6c0b2159f9e3a2354820ab8686cc78e7e0a5a31d78b2a4ba216747903d6ac88f_prof);

    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_79dea6013912690b5d5ed91dce7ce3756cc06a3ee9a51abd329c2fbb98ac8659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79dea6013912690b5d5ed91dce7ce3756cc06a3ee9a51abd329c2fbb98ac8659->enter($__internal_79dea6013912690b5d5ed91dce7ce3756cc06a3ee9a51abd329c2fbb98ac8659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e81ece88aeb6edf6f14cd646f3e884c07205506b07ae68bb49b924fed7b7c6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81ece88aeb6edf6f14cd646f3e884c07205506b07ae68bb49b924fed7b7c6d4->enter($__internal_e81ece88aeb6edf6f14cd646f3e884c07205506b07ae68bb49b924fed7b7c6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 31
        echo "    ";
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 32
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 35
        if (array_key_exists("tooltip", $context)) {
            // line 36
            echo "        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")), "html", null, true);
            echo "\">error
        </span>
    ";
        }
        
        $__internal_e81ece88aeb6edf6f14cd646f3e884c07205506b07ae68bb49b924fed7b7c6d4->leave($__internal_e81ece88aeb6edf6f14cd646f3e884c07205506b07ae68bb49b924fed7b7c6d4_prof);

        
        $__internal_79dea6013912690b5d5ed91dce7ce3756cc06a3ee9a51abd329c2fbb98ac8659->leave($__internal_79dea6013912690b5d5ed91dce7ce3756cc06a3ee9a51abd329c2fbb98ac8659_prof);

    }

    // line 42
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_161501c84ef84939280d52d7ffca2bcc5a68313c583d1c9b05af5d28e90ddc32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161501c84ef84939280d52d7ffca2bcc5a68313c583d1c9b05af5d28e90ddc32->enter($__internal_161501c84ef84939280d52d7ffca2bcc5a68313c583d1c9b05af5d28e90ddc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d59d5d839a0436a44f32ea7ba53cc4242afc5b2a2550ff73fd24d3c5a240e076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59d5d839a0436a44f32ea7ba53cc4242afc5b2a2550ff73fd24d3c5a240e076->enter($__internal_d59d5d839a0436a44f32ea7ba53cc4242afc5b2a2550ff73fd24d3c5a240e076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 43
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 44
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d59d5d839a0436a44f32ea7ba53cc4242afc5b2a2550ff73fd24d3c5a240e076->leave($__internal_d59d5d839a0436a44f32ea7ba53cc4242afc5b2a2550ff73fd24d3c5a240e076_prof);

        
        $__internal_161501c84ef84939280d52d7ffca2bcc5a68313c583d1c9b05af5d28e90ddc32->leave($__internal_161501c84ef84939280d52d7ffca2bcc5a68313c583d1c9b05af5d28e90ddc32_prof);

    }

    // line 48
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b37629870006e47fb85efd512b7980447cc0572f2b2be4af680a0f52473a2676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37629870006e47fb85efd512b7980447cc0572f2b2be4af680a0f52473a2676->enter($__internal_b37629870006e47fb85efd512b7980447cc0572f2b2be4af680a0f52473a2676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c452fc06e321beb86c398186205888f4b3e4255297c4722f9ebf8d998332a4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c452fc06e321beb86c398186205888f4b3e4255297c4722f9ebf8d998332a4e2->enter($__internal_c452fc06e321beb86c398186205888f4b3e4255297c4722f9ebf8d998332a4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 49
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 50
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c452fc06e321beb86c398186205888f4b3e4255297c4722f9ebf8d998332a4e2->leave($__internal_c452fc06e321beb86c398186205888f4b3e4255297c4722f9ebf8d998332a4e2_prof);

        
        $__internal_b37629870006e47fb85efd512b7980447cc0572f2b2be4af680a0f52473a2676->leave($__internal_b37629870006e47fb85efd512b7980447cc0572f2b2be4af680a0f52473a2676_prof);

    }

    // line 54
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3aa91f29f187cee277bbc27539c01cb5f1f3254cbbdc486238068b1db900ee4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa91f29f187cee277bbc27539c01cb5f1f3254cbbdc486238068b1db900ee4e->enter($__internal_3aa91f29f187cee277bbc27539c01cb5f1f3254cbbdc486238068b1db900ee4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5e446755b6ce6d7f3a990fa1b962d98104e18f40a94b945982a1dbd939d1697f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e446755b6ce6d7f3a990fa1b962d98104e18f40a94b945982a1dbd939d1697f->enter($__internal_5e446755b6ce6d7f3a990fa1b962d98104e18f40a94b945982a1dbd939d1697f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 55
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 56
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5e446755b6ce6d7f3a990fa1b962d98104e18f40a94b945982a1dbd939d1697f->leave($__internal_5e446755b6ce6d7f3a990fa1b962d98104e18f40a94b945982a1dbd939d1697f_prof);

        
        $__internal_3aa91f29f187cee277bbc27539c01cb5f1f3254cbbdc486238068b1db900ee4e->leave($__internal_3aa91f29f187cee277bbc27539c01cb5f1f3254cbbdc486238068b1db900ee4e_prof);

    }

    // line 60
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0305adf5b37481f67a02b1eb2032474a01f11e4e2e04cf99a9f5c384c3777498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0305adf5b37481f67a02b1eb2032474a01f11e4e2e04cf99a9f5c384c3777498->enter($__internal_0305adf5b37481f67a02b1eb2032474a01f11e4e2e04cf99a9f5c384c3777498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ec04babd7fb6af12d9b822c3dec372152b029e8650b86a3b920dd72db13dc88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec04babd7fb6af12d9b822c3dec372152b029e8650b86a3b920dd72db13dc88b->enter($__internal_ec04babd7fb6af12d9b822c3dec372152b029e8650b86a3b920dd72db13dc88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 61
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 63
                echo "<div class=\"row\" style=\"padding-top:15px;\">
                    <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                        <div class=\"chip red alert\">
                            <i class=\" close material-icons right white-text\">close</i>
                            <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                            <h6 class=\"white-text\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</h6>
                        </div>
                    </div>
                </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ec04babd7fb6af12d9b822c3dec372152b029e8650b86a3b920dd72db13dc88b->leave($__internal_ec04babd7fb6af12d9b822c3dec372152b029e8650b86a3b920dd72db13dc88b_prof);

        
        $__internal_0305adf5b37481f67a02b1eb2032474a01f11e4e2e04cf99a9f5c384c3777498->leave($__internal_0305adf5b37481f67a02b1eb2032474a01f11e4e2e04cf99a9f5c384c3777498_prof);

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
        return array (  200 => 68,  193 => 63,  189 => 62,  187 => 61,  178 => 60,  167 => 56,  165 => 55,  156 => 54,  146 => 50,  144 => 49,  135 => 48,  125 => 44,  123 => 43,  114 => 42,  100 => 37,  97 => 36,  95 => 35,  93 => 34,  90 => 32,  87 => 31,  78 => 30,  67 => 9,  65 => 8,  63 => 7,  61 => 6,  54 => 4,  45 => 3,  11 => 1,);
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
    <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        <div class=\"input-field col s12\">
            {{- form_widget(form) -}}
            {{- form_label(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock form_row %}


{#{% block file_widget %}
{% if 'file' == type %}
    <div class=\"file-field input-field\">
        <div class=\"btn\">
            File
            <input type=\"file\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}>
        </div>
            <input class=\"file-path validate\" type=\"text\">
        </div>
    </div>
{% else %}
    {{- parent() -}}
{% endif %}
    {% endblock file_widget %}#}


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
    {%- if errors|length > 0 -%}
            {%- for error in errors -%}
                <div class=\"row\" style=\"padding-top:15px;\">
                    <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                        <div class=\"chip red alert\">
                            <i class=\" close material-icons right white-text\">close</i>
                            <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                            <h6 class=\"white-text\">{{ error.message }}</h6>
                        </div>
                    </div>
                </div>
            {%- endfor -%}
    {%- endif -%}
{%- endblock form_errors -%}", "::materializeLayout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/materializeLayout.html.twig");
    }
}
