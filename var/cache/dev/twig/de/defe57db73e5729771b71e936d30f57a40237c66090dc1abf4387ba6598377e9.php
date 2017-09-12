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
        $__internal_9bc612dc3b4e17c3e52163b5ba5ba94d0586436c9d61f4fae8a4be0b31d2c403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc612dc3b4e17c3e52163b5ba5ba94d0586436c9d61f4fae8a4be0b31d2c403->enter($__internal_9bc612dc3b4e17c3e52163b5ba5ba94d0586436c9d61f4fae8a4be0b31d2c403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_8912325e82c1df221e1b6cc2b45be9580fd112c4998ccce1eff4c3a26d4b4e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8912325e82c1df221e1b6cc2b45be9580fd112c4998ccce1eff4c3a26d4b4e09->enter($__internal_8912325e82c1df221e1b6cc2b45be9580fd112c4998ccce1eff4c3a26d4b4e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_9bc612dc3b4e17c3e52163b5ba5ba94d0586436c9d61f4fae8a4be0b31d2c403->leave($__internal_9bc612dc3b4e17c3e52163b5ba5ba94d0586436c9d61f4fae8a4be0b31d2c403_prof);

        
        $__internal_8912325e82c1df221e1b6cc2b45be9580fd112c4998ccce1eff4c3a26d4b4e09->leave($__internal_8912325e82c1df221e1b6cc2b45be9580fd112c4998ccce1eff4c3a26d4b4e09_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_c138c4558f328de9b7f46e39170c6fe48a1d5cab7c949d203407a12513c7a523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c138c4558f328de9b7f46e39170c6fe48a1d5cab7c949d203407a12513c7a523->enter($__internal_c138c4558f328de9b7f46e39170c6fe48a1d5cab7c949d203407a12513c7a523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_82e3d80db9f068976bf264e3a942279cb1f006745d3d164dd58f7c64a5095d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e3d80db9f068976bf264e3a942279cb1f006745d3d164dd58f7c64a5095d83->enter($__internal_82e3d80db9f068976bf264e3a942279cb1f006745d3d164dd58f7c64a5095d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

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
        
        $__internal_82e3d80db9f068976bf264e3a942279cb1f006745d3d164dd58f7c64a5095d83->leave($__internal_82e3d80db9f068976bf264e3a942279cb1f006745d3d164dd58f7c64a5095d83_prof);

        
        $__internal_c138c4558f328de9b7f46e39170c6fe48a1d5cab7c949d203407a12513c7a523->leave($__internal_c138c4558f328de9b7f46e39170c6fe48a1d5cab7c949d203407a12513c7a523_prof);

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
