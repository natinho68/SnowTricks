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
        $__internal_90550f54f6cadbc214250a81435477708545935cd3e86237a735a7dddf6ae27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90550f54f6cadbc214250a81435477708545935cd3e86237a735a7dddf6ae27e->enter($__internal_90550f54f6cadbc214250a81435477708545935cd3e86237a735a7dddf6ae27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $__internal_25f99060040f204b159a497c50e4067245c8d793b04c71507c77df7e1fb52a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f99060040f204b159a497c50e4067245c8d793b04c71507c77df7e1fb52a05->enter($__internal_25f99060040f204b159a497c50e4067245c8d793b04c71507c77df7e1fb52a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::materializeLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90550f54f6cadbc214250a81435477708545935cd3e86237a735a7dddf6ae27e->leave($__internal_90550f54f6cadbc214250a81435477708545935cd3e86237a735a7dddf6ae27e_prof);

        
        $__internal_25f99060040f204b159a497c50e4067245c8d793b04c71507c77df7e1fb52a05->leave($__internal_25f99060040f204b159a497c50e4067245c8d793b04c71507c77df7e1fb52a05_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_24008fb1032a9b64d51a4ea09030423e9d087968a46f08c2aa475193a1810425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24008fb1032a9b64d51a4ea09030423e9d087968a46f08c2aa475193a1810425->enter($__internal_24008fb1032a9b64d51a4ea09030423e9d087968a46f08c2aa475193a1810425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_84d58232504d7dd62edb68617d48caec43031489df5b153695a3c9b396e0b488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d58232504d7dd62edb68617d48caec43031489df5b153695a3c9b396e0b488->enter($__internal_84d58232504d7dd62edb68617d48caec43031489df5b153695a3c9b396e0b488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_84d58232504d7dd62edb68617d48caec43031489df5b153695a3c9b396e0b488->leave($__internal_84d58232504d7dd62edb68617d48caec43031489df5b153695a3c9b396e0b488_prof);

        
        $__internal_24008fb1032a9b64d51a4ea09030423e9d087968a46f08c2aa475193a1810425->leave($__internal_24008fb1032a9b64d51a4ea09030423e9d087968a46f08c2aa475193a1810425_prof);

    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_67f56e991facb7b84454f2cc93eecfd7b484461c8db1661760fac062d7247698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f56e991facb7b84454f2cc93eecfd7b484461c8db1661760fac062d7247698->enter($__internal_67f56e991facb7b84454f2cc93eecfd7b484461c8db1661760fac062d7247698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_301f894e29b2031c64138ad0bc124ab13d8f660354c436ee3ca8b6fe17f0582b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301f894e29b2031c64138ad0bc124ab13d8f660354c436ee3ca8b6fe17f0582b->enter($__internal_301f894e29b2031c64138ad0bc124ab13d8f660354c436ee3ca8b6fe17f0582b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_301f894e29b2031c64138ad0bc124ab13d8f660354c436ee3ca8b6fe17f0582b->leave($__internal_301f894e29b2031c64138ad0bc124ab13d8f660354c436ee3ca8b6fe17f0582b_prof);

        
        $__internal_67f56e991facb7b84454f2cc93eecfd7b484461c8db1661760fac062d7247698->leave($__internal_67f56e991facb7b84454f2cc93eecfd7b484461c8db1661760fac062d7247698_prof);

    }

    // line 42
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_71ff177d296925468edbe601b6cd1f8a34188c0132b612c2af34abcc3f4ca43b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ff177d296925468edbe601b6cd1f8a34188c0132b612c2af34abcc3f4ca43b->enter($__internal_71ff177d296925468edbe601b6cd1f8a34188c0132b612c2af34abcc3f4ca43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d77bbfc5f16f768eef94155f3c76ba7bf21031a4e121ab966268045fbc2a6200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77bbfc5f16f768eef94155f3c76ba7bf21031a4e121ab966268045fbc2a6200->enter($__internal_d77bbfc5f16f768eef94155f3c76ba7bf21031a4e121ab966268045fbc2a6200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 43
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
        // line 44
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d77bbfc5f16f768eef94155f3c76ba7bf21031a4e121ab966268045fbc2a6200->leave($__internal_d77bbfc5f16f768eef94155f3c76ba7bf21031a4e121ab966268045fbc2a6200_prof);

        
        $__internal_71ff177d296925468edbe601b6cd1f8a34188c0132b612c2af34abcc3f4ca43b->leave($__internal_71ff177d296925468edbe601b6cd1f8a34188c0132b612c2af34abcc3f4ca43b_prof);

    }

    // line 48
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_60ed9511ec640753251f905471b6ddd3a8a4d268b42cb50dd2df0eb2909910c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ed9511ec640753251f905471b6ddd3a8a4d268b42cb50dd2df0eb2909910c5->enter($__internal_60ed9511ec640753251f905471b6ddd3a8a4d268b42cb50dd2df0eb2909910c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_77b738b8b193826fc3e2ba4e4897bb9abc34042fae87f391f35f471349c6a70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b738b8b193826fc3e2ba4e4897bb9abc34042fae87f391f35f471349c6a70c->enter($__internal_77b738b8b193826fc3e2ba4e4897bb9abc34042fae87f391f35f471349c6a70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 49
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 50
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_77b738b8b193826fc3e2ba4e4897bb9abc34042fae87f391f35f471349c6a70c->leave($__internal_77b738b8b193826fc3e2ba4e4897bb9abc34042fae87f391f35f471349c6a70c_prof);

        
        $__internal_60ed9511ec640753251f905471b6ddd3a8a4d268b42cb50dd2df0eb2909910c5->leave($__internal_60ed9511ec640753251f905471b6ddd3a8a4d268b42cb50dd2df0eb2909910c5_prof);

    }

    // line 54
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ea147f1d10b5f4b70ffac56151c6a66a5ca0c87d99df6ceaf0ebbd859733f932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea147f1d10b5f4b70ffac56151c6a66a5ca0c87d99df6ceaf0ebbd859733f932->enter($__internal_ea147f1d10b5f4b70ffac56151c6a66a5ca0c87d99df6ceaf0ebbd859733f932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d215f5c6f306d354fe21b42cf47a6b80c85d7f35c82e792a3c5ea6edf3b0590a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d215f5c6f306d354fe21b42cf47a6b80c85d7f35c82e792a3c5ea6edf3b0590a->enter($__internal_d215f5c6f306d354fe21b42cf47a6b80c85d7f35c82e792a3c5ea6edf3b0590a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 55
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 56
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d215f5c6f306d354fe21b42cf47a6b80c85d7f35c82e792a3c5ea6edf3b0590a->leave($__internal_d215f5c6f306d354fe21b42cf47a6b80c85d7f35c82e792a3c5ea6edf3b0590a_prof);

        
        $__internal_ea147f1d10b5f4b70ffac56151c6a66a5ca0c87d99df6ceaf0ebbd859733f932->leave($__internal_ea147f1d10b5f4b70ffac56151c6a66a5ca0c87d99df6ceaf0ebbd859733f932_prof);

    }

    // line 60
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ba67c4ee05de5e7f1598e112fcea519d6b95b671d9df63f8332468c71090ab9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba67c4ee05de5e7f1598e112fcea519d6b95b671d9df63f8332468c71090ab9e->enter($__internal_ba67c4ee05de5e7f1598e112fcea519d6b95b671d9df63f8332468c71090ab9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2f74c89d70115c0c813b844e4ff68b38d06a11d6a57e8b859e33a974a16a144a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f74c89d70115c0c813b844e4ff68b38d06a11d6a57e8b859e33a974a16a144a->enter($__internal_2f74c89d70115c0c813b844e4ff68b38d06a11d6a57e8b859e33a974a16a144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_2f74c89d70115c0c813b844e4ff68b38d06a11d6a57e8b859e33a974a16a144a->leave($__internal_2f74c89d70115c0c813b844e4ff68b38d06a11d6a57e8b859e33a974a16a144a_prof);

        
        $__internal_ba67c4ee05de5e7f1598e112fcea519d6b95b671d9df63f8332468c71090ab9e->leave($__internal_ba67c4ee05de5e7f1598e112fcea519d6b95b671d9df63f8332468c71090ab9e_prof);

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
{%- endblock form_errors -%}
", "::materializeLayout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/materializeLayout.html.twig");
    }
}
