<?php

/* AppBundle:pages:home.html.twig */
class __TwigTemplate_83138ecbd2c264ffc344c2f267f1bfaa4b17f92023cc8a6f6665465784e222c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:pages:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c10da8225874f8fb5475473a2a520e04cd482394b445f6bc0aec300dbdd1940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c10da8225874f8fb5475473a2a520e04cd482394b445f6bc0aec300dbdd1940->enter($__internal_3c10da8225874f8fb5475473a2a520e04cd482394b445f6bc0aec300dbdd1940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:home.html.twig"));

        $__internal_1e8271952ac84bdef8d513c113dc198eae52afa991dd53048058d0b21c6f47f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8271952ac84bdef8d513c113dc198eae52afa991dd53048058d0b21c6f47f2->enter($__internal_1e8271952ac84bdef8d513c113dc198eae52afa991dd53048058d0b21c6f47f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c10da8225874f8fb5475473a2a520e04cd482394b445f6bc0aec300dbdd1940->leave($__internal_3c10da8225874f8fb5475473a2a520e04cd482394b445f6bc0aec300dbdd1940_prof);

        
        $__internal_1e8271952ac84bdef8d513c113dc198eae52afa991dd53048058d0b21c6f47f2->leave($__internal_1e8271952ac84bdef8d513c113dc198eae52afa991dd53048058d0b21c6f47f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72226c0cc24f3d66cc2d622f3f17c3e74ec539bf043206957fcf4330ada50126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72226c0cc24f3d66cc2d622f3f17c3e74ec539bf043206957fcf4330ada50126->enter($__internal_72226c0cc24f3d66cc2d622f3f17c3e74ec539bf043206957fcf4330ada50126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a08882182023047076ee35bcbe28f08863e1d45d0b486d45998eb5029309e2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08882182023047076ee35bcbe28f08863e1d45d0b486d45998eb5029309e2b6->enter($__internal_a08882182023047076ee35bcbe28f08863e1d45d0b486d45998eb5029309e2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Home - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a08882182023047076ee35bcbe28f08863e1d45d0b486d45998eb5029309e2b6->leave($__internal_a08882182023047076ee35bcbe28f08863e1d45d0b486d45998eb5029309e2b6_prof);

        
        $__internal_72226c0cc24f3d66cc2d622f3f17c3e74ec539bf043206957fcf4330ada50126->leave($__internal_72226c0cc24f3d66cc2d622f3f17c3e74ec539bf043206957fcf4330ada50126_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cb2fc65dae2a482b3e8310088de4b2a266c44993135aecdb05ce175964e0f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb2fc65dae2a482b3e8310088de4b2a266c44993135aecdb05ce175964e0f45->enter($__internal_6cb2fc65dae2a482b3e8310088de4b2a266c44993135aecdb05ce175964e0f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23b245e89e27096bb6cd64e1a32078c4ed8b31314ca0a4651ea4c05cdc96c733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b245e89e27096bb6cd64e1a32078c4ed8b31314ca0a4651ea4c05cdc96c733->enter($__internal_23b245e89e27096bb6cd64e1a32078c4ed8b31314ca0a4651ea4c05cdc96c733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"head hide-on-small-only\">
        <div class=\"slider home\">
            <ul class=\"slides home\">
                <li>
                    <img class=\"responsive-img\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/slide-home1.jpg"), "html", null, true);
        echo "\"> <!-- random image -->
                </li>
                <li>
                    <img class=\"responsive-img\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/slide-home2.jpg"), "html", null, true);
        echo "\">
                </li>
                <li>
                    <img class=\"responsive-img\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/slide-home3.jpg"), "html", null, true);
        echo "\">
                </li>
            </ul>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col s12 baseline\">
            <h1 class=\"center-align\">Welcome on SnowTricks</h1>
            <h5 class=\"center-align\">- The community platform of the best snowboard tricks -</h5>
        </div>
    </div>

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tricks"] ?? $this->getContext($context, "tricks")));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 33
            echo "                <div class=\"row trick-line\">
                    <div class=\"col s12\">
                        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["trick"], "images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["trickImage"]) {
                // line 36
                echo "                        ";
                if ( !(null === $this->getAttribute($context["trickImage"], "alt", array()))) {
                    // line 37
                    echo "                        ";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 38
                        echo "                        <div class=\"col s8\">
                            <a href=\"";
                        // line 39
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => $this->getAttribute($context["trick"], "slug", array()))), "html", null, true);
                        echo "\">
                                <img src=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["trickImage"], "webPath", array())), "html", null, true);
                        echo "\" class=\"responsive-img\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["trickImage"], "alt", array()), "html", null, true);
                        echo "\">
                            </a>
                        </div>
                ";
                    }
                    // line 44
                    echo "                ";
                }
                // line 45
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trickImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                <div class=\"col s4\">
                    ";
            // line 47
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 48
                echo "                        <div class=\"card-action\" style=\"padding:0px\">
                            <div class=\"fixed-action-btn horizontal\" style=\"position:relative; float:right; bottom:35px; right:10px\">
                                <a class=\"btn-floating btn-large white\">
                                    <i class=\"large material-icons black-text\">menu</i>
                                </a>
                                <ul>
                                    <li><a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["trick"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-floating light-blue accent-2\"><i class=\"material-icons\">edit</i></a></li>
                                    <li><a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["trick"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-floating red darken-1\"><i class=\"material-icons\">delete</i></a></li>
                                </ul>
                            </div>
                        </div>
                    ";
            }
            // line 60
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => $this->getAttribute($context["trick"], "slug", array()))), "html", null, true);
            echo "\"><h4 class=\"left-align black-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trick"], "name", array()), "html", null, true);
            echo "</h4></a>
                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["trick"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trickCategory"]) {
                // line 62
                echo "                    <div class=\"chip black white-text\">
                        ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["trickCategory"], "name", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"chip black white-text\">
                        ";
                // line 66
                if ( !(null === $this->getAttribute($this->getAttribute($context["trick"], "author", array()), "profilePic", array()))) {
                    // line 67
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["trick"], "author", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                    echo "\"
                                 alt=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trick"], "author", array()), "username", array()), "html", null, true);
                    echo " profile picture\">
                            ";
                } else {
                    // line 70
                    echo "                                <img class=\"circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                    echo "\">
                        ";
                }
                // line 72
                echo "                        By ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trick"], "author", array()), "username", array()), "html", null, true);
                echo "
                    </div>
                    <p class=\"left-align\">";
                // line 74
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["trick"], "description", array()), 200, true), "html", null, true);
                echo "</p>
                    <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => $this->getAttribute($context["trick"], "slug", array()))), "html", null, true);
                echo "\" class=\"waves-effect black btn\">
                        Read more
                    </a>
                </div>
            </div>
    </div>
                        <hr class=\"style12\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trickCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_23b245e89e27096bb6cd64e1a32078c4ed8b31314ca0a4651ea4c05cdc96c733->leave($__internal_23b245e89e27096bb6cd64e1a32078c4ed8b31314ca0a4651ea4c05cdc96c733_prof);

        
        $__internal_6cb2fc65dae2a482b3e8310088de4b2a266c44993135aecdb05ce175964e0f45->leave($__internal_6cb2fc65dae2a482b3e8310088de4b2a266c44993135aecdb05ce175964e0f45_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pages:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 83,  244 => 75,  240 => 74,  234 => 72,  228 => 70,  223 => 68,  218 => 67,  216 => 66,  210 => 63,  207 => 62,  203 => 61,  196 => 60,  188 => 55,  184 => 54,  176 => 48,  174 => 47,  171 => 46,  157 => 45,  154 => 44,  145 => 40,  141 => 39,  138 => 38,  135 => 37,  132 => 36,  115 => 35,  111 => 33,  107 => 32,  91 => 19,  85 => 16,  79 => 13,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block title %}
    Home - {{ parent() }}
{% endblock %}

