<?php

/* AppBundle:pages:view.html.twig */
class __TwigTemplate_22f40f8c75f14a1053aec8ddb4eea34479218c17e6749a90d4da7af85161c30d extends Twig_Template
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
        $__internal_180d1af17b8772b0e86e93e922cfbd10cb156bd5a2f6461a6b153e1607086903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180d1af17b8772b0e86e93e922cfbd10cb156bd5a2f6461a6b153e1607086903->enter($__internal_180d1af17b8772b0e86e93e922cfbd10cb156bd5a2f6461a6b153e1607086903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:view.html.twig"));

        $__internal_5c0a389e73b57c89f920f18b677b8e290f6862f7bfb72356f776929ca483a5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0a389e73b57c89f920f18b677b8e290f6862f7bfb72356f776929ca483a5e7->enter($__internal_5c0a389e73b57c89f920f18b677b8e290f6862f7bfb72356f776929ca483a5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_180d1af17b8772b0e86e93e922cfbd10cb156bd5a2f6461a6b153e1607086903->leave($__internal_180d1af17b8772b0e86e93e922cfbd10cb156bd5a2f6461a6b153e1607086903_prof);

        
        $__internal_5c0a389e73b57c89f920f18b677b8e290f6862f7bfb72356f776929ca483a5e7->leave($__internal_5c0a389e73b57c89f920f18b677b8e290f6862f7bfb72356f776929ca483a5e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a66d58ac609056e121876e368eb7ae1364b54808003097e76f899dd8a1d9178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a66d58ac609056e121876e368eb7ae1364b54808003097e76f899dd8a1d9178->enter($__internal_7a66d58ac609056e121876e368eb7ae1364b54808003097e76f899dd8a1d9178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4108494955c8042c63ba0f528f1b131ebdb0150abd27da191a839fa222580be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4108494955c8042c63ba0f528f1b131ebdb0150abd27da191a839fa222580be4->enter($__internal_4108494955c8042c63ba0f528f1b131ebdb0150abd27da191a839fa222580be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_4108494955c8042c63ba0f528f1b131ebdb0150abd27da191a839fa222580be4->leave($__internal_4108494955c8042c63ba0f528f1b131ebdb0150abd27da191a839fa222580be4_prof);

        
        $__internal_7a66d58ac609056e121876e368eb7ae1364b54808003097e76f899dd8a1d9178->leave($__internal_7a66d58ac609056e121876e368eb7ae1364b54808003097e76f899dd8a1d9178_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ac0e9af090271121d1bfda75442dd4dc2a7241414f56a78adf67b53e86193bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac0e9af090271121d1bfda75442dd4dc2a7241414f56a78adf67b53e86193bc->enter($__internal_5ac0e9af090271121d1bfda75442dd4dc2a7241414f56a78adf67b53e86193bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4837c6d4aab15c63fed260b8b34db0c2c3179f640eed9590028495603eaeedc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4837c6d4aab15c63fed260b8b34db0c2c3179f640eed9590028495603eaeedc5->enter($__internal_4837c6d4aab15c63fed260b8b34db0c2c3179f640eed9590028495603eaeedc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating light-blue accent-2\"><i
                                    class=\"material-icons\">edit</i></a></li>
                    <li><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "name", array()), "html", null, true);
        echo "</h1>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "categories", array()));
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
            if ((null === $this->getAttribute($this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "author", array()), "profilePic", array()))) {
                // line 34
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" alt=\"user-image\">
                    ";
            } else {
                // line 36
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "author", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                echo "\"
                         alt=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "author", array()), "username", array()), "html", null, true);
                echo " profile picture\">
                    ";
            }
            // line 39
            echo "                    By ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "author", array()), "username", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "images", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "description", array()), "html", null, true);
        echo "</p>
        </div>


        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "videos", array()));
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
            if ((null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 90
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" alt=\"user-image\">
                ";
            } else {
                // line 92
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                echo "\"
                     alt=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo " profile picture\">
                ";
            }
            // line 95
            echo "                you're about to comment as <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</b>
            </div>

            ";
            // line 98
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "materializeLayout.html.twig"));
            // line 99
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
            </div>
            </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 104
        if (($this->getAttribute((isset($context["listComments"]) ? $context["listComments"] : $this->getContext($context, "listComments")), "count", array()) == 0)) {
            // line 105
            echo "            <p class=\"center-align\">// No comments yet for this trick \\\\</p>
        ";
        } else {
            // line 107
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listComments"]) ? $context["listComments"] : $this->getContext($context, "listComments")));
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
        $this->loadTemplate("AppBundle:pages:pagination.html.twig", "AppBundle:pages:view.html.twig", 135)->display($context);
        
        $__internal_4837c6d4aab15c63fed260b8b34db0c2c3179f640eed9590028495603eaeedc5->leave($__internal_4837c6d4aab15c63fed260b8b34db0c2c3179f640eed9590028495603eaeedc5_prof);

        
        $__internal_5ac0e9af090271121d1bfda75442dd4dc2a7241414f56a78adf67b53e86193bc->leave($__internal_5ac0e9af090271121d1bfda75442dd4dc2a7241414f56a78adf67b53e86193bc_prof);

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
        return array (  352 => 135,  349 => 134,  335 => 126,  329 => 125,  324 => 122,  318 => 119,  312 => 117,  305 => 114,  303 => 113,  296 => 108,  291 => 107,  287 => 105,  285 => 104,  282 => 103,  274 => 99,  272 => 98,  265 => 95,  260 => 93,  255 => 92,  249 => 90,  247 => 89,  243 => 87,  240 => 86,  232 => 81,  228 => 79,  226 => 78,  221 => 75,  212 => 72,  208 => 70,  204 => 69,  197 => 65,  186 => 56,  180 => 55,  174 => 52,  170 => 51,  167 => 50,  164 => 49,  160 => 48,  153 => 43,  142 => 39,  137 => 37,  132 => 36,  126 => 34,  124 => 33,  118 => 30,  114 => 28,  110 => 27,  106 => 26,  102 => 24,  94 => 19,  89 => 17,  82 => 12,  80 => 11,  77 => 10,  68 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
{% include('AppBundle:pages:pagination.html.twig') %}
{% endblock %}
", "AppBundle:pages:view.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/view.html.twig");
    }
}
