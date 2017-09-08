<?php

/* AppBundle:pages:view.html.twig */
class __TwigTemplate_7410f8c59fe27dbfa9a24b4f5e5ff357a58879d3683e988d285f3641a9ef8965 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:pages:view.html.twig", 1);
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
        $__internal_1cb1430621010f38548f5dc06d4026d4647cbac6cccb52091fb645bbea95257e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb1430621010f38548f5dc06d4026d4647cbac6cccb52091fb645bbea95257e->enter($__internal_1cb1430621010f38548f5dc06d4026d4647cbac6cccb52091fb645bbea95257e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:view.html.twig"));

        $__internal_4dfbeb647ae8f044c1166bb6347d445d73e324dea57d8e56c7c32ad1e004e8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfbeb647ae8f044c1166bb6347d445d73e324dea57d8e56c7c32ad1e004e8c7->enter($__internal_4dfbeb647ae8f044c1166bb6347d445d73e324dea57d8e56c7c32ad1e004e8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cb1430621010f38548f5dc06d4026d4647cbac6cccb52091fb645bbea95257e->leave($__internal_1cb1430621010f38548f5dc06d4026d4647cbac6cccb52091fb645bbea95257e_prof);

        
        $__internal_4dfbeb647ae8f044c1166bb6347d445d73e324dea57d8e56c7c32ad1e004e8c7->leave($__internal_4dfbeb647ae8f044c1166bb6347d445d73e324dea57d8e56c7c32ad1e004e8c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04621da227315a7434049e555af3477dd89a375321bc2da48ce2ef1a5159c8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04621da227315a7434049e555af3477dd89a375321bc2da48ce2ef1a5159c8ea->enter($__internal_04621da227315a7434049e555af3477dd89a375321bc2da48ce2ef1a5159c8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b595abd52dacb002302ff86330f7ff2ca45ec975a531050353ec4587c578558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b595abd52dacb002302ff86330f7ff2ca45ec975a531050353ec4587c578558->enter($__internal_4b595abd52dacb002302ff86330f7ff2ca45ec975a531050353ec4587c578558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_4b595abd52dacb002302ff86330f7ff2ca45ec975a531050353ec4587c578558->leave($__internal_4b595abd52dacb002302ff86330f7ff2ca45ec975a531050353ec4587c578558_prof);

        
        $__internal_04621da227315a7434049e555af3477dd89a375321bc2da48ce2ef1a5159c8ea->leave($__internal_04621da227315a7434049e555af3477dd89a375321bc2da48ce2ef1a5159c8ea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a87f230391c47174b1e83c601784f5f912dde71f2298c7b6009750b273d9ba04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87f230391c47174b1e83c601784f5f912dde71f2298c7b6009750b273d9ba04->enter($__internal_a87f230391c47174b1e83c601784f5f912dde71f2298c7b6009750b273d9ba04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc844b72e7014ae017f907b9d2d877a26977d109493fd1c96ed9d49d63c1d168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc844b72e7014ae017f907b9d2d877a26977d109493fd1c96ed9d49d63c1d168->enter($__internal_fc844b72e7014ae017f907b9d2d877a26977d109493fd1c96ed9d49d63c1d168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div>
        ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 12
            echo "            <div class=\"fixed-action-btn horizontal\">
                <a class=\"btn-floating btn-large  black\">
                    <i class=\"large material-icons white-text\">menu</i>
                </a>
                <ul>
                    <li><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating light-blue accent-2\"><i
                                    class=\"material-icons\">edit</i></a></li>
                    <li><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating red darken-1\"><i
                                    class=\"material-icons\">delete</i></a></li>
                </ul>
            </div>
        ";
        }
        // line 24
        echo "    </div>
    <div class=\"head\">
        <h1 class=\"center-align\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "name", array()), "html", null, true);
        echo "</h1>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trickCategory"]) {
            // line 28
            echo "            <div class=\"row center-align\">
                <div class=\"chip black white-text\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["trickCategory"], "name", array()), "html", null, true);
            echo "
                </div>
                <div class=\"chip black white-text\">
                    ";
            // line 33
            if ((null === $this->getAttribute($this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "author", array()), "profilePic", array()))) {
                // line 34
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" alt=\"user-image\">
                    ";
            } else {
                // line 36
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "author", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                echo "\"
                         alt=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "author", array()), "username", array()), "html", null, true);
                echo " profile picture\">
                    ";
            }
            // line 39
            echo "                    By ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "author", array()), "username", array()), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trickCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>

                <div class=\"slider hide-on-small-only\">
                <ul class=\"slides\">

                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trickImage"]) {
            // line 49
            echo "                    ";
            if ( !(null === $this->getAttribute($context["trickImage"], "alt", array()))) {
                // line 50
                echo "                        <li>
                            <img src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["trickImage"], "webPath", array())), "html", null, true);
                echo "\" width=\"300\" height=\"300\"
                                 alt=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["trickImage"], "alt", array()), "html", null, true);
                echo "\"> <!-- random image -->

                                ";
            }
            // line 55
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trickImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
                        </li>
                </ul>
                </div>



        <div class=\"desc\">
        <h4>Description :</h4>
        <p>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "description", array()), "html", null, true);
        echo "</p>
        </div>


        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "videos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trickVideo"]) {
            // line 70
            echo "            <h4>Learn more with vids :</h4>
            <div class=\"video-container\">
                ";
            // line 72
            echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->html($this->getAttribute($context["trickVideo"], "videoUrl", array()));
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trickVideo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        <br><hr class=\"style12\">
        <div class=\"row comment\">
        <h5>React to this trick! Post a comment !</h5>
        ";
        // line 78
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") == false)) {
            // line 79
            echo "            <p>To post a comment, you must be logged in !</p>
            <p>
                <a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"waves-effect black btn\"><i class=\"material-icons left\">subdirectory_arrow_right</i>
                    Login
                </a>
            </p>
            ";
        }
        // line 86
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 87
            echo "            <div class=\"col s6\">
            <div class=\"chip grey lighten-3 light grey-text\">
                ";
            // line 89
            if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 90
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" alt=\"user-image\">
                ";
            } else {
                // line 92
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                echo "\"
                     alt=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo " profile picture\">
                ";
            }
            // line 95
            echo "                you're about to comment as <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</b>
            </div>

            ";
            // line 98
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "materializeLayout.html.twig"));
            // line 99
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
            echo "
            </div>
            </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 104
        if (($this->getAttribute(($context["listComments"] ?? $this->getContext($context, "listComments")), "count", array()) == 0)) {
            // line 105
            echo "            <p class=\"center-align\">// No comments yet for this trick \\\\</p>
        ";
        } else {
            // line 107
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listComments"] ?? $this->getContext($context, "listComments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                // line 108
                echo "            <div class=\"row\">
                <div class=\"col s6\">
                    <div class=\"card-panel grey lighten-5 z-depth-1 comment-card\">
                        <div class=\"row valign-wrapper\">
                            <div class=\"col s2\">
                                ";
                // line 113
                if ((null === $this->getAttribute($this->getAttribute($context["comments"], "author", array()), "profilePic", array()))) {
                    // line 114
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                    echo "\" alt=\"user-image\" width=\"50px\" height=\"50px\"
                                         style=\"border-radius:50%\">
                                ";
                } else {
                    // line 117
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comments"], "author", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                    echo "\"

                                         alt=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comments"], "author", array()), "profilePic", array()), "alt", array()), "html", null, true);
                    echo "\" width=\"50px\" height=\"50px\"
                                         style=\"border-radius:50%\">
                                ";
                }
                // line 122
                echo "                            </div>
                            <div class=\"col s10\">
              <span class=\"black-text\">
                  <h6><b>";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "author", array()), "html", null, true);
                echo "</b> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comments"], "date", array()), "m-d-y \\a\\t g:ia"), "html", null, true);
                echo "</h6>
                  ";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["comments"], "content", array()), "html", null, true);
                echo "
              </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "        ";
        }
        // line 135
        echo "    <div class=\"row\">
        <div class=\"col s6\">
            <ul class=\"pagination\">

                ";
        // line 140
        echo "                ";
        if ((($context["nbPages"] ?? $this->getContext($context, "nbPages")) > 1)) {
            // line 141
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? $this->getContext($context, "nbPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 142
                echo "                        <li";
                if (($context["p"] == ($context["page"] ?? $this->getContext($context, "page")))) {
                    echo " class=\"active waves-effect\"";
                }
                echo ">
                            <a href=\"";
                // line 143
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
            // line 147
            echo "                ";
        }
        // line 148
        echo "            </ul>
        </div>
    </div>
    </div>
";
        
        $__internal_fc844b72e7014ae017f907b9d2d877a26977d109493fd1c96ed9d49d63c1d168->leave($__internal_fc844b72e7014ae017f907b9d2d877a26977d109493fd1c96ed9d49d63c1d168_prof);

        
        $__internal_a87f230391c47174b1e83c601784f5f912dde71f2298c7b6009750b273d9ba04->leave($__internal_a87f230391c47174b1e83c601784f5f912dde71f2298c7b6009750b273d9ba04_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pages:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 148,  387 => 147,  373 => 143,  366 => 142,  361 => 141,  358 => 140,  352 => 135,  349 => 134,  335 => 126,  329 => 125,  324 => 122,  318 => 119,  312 => 117,  305 => 114,  303 => 113,  296 => 108,  291 => 107,  287 => 105,  285 => 104,  282 => 103,  274 => 99,  272 => 98,  265 => 95,  260 => 93,  255 => 92,  249 => 90,  247 => 89,  243 => 87,  240 => 86,  232 => 81,  228 => 79,  226 => 78,  221 => 75,  212 => 72,  208 => 70,  204 => 69,  197 => 65,  186 => 56,  180 => 55,  174 => 52,  170 => 51,  167 => 50,  164 => 49,  160 => 48,  153 => 43,  142 => 39,  137 => 37,  132 => 36,  126 => 34,  124 => 33,  118 => 30,  114 => 28,  110 => 27,  106 => 26,  102 => 24,  94 => 19,  89 => 17,  82 => 12,  80 => 11,  77 => 10,  68 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

    {{ trick.name }} - {{ parent() }}

{% endblock %}

{% block body %}
    <div>
        {% if is_granted('ROLE_USER') %}
            <div class=\"fixed-action-btn horizontal\">
                <a class=\"btn-floating btn-large  black\">
                    <i class=\"large material-icons white-text\">menu</i>
                </a>
                <ul>
                    <li><a href=\"{{ path('edit', {'id': trick.id}) }}\" class=\"btn-floating light-blue accent-2\"><i
                                    class=\"material-icons\">edit</i></a></li>
                    <li><a href=\"{{ path('delete', {'id': trick.id}) }}\" class=\"btn-floating red darken-1\"><i
                                    class=\"material-icons\">delete</i></a></li>
                </ul>
            </div>
        {% endif %}
    </div>
    <div class=\"head\">
        <h1 class=\"center-align\">{{ trick.name }}</h1>
        {% for trickCategory in trick.categories %}
            <div class=\"row center-align\">
                <div class=\"chip black white-text\">
                    {{ trickCategory.name }}
                </div>
                <div class=\"chip black white-text\">
                    {% if trick.author.profilePic is null %}
                    <img src=\"{{ asset('uploads/img/avatar.png') }}\" alt=\"user-image\">
                    {% else %}
                    <img src=\"{{ asset(trick.author.profilePic.webPath) }}\"
                         alt=\"{{ trick.author.username }} profile picture\">
                    {% endif %}
                    By {{ trick.author.username }}
                </div>
            </div>
        {% endfor %}
    </div>

                <div class=\"slider hide-on-small-only\">
                <ul class=\"slides\">

                    {% for trickImage in trick.images %}
                    {% if trickImage.alt is not null %}
                        <li>
                            <img src=\"{{ asset(trickImage.webPath) }}\" width=\"300\" height=\"300\"
                                 alt=\"{{ trickImage.alt }}\"> <!-- random image -->

                                {% endif %}
                                {% endfor %}

                        </li>
                </ul>
                </div>



        <div class=\"desc\">
        <h4>Description :</h4>
        <p>{{ trick.description }}</p>
        </div>


        {% for trickVideo in trick.videos %}
            <h4>Learn more with vids :</h4>
            <div class=\"video-container\">
                {{ trickVideo.videoUrl|html  }}
            </div>
        {% endfor %}
        <br><hr class=\"style12\">
        <div class=\"row comment\">
        <h5>React to this trick! Post a comment !</h5>
        {% if is_granted('ROLE_USER') == false %}
            <p>To post a comment, you must be logged in !</p>
            <p>
                <a href=\"{{ path('fos_user_security_login') }}\" class=\"waves-effect black btn\"><i class=\"material-icons left\">subdirectory_arrow_right</i>
                    Login
                </a>
            </p>
            {% endif %}
        {% if is_granted('ROLE_USER') %}
            <div class=\"col s6\">
            <div class=\"chip grey lighten-3 light grey-text\">
                {% if app.user.profilePic is null %}
                <img src=\"{{ asset('uploads/img/avatar.png') }}\" alt=\"user-image\">
                {% else %}
                <img src=\"{{ asset(app.user.profilePic.webPath) }}\"
                     alt=\"{{ app.user.username }} profile picture\">
                {% endif %}
                you're about to comment as <b>{{ app.user.username }}</b>
            </div>

            {% form_theme form 'materializeLayout.html.twig' %}
            {{ form(form) }}
            </div>
            </div>
        {% endif %}

        {% if listComments.count == 0 %}
            <p class=\"center-align\">// No comments yet for this trick \\\\</p>
        {% else %}
            {% for comments in listComments %}
            <div class=\"row\">
                <div class=\"col s6\">
                    <div class=\"card-panel grey lighten-5 z-depth-1 comment-card\">
                        <div class=\"row valign-wrapper\">
                            <div class=\"col s2\">
                                {% if comments.author.profilePic is null %}
                                    <img src=\"{{ asset('uploads/img/avatar.png') }}\" alt=\"user-image\" width=\"50px\" height=\"50px\"
                                         style=\"border-radius:50%\">
                                {% else %}
                                    <img src=\"{{ asset(comments.author.profilePic.webPath) }}\"

                                         alt=\"{{ comments.author.profilePic.alt }}\" width=\"50px\" height=\"50px\"
                                         style=\"border-radius:50%\">
                                {% endif %}
                            </div>
                            <div class=\"col s10\">
              <span class=\"black-text\">
                  <h6><b>{{ comments.author }}</b> {{ comments.date|date(\"m-d-y \\\\a\\\\t g:ia\") }}</h6>
                  {{ comments.content }}
              </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        {% endif %}
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
", "AppBundle:pages:view.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/view.html.twig");
    }
}
