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
        $__internal_d1dda7d5a6bbc107be3d3ee793fa562511b77a1fd388d4f757f4cab0e40a5f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1dda7d5a6bbc107be3d3ee793fa562511b77a1fd388d4f757f4cab0e40a5f98->enter($__internal_d1dda7d5a6bbc107be3d3ee793fa562511b77a1fd388d4f757f4cab0e40a5f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materializeLayout.html.twig"));

        $__internal_64db9ca0f588525146737509f060ba87efbc20eafe0811418f29409358dd0aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64db9ca0f588525146737509f060ba87efbc20eafe0811418f29409358dd0aac->enter($__internal_64db9ca0f588525146737509f060ba87efbc20eafe0811418f29409358dd0aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1dda7d5a6bbc107be3d3ee793fa562511b77a1fd388d4f757f4cab0e40a5f98->leave($__internal_d1dda7d5a6bbc107be3d3ee793fa562511b77a1fd388d4f757f4cab0e40a5f98_prof);

        
        $__internal_64db9ca0f588525146737509f060ba87efbc20eafe0811418f29409358dd0aac->leave($__internal_64db9ca0f588525146737509f060ba87efbc20eafe0811418f29409358dd0aac_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f2688b3492b23cf0ccbb2f268e214f748c88f38aa8dc19c8ffb1ef27a578adba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2688b3492b23cf0ccbb2f268e214f748c88f38aa8dc19c8ffb1ef27a578adba->enter($__internal_f2688b3492b23cf0ccbb2f268e214f748c88f38aa8dc19c8ffb1ef27a578adba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e4106dc319009c7761d752472975ac56ade8f4d94294bc5a00282b73538772a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4106dc319009c7761d752472975ac56ade8f4d94294bc5a00282b73538772a9->enter($__internal_e4106dc319009c7761d752472975ac56ade8f4d94294bc5a00282b73538772a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<div class=\"row";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"input-field col s12\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 9
        echo "</div>
    </div>";
        
        $__internal_e4106dc319009c7761d752472975ac56ade8f4d94294bc5a00282b73538772a9->leave($__internal_e4106dc319009c7761d752472975ac56ade8f4d94294bc5a00282b73538772a9_prof);

        
        $__internal_f2688b3492b23cf0ccbb2f268e214f748c88f38aa8dc19c8ffb1ef27a578adba->leave($__internal_f2688b3492b23cf0ccbb2f268e214f748c88f38aa8dc19c8ffb1ef27a578adba_prof);

    }

    // line 14
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b6aa36abf63a2b1f93fdda2aca4dc4a270e9f6e701922aeb28a5b8de743da3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6aa36abf63a2b1f93fdda2aca4dc4a270e9f6e701922aeb28a5b8de743da3f4->enter($__internal_b6aa36abf63a2b1f93fdda2aca4dc4a270e9f6e701922aeb28a5b8de743da3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_864aa2a174dd73b75cbf3d4db67d33606971de4d8c2818a92cec2f7740b9d988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864aa2a174dd73b75cbf3d4db67d33606971de4d8c2818a92cec2f7740b9d988->enter($__internal_864aa2a174dd73b75cbf3d4db67d33606971de4d8c2818a92cec2f7740b9d988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 15
        echo "    ";
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 16
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")))));
        }
        // line 18
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 19
        if (array_key_exists("tooltip", $context)) {
            // line 20
            echo "        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"";
            // line 21
            echo twig_escape_filter($this->env, ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "html", null, true);
            echo "\">error
        </span>
    ";
        }
        
        $__internal_864aa2a174dd73b75cbf3d4db67d33606971de4d8c2818a92cec2f7740b9d988->leave($__internal_864aa2a174dd73b75cbf3d4db67d33606971de4d8c2818a92cec2f7740b9d988_prof);

        
        $__internal_b6aa36abf63a2b1f93fdda2aca4dc4a270e9f6e701922aeb28a5b8de743da3f4->leave($__internal_b6aa36abf63a2b1f93fdda2aca4dc4a270e9f6e701922aeb28a5b8de743da3f4_prof);

    }

    // line 26
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_32050b05432a2608501e9fe761d684034fa50827e031b0dcc4fb459853354b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32050b05432a2608501e9fe761d684034fa50827e031b0dcc4fb459853354b87->enter($__internal_32050b05432a2608501e9fe761d684034fa50827e031b0dcc4fb459853354b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ead0c9e0451c2dbf44f0c242a92dab620a22ff3592e9f95ad6d0e223acb9dec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead0c9e0451c2dbf44f0c242a92dab620a22ff3592e9f95ad6d0e223acb9dec0->enter($__internal_ead0c9e0451c2dbf44f0c242a92dab620a22ff3592e9f95ad6d0e223acb9dec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 27
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
        // line 28
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ead0c9e0451c2dbf44f0c242a92dab620a22ff3592e9f95ad6d0e223acb9dec0->leave($__internal_ead0c9e0451c2dbf44f0c242a92dab620a22ff3592e9f95ad6d0e223acb9dec0_prof);

        
        $__internal_32050b05432a2608501e9fe761d684034fa50827e031b0dcc4fb459853354b87->leave($__internal_32050b05432a2608501e9fe761d684034fa50827e031b0dcc4fb459853354b87_prof);

    }

    // line 32
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c37579ff0d4b8499a8d10ac975134a4735a6d7fe9d452e8345f26fbf35b8e30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37579ff0d4b8499a8d10ac975134a4735a6d7fe9d452e8345f26fbf35b8e30e->enter($__internal_c37579ff0d4b8499a8d10ac975134a4735a6d7fe9d452e8345f26fbf35b8e30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1653b75ff3e3be99a8c7b02837789bcb200a2d1ccea05d08930cff645fbb198e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1653b75ff3e3be99a8c7b02837789bcb200a2d1ccea05d08930cff645fbb198e->enter($__internal_1653b75ff3e3be99a8c7b02837789bcb200a2d1ccea05d08930cff645fbb198e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 33
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 34
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1653b75ff3e3be99a8c7b02837789bcb200a2d1ccea05d08930cff645fbb198e->leave($__internal_1653b75ff3e3be99a8c7b02837789bcb200a2d1ccea05d08930cff645fbb198e_prof);

        
        $__internal_c37579ff0d4b8499a8d10ac975134a4735a6d7fe9d452e8345f26fbf35b8e30e->leave($__internal_c37579ff0d4b8499a8d10ac975134a4735a6d7fe9d452e8345f26fbf35b8e30e_prof);

    }

    // line 38
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b5173b1de131ce1fcff2875e1c4011b10fb9455d028a4d43e7326430bde6595d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5173b1de131ce1fcff2875e1c4011b10fb9455d028a4d43e7326430bde6595d->enter($__internal_b5173b1de131ce1fcff2875e1c4011b10fb9455d028a4d43e7326430bde6595d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_9cbcb49ded54e9430d40fa2525da988c72ab4b2d09e522cf818d1a63de11a628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbcb49ded54e9430d40fa2525da988c72ab4b2d09e522cf818d1a63de11a628->enter($__internal_9cbcb49ded54e9430d40fa2525da988c72ab4b2d09e522cf818d1a63de11a628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 39
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 40
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_9cbcb49ded54e9430d40fa2525da988c72ab4b2d09e522cf818d1a63de11a628->leave($__internal_9cbcb49ded54e9430d40fa2525da988c72ab4b2d09e522cf818d1a63de11a628_prof);

        
        $__internal_b5173b1de131ce1fcff2875e1c4011b10fb9455d028a4d43e7326430bde6595d->leave($__internal_b5173b1de131ce1fcff2875e1c4011b10fb9455d028a4d43e7326430bde6595d_prof);

    }

    // line 44
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_44f67a88adc85fc413c85f6496e455003b1d0662121dbea810da4f49fe997c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f67a88adc85fc413c85f6496e455003b1d0662121dbea810da4f49fe997c2f->enter($__internal_44f67a88adc85fc413c85f6496e455003b1d0662121dbea810da4f49fe997c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_975c34e6460f313364530b35ec7490f4d0dad2939d9005ef95570ed44f2173eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975c34e6460f313364530b35ec7490f4d0dad2939d9005ef95570ed44f2173eb->enter($__internal_975c34e6460f313364530b35ec7490f4d0dad2939d9005ef95570ed44f2173eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 45
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 47
                echo "<div class=\"row\" style=\"padding-top:15px;\">
                    <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                        <div class=\"chip red alert\">
                            <i class=\" close material-icons right white-text\">close</i>
                            <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                            <h6 class=\"white-text\">";
                // line 52
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
        
        $__internal_975c34e6460f313364530b35ec7490f4d0dad2939d9005ef95570ed44f2173eb->leave($__internal_975c34e6460f313364530b35ec7490f4d0dad2939d9005ef95570ed44f2173eb_prof);

        
        $__internal_44f67a88adc85fc413c85f6496e455003b1d0662121dbea810da4f49fe997c2f->leave($__internal_44f67a88adc85fc413c85f6496e455003b1d0662121dbea810da4f49fe997c2f_prof);

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
        return array (  200 => 52,  193 => 47,  189 => 46,  187 => 45,  178 => 44,  167 => 40,  165 => 39,  156 => 38,  146 => 34,  144 => 33,  135 => 32,  125 => 28,  123 => 27,  114 => 26,  100 => 21,  97 => 20,  95 => 19,  93 => 18,  90 => 16,  87 => 15,  78 => 14,  67 => 9,  65 => 8,  63 => 7,  61 => 6,  54 => 4,  45 => 3,  11 => 1,);
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
{%- endblock form_errors -%}
", "materializeLayout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/materializeLayout.html.twig");
    }
}
