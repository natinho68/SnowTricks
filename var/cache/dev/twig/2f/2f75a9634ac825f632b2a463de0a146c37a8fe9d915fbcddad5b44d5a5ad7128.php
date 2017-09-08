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
        $__internal_688f7cbd3b9b0330ba9cc2f5b2497c8fa0feef51a9dd726769a75df1656ff331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688f7cbd3b9b0330ba9cc2f5b2497c8fa0feef51a9dd726769a75df1656ff331->enter($__internal_688f7cbd3b9b0330ba9cc2f5b2497c8fa0feef51a9dd726769a75df1656ff331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::jquery.collection.html.twig"));

        $__internal_8d62b050ab1f6fab94feb7c2f9b2b0f987e11ee916ff5ee8d851c4f5c3e08042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d62b050ab1f6fab94feb7c2f9b2b0f987e11ee916ff5ee8d851c4f5c3e08042->enter($__internal_8d62b050ab1f6fab94feb7c2f9b2b0f987e11ee916ff5ee8d851c4f5c3e08042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::jquery.collection.html.twig"));

        // line 21
        echo "
";
        // line 22
        $this->displayBlock('collection_widget', $context, $blocks);
        
        $__internal_688f7cbd3b9b0330ba9cc2f5b2497c8fa0feef51a9dd726769a75df1656ff331->leave($__internal_688f7cbd3b9b0330ba9cc2f5b2497c8fa0feef51a9dd726769a75df1656ff331_prof);

        
        $__internal_8d62b050ab1f6fab94feb7c2f9b2b0f987e11ee916ff5ee8d851c4f5c3e08042->leave($__internal_8d62b050ab1f6fab94feb7c2f9b2b0f987e11ee916ff5ee8d851c4f5c3e08042_prof);

    }

    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_7c657bfba38bab3388893037c57ffb8629bad032658dab40a51dfc24ed5ec6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c657bfba38bab3388893037c57ffb8629bad032658dab40a51dfc24ed5ec6de->enter($__internal_7c657bfba38bab3388893037c57ffb8629bad032658dab40a51dfc24ed5ec6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_dd7eb04204ff23d01692f904644d7898e80500604e5c7a78e4d005c081906392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7eb04204ff23d01692f904644d7898e80500604e5c7a78e4d005c081906392->enter($__internal_dd7eb04204ff23d01692f904644d7898e80500604e5c7a78e4d005c081906392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 25
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
            // line 26
            echo "            ";
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
        
        $__internal_dd7eb04204ff23d01692f904644d7898e80500604e5c7a78e4d005c081906392->leave($__internal_dd7eb04204ff23d01692f904644d7898e80500604e5c7a78e4d005c081906392_prof);

        
        $__internal_7c657bfba38bab3388893037c57ffb8629bad032658dab40a51dfc24ed5ec6de->leave($__internal_7c657bfba38bab3388893037c57ffb8629bad032658dab40a51dfc24ed5ec6de_prof);

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
