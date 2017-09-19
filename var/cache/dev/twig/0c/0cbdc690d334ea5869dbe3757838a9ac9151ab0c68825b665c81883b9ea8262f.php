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
        $__internal_ed6674df8773b8776a9a6ad2b479a7346438aac7171f4f0880e2c5bd885c5cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6674df8773b8776a9a6ad2b479a7346438aac7171f4f0880e2c5bd885c5cd3->enter($__internal_ed6674df8773b8776a9a6ad2b479a7346438aac7171f4f0880e2c5bd885c5cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_1a810c9a0c684bae77f24deb68b5f4ab38faa592907ba4ac612e90b10efdf6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a810c9a0c684bae77f24deb68b5f4ab38faa592907ba4ac612e90b10efdf6da->enter($__internal_1a810c9a0c684bae77f24deb68b5f4ab38faa592907ba4ac612e90b10efdf6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed6674df8773b8776a9a6ad2b479a7346438aac7171f4f0880e2c5bd885c5cd3->leave($__internal_ed6674df8773b8776a9a6ad2b479a7346438aac7171f4f0880e2c5bd885c5cd3_prof);

        
        $__internal_1a810c9a0c684bae77f24deb68b5f4ab38faa592907ba4ac612e90b10efdf6da->leave($__internal_1a810c9a0c684bae77f24deb68b5f4ab38faa592907ba4ac612e90b10efdf6da_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_944bef7139e37abeceb73a00f587c2aad46443874c78ceccfdd984414c167ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944bef7139e37abeceb73a00f587c2aad46443874c78ceccfdd984414c167ce9->enter($__internal_944bef7139e37abeceb73a00f587c2aad46443874c78ceccfdd984414c167ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7292566be85684a6c2e39f52052e64b51aaca0e6ff48e9d0e52b979a17747d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7292566be85684a6c2e39f52052e64b51aaca0e6ff48e9d0e52b979a17747d68->enter($__internal_7292566be85684a6c2e39f52052e64b51aaca0e6ff48e9d0e52b979a17747d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        $this->loadTemplate("materializeTemp/form_row.html.twig", "::materializeLayout.html.twig", 4)->display($context);
        
        $__internal_7292566be85684a6c2e39f52052e64b51aaca0e6ff48e9d0e52b979a17747d68->leave($__internal_7292566be85684a6c2e39f52052e64b51aaca0e6ff48e9d0e52b979a17747d68_prof);

        
        $__internal_944bef7139e37abeceb73a00f587c2aad46443874c78ceccfdd984414c167ce9->leave($__internal_944bef7139e37abeceb73a00f587c2aad46443874c78ceccfdd984414c167ce9_prof);

    }

    // line 8
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_221ce60d3bbe18d17e7d2f423af60353747499bad33741cf3dfb9c20fd1d53ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221ce60d3bbe18d17e7d2f423af60353747499bad33741cf3dfb9c20fd1d53ac->enter($__internal_221ce60d3bbe18d17e7d2f423af60353747499bad33741cf3dfb9c20fd1d53ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_3fe78a18e013de277463b8fb38e7c73e3a5208e667ba73fabfe00d324661ab2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe78a18e013de277463b8fb38e7c73e3a5208e667ba73fabfe00d324661ab2d->enter($__internal_3fe78a18e013de277463b8fb38e7c73e3a5208e667ba73fabfe00d324661ab2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_3fe78a18e013de277463b8fb38e7c73e3a5208e667ba73fabfe00d324661ab2d->leave($__internal_3fe78a18e013de277463b8fb38e7c73e3a5208e667ba73fabfe00d324661ab2d_prof);

        
        $__internal_221ce60d3bbe18d17e7d2f423af60353747499bad33741cf3dfb9c20fd1d53ac->leave($__internal_221ce60d3bbe18d17e7d2f423af60353747499bad33741cf3dfb9c20fd1d53ac_prof);

    }

    // line 20
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c4521ae97a56934031cca02d8b1c3be3351c42e469bbc18daeb4e93e5b04a61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4521ae97a56934031cca02d8b1c3be3351c42e469bbc18daeb4e93e5b04a61e->enter($__internal_c4521ae97a56934031cca02d8b1c3be3351c42e469bbc18daeb4e93e5b04a61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ce646563253f3927f0bfd8c1adab05c14de8492a734a0a510d36ad06604604b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce646563253f3927f0bfd8c1adab05c14de8492a734a0a510d36ad06604604b1->enter($__internal_ce646563253f3927f0bfd8c1adab05c14de8492a734a0a510d36ad06604604b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 21
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 22
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ce646563253f3927f0bfd8c1adab05c14de8492a734a0a510d36ad06604604b1->leave($__internal_ce646563253f3927f0bfd8c1adab05c14de8492a734a0a510d36ad06604604b1_prof);

        
        $__internal_c4521ae97a56934031cca02d8b1c3be3351c42e469bbc18daeb4e93e5b04a61e->leave($__internal_c4521ae97a56934031cca02d8b1c3be3351c42e469bbc18daeb4e93e5b04a61e_prof);

    }

    // line 26
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_457dcb053acf9507a92f28b88d62b493e25d4c32fb750f7def8ecd4d59d5e7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457dcb053acf9507a92f28b88d62b493e25d4c32fb750f7def8ecd4d59d5e7f9->enter($__internal_457dcb053acf9507a92f28b88d62b493e25d4c32fb750f7def8ecd4d59d5e7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_4b38f86018466d51a79f7cfbfada8418669628242da319cccebdbcdb0629bd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b38f86018466d51a79f7cfbfada8418669628242da319cccebdbcdb0629bd80->enter($__internal_4b38f86018466d51a79f7cfbfada8418669628242da319cccebdbcdb0629bd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 27
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 28
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_4b38f86018466d51a79f7cfbfada8418669628242da319cccebdbcdb0629bd80->leave($__internal_4b38f86018466d51a79f7cfbfada8418669628242da319cccebdbcdb0629bd80_prof);

        
        $__internal_457dcb053acf9507a92f28b88d62b493e25d4c32fb750f7def8ecd4d59d5e7f9->leave($__internal_457dcb053acf9507a92f28b88d62b493e25d4c32fb750f7def8ecd4d59d5e7f9_prof);

    }

    // line 32
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a50af3937c75981892ec9538f546d9149e745d31679a9dc15cabb7b9fefb571a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50af3937c75981892ec9538f546d9149e745d31679a9dc15cabb7b9fefb571a->enter($__internal_a50af3937c75981892ec9538f546d9149e745d31679a9dc15cabb7b9fefb571a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f8db987652ddfb392383100302190d147b800085fc3b9d7a201c2fca439a8b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8db987652ddfb392383100302190d147b800085fc3b9d7a201c2fca439a8b0c->enter($__internal_f8db987652ddfb392383100302190d147b800085fc3b9d7a201c2fca439a8b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 33
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 34
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f8db987652ddfb392383100302190d147b800085fc3b9d7a201c2fca439a8b0c->leave($__internal_f8db987652ddfb392383100302190d147b800085fc3b9d7a201c2fca439a8b0c_prof);

        
        $__internal_a50af3937c75981892ec9538f546d9149e745d31679a9dc15cabb7b9fefb571a->leave($__internal_a50af3937c75981892ec9538f546d9149e745d31679a9dc15cabb7b9fefb571a_prof);

    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6f193f28f0e5e83207fdaeede77e0d41d1991c5bcc418fde7b775a7ecfb5916b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f193f28f0e5e83207fdaeede77e0d41d1991c5bcc418fde7b775a7ecfb5916b->enter($__internal_6f193f28f0e5e83207fdaeede77e0d41d1991c5bcc418fde7b775a7ecfb5916b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_873c51a1cfb71ae3cc29b6d22ec6a909cb4e1ec9a9ac3a4b15306358102904ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873c51a1cfb71ae3cc29b6d22ec6a909cb4e1ec9a9ac3a4b15306358102904ed->enter($__internal_873c51a1cfb71ae3cc29b6d22ec6a909cb4e1ec9a9ac3a4b15306358102904ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 39
        $this->loadTemplate("materializeTemp/form_errors.html.twig", "::materializeLayout.html.twig", 39)->display($context);
        
        $__internal_873c51a1cfb71ae3cc29b6d22ec6a909cb4e1ec9a9ac3a4b15306358102904ed->leave($__internal_873c51a1cfb71ae3cc29b6d22ec6a909cb4e1ec9a9ac3a4b15306358102904ed_prof);

        
        $__internal_6f193f28f0e5e83207fdaeede77e0d41d1991c5bcc418fde7b775a7ecfb5916b->leave($__internal_6f193f28f0e5e83207fdaeede77e0d41d1991c5bcc418fde7b775a7ecfb5916b_prof);

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
