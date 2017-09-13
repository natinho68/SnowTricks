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
        $__internal_9094d6477cf7923d94104745498eb601a334724aa71c22edcf784974c575f569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9094d6477cf7923d94104745498eb601a334724aa71c22edcf784974c575f569->enter($__internal_9094d6477cf7923d94104745498eb601a334724aa71c22edcf784974c575f569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_4f34ed7e01066cdb99f2b293edba47cb47f5cba547698161a166d806d73e8640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f34ed7e01066cdb99f2b293edba47cb47f5cba547698161a166d806d73e8640->enter($__internal_4f34ed7e01066cdb99f2b293edba47cb47f5cba547698161a166d806d73e8640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9094d6477cf7923d94104745498eb601a334724aa71c22edcf784974c575f569->leave($__internal_9094d6477cf7923d94104745498eb601a334724aa71c22edcf784974c575f569_prof);

        
        $__internal_4f34ed7e01066cdb99f2b293edba47cb47f5cba547698161a166d806d73e8640->leave($__internal_4f34ed7e01066cdb99f2b293edba47cb47f5cba547698161a166d806d73e8640_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_702ef04d1fe628810fb4ef482d7f456a18ecc6debe836ebdae2b2c6586010593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702ef04d1fe628810fb4ef482d7f456a18ecc6debe836ebdae2b2c6586010593->enter($__internal_702ef04d1fe628810fb4ef482d7f456a18ecc6debe836ebdae2b2c6586010593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_538e73f6acd31635f44612a46f401f437c3173e73d6d53edf419c27e79a84f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538e73f6acd31635f44612a46f401f437c3173e73d6d53edf419c27e79a84f95->enter($__internal_538e73f6acd31635f44612a46f401f437c3173e73d6d53edf419c27e79a84f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "::materializeLayout.html.twig", 4)->display($context);
        
        $__internal_538e73f6acd31635f44612a46f401f437c3173e73d6d53edf419c27e79a84f95->leave($__internal_538e73f6acd31635f44612a46f401f437c3173e73d6d53edf419c27e79a84f95_prof);

        
        $__internal_702ef04d1fe628810fb4ef482d7f456a18ecc6debe836ebdae2b2c6586010593->leave($__internal_702ef04d1fe628810fb4ef482d7f456a18ecc6debe836ebdae2b2c6586010593_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b6cb3398ed0dada15bb8121fb2b2377dd7c7038e4dd98624da1dcac7138f7bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6cb3398ed0dada15bb8121fb2b2377dd7c7038e4dd98624da1dcac7138f7bf7->enter($__internal_b6cb3398ed0dada15bb8121fb2b2377dd7c7038e4dd98624da1dcac7138f7bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ed075407690792535af6314ef9639f0a6cf1c444364299f13a703b36c8bbd2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed075407690792535af6314ef9639f0a6cf1c444364299f13a703b36c8bbd2e6->enter($__internal_ed075407690792535af6314ef9639f0a6cf1c444364299f13a703b36c8bbd2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_ed075407690792535af6314ef9639f0a6cf1c444364299f13a703b36c8bbd2e6->leave($__internal_ed075407690792535af6314ef9639f0a6cf1c444364299f13a703b36c8bbd2e6_prof);

        
        $__internal_b6cb3398ed0dada15bb8121fb2b2377dd7c7038e4dd98624da1dcac7138f7bf7->leave($__internal_b6cb3398ed0dada15bb8121fb2b2377dd7c7038e4dd98624da1dcac7138f7bf7_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_adb05f66f52cb81501a343d0bafb636f0dec0fc26418005c26493a9866c2f261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb05f66f52cb81501a343d0bafb636f0dec0fc26418005c26493a9866c2f261->enter($__internal_adb05f66f52cb81501a343d0bafb636f0dec0fc26418005c26493a9866c2f261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_98709e7c3f7b4504a4a61e955bd5fc6d3536a515c33c6f4287baf4cc18b6f1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98709e7c3f7b4504a4a61e955bd5fc6d3536a515c33c6f4287baf4cc18b6f1d6->enter($__internal_98709e7c3f7b4504a4a61e955bd5fc6d3536a515c33c6f4287baf4cc18b6f1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_98709e7c3f7b4504a4a61e955bd5fc6d3536a515c33c6f4287baf4cc18b6f1d6->leave($__internal_98709e7c3f7b4504a4a61e955bd5fc6d3536a515c33c6f4287baf4cc18b6f1d6_prof);

        
        $__internal_adb05f66f52cb81501a343d0bafb636f0dec0fc26418005c26493a9866c2f261->leave($__internal_adb05f66f52cb81501a343d0bafb636f0dec0fc26418005c26493a9866c2f261_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0b03ffd5ed0f6136ec91c84f9efd70d093ec50754658ba01e724333e4e4e6860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b03ffd5ed0f6136ec91c84f9efd70d093ec50754658ba01e724333e4e4e6860->enter($__internal_0b03ffd5ed0f6136ec91c84f9efd70d093ec50754658ba01e724333e4e4e6860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c49192c5888f5ec3b697eb98ecb6b88a59e23b9ae336b503214015ae1f10d7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49192c5888f5ec3b697eb98ecb6b88a59e23b9ae336b503214015ae1f10d7e7->enter($__internal_c49192c5888f5ec3b697eb98ecb6b88a59e23b9ae336b503214015ae1f10d7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c49192c5888f5ec3b697eb98ecb6b88a59e23b9ae336b503214015ae1f10d7e7->leave($__internal_c49192c5888f5ec3b697eb98ecb6b88a59e23b9ae336b503214015ae1f10d7e7_prof);

        
        $__internal_0b03ffd5ed0f6136ec91c84f9efd70d093ec50754658ba01e724333e4e4e6860->leave($__internal_0b03ffd5ed0f6136ec91c84f9efd70d093ec50754658ba01e724333e4e4e6860_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f6ad1a7d5287d81169315c16680b8306a122111fa9b9eb0357a9adfb4f710556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ad1a7d5287d81169315c16680b8306a122111fa9b9eb0357a9adfb4f710556->enter($__internal_f6ad1a7d5287d81169315c16680b8306a122111fa9b9eb0357a9adfb4f710556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f8fc4ff1d39e23a4b5343a627207dbf68de7b170d7757b26e47416b03d73c8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fc4ff1d39e23a4b5343a627207dbf68de7b170d7757b26e47416b03d73c8b5->enter($__internal_f8fc4ff1d39e23a4b5343a627207dbf68de7b170d7757b26e47416b03d73c8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f8fc4ff1d39e23a4b5343a627207dbf68de7b170d7757b26e47416b03d73c8b5->leave($__internal_f8fc4ff1d39e23a4b5343a627207dbf68de7b170d7757b26e47416b03d73c8b5_prof);

        
        $__internal_f6ad1a7d5287d81169315c16680b8306a122111fa9b9eb0357a9adfb4f710556->leave($__internal_f6ad1a7d5287d81169315c16680b8306a122111fa9b9eb0357a9adfb4f710556_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b38c802adea5eb197bf2a95aeaee38de431b47cc8277312f60e8e5e3d8802b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38c802adea5eb197bf2a95aeaee38de431b47cc8277312f60e8e5e3d8802b8d->enter($__internal_b38c802adea5eb197bf2a95aeaee38de431b47cc8277312f60e8e5e3d8802b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_86f52f97de64f4848ea752b529ec1e4f08cc0bab5090356cea7909d37ac5fdf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f52f97de64f4848ea752b529ec1e4f08cc0bab5090356cea7909d37ac5fdf6->enter($__internal_86f52f97de64f4848ea752b529ec1e4f08cc0bab5090356cea7909d37ac5fdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "::materializeLayout.html.twig", 39)->display($context);
        
        $__internal_86f52f97de64f4848ea752b529ec1e4f08cc0bab5090356cea7909d37ac5fdf6->leave($__internal_86f52f97de64f4848ea752b529ec1e4f08cc0bab5090356cea7909d37ac5fdf6_prof);

        
        $__internal_b38c802adea5eb197bf2a95aeaee38de431b47cc8277312f60e8e5e3d8802b8d->leave($__internal_b38c802adea5eb197bf2a95aeaee38de431b47cc8277312f60e8e5e3d8802b8d_prof);

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
