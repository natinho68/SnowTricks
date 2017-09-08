<?php

/* fields.html.twig */
class __TwigTemplate_20c4cdbc946b127b93a527b86689b3e01bb5217bb360d94375cdd76f767a202b extends Twig_Template
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
        $__internal_ec72923dcef2d14b019725126b01212863be684caf157e32387a9b05fd21ba23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec72923dcef2d14b019725126b01212863be684caf157e32387a9b05fd21ba23->enter($__internal_ec72923dcef2d14b019725126b01212863be684caf157e32387a9b05fd21ba23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fields.html.twig"));

        $__internal_e80b3a9197fd190e7214a09afa7be18e7185d189ad8b4d587d6f98e0274f6185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80b3a9197fd190e7214a09afa7be18e7185d189ad8b4d587d6f98e0274f6185->enter($__internal_e80b3a9197fd190e7214a09afa7be18e7185d189ad8b4d587d6f98e0274f6185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_ec72923dcef2d14b019725126b01212863be684caf157e32387a9b05fd21ba23->leave($__internal_ec72923dcef2d14b019725126b01212863be684caf157e32387a9b05fd21ba23_prof);

        
        $__internal_e80b3a9197fd190e7214a09afa7be18e7185d189ad8b4d587d6f98e0274f6185->leave($__internal_e80b3a9197fd190e7214a09afa7be18e7185d189ad8b4d587d6f98e0274f6185_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_6c247d791ddb5a03683be7004dba5bc7d0bab1244ee5f8a0b1f99a5721df4254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c247d791ddb5a03683be7004dba5bc7d0bab1244ee5f8a0b1f99a5721df4254->enter($__internal_6c247d791ddb5a03683be7004dba5bc7d0bab1244ee5f8a0b1f99a5721df4254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_8f9ffbce08c0bca09e3a0266849c166491c408fc188d74ca33d41c1277425d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9ffbce08c0bca09e3a0266849c166491c408fc188d74ca33d41c1277425d89->enter($__internal_8f9ffbce08c0bca09e3a0266849c166491c408fc188d74ca33d41c1277425d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

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
        if ( !(null === ($context["image_url"] ?? $this->getContext($context, "image_url")))) {
            // line 7
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["image_url"] ?? $this->getContext($context, "image_url"))), "html", null, true);
            echo "\" width=\"150\" height=\"150\"/>
        ";
        }
        // line 9
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8f9ffbce08c0bca09e3a0266849c166491c408fc188d74ca33d41c1277425d89->leave($__internal_8f9ffbce08c0bca09e3a0266849c166491c408fc188d74ca33d41c1277425d89_prof);

        
        $__internal_6c247d791ddb5a03683be7004dba5bc7d0bab1244ee5f8a0b1f99a5721df4254->leave($__internal_6c247d791ddb5a03683be7004dba5bc7d0bab1244ee5f8a0b1f99a5721df4254_prof);

    }

    public function getTemplateName()
    {
        return "fields.html.twig";
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
", "fields.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/fields.html.twig");
    }
}
