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
        $__internal_83daa1e046a74734513609876f04f966f1bf54c5d5c822d5dfa87310a8d47d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83daa1e046a74734513609876f04f966f1bf54c5d5c822d5dfa87310a8d47d45->enter($__internal_83daa1e046a74734513609876f04f966f1bf54c5d5c822d5dfa87310a8d47d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_06b0d62dab37ff6901cc5ff27afd2e5675f5b4151b57bd7054e13c850f1aeb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b0d62dab37ff6901cc5ff27afd2e5675f5b4151b57bd7054e13c850f1aeb15->enter($__internal_06b0d62dab37ff6901cc5ff27afd2e5675f5b4151b57bd7054e13c850f1aeb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83daa1e046a74734513609876f04f966f1bf54c5d5c822d5dfa87310a8d47d45->leave($__internal_83daa1e046a74734513609876f04f966f1bf54c5d5c822d5dfa87310a8d47d45_prof);

        
        $__internal_06b0d62dab37ff6901cc5ff27afd2e5675f5b4151b57bd7054e13c850f1aeb15->leave($__internal_06b0d62dab37ff6901cc5ff27afd2e5675f5b4151b57bd7054e13c850f1aeb15_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2328a97428ddbafa85edf2746a9094bc7cb5fe0cea2054b5953ac132c777b2a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2328a97428ddbafa85edf2746a9094bc7cb5fe0cea2054b5953ac132c777b2a1->enter($__internal_2328a97428ddbafa85edf2746a9094bc7cb5fe0cea2054b5953ac132c777b2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6b0e3249c0e45fbb5d8be650fca176dd602cfb0e781bc9ffed717783b9f85fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0e3249c0e45fbb5d8be650fca176dd602cfb0e781bc9ffed717783b9f85fe3->enter($__internal_6b0e3249c0e45fbb5d8be650fca176dd602cfb0e781bc9ffed717783b9f85fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "::materializeLayout.html.twig", 4)->display($context);
        
        $__internal_6b0e3249c0e45fbb5d8be650fca176dd602cfb0e781bc9ffed717783b9f85fe3->leave($__internal_6b0e3249c0e45fbb5d8be650fca176dd602cfb0e781bc9ffed717783b9f85fe3_prof);

        
        $__internal_2328a97428ddbafa85edf2746a9094bc7cb5fe0cea2054b5953ac132c777b2a1->leave($__internal_2328a97428ddbafa85edf2746a9094bc7cb5fe0cea2054b5953ac132c777b2a1_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d5c8e94657fcf72747d426cbfbe053b6bef6c0549b2e53bd765559c212f176c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c8e94657fcf72747d426cbfbe053b6bef6c0549b2e53bd765559c212f176c9->enter($__internal_d5c8e94657fcf72747d426cbfbe053b6bef6c0549b2e53bd765559c212f176c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_864f4bf652b11a69fef501160d237707179a140c2f1c889c0ea31c550ebdee00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864f4bf652b11a69fef501160d237707179a140c2f1c889c0ea31c550ebdee00->enter($__internal_864f4bf652b11a69fef501160d237707179a140c2f1c889c0ea31c550ebdee00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_864f4bf652b11a69fef501160d237707179a140c2f1c889c0ea31c550ebdee00->leave($__internal_864f4bf652b11a69fef501160d237707179a140c2f1c889c0ea31c550ebdee00_prof);

        
        $__internal_d5c8e94657fcf72747d426cbfbe053b6bef6c0549b2e53bd765559c212f176c9->leave($__internal_d5c8e94657fcf72747d426cbfbe053b6bef6c0549b2e53bd765559c212f176c9_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_312b610b225b246c58cb3fd08df7c08213995da77a3754792ca682d3cce63d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312b610b225b246c58cb3fd08df7c08213995da77a3754792ca682d3cce63d23->enter($__internal_312b610b225b246c58cb3fd08df7c08213995da77a3754792ca682d3cce63d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_632ef1d84a05940d7ee97c6469bb2dc08a9b1bafcd53955cb55d6e08dedd0409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632ef1d84a05940d7ee97c6469bb2dc08a9b1bafcd53955cb55d6e08dedd0409->enter($__internal_632ef1d84a05940d7ee97c6469bb2dc08a9b1bafcd53955cb55d6e08dedd0409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_632ef1d84a05940d7ee97c6469bb2dc08a9b1bafcd53955cb55d6e08dedd0409->leave($__internal_632ef1d84a05940d7ee97c6469bb2dc08a9b1bafcd53955cb55d6e08dedd0409_prof);

        
        $__internal_312b610b225b246c58cb3fd08df7c08213995da77a3754792ca682d3cce63d23->leave($__internal_312b610b225b246c58cb3fd08df7c08213995da77a3754792ca682d3cce63d23_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_08e19ecbdb15d8977d33d6d0be5e2491e9cb9e826dae7affd4f6756b9e055596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e19ecbdb15d8977d33d6d0be5e2491e9cb9e826dae7affd4f6756b9e055596->enter($__internal_08e19ecbdb15d8977d33d6d0be5e2491e9cb9e826dae7affd4f6756b9e055596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b237cc9b18be480caedac08f7a60ecd012e54c755bd35ef3c3ddf55496c0c1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b237cc9b18be480caedac08f7a60ecd012e54c755bd35ef3c3ddf55496c0c1d6->enter($__internal_b237cc9b18be480caedac08f7a60ecd012e54c755bd35ef3c3ddf55496c0c1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b237cc9b18be480caedac08f7a60ecd012e54c755bd35ef3c3ddf55496c0c1d6->leave($__internal_b237cc9b18be480caedac08f7a60ecd012e54c755bd35ef3c3ddf55496c0c1d6_prof);

        
        $__internal_08e19ecbdb15d8977d33d6d0be5e2491e9cb9e826dae7affd4f6756b9e055596->leave($__internal_08e19ecbdb15d8977d33d6d0be5e2491e9cb9e826dae7affd4f6756b9e055596_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_e26ee387ee383d853a09f60f15ca72ec41d026873caa14ab15018b2f35999084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26ee387ee383d853a09f60f15ca72ec41d026873caa14ab15018b2f35999084->enter($__internal_e26ee387ee383d853a09f60f15ca72ec41d026873caa14ab15018b2f35999084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_2c8048edf98f55694d0dd3c0098ea283441cdcdfde0ccc05c92506cb8d1d2432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8048edf98f55694d0dd3c0098ea283441cdcdfde0ccc05c92506cb8d1d2432->enter($__internal_2c8048edf98f55694d0dd3c0098ea283441cdcdfde0ccc05c92506cb8d1d2432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_2c8048edf98f55694d0dd3c0098ea283441cdcdfde0ccc05c92506cb8d1d2432->leave($__internal_2c8048edf98f55694d0dd3c0098ea283441cdcdfde0ccc05c92506cb8d1d2432_prof);

        
        $__internal_e26ee387ee383d853a09f60f15ca72ec41d026873caa14ab15018b2f35999084->leave($__internal_e26ee387ee383d853a09f60f15ca72ec41d026873caa14ab15018b2f35999084_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_232efaec336f3131148d0975b70969b13c8547fdfd2d796b3bbf897f2c0f9404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232efaec336f3131148d0975b70969b13c8547fdfd2d796b3bbf897f2c0f9404->enter($__internal_232efaec336f3131148d0975b70969b13c8547fdfd2d796b3bbf897f2c0f9404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e9ba9b93fedcba8e1e8d91fa24298d38378beda5adfb26be84a88b655c1a5962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ba9b93fedcba8e1e8d91fa24298d38378beda5adfb26be84a88b655c1a5962->enter($__internal_e9ba9b93fedcba8e1e8d91fa24298d38378beda5adfb26be84a88b655c1a5962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "::materializeLayout.html.twig", 39)->display($context);
        
        $__internal_e9ba9b93fedcba8e1e8d91fa24298d38378beda5adfb26be84a88b655c1a5962->leave($__internal_e9ba9b93fedcba8e1e8d91fa24298d38378beda5adfb26be84a88b655c1a5962_prof);

        
        $__internal_232efaec336f3131148d0975b70969b13c8547fdfd2d796b3bbf897f2c0f9404->leave($__internal_232efaec336f3131148d0975b70969b13c8547fdfd2d796b3bbf897f2c0f9404_prof);

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
