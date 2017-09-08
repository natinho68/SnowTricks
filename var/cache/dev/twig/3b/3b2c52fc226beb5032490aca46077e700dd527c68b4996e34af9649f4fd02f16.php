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
        $__internal_e862e7a8f49c4af3a4cbedcb23163767afe9ad0ab6cec03d202088ecefcdeec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e862e7a8f49c4af3a4cbedcb23163767afe9ad0ab6cec03d202088ecefcdeec8->enter($__internal_e862e7a8f49c4af3a4cbedcb23163767afe9ad0ab6cec03d202088ecefcdeec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        $__internal_0e579aa1fa41f3b3652ac67d53680ff87fa4a9fdf9b135aecc87204ee7ca79d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e579aa1fa41f3b3652ac67d53680ff87fa4a9fdf9b135aecc87204ee7ca79d1->enter($__internal_0e579aa1fa41f3b3652ac67d53680ff87fa4a9fdf9b135aecc87204ee7ca79d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_e862e7a8f49c4af3a4cbedcb23163767afe9ad0ab6cec03d202088ecefcdeec8->leave($__internal_e862e7a8f49c4af3a4cbedcb23163767afe9ad0ab6cec03d202088ecefcdeec8_prof);

        
        $__internal_0e579aa1fa41f3b3652ac67d53680ff87fa4a9fdf9b135aecc87204ee7ca79d1->leave($__internal_0e579aa1fa41f3b3652ac67d53680ff87fa4a9fdf9b135aecc87204ee7ca79d1_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_804aabbb3063ae510b0117b9d0a3d66412fe30ec70b8285109cb9b2c4369467e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804aabbb3063ae510b0117b9d0a3d66412fe30ec70b8285109cb9b2c4369467e->enter($__internal_804aabbb3063ae510b0117b9d0a3d66412fe30ec70b8285109cb9b2c4369467e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b34047af20ed5dc87a3af1e260da6421a474425e5a7a8ba116cd9e0ad807363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b34047af20ed5dc87a3af1e260da6421a474425e5a7a8ba116cd9e0ad807363->enter($__internal_7b34047af20ed5dc87a3af1e260da6421a474425e5a7a8ba116cd9e0ad807363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    </div>
";
        
        $__internal_7b34047af20ed5dc87a3af1e260da6421a474425e5a7a8ba116cd9e0ad807363->leave($__internal_7b34047af20ed5dc87a3af1e260da6421a474425e5a7a8ba116cd9e0ad807363_prof);

        
        $__internal_804aabbb3063ae510b0117b9d0a3d66412fe30ec70b8285109cb9b2c4369467e->leave($__internal_804aabbb3063ae510b0117b9d0a3d66412fe30ec70b8285109cb9b2c4369467e_prof);

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
    </div>
{% endblock %}
", "AppBundle:pages:pagination.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/pagination.html.twig");
    }
}
