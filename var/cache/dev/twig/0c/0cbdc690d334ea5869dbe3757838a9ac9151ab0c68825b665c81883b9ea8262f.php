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
        $__internal_9f7e8a7808be625aca04ba518869a0395f2eeaa04312a99eea9be88babab38ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7e8a7808be625aca04ba518869a0395f2eeaa04312a99eea9be88babab38ca->enter($__internal_9f7e8a7808be625aca04ba518869a0395f2eeaa04312a99eea9be88babab38ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_dde5e198a868c91646d3c65bd59de3e356fc71b829fd3623913606af3996461a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde5e198a868c91646d3c65bd59de3e356fc71b829fd3623913606af3996461a->enter($__internal_dde5e198a868c91646d3c65bd59de3e356fc71b829fd3623913606af3996461a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7e8a7808be625aca04ba518869a0395f2eeaa04312a99eea9be88babab38ca->leave($__internal_9f7e8a7808be625aca04ba518869a0395f2eeaa04312a99eea9be88babab38ca_prof);

        
        $__internal_dde5e198a868c91646d3c65bd59de3e356fc71b829fd3623913606af3996461a->leave($__internal_dde5e198a868c91646d3c65bd59de3e356fc71b829fd3623913606af3996461a_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5085af30a654086c885a3367d31f60dafcea0ed41db132b1600990ba3f1cbe90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5085af30a654086c885a3367d31f60dafcea0ed41db132b1600990ba3f1cbe90->enter($__internal_5085af30a654086c885a3367d31f60dafcea0ed41db132b1600990ba3f1cbe90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9b566b8a11f6f9e84bac7b2b5b62e6e9aea1060b84b6a1b38ec397e36bccf8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b566b8a11f6f9e84bac7b2b5b62e6e9aea1060b84b6a1b38ec397e36bccf8bf->enter($__internal_9b566b8a11f6f9e84bac7b2b5b62e6e9aea1060b84b6a1b38ec397e36bccf8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "::materializeLayout.html.twig", 4)->display($context);
        
        $__internal_9b566b8a11f6f9e84bac7b2b5b62e6e9aea1060b84b6a1b38ec397e36bccf8bf->leave($__internal_9b566b8a11f6f9e84bac7b2b5b62e6e9aea1060b84b6a1b38ec397e36bccf8bf_prof);

        
        $__internal_5085af30a654086c885a3367d31f60dafcea0ed41db132b1600990ba3f1cbe90->leave($__internal_5085af30a654086c885a3367d31f60dafcea0ed41db132b1600990ba3f1cbe90_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_52ba9d02d11c408d833e7f937392687c1245c550e5817e58f6c3423c34b9c1b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ba9d02d11c408d833e7f937392687c1245c550e5817e58f6c3423c34b9c1b9->enter($__internal_52ba9d02d11c408d833e7f937392687c1245c550e5817e58f6c3423c34b9c1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_cc6a76088bbfe2b031b42900304479e9991065f4e63d71302b654aa7e5add73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6a76088bbfe2b031b42900304479e9991065f4e63d71302b654aa7e5add73f->enter($__internal_cc6a76088bbfe2b031b42900304479e9991065f4e63d71302b654aa7e5add73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_cc6a76088bbfe2b031b42900304479e9991065f4e63d71302b654aa7e5add73f->leave($__internal_cc6a76088bbfe2b031b42900304479e9991065f4e63d71302b654aa7e5add73f_prof);

        
        $__internal_52ba9d02d11c408d833e7f937392687c1245c550e5817e58f6c3423c34b9c1b9->leave($__internal_52ba9d02d11c408d833e7f937392687c1245c550e5817e58f6c3423c34b9c1b9_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4a7f5645d3012d1c06ddfb1c140fb9ebe730045a0377ada5933b7ef413c7fa72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7f5645d3012d1c06ddfb1c140fb9ebe730045a0377ada5933b7ef413c7fa72->enter($__internal_4a7f5645d3012d1c06ddfb1c140fb9ebe730045a0377ada5933b7ef413c7fa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1eb91e4ae038077227809ca422eba304ffbff58dd4da2dfc215d5c9bd404d518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb91e4ae038077227809ca422eba304ffbff58dd4da2dfc215d5c9bd404d518->enter($__internal_1eb91e4ae038077227809ca422eba304ffbff58dd4da2dfc215d5c9bd404d518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1eb91e4ae038077227809ca422eba304ffbff58dd4da2dfc215d5c9bd404d518->leave($__internal_1eb91e4ae038077227809ca422eba304ffbff58dd4da2dfc215d5c9bd404d518_prof);

        
        $__internal_4a7f5645d3012d1c06ddfb1c140fb9ebe730045a0377ada5933b7ef413c7fa72->leave($__internal_4a7f5645d3012d1c06ddfb1c140fb9ebe730045a0377ada5933b7ef413c7fa72_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_7e4c4dbdc9dcd4f126cf27f8e46e1381fefb058fd7168ab7dbaabd522f7fa790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4c4dbdc9dcd4f126cf27f8e46e1381fefb058fd7168ab7dbaabd522f7fa790->enter($__internal_7e4c4dbdc9dcd4f126cf27f8e46e1381fefb058fd7168ab7dbaabd522f7fa790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6fd7783dd71f4b983ddd7139dc21cc1b7c2c45d185eaa28d3a740eb80c513187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd7783dd71f4b983ddd7139dc21cc1b7c2c45d185eaa28d3a740eb80c513187->enter($__internal_6fd7783dd71f4b983ddd7139dc21cc1b7c2c45d185eaa28d3a740eb80c513187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_6fd7783dd71f4b983ddd7139dc21cc1b7c2c45d185eaa28d3a740eb80c513187->leave($__internal_6fd7783dd71f4b983ddd7139dc21cc1b7c2c45d185eaa28d3a740eb80c513187_prof);

        
        $__internal_7e4c4dbdc9dcd4f126cf27f8e46e1381fefb058fd7168ab7dbaabd522f7fa790->leave($__internal_7e4c4dbdc9dcd4f126cf27f8e46e1381fefb058fd7168ab7dbaabd522f7fa790_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_cd01da991cc221681bfdee5cdf9d9df91e5203adf79f1c393b9a3b5d49c91333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd01da991cc221681bfdee5cdf9d9df91e5203adf79f1c393b9a3b5d49c91333->enter($__internal_cd01da991cc221681bfdee5cdf9d9df91e5203adf79f1c393b9a3b5d49c91333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6bf1f8c50c976ee609402d46aea580960998bd517d2b6b96b497e04e54c3c86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf1f8c50c976ee609402d46aea580960998bd517d2b6b96b497e04e54c3c86f->enter($__internal_6bf1f8c50c976ee609402d46aea580960998bd517d2b6b96b497e04e54c3c86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_6bf1f8c50c976ee609402d46aea580960998bd517d2b6b96b497e04e54c3c86f->leave($__internal_6bf1f8c50c976ee609402d46aea580960998bd517d2b6b96b497e04e54c3c86f_prof);

        
        $__internal_cd01da991cc221681bfdee5cdf9d9df91e5203adf79f1c393b9a3b5d49c91333->leave($__internal_cd01da991cc221681bfdee5cdf9d9df91e5203adf79f1c393b9a3b5d49c91333_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_213231a2c71431cc1770603bd93756cfd1537df80686cf0f96d98e760f588fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213231a2c71431cc1770603bd93756cfd1537df80686cf0f96d98e760f588fe7->enter($__internal_213231a2c71431cc1770603bd93756cfd1537df80686cf0f96d98e760f588fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_57f763cf9ea5b1f17ca65ed6d41e4d6324343dfec2db0431e8473b12e80d5364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f763cf9ea5b1f17ca65ed6d41e4d6324343dfec2db0431e8473b12e80d5364->enter($__internal_57f763cf9ea5b1f17ca65ed6d41e4d6324343dfec2db0431e8473b12e80d5364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "::materializeLayout.html.twig", 39)->display($context);
        
        $__internal_57f763cf9ea5b1f17ca65ed6d41e4d6324343dfec2db0431e8473b12e80d5364->leave($__internal_57f763cf9ea5b1f17ca65ed6d41e4d6324343dfec2db0431e8473b12e80d5364_prof);

        
        $__internal_213231a2c71431cc1770603bd93756cfd1537df80686cf0f96d98e760f588fe7->leave($__internal_213231a2c71431cc1770603bd93756cfd1537df80686cf0f96d98e760f588fe7_prof);

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
