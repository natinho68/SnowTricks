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
        $__internal_361cf2484edc1d040a64967d2fd73eef21bfd740cbe5975d8c8d985d2acd57fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361cf2484edc1d040a64967d2fd73eef21bfd740cbe5975d8c8d985d2acd57fa->enter($__internal_361cf2484edc1d040a64967d2fd73eef21bfd740cbe5975d8c8d985d2acd57fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_b8939a9e7fa02c86275e5e80708fda715072a8dfca215a7372dceea1df1e1495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8939a9e7fa02c86275e5e80708fda715072a8dfca215a7372dceea1df1e1495->enter($__internal_b8939a9e7fa02c86275e5e80708fda715072a8dfca215a7372dceea1df1e1495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_361cf2484edc1d040a64967d2fd73eef21bfd740cbe5975d8c8d985d2acd57fa->leave($__internal_361cf2484edc1d040a64967d2fd73eef21bfd740cbe5975d8c8d985d2acd57fa_prof);

        
        $__internal_b8939a9e7fa02c86275e5e80708fda715072a8dfca215a7372dceea1df1e1495->leave($__internal_b8939a9e7fa02c86275e5e80708fda715072a8dfca215a7372dceea1df1e1495_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_89b7221a1176cc47e63c1b83be4ba034b87c3f50d7b9f04f9e1c5c1d1c10931f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b7221a1176cc47e63c1b83be4ba034b87c3f50d7b9f04f9e1c5c1d1c10931f->enter($__internal_89b7221a1176cc47e63c1b83be4ba034b87c3f50d7b9f04f9e1c5c1d1c10931f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_db92c9332d7988f0a0eef0d61f1b471af535a1ce3d04ee5e0a7e7b30d7146399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db92c9332d7988f0a0eef0d61f1b471af535a1ce3d04ee5e0a7e7b30d7146399->enter($__internal_db92c9332d7988f0a0eef0d61f1b471af535a1ce3d04ee5e0a7e7b30d7146399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

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
        
        $__internal_db92c9332d7988f0a0eef0d61f1b471af535a1ce3d04ee5e0a7e7b30d7146399->leave($__internal_db92c9332d7988f0a0eef0d61f1b471af535a1ce3d04ee5e0a7e7b30d7146399_prof);

        
        $__internal_89b7221a1176cc47e63c1b83be4ba034b87c3f50d7b9f04f9e1c5c1d1c10931f->leave($__internal_89b7221a1176cc47e63c1b83be4ba034b87c3f50d7b9f04f9e1c5c1d1c10931f_prof);

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
