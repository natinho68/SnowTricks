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
        $__internal_3842139d5d6dc0a1681b1f971753b73cf6777cc41e76b90825b658a94f121559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3842139d5d6dc0a1681b1f971753b73cf6777cc41e76b90825b658a94f121559->enter($__internal_3842139d5d6dc0a1681b1f971753b73cf6777cc41e76b90825b658a94f121559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_64fdc1995afd705798499f759fc415af0362538a1d39dff838bf2a0202423166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fdc1995afd705798499f759fc415af0362538a1d39dff838bf2a0202423166->enter($__internal_64fdc1995afd705798499f759fc415af0362538a1d39dff838bf2a0202423166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_3842139d5d6dc0a1681b1f971753b73cf6777cc41e76b90825b658a94f121559->leave($__internal_3842139d5d6dc0a1681b1f971753b73cf6777cc41e76b90825b658a94f121559_prof);

        
        $__internal_64fdc1995afd705798499f759fc415af0362538a1d39dff838bf2a0202423166->leave($__internal_64fdc1995afd705798499f759fc415af0362538a1d39dff838bf2a0202423166_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_5a68adc3a4f865eee1fa124cd27b16880693a6939b1996ebef1473cceeebdbf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a68adc3a4f865eee1fa124cd27b16880693a6939b1996ebef1473cceeebdbf7->enter($__internal_5a68adc3a4f865eee1fa124cd27b16880693a6939b1996ebef1473cceeebdbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_e9cf1edb26055f2985e257dab3f1ec7394b3a6d98fef58a8b40f69352bc74481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cf1edb26055f2985e257dab3f1ec7394b3a6d98fef58a8b40f69352bc74481->enter($__internal_e9cf1edb26055f2985e257dab3f1ec7394b3a6d98fef58a8b40f69352bc74481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

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
        
        $__internal_e9cf1edb26055f2985e257dab3f1ec7394b3a6d98fef58a8b40f69352bc74481->leave($__internal_e9cf1edb26055f2985e257dab3f1ec7394b3a6d98fef58a8b40f69352bc74481_prof);

        
        $__internal_5a68adc3a4f865eee1fa124cd27b16880693a6939b1996ebef1473cceeebdbf7->leave($__internal_5a68adc3a4f865eee1fa124cd27b16880693a6939b1996ebef1473cceeebdbf7_prof);

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
