<?php

/* ::jquery.collection.html.twig */
class __TwigTemplate_04d77720e87507d1fe7ddb1fb67d3466dced0715eba78e8cc149d15c5690a892 extends Twig_Template
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
        $__internal_ad14b7deed92bef7ff99f5f17713f8780f98fde8252aff6280d7a9d1eb2847c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad14b7deed92bef7ff99f5f17713f8780f98fde8252aff6280d7a9d1eb2847c7->enter($__internal_ad14b7deed92bef7ff99f5f17713f8780f98fde8252aff6280d7a9d1eb2847c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::jquery.collection.html.twig"));

        $__internal_15c684ca773f027a61048709d348dc9fa3e70a98295f48f77232fab3a435afa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c684ca773f027a61048709d348dc9fa3e70a98295f48f77232fab3a435afa0->enter($__internal_15c684ca773f027a61048709d348dc9fa3e70a98295f48f77232fab3a435afa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::jquery.collection.html.twig"));

        // line 21
        echo "
";
        // line 22
        $this->displayBlock('collection_widget', $context, $blocks);
        
        $__internal_ad14b7deed92bef7ff99f5f17713f8780f98fde8252aff6280d7a9d1eb2847c7->leave($__internal_ad14b7deed92bef7ff99f5f17713f8780f98fde8252aff6280d7a9d1eb2847c7_prof);

        
        $__internal_15c684ca773f027a61048709d348dc9fa3e70a98295f48f77232fab3a435afa0->leave($__internal_15c684ca773f027a61048709d348dc9fa3e70a98295f48f77232fab3a435afa0_prof);

    }

    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_fdb68c6053ff3e8ff405f7f4a9fdb448eb25d3f08080062e062956ec23e10bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb68c6053ff3e8ff405f7f4a9fdb448eb25d3f08080062e062956ec23e10bbe->enter($__internal_fdb68c6053ff3e8ff405f7f4a9fdb448eb25d3f08080062e062956ec23e10bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_1619463e4802984371363c5cae0fd9dfea6b4146bc09bba4b4c9751238e2fdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1619463e4802984371363c5cae0fd9dfea6b4146bc09bba4b4c9751238e2fdd0->enter($__internal_1619463e4802984371363c5cae0fd9dfea6b4146bc09bba4b4c9751238e2fdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 25
            echo "                ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
            // line 26
            echo "                ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array())));
            // line 27
            echo "        ";
        }
        // line 28
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-allow-add" => (((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) ? (1) : (0))));
        // line 29
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-allow-remove" => (((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) ? (1) : (0))));
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-name-prefix" => (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name"))));
        // line 31
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1619463e4802984371363c5cae0fd9dfea6b4146bc09bba4b4c9751238e2fdd0->leave($__internal_1619463e4802984371363c5cae0fd9dfea6b4146bc09bba4b4c9751238e2fdd0_prof);

        
        $__internal_fdb68c6053ff3e8ff405f7f4a9fdb448eb25d3f08080062e062956ec23e10bbe->leave($__internal_fdb68c6053ff3e8ff405f7f4a9fdb448eb25d3f08080062e062956ec23e10bbe_prof);

    }

    public function getTemplateName()
    {
        return "::jquery.collection.html.twig";
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
", "::jquery.collection.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/jquery.collection.html.twig");
    }
}
