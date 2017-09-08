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
        $__internal_a950152f364d095f97cdbf1049ddb2675be7e832200d25f1695598f090fe056f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a950152f364d095f97cdbf1049ddb2675be7e832200d25f1695598f090fe056f->enter($__internal_a950152f364d095f97cdbf1049ddb2675be7e832200d25f1695598f090fe056f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materializeLayout.html.twig"));

        $__internal_fc303e01050a878bde4e099cacd5948d6010a6022da1a1da3bee6879b59abd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc303e01050a878bde4e099cacd5948d6010a6022da1a1da3bee6879b59abd18->enter($__internal_fc303e01050a878bde4e099cacd5948d6010a6022da1a1da3bee6879b59abd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a950152f364d095f97cdbf1049ddb2675be7e832200d25f1695598f090fe056f->leave($__internal_a950152f364d095f97cdbf1049ddb2675be7e832200d25f1695598f090fe056f_prof);

        
        $__internal_fc303e01050a878bde4e099cacd5948d6010a6022da1a1da3bee6879b59abd18->leave($__internal_fc303e01050a878bde4e099cacd5948d6010a6022da1a1da3bee6879b59abd18_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a51fb70ab1fe1d801a5571e2c2cee204a5378e879ad6b2301913d00c8ed40c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51fb70ab1fe1d801a5571e2c2cee204a5378e879ad6b2301913d00c8ed40c09->enter($__internal_a51fb70ab1fe1d801a5571e2c2cee204a5378e879ad6b2301913d00c8ed40c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3afe56f849cd986216ac2c2f329ccf15cfbf2332b7b9127db6e707c219d7b8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afe56f849cd986216ac2c2f329ccf15cfbf2332b7b9127db6e707c219d7b8b4->enter($__internal_3afe56f849cd986216ac2c2f329ccf15cfbf2332b7b9127db6e707c219d7b8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "materializeLayout.html.twig", 4)->display($context);
        
        $__internal_3afe56f849cd986216ac2c2f329ccf15cfbf2332b7b9127db6e707c219d7b8b4->leave($__internal_3afe56f849cd986216ac2c2f329ccf15cfbf2332b7b9127db6e707c219d7b8b4_prof);

        
        $__internal_a51fb70ab1fe1d801a5571e2c2cee204a5378e879ad6b2301913d00c8ed40c09->leave($__internal_a51fb70ab1fe1d801a5571e2c2cee204a5378e879ad6b2301913d00c8ed40c09_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b988321d9596b3a4db96bc61afed1bf41d90cc7c334a99381f4c3a77d5cb3ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b988321d9596b3a4db96bc61afed1bf41d90cc7c334a99381f4c3a77d5cb3ec4->enter($__internal_b988321d9596b3a4db96bc61afed1bf41d90cc7c334a99381f4c3a77d5cb3ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_08532a5a9f5c9da9bafc3c457a07dafe2ccc115f4d7753a79a17dd913421ff37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08532a5a9f5c9da9bafc3c457a07dafe2ccc115f4d7753a79a17dd913421ff37->enter($__internal_08532a5a9f5c9da9bafc3c457a07dafe2ccc115f4d7753a79a17dd913421ff37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_08532a5a9f5c9da9bafc3c457a07dafe2ccc115f4d7753a79a17dd913421ff37->leave($__internal_08532a5a9f5c9da9bafc3c457a07dafe2ccc115f4d7753a79a17dd913421ff37_prof);

        
        $__internal_b988321d9596b3a4db96bc61afed1bf41d90cc7c334a99381f4c3a77d5cb3ec4->leave($__internal_b988321d9596b3a4db96bc61afed1bf41d90cc7c334a99381f4c3a77d5cb3ec4_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d8f5211475405861794db84ca33b99ed061c568c16f20b36b1fda2980e9096de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f5211475405861794db84ca33b99ed061c568c16f20b36b1fda2980e9096de->enter($__internal_d8f5211475405861794db84ca33b99ed061c568c16f20b36b1fda2980e9096de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2a64a0cf4190013be31ae1e202b940faa95d5bf0c2a14b0f11a4e2c1dfc88a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a64a0cf4190013be31ae1e202b940faa95d5bf0c2a14b0f11a4e2c1dfc88a2b->enter($__internal_2a64a0cf4190013be31ae1e202b940faa95d5bf0c2a14b0f11a4e2c1dfc88a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_2a64a0cf4190013be31ae1e202b940faa95d5bf0c2a14b0f11a4e2c1dfc88a2b->leave($__internal_2a64a0cf4190013be31ae1e202b940faa95d5bf0c2a14b0f11a4e2c1dfc88a2b_prof);

        
        $__internal_d8f5211475405861794db84ca33b99ed061c568c16f20b36b1fda2980e9096de->leave($__internal_d8f5211475405861794db84ca33b99ed061c568c16f20b36b1fda2980e9096de_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0940c8c8a913552064305a6a978118cc45d8dc127008a25215cc7c7e9af5a6d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0940c8c8a913552064305a6a978118cc45d8dc127008a25215cc7c7e9af5a6d9->enter($__internal_0940c8c8a913552064305a6a978118cc45d8dc127008a25215cc7c7e9af5a6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8b800f266adeb6ee2c80baee9175c15d99f0f507e22be503c9f19da4119cc5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b800f266adeb6ee2c80baee9175c15d99f0f507e22be503c9f19da4119cc5c7->enter($__internal_8b800f266adeb6ee2c80baee9175c15d99f0f507e22be503c9f19da4119cc5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8b800f266adeb6ee2c80baee9175c15d99f0f507e22be503c9f19da4119cc5c7->leave($__internal_8b800f266adeb6ee2c80baee9175c15d99f0f507e22be503c9f19da4119cc5c7_prof);

        
        $__internal_0940c8c8a913552064305a6a978118cc45d8dc127008a25215cc7c7e9af5a6d9->leave($__internal_0940c8c8a913552064305a6a978118cc45d8dc127008a25215cc7c7e9af5a6d9_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a365299ee6bedcdf785cfd4a36a57a0f51aa607b3aad5032164b7d6f29bef9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a365299ee6bedcdf785cfd4a36a57a0f51aa607b3aad5032164b7d6f29bef9d1->enter($__internal_a365299ee6bedcdf785cfd4a36a57a0f51aa607b3aad5032164b7d6f29bef9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_408c0ea7454e9f982303894027fd13d141db19b617a16e2d74f6ecc522a9604f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408c0ea7454e9f982303894027fd13d141db19b617a16e2d74f6ecc522a9604f->enter($__internal_408c0ea7454e9f982303894027fd13d141db19b617a16e2d74f6ecc522a9604f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_408c0ea7454e9f982303894027fd13d141db19b617a16e2d74f6ecc522a9604f->leave($__internal_408c0ea7454e9f982303894027fd13d141db19b617a16e2d74f6ecc522a9604f_prof);

        
        $__internal_a365299ee6bedcdf785cfd4a36a57a0f51aa607b3aad5032164b7d6f29bef9d1->leave($__internal_a365299ee6bedcdf785cfd4a36a57a0f51aa607b3aad5032164b7d6f29bef9d1_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_08ffdb1e26d6fa4df4fef7eca91cc17b408dd2e76edcfa95d57bacb5937b0b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ffdb1e26d6fa4df4fef7eca91cc17b408dd2e76edcfa95d57bacb5937b0b80->enter($__internal_08ffdb1e26d6fa4df4fef7eca91cc17b408dd2e76edcfa95d57bacb5937b0b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5ac143cbe755d5f54f870b2c5b46c11d54a92ab78563ae5c870ab90f8c101d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac143cbe755d5f54f870b2c5b46c11d54a92ab78563ae5c870ab90f8c101d83->enter($__internal_5ac143cbe755d5f54f870b2c5b46c11d54a92ab78563ae5c870ab90f8c101d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "materializeLayout.html.twig", 39)->display($context);
        
        $__internal_5ac143cbe755d5f54f870b2c5b46c11d54a92ab78563ae5c870ab90f8c101d83->leave($__internal_5ac143cbe755d5f54f870b2c5b46c11d54a92ab78563ae5c870ab90f8c101d83_prof);

        
        $__internal_08ffdb1e26d6fa4df4fef7eca91cc17b408dd2e76edcfa95d57bacb5937b0b80->leave($__internal_08ffdb1e26d6fa4df4fef7eca91cc17b408dd2e76edcfa95d57bacb5937b0b80_prof);

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
