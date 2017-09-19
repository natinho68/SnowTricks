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
        $__internal_7a881bf5dd431ebcbad30db6746219645cca994d2989df67e7a1f26837d76912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a881bf5dd431ebcbad30db6746219645cca994d2989df67e7a1f26837d76912->enter($__internal_7a881bf5dd431ebcbad30db6746219645cca994d2989df67e7a1f26837d76912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_4a29507f808badae9c765a0fdbca36bbd8b07f426f32007e6fb6114ccdd82018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a29507f808badae9c765a0fdbca36bbd8b07f426f32007e6fb6114ccdd82018->enter($__internal_4a29507f808badae9c765a0fdbca36bbd8b07f426f32007e6fb6114ccdd82018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_7a881bf5dd431ebcbad30db6746219645cca994d2989df67e7a1f26837d76912->leave($__internal_7a881bf5dd431ebcbad30db6746219645cca994d2989df67e7a1f26837d76912_prof);

        
        $__internal_4a29507f808badae9c765a0fdbca36bbd8b07f426f32007e6fb6114ccdd82018->leave($__internal_4a29507f808badae9c765a0fdbca36bbd8b07f426f32007e6fb6114ccdd82018_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_9758fcf348186281c5a5c4d1955c6f9c206f1e5607ecbd5ca968523c8e3bcbd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9758fcf348186281c5a5c4d1955c6f9c206f1e5607ecbd5ca968523c8e3bcbd7->enter($__internal_9758fcf348186281c5a5c4d1955c6f9c206f1e5607ecbd5ca968523c8e3bcbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_3783a695b8a74a4164d9c9f534e90af240a71868063f07bc03431cc865c878c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3783a695b8a74a4164d9c9f534e90af240a71868063f07bc03431cc865c878c2->enter($__internal_3783a695b8a74a4164d9c9f534e90af240a71868063f07bc03431cc865c878c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

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
        
        $__internal_3783a695b8a74a4164d9c9f534e90af240a71868063f07bc03431cc865c878c2->leave($__internal_3783a695b8a74a4164d9c9f534e90af240a71868063f07bc03431cc865c878c2_prof);

        
        $__internal_9758fcf348186281c5a5c4d1955c6f9c206f1e5607ecbd5ca968523c8e3bcbd7->leave($__internal_9758fcf348186281c5a5c4d1955c6f9c206f1e5607ecbd5ca968523c8e3bcbd7_prof);

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
