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
        $__internal_12e964da34b432b62aaafc5fefeb4d44b4ee9d09dab3306e5d2a728abb5d2c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e964da34b432b62aaafc5fefeb4d44b4ee9d09dab3306e5d2a728abb5d2c54->enter($__internal_12e964da34b432b62aaafc5fefeb4d44b4ee9d09dab3306e5d2a728abb5d2c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_d9e1dbc98a06602aa148af385cf688a1e3243f7a280d27a5e18033180910d738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e1dbc98a06602aa148af385cf688a1e3243f7a280d27a5e18033180910d738->enter($__internal_d9e1dbc98a06602aa148af385cf688a1e3243f7a280d27a5e18033180910d738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_12e964da34b432b62aaafc5fefeb4d44b4ee9d09dab3306e5d2a728abb5d2c54->leave($__internal_12e964da34b432b62aaafc5fefeb4d44b4ee9d09dab3306e5d2a728abb5d2c54_prof);

        
        $__internal_d9e1dbc98a06602aa148af385cf688a1e3243f7a280d27a5e18033180910d738->leave($__internal_d9e1dbc98a06602aa148af385cf688a1e3243f7a280d27a5e18033180910d738_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_727af037a571545e25e01f3279712cec5f86cc67c25bf00e0362fe68603ce990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727af037a571545e25e01f3279712cec5f86cc67c25bf00e0362fe68603ce990->enter($__internal_727af037a571545e25e01f3279712cec5f86cc67c25bf00e0362fe68603ce990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_f3552e2869236485d954d57c3ec5773d9b5ab3255cb6098e59008de6099163b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3552e2869236485d954d57c3ec5773d9b5ab3255cb6098e59008de6099163b0->enter($__internal_f3552e2869236485d954d57c3ec5773d9b5ab3255cb6098e59008de6099163b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

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
        
        $__internal_f3552e2869236485d954d57c3ec5773d9b5ab3255cb6098e59008de6099163b0->leave($__internal_f3552e2869236485d954d57c3ec5773d9b5ab3255cb6098e59008de6099163b0_prof);

        
        $__internal_727af037a571545e25e01f3279712cec5f86cc67c25bf00e0362fe68603ce990->leave($__internal_727af037a571545e25e01f3279712cec5f86cc67c25bf00e0362fe68603ce990_prof);

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
