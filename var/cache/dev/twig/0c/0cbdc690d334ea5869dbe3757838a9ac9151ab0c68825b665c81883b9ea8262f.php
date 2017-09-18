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
        $__internal_cceb08500e3d4f37a3eab33ed876bfd5697dd5ecde18838b42821968fecbdef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cceb08500e3d4f37a3eab33ed876bfd5697dd5ecde18838b42821968fecbdef9->enter($__internal_cceb08500e3d4f37a3eab33ed876bfd5697dd5ecde18838b42821968fecbdef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_016c2de0ade708c2e410f433860cfd2c2e1b8e9f53ba95fababf763aa634fae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016c2de0ade708c2e410f433860cfd2c2e1b8e9f53ba95fababf763aa634fae0->enter($__internal_016c2de0ade708c2e410f433860cfd2c2e1b8e9f53ba95fababf763aa634fae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cceb08500e3d4f37a3eab33ed876bfd5697dd5ecde18838b42821968fecbdef9->leave($__internal_cceb08500e3d4f37a3eab33ed876bfd5697dd5ecde18838b42821968fecbdef9_prof);

        
        $__internal_016c2de0ade708c2e410f433860cfd2c2e1b8e9f53ba95fababf763aa634fae0->leave($__internal_016c2de0ade708c2e410f433860cfd2c2e1b8e9f53ba95fababf763aa634fae0_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5f5f1adda6156a67a5d953180a552c7cb4670ae3e52f2b302585a04ab11c947f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5f1adda6156a67a5d953180a552c7cb4670ae3e52f2b302585a04ab11c947f->enter($__internal_5f5f1adda6156a67a5d953180a552c7cb4670ae3e52f2b302585a04ab11c947f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_115760b727cd3910afa46a096aa42a2d7152af703161f5828ab593b317e65c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115760b727cd3910afa46a096aa42a2d7152af703161f5828ab593b317e65c59->enter($__internal_115760b727cd3910afa46a096aa42a2d7152af703161f5828ab593b317e65c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "::materializeLayout.html.twig", 4)->display($context);
        
        $__internal_115760b727cd3910afa46a096aa42a2d7152af703161f5828ab593b317e65c59->leave($__internal_115760b727cd3910afa46a096aa42a2d7152af703161f5828ab593b317e65c59_prof);

        
        $__internal_5f5f1adda6156a67a5d953180a552c7cb4670ae3e52f2b302585a04ab11c947f->leave($__internal_5f5f1adda6156a67a5d953180a552c7cb4670ae3e52f2b302585a04ab11c947f_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d9cb022b595e5a35222d25c41c806140b03a2b13b5817db3593b681d37d41d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9cb022b595e5a35222d25c41c806140b03a2b13b5817db3593b681d37d41d48->enter($__internal_d9cb022b595e5a35222d25c41c806140b03a2b13b5817db3593b681d37d41d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ae74299ccb9b4c483160823d45fe51b6855d0973c326d13e4a92a4f067fd5705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae74299ccb9b4c483160823d45fe51b6855d0973c326d13e4a92a4f067fd5705->enter($__internal_ae74299ccb9b4c483160823d45fe51b6855d0973c326d13e4a92a4f067fd5705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_ae74299ccb9b4c483160823d45fe51b6855d0973c326d13e4a92a4f067fd5705->leave($__internal_ae74299ccb9b4c483160823d45fe51b6855d0973c326d13e4a92a4f067fd5705_prof);

        
        $__internal_d9cb022b595e5a35222d25c41c806140b03a2b13b5817db3593b681d37d41d48->leave($__internal_d9cb022b595e5a35222d25c41c806140b03a2b13b5817db3593b681d37d41d48_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_15736cc3f7e528fe61e3511926fce6733e558a242efb718906842bf3317a92aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15736cc3f7e528fe61e3511926fce6733e558a242efb718906842bf3317a92aa->enter($__internal_15736cc3f7e528fe61e3511926fce6733e558a242efb718906842bf3317a92aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_29762219a8109194a8cd568ed688248d4049b520160e6f79aa310bd2c4c8abaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29762219a8109194a8cd568ed688248d4049b520160e6f79aa310bd2c4c8abaf->enter($__internal_29762219a8109194a8cd568ed688248d4049b520160e6f79aa310bd2c4c8abaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_29762219a8109194a8cd568ed688248d4049b520160e6f79aa310bd2c4c8abaf->leave($__internal_29762219a8109194a8cd568ed688248d4049b520160e6f79aa310bd2c4c8abaf_prof);

        
        $__internal_15736cc3f7e528fe61e3511926fce6733e558a242efb718906842bf3317a92aa->leave($__internal_15736cc3f7e528fe61e3511926fce6733e558a242efb718906842bf3317a92aa_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5b6efdf8135d12cb4b051b4c0b198f8b552efb7b4bc9c4d144f19e82b0b6f186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6efdf8135d12cb4b051b4c0b198f8b552efb7b4bc9c4d144f19e82b0b6f186->enter($__internal_5b6efdf8135d12cb4b051b4c0b198f8b552efb7b4bc9c4d144f19e82b0b6f186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ecd495284bad9f19436114cf068b32e20073da49a9025e9932d30ac2dc6a5fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd495284bad9f19436114cf068b32e20073da49a9025e9932d30ac2dc6a5fdd->enter($__internal_ecd495284bad9f19436114cf068b32e20073da49a9025e9932d30ac2dc6a5fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ecd495284bad9f19436114cf068b32e20073da49a9025e9932d30ac2dc6a5fdd->leave($__internal_ecd495284bad9f19436114cf068b32e20073da49a9025e9932d30ac2dc6a5fdd_prof);

        
        $__internal_5b6efdf8135d12cb4b051b4c0b198f8b552efb7b4bc9c4d144f19e82b0b6f186->leave($__internal_5b6efdf8135d12cb4b051b4c0b198f8b552efb7b4bc9c4d144f19e82b0b6f186_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c8f8f8902c9f1d49e0ebdafbcdef89f2d0377bf3b587de08bff996e62cf68bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f8f8902c9f1d49e0ebdafbcdef89f2d0377bf3b587de08bff996e62cf68bcf->enter($__internal_c8f8f8902c9f1d49e0ebdafbcdef89f2d0377bf3b587de08bff996e62cf68bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_8a7b27b8f713231fbe8cd17000a3e45dac636fa5836ab758ce40606c2f79b395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7b27b8f713231fbe8cd17000a3e45dac636fa5836ab758ce40606c2f79b395->enter($__internal_8a7b27b8f713231fbe8cd17000a3e45dac636fa5836ab758ce40606c2f79b395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_8a7b27b8f713231fbe8cd17000a3e45dac636fa5836ab758ce40606c2f79b395->leave($__internal_8a7b27b8f713231fbe8cd17000a3e45dac636fa5836ab758ce40606c2f79b395_prof);

        
        $__internal_c8f8f8902c9f1d49e0ebdafbcdef89f2d0377bf3b587de08bff996e62cf68bcf->leave($__internal_c8f8f8902c9f1d49e0ebdafbcdef89f2d0377bf3b587de08bff996e62cf68bcf_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a17c8271a3a349622808525040610e975a98b26afc32ad4eb1428999204ca75a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17c8271a3a349622808525040610e975a98b26afc32ad4eb1428999204ca75a->enter($__internal_a17c8271a3a349622808525040610e975a98b26afc32ad4eb1428999204ca75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ce5430e5b13797c1480beef668d7e9f70b57002264d82c57460801d558cdf0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5430e5b13797c1480beef668d7e9f70b57002264d82c57460801d558cdf0cb->enter($__internal_ce5430e5b13797c1480beef668d7e9f70b57002264d82c57460801d558cdf0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "::materializeLayout.html.twig", 39)->display($context);
        
        $__internal_ce5430e5b13797c1480beef668d7e9f70b57002264d82c57460801d558cdf0cb->leave($__internal_ce5430e5b13797c1480beef668d7e9f70b57002264d82c57460801d558cdf0cb_prof);

        
        $__internal_a17c8271a3a349622808525040610e975a98b26afc32ad4eb1428999204ca75a->leave($__internal_a17c8271a3a349622808525040610e975a98b26afc32ad4eb1428999204ca75a_prof);

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
