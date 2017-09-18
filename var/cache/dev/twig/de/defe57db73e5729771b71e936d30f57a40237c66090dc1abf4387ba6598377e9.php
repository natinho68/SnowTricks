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
        $__internal_e684d1db3393c7b9cdf40b9994efcf8a80617840bf03e8687484eacd64b9e9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e684d1db3393c7b9cdf40b9994efcf8a80617840bf03e8687484eacd64b9e9af->enter($__internal_e684d1db3393c7b9cdf40b9994efcf8a80617840bf03e8687484eacd64b9e9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_54f9e183d3728304cc93ed78c3d948842785e264ebaae9b390cc3906f796ee51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f9e183d3728304cc93ed78c3d948842785e264ebaae9b390cc3906f796ee51->enter($__internal_54f9e183d3728304cc93ed78c3d948842785e264ebaae9b390cc3906f796ee51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_e684d1db3393c7b9cdf40b9994efcf8a80617840bf03e8687484eacd64b9e9af->leave($__internal_e684d1db3393c7b9cdf40b9994efcf8a80617840bf03e8687484eacd64b9e9af_prof);

        
        $__internal_54f9e183d3728304cc93ed78c3d948842785e264ebaae9b390cc3906f796ee51->leave($__internal_54f9e183d3728304cc93ed78c3d948842785e264ebaae9b390cc3906f796ee51_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_8f0799bdf27595c4d0ca828c3cc4384e0bb4537bda106761ca2b150b2437356a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0799bdf27595c4d0ca828c3cc4384e0bb4537bda106761ca2b150b2437356a->enter($__internal_8f0799bdf27595c4d0ca828c3cc4384e0bb4537bda106761ca2b150b2437356a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_5ed31a0b2b62baecd384484bb48b9c8adfda942123ca1bdc1845483d96034451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed31a0b2b62baecd384484bb48b9c8adfda942123ca1bdc1845483d96034451->enter($__internal_5ed31a0b2b62baecd384484bb48b9c8adfda942123ca1bdc1845483d96034451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

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
        
        $__internal_5ed31a0b2b62baecd384484bb48b9c8adfda942123ca1bdc1845483d96034451->leave($__internal_5ed31a0b2b62baecd384484bb48b9c8adfda942123ca1bdc1845483d96034451_prof);

        
        $__internal_8f0799bdf27595c4d0ca828c3cc4384e0bb4537bda106761ca2b150b2437356a->leave($__internal_8f0799bdf27595c4d0ca828c3cc4384e0bb4537bda106761ca2b150b2437356a_prof);

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
