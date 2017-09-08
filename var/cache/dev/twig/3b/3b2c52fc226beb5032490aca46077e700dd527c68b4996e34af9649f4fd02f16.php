<?php

/* AppBundle:pages:pagination.html.twig */
class __TwigTemplate_d21b4de69428b8e8b13a2abda8050f23465f09b12381f8b5e3e41c4b4c0cfbec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pagination' => array($this, 'block_pagination'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_987d16fc08bc81d8a4eae221989b0cf362c470c4f5e1d47dd933a521aba0d7f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987d16fc08bc81d8a4eae221989b0cf362c470c4f5e1d47dd933a521aba0d7f3->enter($__internal_987d16fc08bc81d8a4eae221989b0cf362c470c4f5e1d47dd933a521aba0d7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        $__internal_0deca0d1b4d605755651e337e3317293e73af4ea9def9d67b6d5c9aefe49b7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0deca0d1b4d605755651e337e3317293e73af4ea9def9d67b6d5c9aefe49b7fe->enter($__internal_0deca0d1b4d605755651e337e3317293e73af4ea9def9d67b6d5c9aefe49b7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        // line 1
        $this->displayBlock('pagination', $context, $blocks);
        
        $__internal_987d16fc08bc81d8a4eae221989b0cf362c470c4f5e1d47dd933a521aba0d7f3->leave($__internal_987d16fc08bc81d8a4eae221989b0cf362c470c4f5e1d47dd933a521aba0d7f3_prof);

        
        $__internal_0deca0d1b4d605755651e337e3317293e73af4ea9def9d67b6d5c9aefe49b7fe->leave($__internal_0deca0d1b4d605755651e337e3317293e73af4ea9def9d67b6d5c9aefe49b7fe_prof);

    }

    public function block_pagination($context, array $blocks = array())
    {
        $__internal_36755791e8f2dd08fd40d564cceaa90c7701be40cc96572c4ef76781cc7e69a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36755791e8f2dd08fd40d564cceaa90c7701be40cc96572c4ef76781cc7e69a0->enter($__internal_36755791e8f2dd08fd40d564cceaa90c7701be40cc96572c4ef76781cc7e69a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        $__internal_f8cb0799711722651157bf749fb75691b0269b0c41f081626738e675265ab837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8cb0799711722651157bf749fb75691b0269b0c41f081626738e675265ab837->enter($__internal_f8cb0799711722651157bf749fb75691b0269b0c41f081626738e675265ab837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagination"));

        // line 2
        echo "<div class=\"row\">
    <div class=\"col s6\">
        <ul class=\"pagination\">

            ";
        // line 7
        echo "            ";
        if ((($context["nbPages"] ?? $this->getContext($context, "nbPages")) > 1)) {
            // line 8
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? $this->getContext($context, "nbPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 9
                echo "                    <li";
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
    </div>
";
        
        $__internal_f8cb0799711722651157bf749fb75691b0269b0c41f081626738e675265ab837->leave($__internal_f8cb0799711722651157bf749fb75691b0269b0c41f081626738e675265ab837_prof);

        
        $__internal_36755791e8f2dd08fd40d564cceaa90c7701be40cc96572c4ef76781cc7e69a0->leave($__internal_36755791e8f2dd08fd40d564cceaa90c7701be40cc96572c4ef76781cc7e69a0_prof);

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
        return new Twig_Source("{% block pagination %}
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
    </div>
{% endblock %}", "AppBundle:pages:pagination.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/pagination.html.twig");
    }
}
