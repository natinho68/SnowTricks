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
        $__internal_6129b217efae6e7a257d2fb744b32faf4625f7580c933238e424a96b0fe3ebde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6129b217efae6e7a257d2fb744b32faf4625f7580c933238e424a96b0fe3ebde->enter($__internal_6129b217efae6e7a257d2fb744b32faf4625f7580c933238e424a96b0fe3ebde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        $__internal_b0e0a1ab060ba9b52bb2f88d4fa715a27d94ffcd4c014e984a4ef8480a338152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e0a1ab060ba9b52bb2f88d4fa715a27d94ffcd4c014e984a4ef8480a338152->enter($__internal_b0e0a1ab060ba9b52bb2f88d4fa715a27d94ffcd4c014e984a4ef8480a338152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6129b217efae6e7a257d2fb744b32faf4625f7580c933238e424a96b0fe3ebde->leave($__internal_6129b217efae6e7a257d2fb744b32faf4625f7580c933238e424a96b0fe3ebde_prof);

        
        $__internal_b0e0a1ab060ba9b52bb2f88d4fa715a27d94ffcd4c014e984a4ef8480a338152->leave($__internal_b0e0a1ab060ba9b52bb2f88d4fa715a27d94ffcd4c014e984a4ef8480a338152_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_daa9df1d1fc62ea5a54c1b59364585b4b20cf0fab5d59221aad3bc5dd55a55b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa9df1d1fc62ea5a54c1b59364585b4b20cf0fab5d59221aad3bc5dd55a55b8->enter($__internal_daa9df1d1fc62ea5a54c1b59364585b4b20cf0fab5d59221aad3bc5dd55a55b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4beaa28315b3edd898ebf3f0d0d793a2b0aa681d927cf5441e8a3f45a26a91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4beaa28315b3edd898ebf3f0d0d793a2b0aa681d927cf5441e8a3f45a26a91c->enter($__internal_c4beaa28315b3edd898ebf3f0d0d793a2b0aa681d927cf5441e8a3f45a26a91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4beaa28315b3edd898ebf3f0d0d793a2b0aa681d927cf5441e8a3f45a26a91c->leave($__internal_c4beaa28315b3edd898ebf3f0d0d793a2b0aa681d927cf5441e8a3f45a26a91c_prof);

        
        $__internal_daa9df1d1fc62ea5a54c1b59364585b4b20cf0fab5d59221aad3bc5dd55a55b8->leave($__internal_daa9df1d1fc62ea5a54c1b59364585b4b20cf0fab5d59221aad3bc5dd55a55b8_prof);

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
