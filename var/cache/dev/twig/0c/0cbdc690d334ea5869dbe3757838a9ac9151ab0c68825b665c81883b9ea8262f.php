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
        $__internal_6d7c13c2ba2fd4b816798de07131cb49bc1747a44e9c0adc55277aa618bc8ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7c13c2ba2fd4b816798de07131cb49bc1747a44e9c0adc55277aa618bc8ddc->enter($__internal_6d7c13c2ba2fd4b816798de07131cb49bc1747a44e9c0adc55277aa618bc8ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_ce987afa368e3273526ab824190e18e6a8f15506c571efb27f9095b368f5395e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce987afa368e3273526ab824190e18e6a8f15506c571efb27f9095b368f5395e->enter($__internal_ce987afa368e3273526ab824190e18e6a8f15506c571efb27f9095b368f5395e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d7c13c2ba2fd4b816798de07131cb49bc1747a44e9c0adc55277aa618bc8ddc->leave($__internal_6d7c13c2ba2fd4b816798de07131cb49bc1747a44e9c0adc55277aa618bc8ddc_prof);

        
        $__internal_ce987afa368e3273526ab824190e18e6a8f15506c571efb27f9095b368f5395e->leave($__internal_ce987afa368e3273526ab824190e18e6a8f15506c571efb27f9095b368f5395e_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aae2392e8c3bc8d559a4aacd321f56a8ac98e6c07a72b584774030261311fd31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae2392e8c3bc8d559a4aacd321f56a8ac98e6c07a72b584774030261311fd31->enter($__internal_aae2392e8c3bc8d559a4aacd321f56a8ac98e6c07a72b584774030261311fd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bc975eb3b920e23daf610ca7b75dd42abcaf979537e9de81093f7c34bce899b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc975eb3b920e23daf610ca7b75dd42abcaf979537e9de81093f7c34bce899b1->enter($__internal_bc975eb3b920e23daf610ca7b75dd42abcaf979537e9de81093f7c34bce899b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "::materializeLayout.html.twig", 4)->display($context);
        
        $__internal_bc975eb3b920e23daf610ca7b75dd42abcaf979537e9de81093f7c34bce899b1->leave($__internal_bc975eb3b920e23daf610ca7b75dd42abcaf979537e9de81093f7c34bce899b1_prof);

        
        $__internal_aae2392e8c3bc8d559a4aacd321f56a8ac98e6c07a72b584774030261311fd31->leave($__internal_aae2392e8c3bc8d559a4aacd321f56a8ac98e6c07a72b584774030261311fd31_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b0de74b66efc32e103b03e0ebe2ef5ea21d0d2df8a9515cf140a53d06690aa05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0de74b66efc32e103b03e0ebe2ef5ea21d0d2df8a9515cf140a53d06690aa05->enter($__internal_b0de74b66efc32e103b03e0ebe2ef5ea21d0d2df8a9515cf140a53d06690aa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d6c356d5828da668fa9ffca717bcbd63d3df55b93d8717c10f6a9b534e96d23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c356d5828da668fa9ffca717bcbd63d3df55b93d8717c10f6a9b534e96d23f->enter($__internal_d6c356d5828da668fa9ffca717bcbd63d3df55b93d8717c10f6a9b534e96d23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_d6c356d5828da668fa9ffca717bcbd63d3df55b93d8717c10f6a9b534e96d23f->leave($__internal_d6c356d5828da668fa9ffca717bcbd63d3df55b93d8717c10f6a9b534e96d23f_prof);

        
        $__internal_b0de74b66efc32e103b03e0ebe2ef5ea21d0d2df8a9515cf140a53d06690aa05->leave($__internal_b0de74b66efc32e103b03e0ebe2ef5ea21d0d2df8a9515cf140a53d06690aa05_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d7bbd4dceb235f908390759b62339122feafcc45b556ed4c839f689e0312fc1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bbd4dceb235f908390759b62339122feafcc45b556ed4c839f689e0312fc1d->enter($__internal_d7bbd4dceb235f908390759b62339122feafcc45b556ed4c839f689e0312fc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_83e604a2a15b3a5a5360ce1318006f70ecd65352081100b4e7eb033f22a66702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e604a2a15b3a5a5360ce1318006f70ecd65352081100b4e7eb033f22a66702->enter($__internal_83e604a2a15b3a5a5360ce1318006f70ecd65352081100b4e7eb033f22a66702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_83e604a2a15b3a5a5360ce1318006f70ecd65352081100b4e7eb033f22a66702->leave($__internal_83e604a2a15b3a5a5360ce1318006f70ecd65352081100b4e7eb033f22a66702_prof);

        
        $__internal_d7bbd4dceb235f908390759b62339122feafcc45b556ed4c839f689e0312fc1d->leave($__internal_d7bbd4dceb235f908390759b62339122feafcc45b556ed4c839f689e0312fc1d_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5e3602b7e4bb8cf5b8b1e92fda91c873d08e523afbc86c8ff7169f7e646069df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3602b7e4bb8cf5b8b1e92fda91c873d08e523afbc86c8ff7169f7e646069df->enter($__internal_5e3602b7e4bb8cf5b8b1e92fda91c873d08e523afbc86c8ff7169f7e646069df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_318e569f8dc3f748a843cee4754490dca083524391430ab66b2c8e823d358a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318e569f8dc3f748a843cee4754490dca083524391430ab66b2c8e823d358a83->enter($__internal_318e569f8dc3f748a843cee4754490dca083524391430ab66b2c8e823d358a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_318e569f8dc3f748a843cee4754490dca083524391430ab66b2c8e823d358a83->leave($__internal_318e569f8dc3f748a843cee4754490dca083524391430ab66b2c8e823d358a83_prof);

        
        $__internal_5e3602b7e4bb8cf5b8b1e92fda91c873d08e523afbc86c8ff7169f7e646069df->leave($__internal_5e3602b7e4bb8cf5b8b1e92fda91c873d08e523afbc86c8ff7169f7e646069df_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d1848d24dfb5c2a7afd80c1a4d485ad52b6f0bba30c319cac9c16acec51e4efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1848d24dfb5c2a7afd80c1a4d485ad52b6f0bba30c319cac9c16acec51e4efa->enter($__internal_d1848d24dfb5c2a7afd80c1a4d485ad52b6f0bba30c319cac9c16acec51e4efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a306c7fa94fc17980c9891cd405a1432b433db2455ddbfe4b56699ad3d6e976c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a306c7fa94fc17980c9891cd405a1432b433db2455ddbfe4b56699ad3d6e976c->enter($__internal_a306c7fa94fc17980c9891cd405a1432b433db2455ddbfe4b56699ad3d6e976c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a306c7fa94fc17980c9891cd405a1432b433db2455ddbfe4b56699ad3d6e976c->leave($__internal_a306c7fa94fc17980c9891cd405a1432b433db2455ddbfe4b56699ad3d6e976c_prof);

        
        $__internal_d1848d24dfb5c2a7afd80c1a4d485ad52b6f0bba30c319cac9c16acec51e4efa->leave($__internal_d1848d24dfb5c2a7afd80c1a4d485ad52b6f0bba30c319cac9c16acec51e4efa_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b65c874fdb759770966d6b934c86233fd729bc99f6fdcea74a05869b94858f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65c874fdb759770966d6b934c86233fd729bc99f6fdcea74a05869b94858f8d->enter($__internal_b65c874fdb759770966d6b934c86233fd729bc99f6fdcea74a05869b94858f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_dfae46f4c05b03eee7b821cc307c84c2fa8ca61e654be864f6bed3a921af4a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfae46f4c05b03eee7b821cc307c84c2fa8ca61e654be864f6bed3a921af4a18->enter($__internal_dfae46f4c05b03eee7b821cc307c84c2fa8ca61e654be864f6bed3a921af4a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "::materializeLayout.html.twig", 39)->display($context);
        
        $__internal_dfae46f4c05b03eee7b821cc307c84c2fa8ca61e654be864f6bed3a921af4a18->leave($__internal_dfae46f4c05b03eee7b821cc307c84c2fa8ca61e654be864f6bed3a921af4a18_prof);

        
        $__internal_b65c874fdb759770966d6b934c86233fd729bc99f6fdcea74a05869b94858f8d->leave($__internal_b65c874fdb759770966d6b934c86233fd729bc99f6fdcea74a05869b94858f8d_prof);

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
