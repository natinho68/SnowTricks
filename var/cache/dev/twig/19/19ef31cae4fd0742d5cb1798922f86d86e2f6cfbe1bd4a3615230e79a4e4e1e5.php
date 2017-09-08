<?php

/* AppBundle:pages:pagination.html.twig */
class __TwigTemplate_8a5b5aa59117a5d9ef0d6467cee5085ccb1f7a15311472172e116e5c5da0acbe extends Twig_Template
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
        $__internal_3146858ac4f00a8ec7c869ac4b1ddf27ac709f617829a0113ce45ee28000b3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3146858ac4f00a8ec7c869ac4b1ddf27ac709f617829a0113ce45ee28000b3ec->enter($__internal_3146858ac4f00a8ec7c869ac4b1ddf27ac709f617829a0113ce45ee28000b3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        $__internal_b02f9bb8a6743603dd21d2637708cb9872d1fd286fabbe9f0a07c4d66316eb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02f9bb8a6743603dd21d2637708cb9872d1fd286fabbe9f0a07c4d66316eb17->enter($__internal_b02f9bb8a6743603dd21d2637708cb9872d1fd286fabbe9f0a07c4d66316eb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_3146858ac4f00a8ec7c869ac4b1ddf27ac709f617829a0113ce45ee28000b3ec->leave($__internal_3146858ac4f00a8ec7c869ac4b1ddf27ac709f617829a0113ce45ee28000b3ec_prof);

        
        $__internal_b02f9bb8a6743603dd21d2637708cb9872d1fd286fabbe9f0a07c4d66316eb17->leave($__internal_b02f9bb8a6743603dd21d2637708cb9872d1fd286fabbe9f0a07c4d66316eb17_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_cbaaa4b37961952165e2f66d2ea1c018e4d1a29b3a6f1a5ee37e7a39e840c3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbaaa4b37961952165e2f66d2ea1c018e4d1a29b3a6f1a5ee37e7a39e840c3a1->enter($__internal_cbaaa4b37961952165e2f66d2ea1c018e4d1a29b3a6f1a5ee37e7a39e840c3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f11b43234a547640227682bea39ca6775765ca06794a7a8e83649e6f03f8d219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11b43234a547640227682bea39ca6775765ca06794a7a8e83649e6f03f8d219->enter($__internal_f11b43234a547640227682bea39ca6775765ca06794a7a8e83649e6f03f8d219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div class=\"row\">
    <div class=\"col s6\">
        <ul class=\"pagination\">

            ";
        // line 7
        echo "            ";
        if (((isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages")) > 1)) {
            // line 8
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 9
                echo "            <li";
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo " class=\"active waves-effect\"";
                }
                echo ">
            <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")))), "html", null, true);
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
        
        $__internal_f11b43234a547640227682bea39ca6775765ca06794a7a8e83649e6f03f8d219->leave($__internal_f11b43234a547640227682bea39ca6775765ca06794a7a8e83649e6f03f8d219_prof);

        
        $__internal_cbaaa4b37961952165e2f66d2ea1c018e4d1a29b3a6f1a5ee37e7a39e840c3a1->leave($__internal_cbaaa4b37961952165e2f66d2ea1c018e4d1a29b3a6f1a5ee37e7a39e840c3a1_prof);

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
{% endblock %}", "AppBundle:pages:pagination.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/pagination.html.twig");
    }
}