{% block body %}

    <div class=\"head hide-on-small-only\">
        <div class=\"slider home\">
            <ul class=\"slides home\">
                <li>
                    <img class=\"responsive-img\" src=\"{{ asset('uploads/img/slide-home1.jpg') }}\"> <!-- random image -->
                </li>
                <li>
                    <img class=\"responsive-img\" src=\"{{ asset('uploads/img/slide-home2.jpg') }}\">
                </li>
                <li>
                    <img class=\"responsive-img\" src=\"{{ asset('uploads/img/slide-home3.jpg') }}\">
                </li>
            </ul>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col s12 baseline\">
            <h1 class=\"center-align\">Welcome on SnowTricks</h1>
            <h5 class=\"center-align\">- The community platform of the best snowboard tricks -</h5>
        </div>
    </div>

    {% for trick in tricks %}
                <div class=\"row trick-line\">
                    <div class=\"col s12\">
                        {% for trickImage in trick.images %}
                        {% if trickImage.alt is not null %}
                        {% if loop.first %}
                        <div class=\"col s8\">
                            <a href=\"{{ path('view', {'slug': trick.slug}) }}\">
                                <img src=\"{{ asset(trickImage.webPath) }}\" class=\"responsive-img\" alt=\"{{ trickImage.alt }}\">
                            </a>
                        </div>
                {% endif %}
                {% endif %}
                {% endfor %}
                <div class=\"col s4\">
                    {% if is_granted('ROLE_USER') %}
                        <div class=\"card-action\" style=\"padding:0px\">
                            <div class=\"fixed-action-btn horizontal\" style=\"position:relative; float:right; bottom:35px; right:10px\">
                                <a class=\"btn-floating btn-large white\">
                                    <i class=\"large material-icons black-text\">menu</i>
                                </a>
                                <ul>
                                    <li><a href=\"{{ path('edit', {'id': trick.id}) }}\" class=\"btn-floating light-blue accent-2\"><i class=\"material-icons\">edit</i></a></li>
                                    <li><a href=\"{{ path('delete', {'id': trick.id}) }}\" class=\"btn-floating red darken-1\"><i class=\"material-icons\">delete</i></a></li>
                                </ul>
                            </div>
                        </div>
                    {% endif %}
        <a href=\"{{ path('view', {'slug': trick.slug}) }}\"><h4 class=\"left-align black-text\">{{ trick.name }}</h4></a>
                    {% for trickCategory in trick.categories %}
                    <div class=\"chip black white-text\">
                        {{ trickCategory.name }}
                    </div>
                    <div class=\"chip black white-text\">
                        {% if trick.author.profilePic is not null %}
                            <img src=\"{{ asset(trick.author.profilePic.webPath) }}\"
                                 alt=\"{{ trick.author.username }} profile picture\">
                            {% else %}
                                <img class=\"circle\" src=\"{{ asset('uploads/img/avatar.png') }}\">
                        {% endif %}
                        By {{ trick.author.username }}
                    </div>
                    <p class=\"left-align\">{{ trick.description|truncate(200, true)}}</p>
                    <a href=\"{{ path('view', {'slug': trick.slug}) }}\" class=\"waves-effect black btn\">
                        Read more
                    </a>
                </div>
            </div>
    </div>
                        <hr class=\"style12\">
                    {% endfor %}
        {% endfor %}
{% endblock %}

", "AppBundle:pages:home.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/home.html.twig");
    }
}
