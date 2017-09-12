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
        $__internal_cbea14645890b53619eb601a3bbee7edad3864ef2aeb6ca27b519563cc107150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbea14645890b53619eb601a3bbee7edad3864ef2aeb6ca27b519563cc107150->enter($__internal_cbea14645890b53619eb601a3bbee7edad3864ef2aeb6ca27b519563cc107150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_8bf08e6134637bac437ce74d46fe83c750ca04bd7ba63c58360c51569013055e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf08e6134637bac437ce74d46fe83c750ca04bd7ba63c58360c51569013055e->enter($__internal_8bf08e6134637bac437ce74d46fe83c750ca04bd7ba63c58360c51569013055e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_cbea14645890b53619eb601a3bbee7edad3864ef2aeb6ca27b519563cc107150->leave($__internal_cbea14645890b53619eb601a3bbee7edad3864ef2aeb6ca27b519563cc107150_prof);

        
        $__internal_8bf08e6134637bac437ce74d46fe83c750ca04bd7ba63c58360c51569013055e->leave($__internal_8bf08e6134637bac437ce74d46fe83c750ca04bd7ba63c58360c51569013055e_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_85836925684d63e59cba5465f1de01f1079a4e55d3117c3f7783cbebef4b1c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85836925684d63e59cba5465f1de01f1079a4e55d3117c3f7783cbebef4b1c4c->enter($__internal_85836925684d63e59cba5465f1de01f1079a4e55d3117c3f7783cbebef4b1c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_73d41eb97415c6815fe91b93fc38bba07e80b63ba8af81b64ad5c971d9fba789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d41eb97415c6815fe91b93fc38bba07e80b63ba8af81b64ad5c971d9fba789->enter($__internal_73d41eb97415c6815fe91b93fc38bba07e80b63ba8af81b64ad5c971d9fba789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

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
        
        $__internal_73d41eb97415c6815fe91b93fc38bba07e80b63ba8af81b64ad5c971d9fba789->leave($__internal_73d41eb97415c6815fe91b93fc38bba07e80b63ba8af81b64ad5c971d9fba789_prof);

        
        $__internal_85836925684d63e59cba5465f1de01f1079a4e55d3117c3f7783cbebef4b1c4c->leave($__internal_85836925684d63e59cba5465f1de01f1079a4e55d3117c3f7783cbebef4b1c4c_prof);

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
