<?php

/* ::fields.html.twig */
class __TwigTemplate_1736cb7dd08582ac4c7a000bba760c587b984f02fec0558d37bffa2dabbf4981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'file_widget' => array($this, 'block_file_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b77c33e5793606d28f27c79a182fce9b0514c211102f78a36df607ef11097cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b77c33e5793606d28f27c79a182fce9b0514c211102f78a36df607ef11097cd->enter($__internal_9b77c33e5793606d28f27c79a182fce9b0514c211102f78a36df607ef11097cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_6a6e411753c4e864a0778b1245edef57ea21cccc13c03978d27beaaf54696ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6e411753c4e864a0778b1245edef57ea21cccc13c03978d27beaaf54696ca9->enter($__internal_6a6e411753c4e864a0778b1245edef57ea21cccc13c03978d27beaaf54696ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_9b77c33e5793606d28f27c79a182fce9b0514c211102f78a36df607ef11097cd->leave($__internal_9b77c33e5793606d28f27c79a182fce9b0514c211102f78a36df607ef11097cd_prof);

        
        $__internal_6a6e411753c4e864a0778b1245edef57ea21cccc13c03978d27beaaf54696ca9->leave($__internal_6a6e411753c4e864a0778b1245edef57ea21cccc13c03978d27beaaf54696ca9_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_f519ed1cf21c41f0d77749fa02faf7aa192747b29833c37319aa980d4eb511df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f519ed1cf21c41f0d77749fa02faf7aa192747b29833c37319aa980d4eb511df->enter($__internal_f519ed1cf21c41f0d77749fa02faf7aa192747b29833c37319aa980d4eb511df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_b5bf5ca27275245e7609a6b9f1d0f58ba4cd82dba8441e3354be115bcf2033fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bf5ca27275245e7609a6b9f1d0f58ba4cd82dba8441e3354be115bcf2033fc->enter($__internal_b5bf5ca27275245e7609a6b9f1d0f58ba4cd82dba8441e3354be115bcf2033fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "

        ";
        // line 5
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        ";
        // line 6
        if ( !(null === (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url")))) {
            // line 7
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url"))), "html", null, true);
            echo "\" width=\"150\" height=\"150\"/>
        ";
        }
        // line 9
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b5bf5ca27275245e7609a6b9f1d0f58ba4cd82dba8441e3354be115bcf2033fc->leave($__internal_b5bf5ca27275245e7609a6b9f1d0f58ba4cd82dba8441e3354be115bcf2033fc_prof);

        
        $__internal_f519ed1cf21c41f0d77749fa02faf7aa192747b29833c37319aa980d4eb511df->leave($__internal_f519ed1cf21c41f0d77749fa02faf7aa192747b29833c37319aa980d4eb511df_prof);

    }

    public function getTemplateName()
    {
        return "::fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  57 => 7,  55 => 6,  51 => 5,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block file_widget %}
    {% spaceless %}


        {{ block('form_widget') }}
        {% if image_url is not null %}
            <img src=\"{{ asset(image_url) }}\" width=\"150\" height=\"150\"/>
        {% endif %}

    {% endspaceless %}
{% endblock %}
", "::fields.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/fields.html.twig");
    }
}
