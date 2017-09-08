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
        $__internal_8c4f1b303c662a70432eb62e6338af3434dbacd59f44192e1bc503a6da2b9e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4f1b303c662a70432eb62e6338af3434dbacd59f44192e1bc503a6da2b9e1f->enter($__internal_8c4f1b303c662a70432eb62e6338af3434dbacd59f44192e1bc503a6da2b9e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_cea051f6811765b4fa8a07ab140889975bd7b3919bdc732b07c275c7d882dfa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea051f6811765b4fa8a07ab140889975bd7b3919bdc732b07c275c7d882dfa7->enter($__internal_cea051f6811765b4fa8a07ab140889975bd7b3919bdc732b07c275c7d882dfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_8c4f1b303c662a70432eb62e6338af3434dbacd59f44192e1bc503a6da2b9e1f->leave($__internal_8c4f1b303c662a70432eb62e6338af3434dbacd59f44192e1bc503a6da2b9e1f_prof);

        
        $__internal_cea051f6811765b4fa8a07ab140889975bd7b3919bdc732b07c275c7d882dfa7->leave($__internal_cea051f6811765b4fa8a07ab140889975bd7b3919bdc732b07c275c7d882dfa7_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_2623fd344217ada30a1bfda8c8dfd6e1ebdcd135f7cbae708270614b2912627e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2623fd344217ada30a1bfda8c8dfd6e1ebdcd135f7cbae708270614b2912627e->enter($__internal_2623fd344217ada30a1bfda8c8dfd6e1ebdcd135f7cbae708270614b2912627e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_b1695dfe0f88948f6051c602ae494a8dbce55a97acb465bc13ea966210203e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1695dfe0f88948f6051c602ae494a8dbce55a97acb465bc13ea966210203e55->enter($__internal_b1695dfe0f88948f6051c602ae494a8dbce55a97acb465bc13ea966210203e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

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
        
        $__internal_b1695dfe0f88948f6051c602ae494a8dbce55a97acb465bc13ea966210203e55->leave($__internal_b1695dfe0f88948f6051c602ae494a8dbce55a97acb465bc13ea966210203e55_prof);

        
        $__internal_2623fd344217ada30a1bfda8c8dfd6e1ebdcd135f7cbae708270614b2912627e->leave($__internal_2623fd344217ada30a1bfda8c8dfd6e1ebdcd135f7cbae708270614b2912627e_prof);

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
{% endblock %}", "::fields.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/fields.html.twig");
    }
}
