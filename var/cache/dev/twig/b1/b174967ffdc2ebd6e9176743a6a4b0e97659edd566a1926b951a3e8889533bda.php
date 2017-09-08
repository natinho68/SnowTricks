<?php

/* jquery.collection.html.twig */
class __TwigTemplate_dc118d713d038ebe78d7e8de51bc44abe4c51017929f7c9e3180dfff17126f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f397061f83b0710d5e173fe6d8dc79691933a6ca46c67b2b7139c8c0b7b7cc49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f397061f83b0710d5e173fe6d8dc79691933a6ca46c67b2b7139c8c0b7b7cc49->enter($__internal_f397061f83b0710d5e173fe6d8dc79691933a6ca46c67b2b7139c8c0b7b7cc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jquery.collection.html.twig"));

        $__internal_f446b92fe25e67d6d04512bb4930e5f254f913b970886d5c4e92ea818895bb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f446b92fe25e67d6d04512bb4930e5f254f913b970886d5c4e92ea818895bb79->enter($__internal_f446b92fe25e67d6d04512bb4930e5f254f913b970886d5c4e92ea818895bb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jquery.collection.html.twig"));

        // line 21
        echo "
";
        // line 22
        $this->displayBlock('collection_widget', $context, $blocks);
        
        $__internal_f397061f83b0710d5e173fe6d8dc79691933a6ca46c67b2b7139c8c0b7b7cc49->leave($__internal_f397061f83b0710d5e173fe6d8dc79691933a6ca46c67b2b7139c8c0b7b7cc49_prof);

        
        $__internal_f446b92fe25e67d6d04512bb4930e5f254f913b970886d5c4e92ea818895bb79->leave($__internal_f446b92fe25e67d6d04512bb4930e5f254f913b970886d5c4e92ea818895bb79_prof);

    }

    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_884f09f3dd938810c62e9005996de5d3b192c3e59a2780879d99868e4e5bb7a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884f09f3dd938810c62e9005996de5d3b192c3e59a2780879d99868e4e5bb7a9->enter($__internal_884f09f3dd938810c62e9005996de5d3b192c3e59a2780879d99868e4e5bb7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_2cb64f52da181cefbc1e856eada029692e0e969cdd2993adab0f2cde9c0b2f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb64f52da181cefbc1e856eada029692e0e969cdd2993adab0f2cde9c0b2f73->enter($__internal_2cb64f52da181cefbc1e856eada029692e0e969cdd2993adab0f2cde9c0b2f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 25
            echo "                ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
            // line 26
            echo "                ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? $this->getContext($context, "prototype")), "vars", array()), "name", array())));
            // line 27
            echo "        ";
        }
        // line 28
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-allow-add" => ((($context["allow_add"] ?? $this->getContext($context, "allow_add"))) ? (1) : (0))));
        // line 29
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-allow-remove" => ((($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) ? (1) : (0))));
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-name-prefix" => ($context["full_name"] ?? $this->getContext($context, "full_name"))));
        // line 31
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2cb64f52da181cefbc1e856eada029692e0e969cdd2993adab0f2cde9c0b2f73->leave($__internal_2cb64f52da181cefbc1e856eada029692e0e969cdd2993adab0f2cde9c0b2f73_prof);

        
        $__internal_884f09f3dd938810c62e9005996de5d3b192c3e59a2780879d99868e4e5bb7a9->leave($__internal_884f09f3dd938810c62e9005996de5d3b192c3e59a2780879d99868e4e5bb7a9_prof);

    }

    public function getTemplateName()
    {
        return "jquery.collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 31,  68 => 30,  65 => 29,  62 => 28,  59 => 27,  56 => 26,  53 => 25,  50 => 24,  47 => 23,  29 => 22,  26 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
# jquery.collection.html.twig
#
# Adds the following html attributes to the root node of your collection fields:
#
# - data-prototype-name: placeholder used in the prototype to replace element indexes on the collection
# - data-allow-add: if set to false, plugin will automatically set allow_add option to false
# - data-allow-delete: if set to false, plugin will automatically set allow_remove option to false
# - data-name-prefix: contains the collection's prefix used in descendant field names
#
# Those information let you configure the plugin options automatically.
#
# If you are already using a form theme, you can use both by using:
# {%
#   form_theme myForm
#       'FuzAppBundle::my-form-theme.html.twig'
#       'FuzAppBundle::jquery.collection.html.twig'
#       ...
# %}
#}

{% block collection_widget %}
    {% spaceless %}
        {% if prototype is defined %}
                {% set attr = attr|merge({'data-prototype': form_row(prototype)}) %}
                {% set attr = attr|merge({'data-prototype-name': prototype.vars.name}) %}
        {% endif %}
        {% set attr = attr|merge({'data-allow-add': allow_add ? 1 : 0}) %}
        {% set attr = attr|merge({'data-allow-remove': allow_delete ? 1 : 0 }) %}
        {% set attr = attr|merge({'data-name-prefix': full_name}) %}
        {{ block('form_widget') }}
    {% endspaceless %}
{% endblock collection_widget %}
", "jquery.collection.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/jquery.collection.html.twig");
    }
}
