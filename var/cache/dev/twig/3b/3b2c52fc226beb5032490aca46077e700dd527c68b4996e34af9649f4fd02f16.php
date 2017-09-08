<?php

/* AppBundle:pages:pagination.html.twig */
class __TwigTemplate_d21b4de69428b8e8b13a2abda8050f23465f09b12381f8b5e3e41c4b4c0cfbec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fb1268048203f791670a672ac95970eb19ceca3cfe7e63ff8e7bc341bbd150c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb1268048203f791670a672ac95970eb19ceca3cfe7e63ff8e7bc341bbd150c->enter($__internal_3fb1268048203f791670a672ac95970eb19ceca3cfe7e63ff8e7bc341bbd150c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        $__internal_5563d440478d77e2820ac5646a2833926f60a5dcfad68e810eef12ed929e40d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5563d440478d77e2820ac5646a2833926f60a5dcfad68e810eef12ed929e40d1->enter($__internal_5563d440478d77e2820ac5646a2833926f60a5dcfad68e810eef12ed929e40d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_3fb1268048203f791670a672ac95970eb19ceca3cfe7e63ff8e7bc341bbd150c->leave($__internal_3fb1268048203f791670a672ac95970eb19ceca3cfe7e63ff8e7bc341bbd150c_prof);

        
        $__internal_5563d440478d77e2820ac5646a2833926f60a5dcfad68e810eef12ed929e40d1->leave($__internal_5563d440478d77e2820ac5646a2833926f60a5dcfad68e810eef12ed929e40d1_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_30a15d28ea6adf1338a95153ffa3a4fd9506d5537e26e0404a04d812e000b6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a15d28ea6adf1338a95153ffa3a4fd9506d5537e26e0404a04d812e000b6b7->enter($__internal_30a15d28ea6adf1338a95153ffa3a4fd9506d5537e26e0404a04d812e000b6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58b6373dcade834a11eab7563918c21c151e2c865fdff9f722f27a1b886cc489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b6373dcade834a11eab7563918c21c151e2c865fdff9f722f27a1b886cc489->enter($__internal_58b6373dcade834a11eab7563918c21c151e2c865fdff9f722f27a1b886cc489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div class=\"row\">
    <div class=\"col s6\">
        <ul class=\"pagination\">

            ";
        // line 7
        echo "            ";
        if ((($context["nbPages"] ?? $this->getContext($context, "nbPages")) > 1)) {
            // line 8
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? $this->getContext($context, "nbPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 9
                echo "            <li";
                if (($context["p"] == ($context["page"] ?? $this->getContext($context, "page")))) {
                    echo " class=\"active waves-effect\"";
                }
                echo ">
            <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => ($context["slug"] ?? $this->getContext($context, "slug")))), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
            </li>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "            ";
        }
        // line 15
        echo "        </ul>
    </div>
</div>
";
        
        $__internal_58b6373dcade834a11eab7563918c21c151e2c865fdff9f722f27a1b886cc489->leave($__internal_58b6373dcade834a11eab7563918c21c151e2c865fdff9f722f27a1b886cc489_prof);

        
        $__internal_30a15d28ea6adf1338a95153ffa3a4fd9506d5537e26e0404a04d812e000b6b7->leave($__internal_30a15d28ea6adf1338a95153ffa3a4fd9506d5537e26e0404a04d812e000b6b7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pages:pagination.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  79 => 14,  65 => 10,  58 => 9,  53 => 8,  50 => 7,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
<div class=\"row\">
    <div class=\"col s6\">
        <ul class=\"pagination\">

            {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
            {% if nbPages > 1 %}
            {% for p in range(1, nbPages) %}
            <li{% if p == page %} class=\"active waves-effect\"{% endif %}>
            <a href=\"{{ path('view',{ slug : slug }) }}/{{ p }}\">{{ p }}</a>
            </li>

            {% endfor %}
            {% endif %}
        </ul>
    </div>
</div>
{% endblock %}
", "AppBundle:pages:pagination.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/pagination.html.twig");
    }
}
