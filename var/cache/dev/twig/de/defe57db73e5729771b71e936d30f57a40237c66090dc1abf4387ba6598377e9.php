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
        $__internal_88eeecd8d37bf0e1e1fc92dbea6c699c6c421d4ea233f6c72230653dc634c973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88eeecd8d37bf0e1e1fc92dbea6c699c6c421d4ea233f6c72230653dc634c973->enter($__internal_88eeecd8d37bf0e1e1fc92dbea6c699c6c421d4ea233f6c72230653dc634c973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_411791deed708ae29c27803b42b55b4c21405937e477989358b6dd6238958ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411791deed708ae29c27803b42b55b4c21405937e477989358b6dd6238958ac0->enter($__internal_411791deed708ae29c27803b42b55b4c21405937e477989358b6dd6238958ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_88eeecd8d37bf0e1e1fc92dbea6c699c6c421d4ea233f6c72230653dc634c973->leave($__internal_88eeecd8d37bf0e1e1fc92dbea6c699c6c421d4ea233f6c72230653dc634c973_prof);

        
        $__internal_411791deed708ae29c27803b42b55b4c21405937e477989358b6dd6238958ac0->leave($__internal_411791deed708ae29c27803b42b55b4c21405937e477989358b6dd6238958ac0_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_4b8b611ae2cc41a1747f3dc0867be3cc27379345d66ae8b405387b01c2a0429a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8b611ae2cc41a1747f3dc0867be3cc27379345d66ae8b405387b01c2a0429a->enter($__internal_4b8b611ae2cc41a1747f3dc0867be3cc27379345d66ae8b405387b01c2a0429a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_f77caea6f4e006d290af36f01cd4d5936b042d338a4a9dfd7968638dc1ed0eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77caea6f4e006d290af36f01cd4d5936b042d338a4a9dfd7968638dc1ed0eb8->enter($__internal_f77caea6f4e006d290af36f01cd4d5936b042d338a4a9dfd7968638dc1ed0eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

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
        
        $__internal_f77caea6f4e006d290af36f01cd4d5936b042d338a4a9dfd7968638dc1ed0eb8->leave($__internal_f77caea6f4e006d290af36f01cd4d5936b042d338a4a9dfd7968638dc1ed0eb8_prof);

        
        $__internal_4b8b611ae2cc41a1747f3dc0867be3cc27379345d66ae8b405387b01c2a0429a->leave($__internal_4b8b611ae2cc41a1747f3dc0867be3cc27379345d66ae8b405387b01c2a0429a_prof);

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
