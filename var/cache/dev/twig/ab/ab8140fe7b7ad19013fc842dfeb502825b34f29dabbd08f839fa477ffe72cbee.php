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
        $__internal_22f039ca122dc5d3dc831dce772b1357c19b04930b7ecf0173f0f375500abbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f039ca122dc5d3dc831dce772b1357c19b04930b7ecf0173f0f375500abbdc->enter($__internal_22f039ca122dc5d3dc831dce772b1357c19b04930b7ecf0173f0f375500abbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materializeLayout.html.twig"));

        $__internal_06c55ac46895ec62eb8ff782811b29e02f543932d97654337781b1947d15c2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c55ac46895ec62eb8ff782811b29e02f543932d97654337781b1947d15c2b4->enter($__internal_06c55ac46895ec62eb8ff782811b29e02f543932d97654337781b1947d15c2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f039ca122dc5d3dc831dce772b1357c19b04930b7ecf0173f0f375500abbdc->leave($__internal_22f039ca122dc5d3dc831dce772b1357c19b04930b7ecf0173f0f375500abbdc_prof);

        
        $__internal_06c55ac46895ec62eb8ff782811b29e02f543932d97654337781b1947d15c2b4->leave($__internal_06c55ac46895ec62eb8ff782811b29e02f543932d97654337781b1947d15c2b4_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_dd0d4b37a42aeec20a2162436aa002303acff95867ee55b76703e4d5812aa5d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd0d4b37a42aeec20a2162436aa002303acff95867ee55b76703e4d5812aa5d2->enter($__internal_dd0d4b37a42aeec20a2162436aa002303acff95867ee55b76703e4d5812aa5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_be29ea4c06139501f4b390381a1e3531216fc4ded0eb5bb286cfecc1f59e3817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be29ea4c06139501f4b390381a1e3531216fc4ded0eb5bb286cfecc1f59e3817->enter($__internal_be29ea4c06139501f4b390381a1e3531216fc4ded0eb5bb286cfecc1f59e3817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_be29ea4c06139501f4b390381a1e3531216fc4ded0eb5bb286cfecc1f59e3817->leave($__internal_be29ea4c06139501f4b390381a1e3531216fc4ded0eb5bb286cfecc1f59e3817_prof);

        
        $__internal_dd0d4b37a42aeec20a2162436aa002303acff95867ee55b76703e4d5812aa5d2->leave($__internal_dd0d4b37a42aeec20a2162436aa002303acff95867ee55b76703e4d5812aa5d2_prof);

    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5172dce7a5aa08bc07383b6432f5edd42ccf9627ce421459819e4fb628fefe6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5172dce7a5aa08bc07383b6432f5edd42ccf9627ce421459819e4fb628fefe6e->enter($__internal_5172dce7a5aa08bc07383b6432f5edd42ccf9627ce421459819e4fb628fefe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_dd9f0bc1ee94aa3fc5cd53c4ecd3ee79bebfdb85e4665ec76f17479f756a53aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9f0bc1ee94aa3fc5cd53c4ecd3ee79bebfdb85e4665ec76f17479f756a53aa->enter($__internal_dd9f0bc1ee94aa3fc5cd53c4ecd3ee79bebfdb85e4665ec76f17479f756a53aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 31
        echo "    ";
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 35
        if (array_key_exists("tooltip", $context)) {
            // line 36
            echo "        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "html", null, true);
            echo "\">error
        </span>
    ";
        }
        
        $__internal_dd9f0bc1ee94aa3fc5cd53c4ecd3ee79bebfdb85e4665ec76f17479f756a53aa->leave($__internal_dd9f0bc1ee94aa3fc5cd53c4ecd3ee79bebfdb85e4665ec76f17479f756a53aa_prof);

        
        $__internal_5172dce7a5aa08bc07383b6432f5edd42ccf9627ce421459819e4fb628fefe6e->leave($__internal_5172dce7a5aa08bc07383b6432f5edd42ccf9627ce421459819e4fb628fefe6e_prof);

    }

    // line 42
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c777bd617bd47909d8600dc277c70403c697aa190ec0d6e984ed2f1c4fdde829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c777bd617bd47909d8600dc277c70403c697aa190ec0d6e984ed2f1c4fdde829->enter($__internal_c777bd617bd47909d8600dc277c70403c697aa190ec0d6e984ed2f1c4fdde829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_75c4d9610c2d4224e4cd741c3ce6ba3543fe0bdb4c4e8a14366a69ee3fe73c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c4d9610c2d4224e4cd741c3ce6ba3543fe0bdb4c4e8a14366a69ee3fe73c38->enter($__internal_75c4d9610c2d4224e4cd741c3ce6ba3543fe0bdb4c4e8a14366a69ee3fe73c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 43
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
        // line 44
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_75c4d9610c2d4224e4cd741c3ce6ba3543fe0bdb4c4e8a14366a69ee3fe73c38->leave($__internal_75c4d9610c2d4224e4cd741c3ce6ba3543fe0bdb4c4e8a14366a69ee3fe73c38_prof);

        
        $__internal_c777bd617bd47909d8600dc277c70403c697aa190ec0d6e984ed2f1c4fdde829->leave($__internal_c777bd617bd47909d8600dc277c70403c697aa190ec0d6e984ed2f1c4fdde829_prof);

    }

    // line 48
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_25e4cd5ae1e4e98cdfd6fa9c431325a7a1648eab7e2f4e6f502b608adae26536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e4cd5ae1e4e98cdfd6fa9c431325a7a1648eab7e2f4e6f502b608adae26536->enter($__internal_25e4cd5ae1e4e98cdfd6fa9c431325a7a1648eab7e2f4e6f502b608adae26536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f0dddfb2003b015bef9b9ae5e74f466e416945f5d4f9cd017fea731d178564af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dddfb2003b015bef9b9ae5e74f466e416945f5d4f9cd017fea731d178564af->enter($__internal_f0dddfb2003b015bef9b9ae5e74f466e416945f5d4f9cd017fea731d178564af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 49
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 50
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f0dddfb2003b015bef9b9ae5e74f466e416945f5d4f9cd017fea731d178564af->leave($__internal_f0dddfb2003b015bef9b9ae5e74f466e416945f5d4f9cd017fea731d178564af_prof);

        
        $__internal_25e4cd5ae1e4e98cdfd6fa9c431325a7a1648eab7e2f4e6f502b608adae26536->leave($__internal_25e4cd5ae1e4e98cdfd6fa9c431325a7a1648eab7e2f4e6f502b608adae26536_prof);

    }

    // line 54
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2d2c21d499d89cf14337e5919df1c7263f3802d4298a44026ac2a234eb9d784a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2c21d499d89cf14337e5919df1c7263f3802d4298a44026ac2a234eb9d784a->enter($__internal_2d2c21d499d89cf14337e5919df1c7263f3802d4298a44026ac2a234eb9d784a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_be21998289dc8090c17db1a7a94d1fcf637a2dc62a3e6318f1fb60623adf3069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be21998289dc8090c17db1a7a94d1fcf637a2dc62a3e6318f1fb60623adf3069->enter($__internal_be21998289dc8090c17db1a7a94d1fcf637a2dc62a3e6318f1fb60623adf3069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 55
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 56
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_be21998289dc8090c17db1a7a94d1fcf637a2dc62a3e6318f1fb60623adf3069->leave($__internal_be21998289dc8090c17db1a7a94d1fcf637a2dc62a3e6318f1fb60623adf3069_prof);

        
        $__internal_2d2c21d499d89cf14337e5919df1c7263f3802d4298a44026ac2a234eb9d784a->leave($__internal_2d2c21d499d89cf14337e5919df1c7263f3802d4298a44026ac2a234eb9d784a_prof);

    }

    // line 60
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_08aa24e7c5b47dd492d782ed05f4d1225e2b7ed07763bd0d93e862ae54c16d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08aa24e7c5b47dd492d782ed05f4d1225e2b7ed07763bd0d93e862ae54c16d28->enter($__internal_08aa24e7c5b47dd492d782ed05f4d1225e2b7ed07763bd0d93e862ae54c16d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a9fcb5aaa058d9a793a811420584053184fdbe06bb2f5dc7b2fcff9819f5aee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fcb5aaa058d9a793a811420584053184fdbe06bb2f5dc7b2fcff9819f5aee0->enter($__internal_a9fcb5aaa058d9a793a811420584053184fdbe06bb2f5dc7b2fcff9819f5aee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 61
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
        
        $__internal_a9fcb5aaa058d9a793a811420584053184fdbe06bb2f5dc7b2fcff9819f5aee0->leave($__internal_a9fcb5aaa058d9a793a811420584053184fdbe06bb2f5dc7b2fcff9819f5aee0_prof);

        
        $__internal_08aa24e7c5b47dd492d782ed05f4d1225e2b7ed07763bd0d93e862ae54c16d28->leave($__internal_08aa24e7c5b47dd492d782ed05f4d1225e2b7ed07763bd0d93e862ae54c16d28_prof);

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
{%- endblock form_errors -%}
", "materializeLayout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/materializeLayout.html.twig");
    }
}
