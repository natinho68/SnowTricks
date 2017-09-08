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
            'prototype_defined' => array($this, 'block_prototype_defined'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c162ca60e80fb1da7f421cadc86deabc30a1c5270225ac870cde6a24380b14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c162ca60e80fb1da7f421cadc86deabc30a1c5270225ac870cde6a24380b14d->enter($__internal_3c162ca60e80fb1da7f421cadc86deabc30a1c5270225ac870cde6a24380b14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jquery.collection.html.twig"));

        $__internal_101e45f10a390cabeb79cc5e92e9495db39eaa266590471b8ff6cee4e0c73e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101e45f10a390cabeb79cc5e92e9495db39eaa266590471b8ff6cee4e0c73e89->enter($__internal_101e45f10a390cabeb79cc5e92e9495db39eaa266590471b8ff6cee4e0c73e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jquery.collection.html.twig"));

        // line 21
        echo "
";
        // line 22
        $this->displayBlock('collection_widget', $context, $blocks);
        
        $__internal_3c162ca60e80fb1da7f421cadc86deabc30a1c5270225ac870cde6a24380b14d->leave($__internal_3c162ca60e80fb1da7f421cadc86deabc30a1c5270225ac870cde6a24380b14d_prof);

        
        $__internal_101e45f10a390cabeb79cc5e92e9495db39eaa266590471b8ff6cee4e0c73e89->leave($__internal_101e45f10a390cabeb79cc5e92e9495db39eaa266590471b8ff6cee4e0c73e89_prof);

    }

    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_6ab125f772f23f5569d1febf0f85f31cf80cacdbef1deb67f33bbab6711d975d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab125f772f23f5569d1febf0f85f31cf80cacdbef1deb67f33bbab6711d975d->enter($__internal_6ab125f772f23f5569d1febf0f85f31cf80cacdbef1deb67f33bbab6711d975d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_95ffd28cece1b7befcffbef093598b0a0456945f67b637fb43cfcccf08726ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ffd28cece1b7befcffbef093598b0a0456945f67b637fb43cfcccf08726ec8->enter($__internal_95ffd28cece1b7befcffbef093598b0a0456945f67b637fb43cfcccf08726ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 25
            echo "            ";
            $this->displayBlock('prototype_defined', $context, $blocks);
            // line 28
            echo "        ";
        }
        // line 29
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-allow-add" => ((($context["allow_add"] ?? $this->getContext($context, "allow_add"))) ? (1) : (0))));
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-allow-remove" => ((($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) ? (1) : (0))));
        // line 31
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-name-prefix" => ($context["full_name"] ?? $this->getContext($context, "full_name"))));
        // line 32
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_95ffd28cece1b7befcffbef093598b0a0456945f67b637fb43cfcccf08726ec8->leave($__internal_95ffd28cece1b7befcffbef093598b0a0456945f67b637fb43cfcccf08726ec8_prof);

        
        $__internal_6ab125f772f23f5569d1febf0f85f31cf80cacdbef1deb67f33bbab6711d975d->leave($__internal_6ab125f772f23f5569d1febf0f85f31cf80cacdbef1deb67f33bbab6711d975d_prof);

    }

    // line 25
    public function block_prototype_defined($context, array $blocks = array())
    {
        $__internal_8520b91a21d567ccb9ee3271df6401f58033e0f617a19586b48a1c3963be6bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8520b91a21d567ccb9ee3271df6401f58033e0f617a19586b48a1c3963be6bbf->enter($__internal_8520b91a21d567ccb9ee3271df6401f58033e0f617a19586b48a1c3963be6bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prototype_defined"));

        $__internal_c9630e10fcbbe86bf689c6fffc69c446f2b66faa715756043b31d91c14f5e9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9630e10fcbbe86bf689c6fffc69c446f2b66faa715756043b31d91c14f5e9a8->enter($__internal_c9630e10fcbbe86bf689c6fffc69c446f2b66faa715756043b31d91c14f5e9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "prototype_defined"));

        // line 26
        echo "                ";
        $this->loadTemplate("prototype_defined.html.twig", "jquery.collection.html.twig", 26)->display($context);
        // line 27
        echo "            ";
        
        $__internal_c9630e10fcbbe86bf689c6fffc69c446f2b66faa715756043b31d91c14f5e9a8->leave($__internal_c9630e10fcbbe86bf689c6fffc69c446f2b66faa715756043b31d91c14f5e9a8_prof);

        
        $__internal_8520b91a21d567ccb9ee3271df6401f58033e0f617a19586b48a1c3963be6bbf->leave($__internal_8520b91a21d567ccb9ee3271df6401f58033e0f617a19586b48a1c3963be6bbf_prof);

    }

    public function getTemplateName()
    {
        return "jquery.collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  92 => 26,  83 => 25,  69 => 32,  66 => 31,  63 => 30,  60 => 29,  57 => 28,  54 => 25,  51 => 24,  48 => 23,  30 => 22,  27 => 21,);
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
            {% block prototype_defined %}
                {% include 'prototype_defined.html.twig' %}
            {% endblock prototype_defined %}
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
