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
        $__internal_4bc891f7f63060fc76ff579d2af3a3619132d8c850be3d1f65379494efe1b163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc891f7f63060fc76ff579d2af3a3619132d8c850be3d1f65379494efe1b163->enter($__internal_4bc891f7f63060fc76ff579d2af3a3619132d8c850be3d1f65379494efe1b163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        $__internal_34ba8f11c120eb7faf7bb54a1916af62d7738e5b4146a285d94986978fdaf0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ba8f11c120eb7faf7bb54a1916af62d7738e5b4146a285d94986978fdaf0f0->enter($__internal_34ba8f11c120eb7faf7bb54a1916af62d7738e5b4146a285d94986978fdaf0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:pagination.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_4bc891f7f63060fc76ff579d2af3a3619132d8c850be3d1f65379494efe1b163->leave($__internal_4bc891f7f63060fc76ff579d2af3a3619132d8c850be3d1f65379494efe1b163_prof);

        
        $__internal_34ba8f11c120eb7faf7bb54a1916af62d7738e5b4146a285d94986978fdaf0f0->leave($__internal_34ba8f11c120eb7faf7bb54a1916af62d7738e5b4146a285d94986978fdaf0f0_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1df81c9023f23755c5ed42cf0792be8a47bf7a4fdd5c07d9bf07ad4e0920c80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df81c9023f23755c5ed42cf0792be8a47bf7a4fdd5c07d9bf07ad4e0920c80a->enter($__internal_1df81c9023f23755c5ed42cf0792be8a47bf7a4fdd5c07d9bf07ad4e0920c80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_548cda5630563336c8bdfc7f8d410906322eba23dafa642af5ee9a3801a3ecfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548cda5630563336c8bdfc7f8d410906322eba23dafa642af5ee9a3801a3ecfd->enter($__internal_548cda5630563336c8bdfc7f8d410906322eba23dafa642af5ee9a3801a3ecfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_548cda5630563336c8bdfc7f8d410906322eba23dafa642af5ee9a3801a3ecfd->leave($__internal_548cda5630563336c8bdfc7f8d410906322eba23dafa642af5ee9a3801a3ecfd_prof);

        
        $__internal_1df81c9023f23755c5ed42cf0792be8a47bf7a4fdd5c07d9bf07ad4e0920c80a->leave($__internal_1df81c9023f23755c5ed42cf0792be8a47bf7a4fdd5c07d9bf07ad4e0920c80a_prof);

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
